<?php

     $amount = 200;
     $tax = 0.15;

     $vatamount = $amount * $tax;
     $totalamount= $amount + $vatamount;


     echo " Amount of Tax : $vatamount <br>";
     echo " Total Amount : $totalamount"

?>