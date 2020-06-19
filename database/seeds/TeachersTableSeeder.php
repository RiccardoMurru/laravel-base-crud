<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Teacher;

class TeachersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $new_teacher = new Teacher();
            $new_teacher->name = $faker->name();
            $new_teacher->birthdate = $faker->date();
            $new_teacher->email = $faker->freeEmail();
            $new_teacher->description = $faker->text(150);
            $new_teacher->save();
        }
    }
}
