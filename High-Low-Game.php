<?php

if (($argc == 3) && is_numeric($argv[1]) && is_numeric($argv[2])) {
    
    $min = $argv[1];

    $max = $argv[2];

    $randomNumber = mt_rand($min,$max);
}else   {

    echo "Please add a min/max value\n";

     exit();
}
//echo "$randomNumber\n";
do  {
    echo "Guess a number between {$min} and {$max}\n";

    $numberGuessed = trim(fgets(STDIN));

    //echo "$numberGuessed\n";

    if (is_numeric($numberGuessed)) {


        if ($numberGuessed < $randomNumber) {

            echo "HIGHER\n";

        } elseif ($numberGuessed > $randomNumber)   {

            echo "LOWER\n";

        } else {

            echo "Good Guess!\n";
        }

    }else  {

        echo "NOT a Number\n";

    }
}while($randomNumber != $numberGuessed);$randomNumber = mt_rand($min,$max);

    echo "Do you want to play Again?\n";


