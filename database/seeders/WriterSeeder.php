<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Writer;
use Faker\Factory as Faker;

class WriterSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();

        $writers = [
            [
                'name' => 'Raka Putra Wicaksono',
                'expertise' => 'Spesialis Data Science',
                'image' => 'https://i.pravatar.cc/150?img=1'
            ],
            [
                'name' => 'Sita Wahyuni',
                'expertise' => 'Spesialis Network Security',
                'image' => 'https://i.pravatar.cc/150?img=5'
            ],
            [
                'name' => 'Andi Setiawan',
                'expertise' => 'Spesialis Interactive Multimedia',
                'image' => 'https://i.pravatar.cc/150?img=12'
            ],
            [
                'name' => 'Maya Kusuma',
                'expertise' => 'Spesialis Software Engineering',
                'image' => 'https://i.pravatar.cc/150?img=9'
            ]
        ];

        foreach ($writers as $writer) {
            Writer::create($writer);
        }
    }
}
