<?php
   //print_r($instagrams);
   
   $string = explode("#",$instagrams[0]->caption->text);
   print_r($string);
   print("Restaurant : ".implode(explode("-",$string[2])," ")." ".$string[1]." - ".$string[0]);
   dd($instagrams[0]);
?>