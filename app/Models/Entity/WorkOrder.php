<?php

namespace App\Models\Entity;

use App\Models\AppModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

use function PHPSTORM_META\map;

class WorkOrder extends AppModel
{
    use HasFactory, SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'work_orders';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'req_sparepart',
        'rm_id',
        'user_id',
        'damage_component',
        'damaged_level',
        'jobsite_location',
        'analysist',
        'assign_by',
        'photo',
    ];

    public function Maintenance()
    {
        return $this->belongsTo(RequestMaintenance::class, 'rm_id');
    }
    public function User()
    {
        return $this->belongsToMany(User::class,  'users_work_order', 'work_order_table_id', 'user_id');
    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        //
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        //
    ];
}
