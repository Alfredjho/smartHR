<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class CourseSeeder extends Seeder
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

        $outline = '<ul>';
        for ($i = 1; $i <= 5; $i++) {
            $outline .= "<li>Item $i: " . $faker->sentence . '</li>';
        }
        $outline .= '</ul>';

        DB::table('courses')->insert([
            'judul' => 'Microsoft Excel Tingkat Lanjut',
            'lecturer' => $faker->name,
            'description' => $faker->paragraph,
            'outline' => $outline,
            'image' => 'img/excel.png'
        ]);

        DB::table('courses')->insert([
            'judul' => 'Dasar SQL Untuk Pemula',
            'lecturer' => $faker->name,
            'description' => $faker->paragraph,
            'outline' => $outline,
            'image' => 'img/sql.png'
        ]);

        DB::table('courses')->insert([
            'judul' => 'Pengenalan Microsoft Azure',
            'lecturer' => $faker->name,
            'description' => $faker->paragraph,
            'outline' => $outline,
            'image' => 'img/azure.png'
        ]);

        DB::table('courses')->insert([
            'judul' => 'Belajar Laravel 10',
            'lecturer' => $faker->name,
            'description' => $faker->paragraph,
            'outline' => $outline,
            'image' => 'img/laravel.png'
        ]);

        DB::table('courses')->insert([
            'judul' => 'Menggunakan Bootstrap Framework',
            'lecturer' => $faker->name,
            'description' => $faker->paragraph,
            'outline' => $outline,
            'image' => 'img/bootstrap.png'
        ]);

        DB::table('courses')->insert([
            'judul' => 'Pengenalan Amazon AWS',
            'lecturer' => $faker->name,
            'description' => $faker->paragraph,
            'outline' => $outline,
            'image' => 'img/aws.png'
        ]);
    }
}
