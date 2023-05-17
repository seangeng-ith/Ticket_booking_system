<?php

namespace Database\Seeders;

use App\Models\Stadium;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StadiumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $stadia = [
            ['name' => 'Narendra Modi Stadium'],
            ['name' => 'Michigan Stadium'],
            ['name' => 'Signal Iduna Park'],
            ['name' => 'Borg El-Arab Stadium'],
            ['name' => 'Bukit Jalil National Stadium'],
            ['name' => 'Estadio Azteca'],
            ['name' => 'Wembley Stadium'],
            ['name' => 'Rose Bowl'],
            ['name' => 'FNB Stadium'],
            ['name' => 'Camp Nou'],
            ['name' => 'Melbourne Cricket Ground'],

        ];
        foreach ($stadia as $stadium){
            Stadium::create($stadium);
        };
    }
}
