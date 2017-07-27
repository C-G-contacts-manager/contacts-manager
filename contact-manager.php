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
  function parseContacts($filename)
{
    $contacts = array();
    // todo - read file and parse contacts
    $handle = fopen($filename, 'r');
    $contents = trim(fread($handle, filesize($filename)));
    $contactsArray = explode("\n", $contents);
    // $outputArray = [];
    foreach($contactsArray as $key => $contact) {
        $personArray = explode("|", $contact);
        $phoneNumber = substr($personArray[1], 0, 3);
        $phoneNumber .= "-";
        $phoneNumber .= substr($personArray[1], 3, 3);
        $phoneNumber .= "-";
        $phoneNumber .= substr($personArray[1], 6);
        $name = $personArray[0];
        $contacts[$key]['name'] = $name;
        echo "$name | $phoneNumber" . PHP_EOL;
        $contacts[$key]['number'] = $phoneNumber;
    }
    return $contacts;
}
parseContacts('contacts.txt');
  // game picks a random number between 1 and 100
  $input = [];
  // prompts user to guess the number
  echo "\n";
    echo "\n";
      echo "\n";
  fwrite(STDOUT,
  '
  1 View Contacts
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
