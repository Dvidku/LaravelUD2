<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Article;
use Faker\Factory as Faker;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('es_ES');
        Article::truncate();

        for ($i = 0; $i < 20; $i++) {
            Article::create([
                'user_id'=>$i,
                'title' => $faker->linuxProcessor(),
                'body' => $faker->text(75),
                'date' => $faker->date(),
            ]);
        }


    }


}
