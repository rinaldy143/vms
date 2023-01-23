<?php

namespace App\Services\User;
use App\Models\Entity\User;
use App\Models\Table\TypeRoleTable;
use App\Models\Table\UserTable;
use App\Services\AppService;
use App\Services\AppServiceInterface;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;


class UserService extends AppService implements AppServiceInterface
{

    public function __construct(UserTable $model)
    {
        parent::__construct($model);
    }


    public function dataTable($filter)
    {
        return UserTable::datatable($filter)->paginate($filter->entries ?? 15);
    }

    public function getById($id)
    {
        return UserTable::findOrFail($id);
    }

    public function create($data)
    {
        // $imgName = null;

        // if ($data->photo) {
        //     $imgName = $data->photo->getClientOriginalName() . '-' . time() . '.' . $data->photo->extension();
        //     $data->photo->move(public_path('/img/users'), $imgName);
        // }
        $photo = $data['photo']?->store('users');

        return UserTable::create([
            'name' => $data->name,
            'email' => $data->email,
            'role' => $data->role,
            'phone_number' => $data->phone_number,
            'photo' => $photo,
            // 'fcm_token' => $data->fcm_token,
            'password' => Hash::make($data->password),
        ]);


    }

    public function update($id, $data)
    {
        $user = UserTable::findOrFail($id);
        $user->update([
            'name' => $data->name,
            'email' => $data->email,
            'role' => $data->role,
            'phone_number' => $data->phone_number,
            // 'fcm_token' => $data->fcm_token,
        ]);
        return $user;
    }

    public function search($data){
        // Get the search value from the request
        $search = $data->input('search');

        // Search in the title and body columns from the posts table
        $users = User::query()
            ->where('name', 'LIKE', "%{$search}%")
            ->orWhere('role', 'LIKE', "%{$search}%")
            ->get();

        // Return the search view with the resluts compacted
        return $users;
    }

    public function delete($id)
    {
        $user = UserTable::findOrFail($id);
        $user->delete();
        return $user;
    }
}
