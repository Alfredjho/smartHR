<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::create();

        DB::table('users')->insert([
            'name' => $faker->name,
            'employee_id' => 'E003',
            'department_id' => $faker->numberBetween(1,4),
            'position' => 'Staff',
            'email' => $faker->unique()->safeEmail,
            'password' => Hash::make('dummy')
        ]);
    }
}
