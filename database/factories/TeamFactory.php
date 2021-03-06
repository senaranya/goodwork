<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use Carbon\Carbon;

$factory->define(App\Models\Team::class, function (Faker\Generator $faker) {
    $now = Carbon::now();
    return [
        'name'        => $faker->word,
        'slug'        => $faker->slug(1, false),
        'description' => $faker->paragraph,
        'office_id'   => factory(App\Models\Office::class)->create()->id,
        'created_at'  => $now,
        'updated_at'  => $now,
    ];
});