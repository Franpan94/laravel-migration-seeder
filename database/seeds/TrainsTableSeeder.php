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
        //
        $trains = [

            [
                'agency'=> 'FrecciaRossa',
                'departure_station' => 'Roma Termini',
                'arrival_station' => 'Metaponto Centrale',
                'departure_time' => '11:30',
                'arrival_time' => '17:45',
                'code_train' => 8707,
                'number_carriages' => 150,
                'in_time' => 1,
                'deleted' => 0,
                'post' => 'https://www.trenitalia.com/content/dam/tcom/immagini/trenitalia-img/le-frecce/416x359/416x359_FrecciaRossa-500.jpg',
            ],

            [
                'agency'=> 'FrecciaRossa',
                'departure_station' => 'Milano Centrale',
                'arrival_station' => 'Firenze Santa Maria Novella',
                'departure_time' => '19:00',
                'arrival_time' => '22:00',
                'code_train' => 8545,
                'number_carriages' => 130,
                'in_time' => 0,
                'deleted' => 1,
                'post' => 'https://www.trenitalia.com/content/dam/tcom/immagini/trenitalia-img/le-frecce/416x359/416x359_FrecciaRossa-500.jpg',
            ],

            [
                'agency'=> 'FrecciArgento',
                'departure_station' => 'Bari Centrale',
                'arrival_station' => 'Napoli Centrale',
                'departure_time' => '11:30',
                'arrival_time' => '13:30',
                'code_train' => 6532,
                'number_carriages' => 180,
                'in_time' => 0,
                'deleted' => 1,
                'post' => 'https://upload.wikimedia.org/wikipedia/commons/2/23/Trenitalia_ETR610_4A_Venezia_SL.jpg',
            ],

            [
                'agency'=> 'FrecciArgento',
                'departure_station' => 'Torino Porta Nuova',
                'arrival_station' => 'Verona Centrale',
                'departure_time' => '15:30',
                'arrival_time' => '17:30',
                'code_train' => 9140,
                'number_carriages' => 200,
                'in_time' => 1,
                'deleted' => 0,
                'post' => 'https://upload.wikimedia.org/wikipedia/commons/2/23/Trenitalia_ETR610_4A_Venezia_SL.jpg',
            ],

            [
                'agency'=> 'FrecciaRossa 1000',
                'departure_station' => 'Bari Centrale',
                'arrival_station' => 'Torino Porta Nuova',
                'departure_time' => '12:30',
                'arrival_time' => '18:45',
                'code_train' => 6667,
                'number_carriages' => 150,
                'in_time' => 0,
                'deleted' => 0,
                'post' => 'https://img1.stcrm.it/images/21449622/1200x/frecciarossa-1000-etr-400-1.jpeg',
            ],

            [
                'agency'=> 'Intercity',
                'departure_station' => 'Napoli Centrale',
                'arrival_station' => 'Metaponto Centrale',
                'departure_time' => '12:30',
                'arrival_time' => '15:00',
                'code_train' => 5327,
                'number_carriages' => 150,
                'in_time' => 1,
                'deleted' => 0,
                'post' => 'https://www.fsitaliane.it/content/dam/fsitaliane/immagini/fsnews/news/2019/giugno/F_T_Nuovi_servizi_Intercity_600x400.jpg',
            ],

            [
                'agency'=> 'FrecciaBianca',
                'departure_station' => 'Firenze Santa Maria Novella',
                'arrival_station' => 'Venezia Centrale',
                'departure_time' => '12:30',
                'arrival_time' => '16:45',
                'code_train' => 7575,
                'number_carriages' => 170,
                'in_time' => 0,
                'deleted' => 1,
                'post' => 'https://www.blogsicilia.it/wp-content/uploads/sites/2/2021/10/Frecciabianca-trentalia-alta-velocit%C3%A0-light-pa-ct-me-ferrovie.jpg',
            ],

            [
                'agency'=> 'Intercity Notte',
                'departure_station' => 'Potenza Centrale',
                'arrival_station' => 'Metaponto Centrale',
                'departure_time' => '00:30',
                'arrival_time' => '02:30',
                'code_train' => 9898,
                'number_carriages' => 150,
                'in_time' => 1,
                'deleted' => 0,
                'post' => 'https://www.seguonews.it/wp-content/uploads/2020/06/Intercity.jpg',
            ],

            [
                'agency'=> 'FrecciaRossa',
                'departure_station' => 'Roma Termini',
                'arrival_station' => 'Bari Centrale',
                'departure_time' => '12:30',
                'arrival_time' => '16:45',
                'code_train' => 8668,
                'number_carriages' => 150,
                'in_time' => 1,
                'deleted' => 0,
                'post' => 'https://www.trenitalia.com/content/dam/tcom/immagini/trenitalia-img/le-frecce/416x359/416x359_FrecciaRossa-500.jpg',
            ],

            [
                'agency'=> 'FrecciArgento',
                'departure_station' => 'Torini Porta Nuova',
                'arrival_station' => 'Milano Centrale',
                'departure_time' => '12:30',
                'arrival_time' => '14:45',
                'code_train' => 5858,
                'number_carriages' => 170,
                'in_time' => 1,
                'deleted' => 0,
                'post' => 'https://upload.wikimedia.org/wikipedia/commons/2/23/Trenitalia_ETR610_4A_Venezia_SL.jpg',
            ],
        ];

        foreach($trains as $train){
            $newTrain = new Train();
            $newTrain-> agency = $train['agency'];
            $newTrain-> departure_station = $train['departure_station'];
            $newTrain-> arrival_station = $train['arrival_station'];
            $newTrain-> departure_time = $train['departure_time'];
            $newTrain-> arrival_time = $train['arrival_time'];
            $newTrain-> code_train = $train['code_train'];
            $newTrain-> number_carriages = $train['number_carriages'];
            $newTrain-> in_time = $train['in_time'];
            $newTrain-> deleted = $train['deleted'];
            $newTrain-> post = $train['post'];
            $newTrain->save();
        }
    }
}
