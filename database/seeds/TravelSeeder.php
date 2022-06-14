<?php

use App\Travel;
use Illuminate\Database\Seeder;

class TravelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $travels = config('db.travels');
        foreach ($travels as $travel) {
            $new_travel = new Travel();
            $new_travel->image = $travel['image'];
            $new_travel->description = $travel['description'];
            $new_travel->is_avaible = $travel['is_avaible'];
            $new_travel->date_check_in = $travel['date_check_in'];
            $new_travel->date_check_out = $travel['date_check_out'];
            $new_travel->number_of_people = $travel['number_of_people'];
            $new_travel->location = $travel['location'];
            $new_travel->type_of_location = $travel['type_of_location'];
            $new_travel->price = $travel['price'];
            $new_travel->save();
        }
    }
}
