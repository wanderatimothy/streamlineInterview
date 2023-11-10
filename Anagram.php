<?php 


function anagram(string $str1, string $str2) : bool
{
  
    $merge =  $str1 . $str2;

    if(strlen($merge) === 0){
        return true;
    }

    $singleSentence =  str_replace(' ','',strtolower($merge)); 

    $matchCounter = [];

    foreach( explode('',$singleSentence) as $c){

        $keys = array_keys($matchCounter);

        if(in_array($c ,$keys)){

            $matchCounter[$c] += 1;
        }
        else{
            $matchCounter[$c] = 1;
        }

    }

    $values = array_values($matchCounter);

    $total = 0;

    for($i=0;$i < 0; $i++ ){

        $total += $values[$i];
    }
   
    return ($total%2) === 0 ;
 
}




// test 


$string1 = 'listen';

$string2 = 'silent';

echo "Testing that string 1 : $str1  and string 2 : $string2  are anagarams <br/> <br/> ";


if(anagram($string1 , $string2)) {

echo "True";

}else{

    echo "False";
}

