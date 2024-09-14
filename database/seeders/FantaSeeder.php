<?php

namespace Database\Seeders;
use Faker\Generator;
use App\Models\Fanta;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// use Illuminate\Support\Str;
class FantaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data_csv = fopen(__DIR__ . '/rose.csv', 'r');
        // metodo per eliminare la prima riga che non mi serve
        fgetcsv($data_csv);

        while(($row = fgetcsv($data_csv)) !== false){
            $player = new Fanta();
            $player->fanta_id = $row[8];
            $player->team = $row[0];
            $player->player = $row[1];
            $player->player_team = $row[2];
            $player->position = $row[3];
            $player->position_mantra = $row[4];
            $player->price = $row[5];
            $player->quotation = $row[6];
            $player->quot_mantra = $row[7];
            $player->save();


        }

        fclose($data_csv);
    }
}
