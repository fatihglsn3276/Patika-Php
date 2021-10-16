<?php

$planets = ["Mercury", "Venus", "Earth", "Mars", "Jupiter", "Saturn", "Uranus", "Neptune", "", "", NULL];


function sizinFonksiyonunuz($e,$a){
$e=array_filter($e);
$rand=array_rand($e,$a);
$yenidizi=[];
foreach($rand as $x){
$yenidizi[]=$e[$x];

}
return($yenidizi);

}
echo "<pre>";
print_r(sizinFonksiyonunuz($planets, 2));
print_r(sizinFonksiyonunuz($planets, 3));
print_r(sizinFonksiyonunuz($planets, 2));
print_r(sizinFonksiyonunuz($planets, 4));
print_r(sizinFonksiyonunuz($planets, 5));

?>