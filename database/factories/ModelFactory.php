<?php

/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(Brackets\AdminAuth\Models\AdminUser::class, function (Faker\Generator $faker) {
    return [
        'activated' => true,
        'created_at' => $faker->dateTime,
        'deleted_at' => null,
        'email' => $faker->email,
        'first_name' => $faker->firstName,
        'forbidden' => $faker->boolean(),
        'language' => 'en',
        'last_name' => $faker->lastName,
        'password' => bcrypt($faker->password),
        'remember_token' => null,
        'updated_at' => $faker->dateTime,
        
    ];
});/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Post::class, static function (Faker\Generator $faker) {
    return [
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Post::class, static function (Faker\Generator $faker) {
    return [
        'created_at' => $faker->dateTime,
        'enabled' => $faker->boolean(),
        'perex' => $faker->text(),
        'published_at' => $faker->date(),
        'slug' => $faker->unique()->slug,
        'title' => $faker->sentence,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Movie::class, static function (Faker\Generator $faker) {
    return [
        'name' => $faker->firstName,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Player::class, static function (Faker\Generator $faker) {
    return [
        'name' => $faker->firstName,
        'roll' => $faker->sentence,
        'country_id' => $faker->randomNumber(5),
        'odi_matches' => $faker->randomNumber(5),
        'test_matches' => $faker->randomNumber(5),
        't20_matches' => $faker->randomNumber(5),
        'odi_runs' => $faker->randomNumber(5),
        'test_runs' => $faker->randomNumber(5),
        't20_runs' => $faker->randomNumber(5),
        'odi_50s' => $faker->randomNumber(5),
        'test_50s' => $faker->randomNumber(5),
        't20_50s' => $faker->randomNumber(5),
        'odi_100s' => $faker->randomNumber(5),
        'test_100s' => $faker->randomNumber(5),
        't20_100s' => $faker->randomNumber(5),
        'odi_wickets' => $faker->randomNumber(5),
        'test_wickets' => $faker->randomNumber(5),
        't20_wickets' => $faker->randomNumber(5),
        'odi_highest_score' => $faker->randomNumber(5),
        'test_highest_score' => $faker->randomNumber(5),
        't20_highest_score' => $faker->randomNumber(5),
        'odi_batting_average' => $faker->randomNumber(5),
        'test_batting_average' => $faker->randomNumber(5),
        't20_batting_average' => $faker->randomNumber(5),
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
