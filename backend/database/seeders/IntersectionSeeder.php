<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IntersectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('intersections')->delete();
        DB::table('intersections')->insert([
            [
                'name' => 'Ngã tư Sở',
                'location' => 'Đống Đa, Thanh Xuân, Hà Nội',
                // 'control_station_id' => 1,
                // 'created_at' => now(),
                // 'updated_at' => now(),
            ],
            [
                'name' => 'Ngã tư Tràng Tiền',
                'location' => 'Hoàn Kiếm, Hà Nội',
                // 'control_station_id' => 2,
                // 'created_at' => now(),
                // 'updated_at' => now(),
            ],
            [
                'name' => 'Ngã tư Chùa Bộc - Thái Hà - Tây Sơn',
                'location' => 'Đống Đa, Hà Nội',
                // 'control_station_id' => 3,
                // 'created_at' => now(),
                // 'updated_at' => now(),
            ],
            [
                'name' => 'Ngã tư Kim Liên',
                'location' => 'Đống Đa, Hai Bà Trưng, Hà Nội'
                // 'control_station_id' => null,
                // 'created_at' => now(),
                // 'updated_at' => now(),
            ],
            [
                'name' => 'Ngã tư Cầu Giấy',
                'location' => 'Cầu Giấy, Hà Nội'
                // 'control_station_id' => null,
                // 'created_at' => now(),
                // 'updated_at' => now(),
            ],
        ]);
    }
}
