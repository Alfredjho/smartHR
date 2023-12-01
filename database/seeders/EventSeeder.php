<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // seed for every user in database
        
        $users = DB::table('users')->get();
        foreach ($users as $user) {
            $month = date('m');
            $year = date('Y');
            $day = date('d');

            // for every weekday in the month
            for ($i = 1; $i <= 31; $i++) {
                $day = $i;
                $dayOfWeek = date('w', mktime(0, 0, 0, $month, $day, $year));
                if ($dayOfWeek == 0 || $dayOfWeek == 6) {
                    continue;
                }
                DB::table('events')->insert([
                    'user_id' => $user->id,
                    'day' => $day,
                    'month' => $month,
                    'year' => $year,
                    'title' => 'Work',
                    'time' => '09:00 - 17:00',
                ]);
            }



            DB::table('events')->insert([
                'user_id' => $user->id,
                'day' => 1,
                'month' => $month,
                'year' => $year,
                'title' => 'Deadline Report',
                'time' => '21:00',
            ]);
        }
        




    }
}
