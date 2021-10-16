<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'Product_id' => $this->faker->unique()->randomDigit(),
        'category_id' => $this->faker->unique()->numberBetween(1,100),
        'name' => $this->faker->word(1,10),
        'unit' => $this->faker->numberBetween('1,5'),
        'weight' => $this->faker->numberBetween(1,10),
        'regular_price' => $this->faker->number(1,100),
        'sale_price' => $this->faker->number(1,100),
        'stock_status' => $this->faker->word(1,100),
        'images' => $this->faker->image('public/storage/images',500,500, null, false),
    ];
});
