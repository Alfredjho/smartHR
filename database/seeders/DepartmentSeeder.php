<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('departments')->insert([
            'name' => 'Marketing'
        ]);

        DB::table('departments')->insert([
            'name' => 'Legal'
        ]);

        DB::table('departments')->insert([
            'name' => 'Development'
        ]);

        DB::table('departments')->insert([
            'name' => 'Human Resource'
        ]);
    }
}
