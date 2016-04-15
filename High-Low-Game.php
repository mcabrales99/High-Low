<?php


$randomNumber = mt_rand(1,100);

//echo "$randomNumber\n";
do  {
echo "Guess a number between 1 and 100\n";

$numberGuessed = trim(fgets(STDIN));

//echo "$numberGuessed\n";

if ($numberGuessed < $randomNumber) {

    echo "HIGHER\n";

} elseif ($numberGuessed > $randomNumber)   {

    echo "LOWER\n";

} else {

    echo "Good Guess!";
    
}
}while($randomNumber != $numberGuessed);
