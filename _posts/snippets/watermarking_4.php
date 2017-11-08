<?php

use Intervention\Image\ImageManagerStatic as Image;

// If we want ImageMagick, instead.
Image::configure(["driver" => "imagick"]);

Image::make("./assets/images/leaf.jpg")
    ->text("watermarking... but terse~~", 100, 100, function($f) {
        $f->file("./assets/fonts/Anonymous_Pro.ttf");
        $f->size(29);
        $f->color("#fff");
        $f->angle(-30);
    })
    ->save("./assets/images/modified/leaf_4.jpg");
