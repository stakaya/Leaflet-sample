<?php
$size = 256;
$image=imagecreatetruecolor($size, $size);

// 透過画像を黒いふちどりにします
$back = imagecolorallocatealpha($image, 255, 255, 255, 100);
imagealphablending($image, true);
imagesavealpha($image, true);
imagefill($image, 0, 0, $back);

$border = imagecolorallocate($image, 0, 0, 0);
imagefilledrectangle($image, 0, 0, $size - 1, $size - 1, $back);
imagerectangle($image, 0, 0, $size - 1, $size - 1, $border);

$yellow_x = 100;
$yellow_y = 75;
$red_x    = 120;
$red_y    = 165;
$blue_x   = 187;
$blue_y   = 125;
$radius   = 150;

// alpha 値を指定して色を作成します
$yellow = imagecolorallocatealpha($image, 255, 255, 0, 75);
$red    = imagecolorallocatealpha($image, 255, 0, 0, 75);
$blue   = imagecolorallocatealpha($image, 0, 0, 255, 75);

// 3つの重なる円を描きます
imagefilledellipse($image, $yellow_x, $yellow_y, $radius, $radius, $yellow);
imagefilledellipse($image, $red_x, $red_y, $radius, $radius, $red);
imagefilledellipse($image, $blue_x, $blue_y, $radius, $radius, $blue);


// 正しいヘッダを出力するのを忘れないように!
header('Content-Type: image/png');

// 最後に、結果を出力します
imagepng($image);
imagedestroy($image);
?>
