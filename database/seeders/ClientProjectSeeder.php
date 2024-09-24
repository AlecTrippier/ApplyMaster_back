<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('client_projects')->insert([
            ['client_name' => 'ABC Corporation','project_name' => 'Website Redesign','status' => 'ongoing','start_date' =>'2024-01-01','end_date' => null,'budget' => '50000.00'],
            ['client_name' => 'XYZ Inc.','project_name' => 'Mobile App Development','status' => 'completed','start_date' =>'2023-05-15','end_date' => '2023-09-30','budget' => '75000.00'],
        ]);
    }
}
