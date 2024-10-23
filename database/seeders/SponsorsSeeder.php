<?php

namespace Database\Seeders;

use App\Models\sponsors;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SponsorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $sponsors = [
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
        foreach ($sponsors as  $picture) {
            sponsors::create($picture);
        }
    }
}
