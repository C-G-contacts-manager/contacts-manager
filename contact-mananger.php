<?php

// print
// array
//
// serach a Files



do {
  // game picks a random number between 1 and 100
  $randomNumber =rand(1,100);
  // prompts user to guess the number
  fwrite(STDOUT, 'Guess a number between 1 and 100 ');
  // Get the input from user
  $playerAnswer = fgets(STDIN);
  // if user's guess is less than the number, it outputs "HIGHER"
  // foreach(input){}

    if ($playerAnswer < $randomNumber){
    echo "HIGHER!";
    fwrite(STDOUT, 'Guess again');
// if user's guess is more than the number, it outputs "LOWER"
    } else if ($playerAnswer > $randomNumber){
    echo "LOWER!";
    fwrite(STDOUT, 'Guess again');
    }
}







 ?>
