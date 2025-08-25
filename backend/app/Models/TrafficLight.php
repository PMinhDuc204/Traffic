<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TrafficLight extends Model
{
    //
    protected $table = 'traffic_lights';

    protected $fillable = [
        'intersection_id',
        'light_state',
        'direction',
    ];

    protected $casts = [
        'created_at' => 'date:Y/m/d H:i:s',
        'updated_at' => 'date:Y/m/d H:i:s',
    ];

    public function light_states()
    {
        return $this->hasMany(LightState::class, 'traffic_light_id', 'id');
    }

    public function intersection()
    {
        return $this->belongsTo(Intersection::class, 'intersection_id', 'id');
    }
}
