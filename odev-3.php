<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="GET">
        <input type="text" name="sayi">
        <input type="submit" value="Submit">

    </form>




</body>
</html>


<?php

if(isset($_GET['sayi'])){
    $sayi=$_GET['sayi'];
    if($sayi%3==0){
        echo "girilen sayı 3 e tam olarak bölünüyor";
    }else{
        while($sayi%3!=0){
            $sayi++;
        }
        echo "Girdiğiniz sayı 3'e bölünemez. Bölünebilecek ilk sayı ".$sayi."'dır.";
    }
}
?>