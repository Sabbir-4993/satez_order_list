<?php

use Illuminate\Database\Seeder;

class FakeProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for ($i=1; $i<=100; $i++){

            \App\Model\Product::create([
                'Product_id' => $faker->unique()->randomDigit(),
                'category_id' => $faker->unique()->numberBetween(1,100),
                'name' => $faker->word(1,100),
                'unit' => $faker->numberBetween('1,5'),
                'weight' => $faker->numberBetween(1,10),
                'regular_price' => $faker->randomDigit,
                'sale_price' => $faker->randomDigit,
                'stock_status' => $faker->word(1,100),
                'images' => $faker->image('public/storage/images',500,500),
            ]);
        }
    }
}
