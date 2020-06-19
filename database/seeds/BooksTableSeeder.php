<?php

use Illuminate\Database\Seeder;
use App\Book;
use Faker\Generator as Faker;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 14; $i++) {
            $new_book = new Book();
            $new_book->title = $faker->sentence();
            $new_book->author = $faker->name();
            $new_book->editor = $faker->company();
            $new_book->pages = $faker->numberBetween(50, 1500);
            $new_book->plot = $faker->text(300);
            $new_book->save();
        }
    }
}
