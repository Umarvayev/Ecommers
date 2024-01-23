<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "category_id" => rand(1, 5),
            "name" => [
                "en" => fake()->sentence(3),
                "uz" => fake()->sentence(3),
                "ru" => 'полная мебель для спальни',
            ] ,
            "price" => rand(50000, 1000000),
            "description" => [
                "en" => fake()->paragraph(5),
                "uz" => fake()->paragraph(5),
                "ru" => "В нашем интернет-магазине представлены только тщательно отобранные модели, исключительные диваны – хиты продаж в Ташкенте и по Узбекистану. ",
            ]

        ];
    }
}
