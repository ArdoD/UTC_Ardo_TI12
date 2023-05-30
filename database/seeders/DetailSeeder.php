<?php

namespace Database\Seeders;

use App\Models\Detail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');
        Detail::create([
            'book_id' => 1,
            'author' => $faker->name(),
            'post_date' => $faker->date(),
            'reading_time' => 'Quicks_Read',
            'long_desc' => $faker->paragraph()
        ]);
        $faker = Faker::create('id_ID');
        Detail::create([
            'book_id' => 2,
            'author' => $faker->name(),
            'post_date' => $faker->date(),
            'reading_time' => 'Mediums_Read',
            'long_desc' => $faker->paragraph()
        ]);
        $faker = Faker::create('id_ID');
        Detail::create([
            'book_id' => 3,
            'author' => $faker->name(),
            'post_date' => $faker->date(),
            'reading_time' => 'Longs_Read',
            'long_desc' => $faker->paragraph()
        ]);
        $faker = Faker::create('id_ID');
        Detail::create([
            'book_id' => 4,
            'author' => $faker->name(),
            'post_date' => $faker->date(),
            'reading_time' => 'Quicks_Read',
            'long_desc' => $faker->paragraph()
        ]);
        $faker = Faker::create('id_ID');
        Detail::create([
            'book_id' => 5,
            'author' => $faker->name(),
            'post_date' => $faker->date(),
            'reading_time' => 'Mediums_Read',
            'long_desc' => $faker->paragraph()
        ]);
        $faker = Faker::create('id_ID');
        Detail::create([
            'book_id' => 6,
            'author' => $faker->name(),
            'post_date' => $faker->date(),
            'reading_time' => 'Longs_Read',
            'long_desc' => $faker->paragraph()
        ]);
        $faker = Faker::create('id_ID');
        Detail::create([
            'book_id' => 7,
            'author' => $faker->name(),
            'post_date' => $faker->date(),
            'reading_time' => 'Quicks_Read',
            'long_desc' => $faker->paragraph()
        ]);
        $faker = Faker::create('id_ID');
        Detail::create([
            'book_id' => 8,
            'author' => $faker->name(),
            'post_date' => $faker->date(),
            'reading_time' => 'Mediums_Read',
            'long_desc' => $faker->paragraph()
        ]);
        $faker = Faker::create('id_ID');
        Detail::create([
            'book_id' => 9,
            'author' => $faker->name(),
            'post_date' => $faker->date(),
            'reading_time' => 'Longs_Read',
            'long_desc' => $faker->paragraph()
        ]);
        $faker = Faker::create('id_ID');
        Detail::create([
            'book_id' => 10,
            'author' => $faker->name(),
            'post_date' => $faker->date(),
            'reading_time' => 'Quicks_Read',
            'long_desc' => $faker->paragraph()
        ]);
    }
}
