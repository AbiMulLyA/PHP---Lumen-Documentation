<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
    ];
});

$factory->define('App\Author', function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => $faker->password,
        'profile' => $faker->text,
        'salt' => $faker->regexify('[A-Za-z0-9]{5}'),
    ];
});

$factory->define('App\Post', function (Faker $faker) {
    return [
        'title' => $faker->sentence($nbSentences = 1, $variableNbSentences = true),
        'content' => $faker->email,
        'tags' => $faker->word(),
        'profile' => $faker->sentences(2),
        'status' => $faker->boolean(),
        'author_id' => factory(App\Author::class),
    ];
});
