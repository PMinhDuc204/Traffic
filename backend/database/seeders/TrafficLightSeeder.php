<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class TrafficLightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('traffic_lights')->insert([
            [
                'intersection_id' => 1,
                'direction' => 'NORTH',
                // 'created_at' => now(),
                // 'updated_at' => now(),
            ],
            [
                'intersection_id' => 1,
                'direction' => 'SOUTH',
                // 'created_at' => now(),
                // 'updated_at' => now(),
            ],
            [
                'intersection_id' => 1,
                'direction' => 'WEST',
                // 'created_at' => now(),
                // 'updated_at' => now(),
            ],
            [
                'intersection_id' => 1,
                'direction' => 'EAST',
                // 'created_at' => now(),
                // 'updated_at' => now(),
            ],
            [
                'intersection_id' => 1,
                'direction' => 'NORTH',
                // 'created_at' => now(),
                // 'updated_at' => now(),
            ],
            [
                'intersection_id' => 1,
                'direction' => 'SOUTH',
                // 'created_at' => now(),
                // 'updated_at' => now(),
            ],
            [
                'intersection_id' => 1,
                'direction' => 'WEST',
                // 'created_at' => now(),
                // 'updated_at' => now(),
            ],
            [
                'intersection_id' => 2,
                'direction' => 'NORTH',
                // 'created_at' => now(),
                // 'updated_at' => now(),
            ],
        ]);
    }
}
