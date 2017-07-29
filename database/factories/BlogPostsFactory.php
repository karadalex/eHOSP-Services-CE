<?php

use Illuminate\Foundation\Inspiring;

$factory->define(eHOSP\Models\BlogPost::class, function (Faker\Generator $faker) {
    static $password;

    $date = date("d-m-Y-his");
    $originalTile = Inspiring::quote();
    $title = kebab_case(title_case($originalTile));
    $viewname = $date ."-". $title;
    $description = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis dolor orci, faucibus pellentesque molestie vitae, convallis id turpis. Vivamus vel dictum est. Praesent gravida dui quis ultrices facilisis. Vestibulum id dolor in justo pretium iaculis. Aliquam ac cursus lacus. Sed pharetra vehicula luctus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam vel placerat sem. ";
    $imagesToChooseFrom = [
        0 => [
            "src" => "https://osuwmcdigital.osu.edu/sitetool/sites/urologypublic/images/Robotics/robotic_surgery_table.jpg",
            "alt" => "Robotic Surgery 1"
        ],
        1 => [
            "src" => "http://visagetechnologies.com/uploads/2015/08/robot-davinci.jpg",
            "alt" => "Robotic Surgery 2"
        ],
        2 => [
            "src" => "http://www.surgery.usc.edu/uppergi-general/graphics/davinci_console-patienttable01.jpg",
            "alt" => "Robotic Surgery 3"
        ]
    ];
    $img = $imagesToChooseFrom[mt_rand(0, count($imagesToChooseFrom) - 1)]["src"];
    $img_alt = $imagesToChooseFrom[mt_rand(0, count($imagesToChooseFrom) - 1)]["alt"];

    return [
        "title" => $originalTile,
        "viewname" => $viewname,
        "description" => $description,
        "author" => $faker->name,
        "img" => $img,
        "img_alt" => $img_alt,
        "created_at" => \Carbon\Carbon::now(),
        "updated_at" => \Carbon\Carbon::now()
    ];
});