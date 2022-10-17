<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use Faker\Factory;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        Post::factory(100000)->create([
            'title' => $faker->sentence(6, true),
            'description' => $faker->text(260).'..',
            'user_id' => 1
        ]);
    }
}
