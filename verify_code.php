<?php
// ����ˮӡ�Լ�Ҫ��ˮӡ��ͼ��
$stamp = imagecreatefrompng('stamp.png');
$im = imagecreatefromjpeg('photo.jpeg');

// ����ˮӡͼ�����߾࣬���һ�ȡˮӡͼ��ĳߴ�
$marge_right = 10;
$marge_bottom = 10;
$sx = imagesx($stamp);
$sy = imagesy($stamp);


// ����ͼ��Ŀ�Ⱥ�ˮӡ����߾����λ�ã����ҽ�ˮӡ���Ƶ�ͼ����

imagecopy($im, $stamp, imagesx($im) - $sx - $marge_right, imagesy($im) - $sy - $marge_bottom, 0, 0, imagesx($stamp), imagesy($stamp));

// ���ͼ���ͷ��ڴ�
header('Content-type: image/png');
imagepng($im);
imagedestroy($im);
?>