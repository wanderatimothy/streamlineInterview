<?php 


function anagram( $str1,$str2) : bool
{
    error_reporting(E_ERROR | E_PARSE);
      
    $merge =  $str1 . $str2;

    $singleSentence =  str_replace(' ','',strtolower($merge)); 

    $characters = array_unique(str_split($singleSentence));

    $matchCounter = array();

    foreach(str_split($singleSentence) as $c){

        if(in_array($c , $characters)){

            $matchCounter[$c] += 1;
        }else{

            $matchCounter[$c] = 1;
        }
    }


    foreach(array_keys($matchCounter) as $k){

        if(($matchCounter[$k] % 2) === 1){

            return false;
        } 
    }


    return  true ;
 
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

