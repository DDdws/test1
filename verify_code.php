<?php
// 加载水印以及要加水印的图像
$stamp = imagecreatefrompng('stamp.png');
$im = imagecreatefromjpeg('photo.jpeg');

// 设置水印图像的外边距，并且获取水印图像的尺寸
$marge_right = 10;
$marge_bottom = 10;
$sx = imagesx($stamp);
$sy = imagesy($stamp);


// 利用图像的宽度和水印的外边距计算位置，并且将水印复制到图像上

imagecopy($im, $stamp, imagesx($im) - $sx - $marge_right, imagesy($im) - $sy - $marge_bottom, 0, 0, imagesx($stamp), imagesy($stamp));

// 输出图像并释放内存
header('Content-type: image/png');
imagepng($im);
imagedestroy($im);
?>