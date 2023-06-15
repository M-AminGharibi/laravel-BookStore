<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use App\Models\Book;
use Illuminate\Database\Seeder;

class bookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        $faker = Faker::create();
        foreach ([1,2,3,4,5] as $index) {

            Book::create([
                'title' => $faker->name,
                'author' => $faker->firstName . " " . $faker->lastName,
                'price' => $faker->numberBetween(1000, 500000),
                'description' => $faker->text(400),
            ]);
        }
    }
}
