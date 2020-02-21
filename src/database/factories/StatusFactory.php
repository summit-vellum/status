<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Illuminate\Support\Str;
use Faker\Generator as Faker;
use Quill\Status\Models\Status;

$factory->define(Status::class, function (Faker $faker) {

    $name = $faker->text(80);
    $slug = Str::slug($name);

    return [
        'name' => $authorId,
        'slug' => $slug,
        'description' => '<p>'.implode('</p><p>',$faker->paragraphs).'</p>'
    ];
});
