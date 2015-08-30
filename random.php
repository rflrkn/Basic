<?php

$random = array (
    'img/header01.jpg',
    'img/header02.jpg',
    'img/header03.jpg',
    'img/header04.jpg',
    'img/header05.jpg',
    'img/header06.jpg',
    'img/header07.jpg',
    'img/header08.jpg',
    'img/header09.jpg',
);

$count = count($random) -1;

$number = rand(0, $count);

echo $random[$number]

?>
