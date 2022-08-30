<?php
$Str="Bangladesh";
echo strlen($Str);

$domain ="www.example.com";
setcookie("UserWishlist","Shopping Ban",$domain);
echo "<pre>";
print_r($_COOKIE);
echo "</pre>";
