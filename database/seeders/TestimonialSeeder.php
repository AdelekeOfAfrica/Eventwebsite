<?php

namespace Database\Seeders;

use App\Models\testimonial;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $testimonials = [
            [
                'name' => 'Adewunmi Oluwaseun',
                'comment' => 'Our event was a huge success, all thanks to the amazing planning team! They took care of every detail, from start to finish, making the whole experience stress-free and enjoyable',
            ],
            [
                'name' => 'Peter Onome',
                'comment' => 'Working with EvenTomy was incredible! They brought our vision to life with creativity, professionalism, and impeccable organization. Highly recommended for anyone looking to host an unforgettable event',
            ],
          

        ];
        foreach ($testimonials as  $testimonial) {
            testimonial::create($testimonial);
        }
    }
}
