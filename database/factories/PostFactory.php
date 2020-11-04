<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;
use App\User;

$factory->define(Post::class, function (Faker $faker) {
	$listUserID = User::pluck('id');
    return [
        'title' => $faker->word,
        'user_id' => $faker->randomElement($listUserID),
    ];
});
