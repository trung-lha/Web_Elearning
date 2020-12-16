<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ExamTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker =  Faker::create();
        $exam = [];
        for($index = 0; $index < 100; $index ++){
            $exam[] = [
                'subject_id' => rand(1,6),
                'name' => 'Bài thi thử '.$index,
                'status' => "active",
                'thumb' => $faker->name()
            ];

        }
        // dd($exam);
        DB::table('exam')->insert($exam);
    }
}


