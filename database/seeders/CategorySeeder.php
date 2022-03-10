<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Appartment',
        ]);
        Category::create([
            'name' => 'Room',
        ]);
        Category::create([
            'name' => 'Sublet',
        ]);
        Category::create([
            'name' => 'PentHouse',
        ]);
        Category::create([
            'name' => 'Duplex',
        ]);
        Category::create([
            'name' => 'Building',
        ]);
        Category::create([
            'name' => 'Office',
        ]);
        Category::create([
            'name' => 'Shop',
        ]);
        Category::create([
            'name' => 'WareHouse',
        ]);
        Category::create([
            'name' => 'Industrial',
        ]);
    }
}
