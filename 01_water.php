<?php
//图片水印
//画布图片的位置
$dst_im=imagecreatefromjpeg('image/01_jpg');
//水印图片的位置
$src_im=imagecreatefromjpeg('image/suns.jpg');
//截取水印图片的x,y坐标跟宽,高
$src_x=71;
$src_y=85;
$src_w=249;
$src_h=251;
//读取图片的宽跟高
$width=imagesx($dst_im);
$height=imagesy($dst_im);
//水印图在画布上的位置
$dst_x=$width-$src_w;
$dst_y=$height-$src_y;
//截取
imagecopy();
?>

