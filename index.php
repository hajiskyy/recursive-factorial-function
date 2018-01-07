<?php

   echo factorial(5);

   function factorial($num)
   {
      if($num == 1)
      {
         echo $num." = ";
         return 1;
      }
      echo $num." x ";
      return $num * factorial($num - 1);
   }
?>