<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\income\Income;

class IncomeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($index = 0; $index < 100; $index++){
            Income::create([
                'description' => Str::random(10),
                'value'     => rand(0, 100000)/100,
                'date'  => date("Y-m-d",mt_rand(1609459200,1640908800)),
                'income_type_id' => rand(1, 5),
                'user_id' => (1),
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ]);
        }
    }
}
