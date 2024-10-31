<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MetricsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('metrics')->insert([
            'total_members' => 500,
            'active_members' => 120,
            'events' => json_encode([
                ['name' => 'Annual Meetup', 'attendance' => 90, 'engagement' => 85, 'date' => '2024-10-01'],
                ['name' => 'Monthly Webinar', 'attendance' => 45, 'engagement' => 70, 'date' => '2024-10-15'],
                ['name' => 'Hackathon', 'attendance' => 120, 'engagement' => 95, 'date' => '2024-10-20'],
            ]),
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
