<?php

// print
// array
//
// serach a Files



// 1 View Contacts
// 2 Add Contacts
// 3 Search Contact by name
// 4 Delete Contact
// 5 Exit
//
// Please enter a number to select an action:


do {
  // game picks a random number between 1 and 100
  $input = [];
  // prompts user to guess the number
  fwrite(STDOUT,
  '1 View Contacts
  2 Add Contacts
  3 Search Contact by name
  4 Delete Contact
  5 Exit

  Please enter a number to select an action:');
  // Get the input from user
  $option = fgets(STDIN);
  // if user's guess is less than the number, it outputs "HIGHER"
  // foreach(input){}

    if ($option = $input){
    echo "Selected option 1";
    fwrite(STDOUT, 'Guess again');
// if user's guess is more than the number, it outputs "LOWER"
    } else if ($option > $randomNumber){
    echo "LOWER!";
    fwrite(STDOUT, 'Guess again');
    }
}
while ($option != $randomNumber);
// if a user guesses the number, the game should declare "GOOD GUESS!"
if ($option == $randomNumber){
    echo "GOOD GUESS!";
}
