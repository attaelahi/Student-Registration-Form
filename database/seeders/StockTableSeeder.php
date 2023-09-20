<?php

namespace Database\Seeders;

use App\Models\Stock;
use Illuminate\Database\Seeder;

class StockTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Stock::create([
            'student_name' => 'Atta Elahi',
            'student_degree' => 'BSSE',
            'phone_number' => 100,
        ]);
    }
}
