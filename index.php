<?php

// TASK 1 START()vvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv
/*

function letterCounterCheck($string)
{
    return LetterCounter::CountLettersAsString($string);
}

class LetterCounter
{
    public static function CountLettersAsString($string)
    {
        $returnString = "";
        $charArray = array_count_values(str_split(strtolower(str_replace(" ","",$string))));

        foreach ($charArray as $key => $value) {
            $returnString .= $key . ":" . str_repeat("*", $value) . ", ";
        }
        return rtrim($returnString, ",");
    }
}

echo letterCounterCheck("Letter Counter Check"); 

*/
// TASK 1 END()^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^

//--->

// TASK 2 START()vvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv
/*

function find_total($my_numbers = [1, 2, 3, 4, 5])
{
    $score = 0;
    $my_numbers_count = count($my_numbers);
    for ($i = 0; $i < $my_numbers_count; ++$i) {
        if ($my_numbers[$i] % 2 == 0) {
            //even
            $score += ($my_numbers[$i] == 8 ? 5 : 1);
            continue;
        }
        //odd
        $score += 3;
    }

    return $score;
}
echo find_total();
// echo find_total([15, 25, 35]);
// echo find_total([8, 8]);

*/
// TASK 2 END()^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^

//--->

// TASK 3 START()vvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv
/*

function sum_array($no1 = 10, $no2 = 100)
{
    $array = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];
    $sum = 0;
    $arrayCount = count($array);
    if ($no1 < 0 || $no2 < 0) {
        return -1;
    }
    if ($no1 > $no2) {
        return 0;
    }
    if (max($array) < $no1) {
        return 0;
    }
    for ($i = 0; $i < $arrayCount; ++$i) {
        if ($array[$i] >= $no1 && $array[$i] <= $no2) {
            $sum += $array[$i];
        }
    }
    return $sum;
}

echo sum_array(30,60);

*/
// TASK 3 END()^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^