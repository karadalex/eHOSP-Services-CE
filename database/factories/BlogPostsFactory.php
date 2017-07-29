<?php

use Illuminate\Foundation\Inspiring;

$factory->define(eHOSP\Models\BlogPost::class, function (Faker\Generator $faker) {
    static $password;

    $date = date("d-m-Y-his");
    $originalTile = Inspiring::quote();
    $title = kebab_case(title_case($originalTile));
    $viewname = $date ."-". $title;
    $description = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis dolor orci, faucibus pellentesque molestie vitae, convallis id turpis. Vivamus vel dictum est. Praesent gravida dui quis ultrices facilisis. Vestibulum id dolor in justo pretium iaculis. Aliquam ac cursus lacus. Sed pharetra vehicula luctus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam vel placerat sem. ";

    return [
        "title" => $originalTile,
        "viewname" => $viewname,
        "description" => $description,
        "author" => $faker->name,
        "created_at" => \Carbon\Carbon::now(),
        "updated_at" => \Carbon\Carbon::now()
    ];
});