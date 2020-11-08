<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title'=>$faker->sentence,
        'description'=>$faker->paragraph,
        'created_at'=>\Carbon\Carbon::now(),
        'updated_at'=>\Carbon\Carbon::now()
    ];
});
