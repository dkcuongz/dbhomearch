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
        Categories::create([
            'parent_id' => 2,
            'name' => 'Thông tin - Tầm nhìn - Sứ mệnh',
            'slug' => 'thong-tin-tam-nhin-su-menh',
            'has_child' => 0
        ]);
        Categories::create([
            'parent_id' => 2,
            'name' => 'Qui trình làm việc',
            'slug' => 'qui-trinh-lam-viec',
            'has_child' => 0
        ]);
        Categories::create([
            'parent_id' => 3,
            'name' => 'Nội Thất Căn Hộ',
            'slug' => 'noi-that-can-ho',
            'has_child' => 0
        ]);
        Categories::create([
            'parent_id' => 3,
            'name' => 'Nội Thất Nhà Phố',
            'slug' => 'noi-that-nha-pho',
            'has_child' => 0
        ]);
        Categories::create([
            'parent_id' => 3,
            'name' => 'Nội Thất Biệt Thự - Penhouse - Duplex',
            'slug' => 'noi-that-biet-thu-penhouse-duplex/',
            'has_child' => 0
        ]);
        Categories::create([
            'parent_id' => 3,
            'name' => 'Phong Cách Hiện Đại',
            'slug' => 'phong-cach-hien-dai',
            'has_child' => 0
        ]);
        Categories::create([
            'parent_id' => 3,
            'name' => 'Phong Cách Tân Cổ Điển - Luxury',
            'slug' => 'phong-cach-tan-co-dien-luxury',
            'has_child' => 0
        ]);
        Categories::create([
            'parent_id' => 3,
            'name' => 'Phong Cách Khác',
            'slug' => 'phong-cach-khac',
            'has_child' => 0
        ]);
        Categories::create([
            'parent_id' => 5,
            'name' => 'Ưu Đãi',
            'slug' => 'uu-dai',
            'has_child' => 0
        ]);
        Categories::create([
            'parent_id' => 5,
            'name' => 'Hoạt Động Công Ty',
            'slug' => 'hoat-dong-cong-ty',
            'has_child' => 0
        ]);
        Categories::create([
            'parent_id' => 5,
            'name' => 'Kinh Nghiệm - Kiến Thức',
            'slug' => 'kinh-nghiem-kien-thuc',
            'has_child' => 0
        ]);
    }
}
