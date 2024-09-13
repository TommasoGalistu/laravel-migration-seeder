<?php

namespace Database\Seeders;
use App\Models\Train;
use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i=0; $i < 100; $i++) {

            $train = new Train();
            $train->company = $faker->text(35);
            $train->departure_station = $faker->randomElement(['milano', 'roma', 'mosca', 'new york']);
            $train->arrival_station = $faker->randomElement(['londra', 'parigi', 'barcellona', 'porto']);
            $train->departure_time = $faker->dateTime();
            $train->arrival_time = $faker->dateTime();
            $train->train_code = $faker->text(7);
            $train->number_carriages = $faker->numberBetween(1, 25);
            $train->on_time = $faker->boolean();
            $train->cancelled = $faker->boolean();
            $train->binary = $faker->numberBetween(1, 25);
            $train->save();
        }

    }
}
