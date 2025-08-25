<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    //
    protected $table = 'events';

    protected $fillable = [
        'intersection_id',
        'traffic_light_id',
        'light_state_id',
        'event',
        'description',
        'event_time',
    ];

    protected $casts = [
        'event_time' => 'date:Y/m/d H:i:s',
        'created_at' => 'date:Y/m/d H:i:s',
        'updated_at' => 'date:Y/m/d H:i:s',
    ];

    public function intersection()
    {
        return $this->belongsTo(Intersection::class, 'intersection_id', 'id');
    }

    public function traffic_light()
    {
        return $this->belongsTo(TrafficLight::class, 'traffic_light_id', 'id');
    }

    public function light_state()
    {
        return $this->belongsTo(LightState::class, 'light_state_id', 'id');
    }

}
