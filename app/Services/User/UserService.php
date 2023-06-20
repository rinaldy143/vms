<?php

namespace App\Services\User;
use App\Models\Entity\User;
use App\Models\Table\TypeRoleTable;
use App\Models\Table\UserTable;
use App\Services\AppService;
use App\Services\AppServiceInterface;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        // $photo = $data['photo']?->store('users');

        $imgName = null;

        if ($data->photo) {
            $imgName = $data->photo->getClientOriginalName() . '-' . time() . '.' . $data->photo->extension();
            $data->photo->move(public_path('/img/users'), $imgName);
        }

        return UserTable::create([
            'name' => $data->name,
            'email' => $data->email,
            'role' => $data->role,
            'phone_country_code' => $data->phone_country_code,
            'phone_number' => $data->phone_number,
            'photo' => $imgName,
            'fcm_token' => $data->fcm_token,
            'password' => Hash::make('password'),
        ]);


    }

    public function update($id, $data)
    {
        $user = UserTable::findOrFail($id);
        if (!blank($user->photo)) {
            Storage::delete($user->photo);
        }
        // $data['photo'] = $data['photo']?->store('users');

        $user->update([
            'name' => $data->name,
            'email' => $data->email,
            'role' => $data->role,
            'phone_number' => $data->phone_number,
            'fcm_token' => $data->fcm_token,
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

    public function operation(){
        $users = User::query()
        ->where('role', '=', 'Operation')->get();
        // Return the search view with the resluts compacted
        return $users;
    }
    public function lead_mechanice(){
        $users = User::query()
        ->where('role', '=', 'Lead Mechanices')->get();
        // Return the search view with the resluts compacted
        return $users;
    }
    public function mechanice(){
        $users = User::query()
        ->where('role', '=', 'Mechanices')->get();
        // Return the search view with the resluts compacted
        return $users;
    }
    public function logistic(){
        $users = User::query()
        ->where('role', '=', 'Logistic')->get();
        // Return the search view with the resluts compacted
        return $users;
    }
    public function admin(){
        $users = User::query()
        ->where('role', '=', 'ADMIN')->get();
        // Return the search view with the resluts compacted
        return $users;
    }
    public function member(){
        $users = User::query()
        ->where('role', '=', 'MEMBER')->get();
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
