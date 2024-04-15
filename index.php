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

<ul class="option-list">
<?php foreach ($project_sizes['options'] as $i => $project_size): ?>
    <li class="option-list-item">
        <label for="<?php echo 'project_size_' . $i ?>">
            <h3><?php echo $project_size['title'] ?></h3>
            <img class="option-img" src="<?php echo $project_size['img_src'] ?>" alt="<?php echo $project_size['title'] . ' image' ?>">
            <p class="option-copy"><?php echo $project_size['copy'] ?></p>
            <input type="radio" name="project_size" id="project_size_<?php echo $i ?>">
        </label>
    </li>
<?php endforeach; ?>
</ul>
</section>

<section>

<h2>
    <?php echo $materials['section_title']; ?>
</h2>

<ul class="option-list">
<?php foreach ($materials['options'] as $i => $material): ?>
    <li class="option-list-item">
        <label for="<?php echo 'material_' . $i ?>">
            <h3><?php echo $material['title'] ?></h3>
            <img class="option-img" src="<?php echo $material['img_src'] ?>" alt="<?php echo $material['title'] . ' image' ?>">
            <input type="radio" name="material" id="material_<?php echo $i ?>">
        </label>
    </li>
<?php endforeach; ?>
</ul>
</section>

</body>
</html>