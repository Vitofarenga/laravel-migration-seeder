<?php

use App\Train;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trains = [
            ["agency"=>'Ponte Gigliotti',
            "departure_station"=>'Roma',
            "arrival_station"=>'Bologna',
            "departure_time"=>'12/12/22',
            "arrival_time"=>'10/12/23',
            "train_code"=>'fz76',
            "carriage_number"=>'9',
            "punctual"=>'puntuale',
            "deleted"=>'',],
            ["agency"=>'Bizzozzero',
            "departure_station"=>'Firenze',
            "arrival_station"=>'Milano',
            "departure_time"=>'10/10/22',
            "arrival_time"=>'11/10/23',
            "train_code"=>'tr67',
            "carriage_number"=>'7',
            "punctual"=>'',
            "deleted"=>'cancellato',],
            ["agency"=>'Italo',
            "departure_station"=>'Monza',
            "arrival_station"=>'Rubinasco',
            "departure_time"=>'30/01/22',
            "arrival_time"=>'01/02/22',
            "train_code"=>'vh50',
            "carriage_number"=>'13',
            "punctual"=>'puntuale',
            "deleted"=>'',]
        ];
        foreach ($trains as $train) {
            $newTrain = new Train();
            $newTrain -> agency = $train['agency'];
            $newTrain -> departure_station = $train['departure_station'];
            $newTrain -> arrival_station = $train['arrival_station'];
            $newTrain -> departure_time = $train['departure_time'];
            $newTrain -> arrival_time = $train['arrival_time'];
            $newTrain -> train_code = $train['train_code'];
            $newTrain -> carriage_number = $train['carriage_number'];
            $newTrain -> punctual = $train['punctual'];
            $newTrain -> deleted = $train['deleted'];
            $newTrain -> save();
        }
    }
}
