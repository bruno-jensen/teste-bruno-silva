<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\income\IncomeType;

class IncomeTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        IncomeType::create([
            'id'            => (1),       
            'description'   => ("Children"),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        
        //
        IncomeType::create([
            'id'            => (2),
            'description'   => ("Transportation"),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        
        //
        IncomeType::create([
            'id'            => (3),
            'description'   => ("Food"),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        
        //
        IncomeType::create([
            'id'            => (4),
            'description'   => ("Communication"),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        
        // 
        IncomeType::create([
            'id'            => (5),
            'description'   => ("Clothes"),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
    }
}
