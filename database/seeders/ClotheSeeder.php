<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Clothe;
class ClotheSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        Clothe::factory()->count(20)->create();
    }
}
