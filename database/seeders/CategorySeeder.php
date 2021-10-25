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
            "name"=>"C++",
            "thumbnail"=>"https://webdanhgia.vn/wp-content/uploads/2021/04/danh-gia-ngon-ngu-lap-trinh-C.jpg"
        ];
        Category::create($data);
        $data = [
            "name"=>"Python",
            "thumbnail"=>"https://hoadm.net/wp-content/uploads/2020/05/python-logo-741x486.jpg"
        ];
        Category::create($data);
        $data = [
            "name"=>"Logic",
            "thumbnail"=>"https://thichgiaiphap.com/wp-content/uploads/2021/04/06-4.png"
        ];
        Category::create($data);
        $data = [
            "name"=>"Backend",
            "thumbnail"=>"https://cuongteam.com/wp-content/uploads/2021/08/nhap-mon-laravel.png"
        ];
        Category::create($data);
    }
}
