<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\expenture\ExpentureType;

class ExpentureTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        ExpentureType::create([
            'id'            => (1),
            'description'   => ("Children"),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        
        //
        ExpentureType::create([
            'id'            => (2),
            'description'   => ("Transportation"),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        
        //
        ExpentureType::create([
            'id'            => (3),
            'description'   => ("Food"),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        
        //
        ExpentureType::create([
            'id'            => (4),
            'description'   => ("Communication"),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        
        //
        ExpentureType::create([
            'id'            => (5),
            'description'   => ("Clothes"),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
    }
}
