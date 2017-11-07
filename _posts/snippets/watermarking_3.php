<?php

use Imagine\Imagick\Imagine as Image;
use Imagine\Image\Box;
use Imagine\Image\Point;
use Imagine\Image\Palette\RGB;

$imagine = new Image();
$palette = new RGB();

$img   = $imagine->open("./assets/images/leaf.jpg");
$color = $palette->color("#000", 0);

$expectedTextWidth  = 300;
$expectedTextHeight = 80;

$box   = new Box(100, 100);
$point = new Point(
    (($img->getSize()->getWidth() / 2) - $expectedTextWidth),
    ($img->getSize()->getHeight() / 2) - $expectedTextHeight
);

$font = $imagine->font("Impact", 100, $img->palette()->color("#fff", 100));

$img->draw()->text("THIS IS ART", $font, $point);

$img->save("./assets/images/modified/leaf_3.jpg");
