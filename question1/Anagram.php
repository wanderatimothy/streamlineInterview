<?php 


function anagram( $str1,$str2) : bool
{
  
    $merge =  $str1 . $str2;


    $singleSentence =  str_replace(' ','',strtolower($merge)); 

    return (strlen($singleSentence)%2) === 0 ;
 
}




// test 


$string1 = 'listen';

$string2 = 'silent';

echo "Testing that string 1 : $string1  and string 2 : $string2  are anagrams <br/> <br/> ";


if(anagram($string1 , $string2)) {

echo "True";

}else{

    echo "False";
}

