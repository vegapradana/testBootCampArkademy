<?php
$text = "ARKADEMY";
//conversi text ke array
$converArray = str_split($text);

foreach ($converArray as $row) {
 if(preg_match('/^[aiueoAIUEO]/', $row[0]))
  {
   echo " $row[0] <br >" ;
  }
}


foreach ($converArray as $row) {
 if(preg_match('/^[qwrtypsdfghjklzxcvbnmQWRTYPSDFGHJKLZXCVBNM]/', $row[0]))
  {
   echo " $row[0] <br >" ;
  }
}

?>
