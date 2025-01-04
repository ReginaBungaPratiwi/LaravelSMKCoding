<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $judul = [
            'Indonesia Tanah Air Beta',
            'Pusaka Abadi Nan Jaya',
            'Indonesia Sejak Dulu Kala',
            'Selalu Dipuja-puja Bangsa'
        ];

        foreach($judul as $j){
            $slug = Str::slug($title)
        }
    }
}
