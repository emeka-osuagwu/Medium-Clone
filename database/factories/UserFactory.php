<?php

use Illuminate\Support\Str;
use Faker\Generator as Faker;

use App\Models\Tag;
use App\Models\User;
use App\Models\Article;

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
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});

$factory->define(Article::class, function (Faker $faker) {
    return [
        'post' => $faker->name,
        'title' => $faker->name,
        'user_id' => rand(1, 100),
        'description' => $faker->name,
    ];
});

$factory->define(Tag::class, function (Faker $faker) {
    return [
        'title' => $faker->name,
        'cover_image' => $faker->name,
        'description' => $faker->name,
    ];
});
