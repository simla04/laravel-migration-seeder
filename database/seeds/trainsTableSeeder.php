<?php

use App\Models\Train;
use Illuminate\Database\Seeder;

class trainsTableSeeder extends Seeder
{
    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        $trains = [
            [
                'start_city' =>'Roma',
                'end_city' => 'Firenze'
            ],

            [
                'start_city' => 'Trieste',
                'end_city' => 'Venezia'
            ],

            ];

            foreach ($trains as $elem){
                $newTrain =new Train();
                $newTrain->start_city = $elem['start_city'];
                $newTrain->end_city = $elem['end_city'];
                $newTrain->save();
            }


        }
    }