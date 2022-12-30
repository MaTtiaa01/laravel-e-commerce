<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Item;
use Faker\Generator as Faker;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 20; $i++) {
            $new_item = new Item();
            $new_item->title = $faker->randomElement(['shoes', 'jacket', 'cap', 'sunglasses', 'pants', 'shirt']);
            $new_item->price = $faker->randomNumber(1, 10, 100);
            $new_item->img = $faker->imageUrl(640, 480, 'product', true);
            $new_item->details = $faker->paragraph();
            $new_item->save();
        }
    }
}
