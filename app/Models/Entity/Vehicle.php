<?php

namespace App\Models\Entity;

use App\Models\AppModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Vehicle extends AppModel
{
    use HasFactory, SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'vehicles';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'plat_number',
        // 'trailer_connected',
        // 'photo',
        'monthly_maintenance',
        // 'last_maintenance',
        // 'id_fms',
        'model_vehicle_id',
        'type_vehicle_id',
    ];

    public function ModelVehicle()
    {
        return $this->belongsTo(ModelVehicle::class, 'model_vehicle_id');
    }
    public function TypeVehicle()
    {
        return $this->belongsTo(TypeVehicle::class, 'type_vehicle_id');
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
