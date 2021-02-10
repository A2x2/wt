<?php

header ('Content-Type: image/png');
$im = @imagecreatetruecolor(32, 32) or die();

$hex = $_GET['n'];
$unselected = $_GET['unselected'] === 'true';

list($r, $g, $b) = sscanf($hex, "%02x%02x%02x");

if ($unselected) {
    $factor = 0.75;
    $r *= $factor;
    $g *= $factor;
    $b *= $factor;
}

$color = imagecolorallocate($im, $r, $g, $b);
$white = imagecolorallocate($im, 255, 255, 255);

imagefilledrectangle($im, 0, 0, 32, 32, $white);

if ($unselected) imagefilledrectangle($im, 0, 0, 32, 32, $color);
else imagefilledrectangle($im, 4, 4, 27, 27, $color);
imagepng($im);
imagedestroy($im);

?>