<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LightState extends Model
{
    //
    protected $table = 'light_states';

    protected $fillable = [
        'intersection_id',
        'traffic_light_id',
        'state',
        'start_time',
        'end_time',
    ];

    protected $dates = [
        'start_time:date:Y/m/d H:i:s',
        'end_time:date:Y/m/d H:i:s',
        'created_at:date:Y/m/d H:i:s',
        'updated_at:date:Y/m/d H:i:s',
    ];

    public function traffic_light()
    {
        return $this->belongsTo(TrafficLight::class, 'traffic_light_id', 'id');
    }

    public function intersection()
    {
        return $this->belongsTo(Intersection::class, 'intersection_id', 'id');
    }
}
