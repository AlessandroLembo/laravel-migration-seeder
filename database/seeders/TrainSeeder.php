<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 10; $i++) {

            $train = new Train();
            $train->azienda = $faker->word();
            $train->stazione_di_partenza = $faker->words(2, true);
            $train->stazione_di_arrivo = $faker->words(2, true);
            $train->data = $faker->dateTime();
            $train->orario_di_partenza = $faker->randomFloat(2, 00, 23);
            $train->orario_di_arrivo = $faker->randomFloat(2, 00, 23);
            $train->codice_treno = $faker->ean13();
            $train->numero_carrozze = $faker->randomDigit();
            $train->in_orario = $faker->boolean();
            $train->cancellato = $faker->boolean();

            $train->save();
        }
    }
}
