<?php

// Open the leaf image.
$leaf = imagecreatefromjpeg("./assets/images/leaf.jpg");

// The path to a truetype file.
// @note - this is a very limiting factor of GD, imo!
$ttf = "./assets/fonts/Anonymous_Pro.ttf";

$attribution = "\"Creative Commons A rainy day in the burbs of Ottawa.\"
    \r\nby Jamie McCaffrey is licensed under CC BY 2.0";

// Create our watermark.
$result = imagettftext(
    $leaf,       // Our image resource.
    12,          // Font size.
    (270 + 45),  // Angle.
    50,          // X coordinate.
    30,          // Y coordinate.
    imagecolorallocate($leaf, 255, 255, 255),
                 // ^ Creates white text for this image.
    $ttf,        // Font filepath.
    $attribution // The text.
);

// Save the image.
imagejpeg($leaf, "./assets/images/modified/leaf_1.jpg");
