<?php

namespace Database\Seeders;

use App\Models\Train;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;

use Faker\Generator as Faker;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {

        for($i = 0; $i < 50; $i++) {

            $newTrain = new Train();

            $newTrain->agency = $faker->company();
            $newTrain->departure_station = $faker->city();
            $newTrain->arrival_station = $faker->city();

            $newTrain->departure_time = $faker->dateTimeBetween('-1 day', '+1 day');
            $newTrain->arrival_time = $faker->dateTimeBetween('+1 day', '+2 day');

            $newTrain->train_code = $faker->randomNumber(4, true);
            $newTrain->carriages = $faker->numberBetween(5, 9);
            
            $newTrain->cancel = $faker->boolean();

            if ($newTrain->cancel) {
                $newTrain->delay = false;
            }else {
                $newTrain->delay = $faker->boolean();
            }

            $newTrain->save();
        }


    }
}
