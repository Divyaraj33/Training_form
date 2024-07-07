<?php 
    $str = "this is";
    echo $str;
    $len = strlen($str);
    echo "the length of string is ". $len . ". Thank you ";
    echo "<br>";
    echo "the no of words in string is ". str_word_count($str) . ". Thank you ";
    echo "the length of string is ". strrev($str) . ". Thank you ";
    echo "the search for the string is ". strpos($str, "is") . ". Thank you <br>";
    echo "the replace string is ". str_replace("is","at",$str) . ". Thank you ";

    
?>