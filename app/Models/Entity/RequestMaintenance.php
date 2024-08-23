<?php

namespace App\Models\Entity;

use App\Models\AppModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class RequestMaintenance extends AppModel
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'request_maintenances';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'report_by',
        'report_problem',
        'dampak',
        // 'maintenance_date',
        'vehicle_id',
        // 'trailer_id',
        'km_Unit',
        'hm_Unit',
        'wo_id',
        'unit_condition',
        'priority',
        'activity_maintenance',
        'analysist',
        'aprove_by',
        'C1',
        'C2',
        'C3',
        'C4',
    ];

    public function Vehicle()
    {
        return $this->belongsTo(Vehicle::class, 'vehicle_id');
    }
    public function Trailer()
    {
        return $this->belongsTo(Trailer::class, 'trailer_id');
    }
    public function User()
    {
        return $this->belongsTo(User::class, 'report_by');
    }
    public function WorkOrder()
    {
        return $this->belongsTo(WorkOrder::class, 'wo_id');
    }
    public function WeightProduct()
    {
        return $this->hasMany(WeightProduct::class);
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
