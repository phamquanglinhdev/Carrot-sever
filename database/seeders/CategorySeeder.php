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
        $data = [
            "name"=>"C++"
        ];
        Category::create($data);
        $data = [
            "name"=>"Python"
        ];
        Category::create($data);
        $data = [
            "name"=>"Custom"
        ];
        Category::create($data);
        $data = [
            "name"=>"Backend"
        ];
        Category::create($data);
    }
}
