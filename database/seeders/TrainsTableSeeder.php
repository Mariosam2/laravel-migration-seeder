<?php

namespace Database\Seeders;

use Faker\Generator as Faker;
use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $train = new Train();
            $train->company = $faker->company();
            $train->departure_station = $faker->city();
            $train->arrival_station = $faker->city();
            $train->departure_time = $faker->time('H:i');
            $train->arrival_time = $faker->time('H:i');
            $train->train_code = $faker->unique()->bothify('?????#####');
            $train->num_of_wagons = $faker->numberBetween(0, 100);
            $train->is_on_time = $faker->boolean();
            $train->canceled = $faker->boolean();
        }
    }
}
