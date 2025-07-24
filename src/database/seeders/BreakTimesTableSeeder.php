<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\BreakTime;

class BreakTimesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('break_times')->insert([
            'attendance_id' => 1,
            'break_take' => "12:00",
            'break_return' => '13:00',
        ]);
    }
}
