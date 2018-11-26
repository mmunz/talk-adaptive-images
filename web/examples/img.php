<?php

$width = 300;
$height = 300;
$delay = 0;

if (isset($_GET['w']) and ctype_digit((string)$_GET['w'])) {
    $width = (int) $_GET['w'];
}
if (isset($_GET['h']) and ctype_digit((string)$_GET['h'])) {
    $height = (int) $_GET['h'];
}
if (isset($_GET['d']) and ctype_digit((string)$_GET['d'])) {
    $delay = (int) $_GET['d'];
    sleep($delay);
}

function getUrl($width, $height) {
    $cacheDir = __DIR__ . '/_temp/';
    $url = '';

    if (!is_dir($cacheDir)) {
        mkdir($cacheDir, 0775, true);
    }
    $cachedFileName = sprintf(
        $cacheDir . '/placeholder-%dx%d.jpg',
        $width,
        $height
    );
    if (file_exists($cachedFileName)) {
        $url = $cachedFileName;
    } else {
        $url = sprintf(
            "https://via.placeholder.com/%dx%d.jpg",
            $width,
            $height
        );
        file_put_contents($cachedFileName, file_get_contents($url));
    }
    return $url;
}

$url = getUrl($width, $height);

$imgInfo = getimagesize($url);

if (stripos($imgInfo['mime'], 'image/') === false) {
    die('Invalid image file');
}

header("Content-type: ".$imgInfo['mime']);
header('Cache-Control: no-cache, no-store, must-revalidate');
header('Pragma: no-cache');
header('Expires: 0');

die(readfile($url));
