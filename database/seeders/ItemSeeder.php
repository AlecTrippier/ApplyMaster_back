<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('items')->insert([
            ['name' => 'Item 1','created_at' => Carbon::now(),'updated_at' => Carbon::now()],
            ['name' => 'Item 2','created_at' => Carbon::now(),'updated_at' => Carbon::now()],
        ]);
    }
}
