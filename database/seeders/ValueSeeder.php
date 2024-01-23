<?php

namespace Database\Seeders;

use App\Models\Value;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ValueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Value::create([
            "attribute_id" => 1,
            "name" => [
                "en" => "Red",
                "uz" => "Qizil",
                "ru" => "Красний",
            ],
        ]);

        Value::create([
            "attribute_id" => 1,
            "name" => [
                "en" => "Black",
                "uz" => "Qora",
                "ru" => "Черный",
            ],
        ]);

        Value::create([
            "attribute_id" => 1,
            "name" => [
                "en" => "Brown",
                "uz" => "jigarrang",
                "ru" => "Коречневий",
            ],
        ]);

        Value::create([
            "attribute_id" => 3,
            "name" => [
                "en" => "MDF",
                "uz" => "MDF",
                "ru" => "МДФ",
            ],
        ]);

        Value::create([
            "attribute_id" => 3,
            "name" => [
                "en" => "LDSP",
                "uz" => "LDSP",
                "ru" => "ЛДСП",
            ],
        ]);
    }
}
