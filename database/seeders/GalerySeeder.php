<?php

namespace Database\Seeders;

use App\Models\Galery;
use Illuminate\Database\Seeder;

class GalerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Galery::create([
            'wedding_id'        => 1,
            'gallery1'          => '01JQY454ABMH83H1H98T36WZHJ.jpg',
            'gallery2'          => '01JQY454AD64KW989YFJW5Q87N.jpg',
            'gallery3'          => '01JQY454AEGW4G547ZN8NE7ZTA.jpg',
            'gallery4'          => 'DSC01937.JPG',
            'gallery5'          => 'DSC01938.JPG',
            'gallery6'          => 'DSC01940.JPG',
            'gallery7'          => 'DSC02327.JPG',
            'gallery8'          => 'DSC02368.JPG',
            'gallery9'          => 'DSC02352.JPG',
            'gallery10'          => 'DSC02774.JPG',
            'gallery11'          => 'DSC02792.JPG',
            'gallery12'          => 'DSC02797.JPG',
            'video'             => 'https://www.youtube.com/embed/syMFHd5Gxxk',
            'created_at'        => now(),
            'updated_at'        => now()
        ]);
    }
}
