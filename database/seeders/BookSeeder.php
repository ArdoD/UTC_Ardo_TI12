<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');
        Book::create([
            'title' => $faker->sentence(),
            'description' => $faker->sentence(),
            'image' => 'book1.jpg'
        ]);
        Book::create([
            'title' => $faker->sentence(),
            'description' => $faker->sentence(),
            'image' => 'book2.jpg'
        ]);
        Book::create([
            'title' => $faker->sentence(),
            'description' => $faker->sentence(),
            'image' => 'book3.jpg'
        ]);
        Book::create([
            'title' => $faker->sentence(),
            'description' => $faker->sentence(),
            'image' => 'book4.jpg'
        ]);
        Book::create([
            'title' => $faker->sentence(),
            'description' => $faker->sentence(),
            'image' => 'book5.jpg'
        ]);
        Book::create([
            'title' => $faker->sentence(),
            'description' => $faker->sentence(),
            'image' => 'book1.jpg'
        ]);
        Book::create([
            'title' => $faker->sentence(),
            'description' => $faker->sentence(),
            'image' => 'book2.jpg'
        ]);
        Book::create([
            'title' => $faker->sentence(),
            'description' => $faker->sentence(),
            'image' => 'book3.jpg'
        ]);
        Book::create([
            'title' => $faker->sentence(),
            'description' => $faker->sentence(),
            'image' => 'book4.jpg'
        ]);
        Book::create([
            'title' => $faker->sentence(),
            'description' => $faker->sentence(),
            'image' => 'book5.jpg'
        ]);
    }
}
