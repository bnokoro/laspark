<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Service::truncate();
        $services = [
            ['service' => 'Park Management', 'created_at' => now(), 'updated_at' => now()],
            ['service' => 'Tree Planting and Maintenance', 'created_at' => now(), 'updated_at' => now()]
        ];
        DB::table('services')->insert($services);
    }
}
