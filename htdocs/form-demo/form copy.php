<?php

$db_of_pics = [
    "48844900556" => [
        "lat" => 51.049,
        "long" => -114.071,
        "city" => "Calgary"
    ],
    "48848443367" => [
        "lat" => 51.15,
        "long" => -115.56,
        "city" => "Banff"
    ],
    "5856616479" => [
        "lat" => 44.491558,
        "long" => -63.91379,
        "city" => "Dartmouth"
    ]

];

$current_pics = [
    "48844900556" => [
        "lat" => 51.049,
        "long" => -114.071,
        "city" => "Calgary"
    ],
    "48848443367" => [
        "lat" => 51.15,
        "long" => -115.56,
        "city" => "Banff"
    ]
];




if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $msg = "Coming in from a POST";
    $image_id = $_POST['image-id'];
} else if ($_SERVER['REQUEST_METHOD'] === "GET") {
    $msg = "Coming in from a GET";
    $image_id = $_GET['image-id'] ?? '';
}

if (array_key_exists($image_id, $db_of_pics)) {
    $current_pics[$image_id] = $db_of_pics[$image_id];
}

require 'helpers.php';

require 'form.view.php';
