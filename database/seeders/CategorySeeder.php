<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::truncate();

        $data = ['React JS', 'Vue JS', 'Express JS', 'Next JS', 'Nuxt JS', 'Javascript' ];

        foreach ($data as $key => $value) {
            Category::create(['name' =>$value]);
        }
    }
}
