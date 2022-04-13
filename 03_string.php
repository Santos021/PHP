<?php
    // String in php
    // Return the length of a string we use this function ---> strlen($StringName);
    // Countting the number of words in a strings we use this function ---> str_word_count($StringName);
    // Reverse of a string we use this function ---> strrev($StringName);
    // Search for a word in a string we use this function ---> strpos($StringName,"which word we searched in string");
    // Replace a word in a string we use this function ---> str_replace("which word we removed from string","which word we replaced in string",$StringName);

    
    $str = "This is a string";
    echo $str;
    $lenn = strlen($str);
    echo "<br>The length of the string is ". $lenn . ".<br>Thank you";
    // for countting the number of words in a strings
    echo "<br>The number of words in this string is ". str_word_count($str);
    // Reverse of a string
    echo "<br>The length of the string is ". strrev($str);
    // Search for a word in a string
    echo "<br>The search for a word is in this string is ". strpos($str,"n");
    // Replace a word in a string
    echo "<br>The replaced string is ". str_replace("is","are",$str);


    ?>