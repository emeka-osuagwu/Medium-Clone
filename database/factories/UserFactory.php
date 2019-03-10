<?php

use Illuminate\Support\Str;
use Faker\Generator as Faker;

use App\Models\Tag;
use App\Models\User;
use App\Models\Article;
use App\Models\ArticleTag;

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
        'oauth' => $faker->md5,
        'image' => $faker->imageUrl($width = 640, $height = 480),
    ];
});

$factory->define(Article::class, function (Faker $faker) {
    return [
        'post' => $faker->name,
        'title' => $faker->name,
        'image' => $faker->imageUrl($width = 640, $height = 480),
        'author' => rand(1, 100),
        'description' => $faker->text($maxNbChars = 150),
    ];
});

$factory->define(Tag::class, function (Faker $faker) {
    return [
        'title' => $faker->name,
        'cover_image' => $faker->imageUrl($width = 640, $height = 480),
        'description' => $faker->name,
    ];
});

$factory->define(ArticleTag::class, function (Faker $faker) {
    return [
        'article_id' => rand(1, 100),
        'tag_id' => rand(1, 100),
    ];
});
