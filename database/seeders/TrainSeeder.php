<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $newTrain = new Train();

        $newTrain->agency = 'treno';

        $newTrain->departure_station = 'Sesto';
        $newTrain->arrival_station = 'Firenze';

        $newTrain->departure_time = '2024-12-10';
        $newTrain->arrival_time = '2024-03-03';

        $newTrain->train_code = 21223;

        $newTrain->carriages = 8;

        $newTrain->delay = false;
        $newTrain->cancel = true;


        $newTrain->save();
    }
}
