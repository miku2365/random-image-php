<?php
$get_u = $_SERVER["QUERY_STRING"];        //获取地址栏url中‘?’之后的内容
$url = substr($get_u,4);                 //取$get_u中获取内容的第五个字符到最后
$img = file_get_contents($url,true);    //获取得到的字符串
header("Content-Type: image/jpeg;");    //告诉浏览器这个页面显示的是一张图片
echo $img;