<?php
       $filename = "pliki.txt";
       if (is_file($filename)){
           $file = fopen($filename,"r");
           $zaw = fread($file, filesize($filename));
           fclose($file);
       }
       //function wpisz(){   
       echo $zaw;
       //};
    ?>