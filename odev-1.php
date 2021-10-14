<?php


function ucgenciz($param){
    $satir=1;
    while($satir<=$param){
        for ($i=0; $i <$satir ; $i++) { 
            echo "*";
        }
        echo "</br>";
        $satir++;
    }
   
}
ucgenciz(15);

?>