<?php

require_once "api.php";

$project_size = [
    'section_title' => 'Scope',
    'options' => [
        'low' => [
            'title' => 'Small',
            'base_price' => 1000, // in pounds
            'img_src' => '/img/project-size-small.png'
        ],
        'medium' => [
            'title' => 'Medium',
            'base_price' => 5000,
            'img_src' => '/img/project-size-medium.png',
        ],
        'high' => [
            'title' => 'High',
            'base_price' => 7000,
            'img_src' => '/img/project-size-large.png',
        ],
    ],
];


$materials = [
    'section_title' => 'Material',
    'options' => [
        'laminate' => [
            'title' => 'Laminate',
            'img_src' => '/img/material-laminate.png',
            'multiplier' => 0.5,
        ],
        'solid_timber' => [
            'title' => 'Solid Timber',
            'img_src' => '/img/material-solid-timber.png',
            'multiplier' => 1,
        ],
        'quartz' => [
            'title' => 'Quartz',
            'img_src' => '/img/material-quartz.png',
            'multiplier' => 1.7,
        ],
    ],
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="/main.css">
    <script src="/main.js"></script>
</head>
<body>

<h1>Build your Kitchen</h1>

<h2>
    <?php echo $scopes['section_title']; ?>
</h2>

<!-- code here -->

</body>
</html>