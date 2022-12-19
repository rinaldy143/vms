<?php

namespace App\Models\Table;

use App\Models\Entity\Vehicle;


class VehicleTable extends Vehicle
{
    public function ModelVehicle()
    {
        return $this->belongsTo(ModelVehicle::class, 'model_vehicle_id');
    }
    public function TypeVehicle()
    {
        return $this->belongsTo(TypeVehicle::class, 'type_vehicle_id');
    }
}
