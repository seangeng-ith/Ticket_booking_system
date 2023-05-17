<?php

namespace Database\Seeders;

use App\Models\Sport;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $sports = [
            ['sport' => 'FootBall'],
            ['sport' => 'BasketBall'],
            ['sport' => 'ValleyBall'],
            ['sport' => 'Tennis'],
            ['sport' => 'Swimming'],
            ['sport' => 'Kun Khmer'],
            ['sport' => 'Kick Boxing']
        ];
        foreach( $sports as $sport){
            Sport::create($sport);
        };
    }
}
