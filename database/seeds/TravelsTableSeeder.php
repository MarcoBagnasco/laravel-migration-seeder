<?php

use App\Travel;
use Illuminate\Database\Seeder;

class TravelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < 20; $i++){
            $new_travel = new Travel();
            
            $new_travel->main_location = 'Lorem Location';
            $new_travel->price = rand(50, 3000);
            $new_travel->duration = rand(3, 30) . ' days';
            $new_travel->departure = '2021/' . rand(1, 12) . '/' .  rand(1, 31);
            $new_travel->itinerary = 'Lorem -> Ipsum -> Dolor -> Amet -> Lorem';

            $new_travel->save();
        }
    }
}
