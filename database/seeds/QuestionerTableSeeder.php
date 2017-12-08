<?php

use Illuminate\Database\Seeder;

class QuestionerTableSeeder extends Seeder
{
    public function run()
    {
        factory(App\Questioner::class, 30)->create();
    }
}
