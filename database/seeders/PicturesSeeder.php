<?php

namespace Database\Seeders;

use App\Models\Pictures;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PicturesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $pictures = [
            [
                'name' => 'weddings',
                'image_path' => 'assets/img/sample.png',
            ],
            [
                'name' => 'weddings',
                'image_path' => 'assets/img/sample.png',
            ],
            [
                'name' => 'weddings',
                'image_path' => 'assets/img/sample.png',
            ],
            [
                'name' => 'weddings',
                'image_path' => 'assets/img/sample.png',
            ],

        ];
        foreach ($pictures as  $picture) {
            Pictures::create($picture);
        }
    }
}
