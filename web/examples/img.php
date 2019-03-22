<?php

/* Create placeholder images */

$width = 300;
$height = 300;
$delay = 0;

if (isset($_GET['w']) and ctype_digit((string)$_GET['w'])) {
    $width = (int)$_GET['w'];
}

if (isset($_GET['h']) and ctype_digit((string)$_GET['h'])) {
    $height = (int)$_GET['h'];
}

if (isset($_GET['d']) and ctype_digit((string)$_GET['d'])) {
    $delay = (int)$_GET['d'];
    if ($delay > 0) {
        sleep($delay);
    }
}

function createPlaceholderImage($width, $height)
{
    $image = imagecreate($width, $height);
    $text = sprintf("%s x %s", $width, $height);

    $font = __DIR__ . "/../assets/fonts/Arial.ttf";
    $fontsize = $width / 6;
    if ($width > 255) {
        $fontsize = 30;
    }

    $white = imagecolorallocate($image, 255, 255, 255);
    $grey = imagecolorallocate($image, 128, 128, 128);
    $black = imagecolorallocate($image, 0, 0, 0);

    // border and background
    imagefilledrectangle($image, 0, 0, $width, $height, $grey);
    imagefilledrectangle($image, 2, 2, $width - 4, $height - 4, $white);

    // get text box dimensions
    $box = @imageTTFBbox($fontsize, 0, $font, $text);
    $textWidth = abs($box[4] - $box[0]);
    $textHeight = abs($box[5] - $box[1]);

    $x = $width / 2 - $textWidth / 2;
    $y = $height / 2 + $textHeight / 2;

    // add shadow and text
    imagettftext($image, $fontsize, 0, $x + 2, $y + 2, $grey, $font, $text);
    imagettftext($image, $fontsize, 0, $x, $y, $black, $font, $text);
    return $image;
}

header("Content-type: image/png");
header('Cache-Control: no-cache, no-store, must-revalidate');
header('Pragma: no-cache');
header('Expires: 0');
imagepng(createPlaceholderImage($width, $height));