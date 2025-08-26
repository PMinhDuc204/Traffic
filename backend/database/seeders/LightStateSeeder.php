<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class LightStateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('light_states')->insert([
            [
                'intersection_id' => 1,
                'traffic_light_id' => 1,
                'state' => 'GREEN',
                // 'start_time' => 'null',
                // 'end_time' => 'null',
                // 'created_at' => now(),
                // 'updated_at' => now(),
            ],
            [
                'intersection_id' => 1,
                'traffic_light_id' => 1,
                'state' => 'YELLOW',
                // 'start_time' => 'null',
                // 'end_time' => 'null',
                // 'created_at' => now(),
                // 'updated_at' => now(),
            ],
            [
                'intersection_id' => 1,
                'traffic_light_id' => 1,
                'state' => 'RED',
                // 'start_time' => 'null',
                // 'end_time' => 'null',
                // 'created_at' => now(),
                // 'updated_at' => now(),
            ],
            [
                'intersection_id' => 1,
                'traffic_light_id' => 2,
                'state' => 'GREEN',
                // 'start_time' => 'null',
                // 'end_time' => 'null',
                // 'created_at' => now(),
                // 'updated_at' => now(),
            ],
            [
                'intersection_id' => 1,
                'traffic_light_id' => 2,
                'state' => 'YELLOW',
                // 'start_time' => 'null',
                // 'end_time' => 'null',
                // 'created_at' => now(),
                // 'updated_at' => now(),
            ],
            [
                'intersection_id' => 1,
                'traffic_light_id' => 2,
                'state' => 'RED',
                // 'start_time' => 'null',
                // 'end_time' => 'null',
                // 'created_at' => now(),
                // 'updated_at' => now(),
            ]
        ]);
    }
}
