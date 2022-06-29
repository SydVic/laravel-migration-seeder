<?php

use App\Train;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $stations = [
            'Roma',
            'Milano',
            'Napoli',
            'Bari',
            'Venezia',
        ];

        $company = [
            'Italo',
            'Trenord',
            'Trenitalia',
            'Trentino Trasporti',
        ];

        for ($i = 0; $i < 20; $i++) {
            $train = new Train();
            $train->azienda = $company[rand(0, count($company) - 1)];
            $train->stazione_partenza = $stations[rand(0, count($stations) - 1)];
            $train->stazione_arrivo = $stations[rand(0, count($stations) - 1)];
            $train->giorno_partenza = $faker->date('Y-m-d');
            $train->orario_partenza = $faker->time('H:i');
            $train->orario_arrivo = $faker->time('H:i');
            $train->codice_treno = $faker->bothify('??-####');
            $train->numero_carrozze = $faker->randomDigitNot(0);
            $train->in_orario = $faker->boolean();
            $train->cancellato = $faker->boolean();

            $train->save();
        }
    }
}
