<?php

// Our dear leaf.
$leaf = new Imagick("./assets/images/leaf.jpg");
// The "draw" object in IM.
$caption = new ImagickDraw();

// Set our "draw" objects attrs.
$caption->setFillColor("white");
$caption->setStrokeWidth(1.5);
$caption->setStrokeColor("black");
$caption->setFontSize(40);
$caption->setFont("Impact");
$caption->annotation(50, 80, "WATERMARKING...IS GOOD!");

$leaf->drawImage($caption);

$leaf->writeImage("./assets/images/modified/leaf_2.jpg");
