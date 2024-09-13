<?php

namespace Database\Seeders;

use App\Models\Travel;
use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
class TravelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 100; $i++) {

            $travel = new Travel();
            $travel->place = $faker->randomElement(['roma', 'milano', 'torino', 'honoluluuuu']);
            $travel->description = $faker->text(100);
            $travel->weather = $faker->boolean();

            $travel->save();
        }
    }
}
