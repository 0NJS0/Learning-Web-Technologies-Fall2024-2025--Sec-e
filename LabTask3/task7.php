<?php

    for($i=1;$i<4;$i++)
    {
        for($j=1;$j<$i+1;$j++)
        {
            echo"*";
        }
        echo"<br>";
    }

    echo"<br>";

    $length =4;
    for($i=1;$i<4;$i++)
    {
        for($j=1;$j<$length;$j++)
        {
            echo"$j";
        }
        $length--;
        echo"<br>";
    }


    echo"<br>";
    
    $ascii= 65;
    for($i=1;$i<4;$i++)
    {
        for($j=1;$j<$i+1;$j++)
        {
            $alpha=chr($ascii);
            echo"$alpha";
            $ascii++;
        }
        echo"<br>";
    }
   

?>