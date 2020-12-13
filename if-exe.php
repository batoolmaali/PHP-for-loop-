<?php

// 1
if($year=365){
    echo "no";

}else{
    echo "yes";
}


//2
$weather=18;
if($weather<20){
    echo "winter";
}else{
    echo "summer"
}

//3
$x;
$y;
$z=$x+$y;

if($x==$y){
    echo $z*3;
}

//4
$n=200;
if($n-100<0){
    echo -$n;
}else{
    echo $n*3;
}

//5
$x;
$y;
if($x==30 ||$y==30||$x+$y==30){
    echo "true";
}
//6
$x;
if($x-100||$x-200 <=10){
    echo "true";  
}else{
    echo "false";   
}

//7
$n;
if($n%3==0 || $n%7==0){
    echo "$n";
}

//8
$n;
$x;
$y;
if ($x>$y && $x>$n){
    echo $x;
}
if ($n>$y && $n>$x){
    echo $n;
}
if ($y>$x && $y>$n){
    echo $y;
}

//9
$x;
$y;
if($x==5 ||$y==5||$x+$y==5 ||$x-$y==5){
    echo "true";
}

//10
$x;
$y;
if($x==20 ||$y==50||$x==20 ||$y==20){
    echo "true";
}
