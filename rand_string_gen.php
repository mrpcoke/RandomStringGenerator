<?php

/*
This PHP random string generator produces a series of random characters that 
can be used, amongst other things, to "salt" a password, thus making it more difficult 
for hackers to decrypt a password. 
Written by Paul E. Coke (c)2024
*/

function randStringGen($num_chars=10){

$string_content = "";
$chars = "abcdefghijklmnopqrstuvwxyz£_?!-0123456789";
$char_array = str_split($chars);

for($i=0; $i < $num_chars; $i++){

    $randItem = array_rand($char_array);
    $string_content .= $chars[$randItem];
}

    return $string_content;
}

/**********   USAGE *********************/
$generate_chars = randStringGen(15);

echo $generate_chars;



?>