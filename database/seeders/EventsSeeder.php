<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\events;

class EventsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $events = [
            [
                'name' => 'Music Festival',
                'event_type' => 'A day of great music and fun.',
                'event_date' => '2024-05-15 18:00:00',
                'location' => 'Central Park, NY',
                'capacity' => 5000,
                'price' => 50.00,
                'email' => 'info@musicfestival.com',
                'address' => '123 Music St, NY',
                'phone' => '123-456-7890',
            ],
            [
                'name' => 'Art Exhibition',
                'event_type' => 'Explore contemporary art from various artists.',
                'event_date' => '2024-06-20 10:00:00',
                'location' => 'Art Gallery, SF',
                'capacity' => 200,
                'price' => 20.00,
                'email' => 'info@artexhibition.com',
                'address' => '456 Art Ave, SF',
                'phone' => '234-567-8901',
            ],
            [
                'name' => 'Tech Conference',
                'event_type' => 'Join us for the latest in tech innovations.',
                'event_date' => '2024-07-10 09:00:00',
                'location' => 'Convention Center, LA',
                'capacity' => 1000,
                'price' => 200.00,
                'email' => 'info@techconference.com',
                'address' => '789 Tech Blvd, LA',
                'phone' => '345-678-9012',
            ],
            [
                'name' => 'Food Festival',
                'event_type' => 'Taste dishes from around the world.',
                'event_date' => '2024-08-12 12:00:00',
                'location' => 'City Square, Chicago',
                'capacity' => 3000,
                'price' => 30.00,
                'email' => 'info@foodfestival.com',
                'address' => '321 Food Ln, Chicago',
                'phone' => '456-789-0123',
            ],
            [
                'name' => 'Charity Run',
                'event_type' => 'Run for a cause and make a difference.',
                'event_date' => '2024-09-05 07:00:00',
                'location' => 'Downtown, Miami',
                'capacity' => 1500,
                'price' => 25.00,
                'email' => 'info@charityrun.com',
                'address' => '654 Charity Dr, Miami',
                'phone' => '567-890-1234',
            ],
            [
                'name' => 'Film Festival',
                'event_type' => 'Showcasing the best films from indie filmmakers.',
                'event_date' => '2024-10-01 19:00:00',
                'location' => 'Cinema Hall, Boston',
                'capacity' => 600,
                'price' => 40.00,
                'email' => 'info@filmfestival.com',
                'address' => '987 Cinema Rd, Boston',
                'phone' => '678-901-2345',
            ],
            [
                'name' => 'Yoga Retreat',
                'event_type' => 'Relax and rejuvenate with yoga sessions.',
                'event_date' => '2024-11-10 08:00:00',
                'location' => 'Nature Park, Denver',
                'capacity' => 100,
                'price' => 150.00,
                'email' => 'info@yogaretreat.com',
                'address' => '741 Yoga St, Denver',
                'phone' => '789-012-3456',
            ],
            [
                'name' => 'Book Fair',
                'event_type' => 'Meet authors and discover new books.',
                'event_date' => '2024-12-05 10:00:00',
                'location' => 'Expo Center, Seattle',
                'capacity' => 800,
                'price' => 10.00,
                'email' => 'info@bookfair.com',
                'address' => '852 Book Ave, Seattle',
                'phone' => '890-123-4567',
            ],
            [
                'name' => 'Sports Tournament',
                'event_type' => 'Exciting matches and competitions.',
                'event_date' => '2024-04-22 15:00:00',
                'location' => 'Stadium, Dallas',
                'capacity' => 20000,
                'price' => 75.00,
                'email' => 'info@sportstournament.com',
                'address' => '963 Stadium Rd, Dallas',
                'phone' => '901-234-5678',
            ],
            [
                'name' => 'Dance Workshop',
                'event_type' => 'Learn new dance styles from professionals.',
                'event_date' => '2024-03-15 14:00:00',
                'location' => 'Community Center, Austin',
                'capacity' => 50,
                'price' => 45.00,
                'email' => 'info@danceworkshop.com',
                'address' => '147 Dance St, Austin',
                'phone' => '012-345-6789',
            ],
        ];

        foreach ($events as $event) {
            events::create($event);
        }
    }
}

// php artisan db:seed --class=EventsSeeder

