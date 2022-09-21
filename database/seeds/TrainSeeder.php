<?php

use App\Train;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 5; $i++){
            $train = new Train();

            $train->Azienda = $faker->company();
            $train->Stazione_di_partenza = $faker->city();
            $train->Stazione_di_arrivo = $faker->city();
            $train->Orario_di_partenza = $faker->time();
            $train->Orario_di_arrivo = $faker->time();
            $train->Codice_Treno = $faker->ean8();
            $train->Numero_Carrozze = $faker->randomDigitNotNull();
            $train->In_orario = $faker->boolean();
            $train->Cancellato = $faker->boolean();


            $train->save();
        }
    }
}