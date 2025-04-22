<?php
// Create a blank canvas (width, height)
$image = imagecreatetruecolor(200, 200);

// Allocate a color
$white = imagecolorallocate($image, 255, 255, 255);
$black = imagecolorallocate($image, 0, 0, 0);

// Fill background with white
imagefill($image, 0, 0, $white);

// Draw a circle: (image, centerX, centerY, width, height, color)
imageellipse($image, 100, 100, 100, 100, $black);

// Output as PNG
header('Content-Type: image/png');
imagepng($image);
imagedestroy($image);
?>
