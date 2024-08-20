<?php
$strings = ["Hello", "World", "PHP", "Programming"];

for($i = 0; $i < count($strings); $i++){
   $element = $strings[$i];
   $reverseElement = strrev($element);

   $vowels= 0;
    for($str = 0; $str < strlen($element); $str++){
        
        if($element[$str] == "a"||$element[$str] == "A"||$element[$str] == "e"||$element[$str] == "E"||$element[$str] == "i"||$element[$str] == "I"||$element[$str] == "o"||$element[$str] == "O"||$element[$str] == "u"||$element[$str] == "U"){
            $vowels++;
        }
    }

    echo "Original String: {$element}, Vowel Count: {$vowels}, Reversed String: {$reverseElement},<br>" ;
}

?>