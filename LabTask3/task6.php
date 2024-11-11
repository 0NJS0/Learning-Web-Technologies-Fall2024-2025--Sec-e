<?php

    $array1=[17,21,25,100,50];

    $length=count($array1);

    $element= 21;
    $flag = 0;

    

    for($i=0;$i<$length;$i++)
    {
        if($array1[$i]== $element)
        {
            $flag=1;
        }
    }

    if($flag==1)
    {
        echo"$element is found in the array";
    }

    else{
        echo"$element cant be fount in the array";
    }   

?>