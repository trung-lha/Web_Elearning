<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class QuestionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker =  Faker::create();
        $question = [];
        for($index = 0; $index < 250; $index ++){
            $question[] = [
                'exam_id' => rand(1,20),
                'question' => $faker->text(30),
                'answer_a' => $faker->sentence(10),
                'answer_b' => $faker->sentence(10),
                'answer_c' => $faker->sentence(10),
                'answer_d' => $faker->sentence(10),
                'correct_answer' => rand(1,4),
            ];

        }
        // dd($question);
        DB::table('question')->insert($question);
    }
}
