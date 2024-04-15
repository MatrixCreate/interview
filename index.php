<?php

require_once "api.php";

$project_sizes = [
    'section_title' => 'Scope',

    'options' => [
        [
            'title' => 'Small',
            'base_price' => 1000, // in pounds
            'copy' => "12 Units | 15 Msq",
            'img_src' => '/img/project-size-small.png'
        ],
        [
            'title' => 'Medium',
            'base_price' => 5000,
            'copy' => "16 Units | 20 Msq",
            'img_src' => '/img/project-size-medium.png',
        ],
        [
            'title' => 'Large',
            'base_price' => 7000,
            'copy' => "20 Units | 40 Msq",
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

<section>
    <h2>
        <?php echo $project_sizes['section_title']; ?>
    </h2>
</section>

<section>
    <h2>
        <?php echo $materials['section_title']; ?>
    </h2>
</section>

<section class="result">
    <p class="result_output">Total:</p>
</section>

</body>
</html>