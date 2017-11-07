<?php

// Our dear leaf.
$leaf = new \Imagick("./assets/images/leaf.jpg");
// The "draw" object in IM.
$caption = new \ImagickDraw();

$caption->setFillColor('white');
$caption->setFontSize(40);
$caption->setFont("Impact");
$caption->annotation(50, 30, "WATERMARK");

$leaf->drawImage($caption);

$leaf->writeImage("./assets/images/modified/leaf_2.jpg");
