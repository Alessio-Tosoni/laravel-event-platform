<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Event;
use Faker\Generator as Faker;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        // $events = [
        //     [
        //         'name' => 'evento 1',
        //         'description' => 'descrizione lunga',
        //         'location' => 'città a caso 3',
        //         'date' => '25/06/2024'
                
        //     ],
        //     [
        //         'name' => 'progetto 2',
        //         'description' => 'descrizione lunghissima',
        //         'location' => 'città a caso 1',
        //         'date' => '26/03/2024'
                
        //     ],
        //     [
        //         'name' => 'progetto 3',
        //         'description' => 'descrizione breve',
        //         'location' => 'città a caso 2',
        //         'date' => '11/9/2024'
        //     ]
        // ];
        
        // foreach ($events as $event){
        //     $nuovoEvento = new Event();
        //     $nuovoEvento -> name = $event["name"];
        //     $nuovoEvento -> description = $event["description"];
        //     $nuovoEvento -> location = $event["location"];
        //     $nuovoEvento -> date = $event["date"];
        //     $nuovoEvento ->save();
        // }
        
        for($i = 0; $i < 6; $i++){
            $nuovoEvento = new Event();
            $nuovoEvento -> name = $faker->name();
            $nuovoEvento -> description = $faker->sentence();
            $nuovoEvento -> location = $faker->city();
            $nuovoEvento -> date = $faker->dateTimeThisYear('+7 months');
            $nuovoEvento ->save();
        }
           
        
    }
}
