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

        $company = [
            'Italo',
            'Trenord',
            'Trenitalia',
            'Trentino Trasporti',
        ];

        for ($i = 0; $i < 20; $i++) {
            $train = new Train();
            $train->company = $company[rand(0, count($company) - 1)];
            $train->departure_station = $faker->state();
            $train->arrival_station = $faker->state();
            $train->departure_date = $faker->date('Y-m-d');
            $train->departure_time = $faker->time('H:i');
            $train->arrival_time = $faker->time('H:i');
            $train->train_code = $faker->bothify('??-####');
            $train->carriages_number = $faker->randomDigitNot(0);
            $train->in_time = $faker->boolean();
            $train->cancelled = $faker->boolean();

            $train->save();
        }
    }
}
