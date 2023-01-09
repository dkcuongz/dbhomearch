<?php

namespace Database\Seeders;

use App\Entities\Categories;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->truncate();
        Categories::create([
            'parent_id' => 0,
            'name' => 'TRANG CHỦ',
            'slug' => 'trang-chu',
            'has_child' => 0
        ]);
        Categories::create([
            'parent_id' => 0,
            'name' => 'GIỚI THIỆU',
            'slug' => 'gioi-thieu',
            'has_child' => 1
        ]);
        Categories::create([
            'parent_id' => 0,
            'name' => 'THIẾT KẾ NỘI THẤT',
            'slug' => 'thiet-ke-noi-that',
            'has_child' => 1
        ]);
        Categories::create([
            'parent_id' => 0,
            'name' => 'DỰ ÁN',
            'slug' => 'du-an',
            'has_child' => 1
        ]);
        Categories::create([
            'parent_id' => 0,
            'name' => 'TIN TỨC- BLOG',
            'slug' => 'tin-tuc-blog',
            'has_child' => 0
        ]);
        Categories::create([
            'parent_id' => 0,
            'name' => 'Liên hệ',
            'slug' => 'lien-he',
            'has_child' => 0
        ]);
    }
}
