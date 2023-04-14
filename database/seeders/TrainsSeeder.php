<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;

class TrainsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 100; $i++) {
            $new_train = new Train();

            $new_train->Azienda = $faker->sentence(1);
            $new_train->stazione_di_partenza = $faker->sentence(5);
            $new_train->stazione_di_arrivo = $faker->sentence(5);
            $new_train->orario_di_partenza = $faker->time();
            $new_train->orario_di_arrivo = $faker->time();
            $new_train->codice_treno = $faker->numberBetween(10000, 30000);
            $new_train->Numero_Carrozze = $faker->numberBetween(1, 20);

            $new_train->save();
        }


        // foreach ($trains as $train) {
        //     $new_train = new Train();

        //     $new_train->Azienda = $train['Treni Italia'];
        //     $new_train->stazione_di_partenza = $train['Milano'];
        //     $new_train->stazione_di_arrivo = $train['Napoli'];
        //     $new_train->orario_di_partenza = $train['15:00:00'];
        //     $new_train->orario_di_arrivo = $train['18:00:00'];
        //     $new_train->codice_treno = $train['12597'];
        //     $new_train->Numero_Carrozze = $train['15'];

        //     // $new_train->stazione_di_partenza = $train['Napoli'];
        //     // $new_train->stazione_di_arrivo = $train['MIlano'];
        //     // $new_train->orario_di_partenza = $train['15:00:00'];
        //     // $new_train->orario_di_arrivo = $train['19:00:00'];
        //     // $new_train->codice_treno = $train['23458'];
        //     // $new_train->Numero_Carrozze = $train['15'];
        //     // $new_train->In_Orario = $train['0'];
        //     // $new_train->Cancellato = $train['0'];

        //     $new_train->save();
        // }
    }
}
