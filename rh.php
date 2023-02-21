<?php
    $a = 5;
    
   
    for ($i = 1; $i <= $a; $i++) {
       
        for ($j = $a; $j > $i; $j--) {
            echo "&nbsp;&nbsp;";
        }
       
        for ($k = 0; $k < $i * 2 - 1; $k++) {
            echo "*";
        }
        echo "<br>";
    }
   
    for ($i = 1; $i <= $a - 1; $i++) {
        
        for ($j = 0; $j < $i; $j++) {
            echo "&nbsp;&nbsp;";
        }
        
        for ($k = ($a - $i) * 2 - 1; $k > 0; $k--) {
            echo "*";
        }
        echo "<br>";
    }
?>