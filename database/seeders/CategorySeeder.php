<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => [
                'en' => 'Chair',
                'uz' => 'Stol',
                'ru' => 'Cтол',
             ],
        ]);

        Category::create([
            'name' => [
                'en' => 'sofa',
                'uz' => 'Divan',
                'ru' => 'Диван',
             ],
        ]);

        Category::create([
            'name' => [
                'en' => 'Bed',
                'uz' => 'Yotoq',
                'ru' => 'Крават',
             ],
        ]);

        Category::create([
            'name' => [
                'en' => 'Table',
                'uz' => 'Stul',
                'ru' => 'Стул',
             ],
        ]);

        Category::create([
            'name' => [
                'en' => 'Armchair',
                'uz' => 'Kreslo',
                'ru' => 'Кресло',
             ],
        ]);
    }
}
