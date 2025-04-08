<?php

namespace Database\Seeders;

use App\Models\Wedding;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WeddingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Wedding::create([
            'name'          => 'Chintya & Valupi',
            'note'          => 'A great marriage is not when the perfect couple comes together. \
            It is when an imperfect couple learns to enjoy their differences.',
            'status'        => 'Active',
            'hero1'         => '01JQY454ABMH83H1H98T36WZHJ.jpg',
            'hero2'         => '01JQY454AD64KW989YFJW5Q87N.jpg',
            'hero3'         => '01JQY454AEGW4G547ZN8NE7ZTA.jpg',
            'created_at'    => now(),
            'updated_at'    => now()
        ]);
    }
}
