<?php
// Create a blank image
$image = imagecreatetruecolor(400, 100);

// Set colors
$white = imagecolorallocate($image, 255, 255, 160);
$black = imagecolorallocate($image, 0, 0, 0);

// Fill background with white
imagefilledrectangle($image, 0, 0, 400, 100, $white);

// Add text
imagestring($image, 5, 10, 40, 'Your name', $black);

// Output the image
header('Content-Type: image/png');
imagepng($image);
imagedestroy($image);
?>
