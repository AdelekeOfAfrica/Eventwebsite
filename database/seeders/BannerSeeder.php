<?php

namespace Database\Seeders;

use App\Models\Banner;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
      //
      $banners = [
        [

            'title' => 'weddings',
            'image_path' => 'assets/img/sample.png',
            'description' => 'test',
            'created_at' => now(),
            'updated_at' => now(),
           
        ],
        [
            'title' => 'weddings',
            'image_path' => 'assets/img/sample.png',
            'description' => 'test',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'title' => 'weddings',
            'image_path' => 'assets/img/sample.png',
            'description' => 'test',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'title' => 'weddings',
            'image_path' => 'assets/img/sample.png',
            'description' => 'test',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'title' => 'weddings',
            'image_path' => 'assets/img/sample.png',
            'description' => 'test',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'title' => 'weddings',
            'image_path' => 'assets/img/sample.png',
            'description' => 'test',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'title' => 'weddings',
            'image_path' => 'assets/img/sample.png',
            'description' => 'test',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'title' => 'weddings',
            'image_path' => 'assets/img/sample.png',
            'description' => 'test',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'title' => 'weddings',
            'image_path' => 'assets/img/sample.png',
            'description' => 'test',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'title' => 'weddings',
            'image_path' => 'assets/img/sample.png',
            'description' => 'test',
            'created_at' => now(),
            'updated_at' => now(),
        ],
    ];

    foreach ($banners as $banner) {
        Banner::create($banner);
    }
    }
}
