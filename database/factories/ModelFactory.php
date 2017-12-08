<?php

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'email' => $faker->safeEmail,
        'name' => $faker->name,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Category::class, function (Faker\Generator $faker) {
    return [
        'color' => $faker->hexColor,
        'description' => $faker->sentence(5),
        'language_id' => $faker->numberBetween(1, 2),
        'title' => $faker->sentence(5)
    ];
});

$factory->define(App\Questioner::class, function (Faker\Generator $faker) {
    $rand = rand(1, 10);
    $answer_items = $rand % 2 ?  [1,2,3,4,5,6] : ['a','b','c','d','e'];
    $rand_i = rand(1, 40);

    $category_name = $rand_i % 2 ? 'tenaga pengajar' : ($rand_i % 3 ? 'sarana dan prasana' : 'staff');
    return [
        'category_name' => $category_name,
        'question' => $faker->sentence(5),
        'answer_items' => json_encode($answer_items),
    ];
});

$factory->define(App\Article::class, function (Faker\Generator $faker) {
    return [
        'category_id' => $faker->numberBetween(1, 5),
        'content' => implode("<br/><br/>", $faker->paragraphs(8)),
        'description' => $faker->sentence(5),
        'published_at' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'title' => $faker->sentence(5)
    ];
});
