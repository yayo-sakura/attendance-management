<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AttendancesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('attendances')->insert([
            'user_id' => 1,
            'start_time' => '09:00',
            'end_time' => '18:00',
            'date' => '2025-06-01',
            'remarks' => '電車遅延のため',
        ]);
    }
}
