<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Intersection extends Model
{
    //
    protected $table = 'intersections';
    protected $fillable = [
        'name',
        'location',
        'control_station_id',
    ];
    protected $casts = [
        'created_at' => 'date:Y/m/d H:i:s',
        'updated_at' => 'date:Y/m/d H:i:s',
        'deleted_at' => 'date:Y/m/d H:i:s',
    ];

    public function traffic_lights()
    {
        return $this->hasMany(TrafficLight::class, 'intersection_id', 'id');
    }
}
