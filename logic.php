<?php

  # Declare random words, numbers and characters below.
  $words = array(
    'brisant', 'classification', 'finite', 'nyx', 'lucian',
    'heraklion', 'repaste', 'liaopeh', 'sandpapery', 'unhypnotisable',
    'owens', 'downrightness', 'zoometry', 'undertenancy', 'uredia',
    'headboard', 'sleepcoat', 'perquisite', 'depolymerized', 'unsharpened',
    'outrating', 'unelective', 'mashona', 'dentition', 'judgeable',
    'subscriber', 'drivingly', 'anagrammatizing', 'fluorspar', 'impetuosity',
    'federation', 'extraphysical', 'barrault', 'unintuitive', 'unjamming',
    'serge', 'quoits', 'eager', 'ytterbite', 'congregation',
    'dilaudid', 'interfoliar', 'falser', 'eugenol', 'klabund',
    'enumerative', 'reval', 'superserviceably', 'unromanticised', 'triacetyloleandomycin'
  );
  $random = rand(0,9);
  $characters = array(
    '~','`','!','@','#','$','%','^','&','*','(',')','_','-','+',
    '=','[',']','{','}','|','\\',':',';','\'','<',',','>','.'
  );

  # echo '<pre>';
  # echo 'Form Field Input:'.'<br>';
  # var_dump($_GET);
  # echo '</pre>';

  # Set initial values for word count/passphrases.
  $wordInt = 0;
  $passphrases = ['Please Enter Number of Words'];

  foreach($_GET as $userInput):

    # Conditional statement for parsing html input:
    # http://stackoverflow.com/questions/20481578/php-check-input-type-for-validation

    switch($userInput['type']) {
    case "text": 
      echo "<input type = 'text' name = '" . $userInput['name'] . "'>";
      break;
    case "number":
      echo "<input type = 'number' name = '" . $userInput['name'] . "'>";
      break;
    }

    $wordInt = intval($userInput);

    if(
      ($wordInt >= 1 ) && ($wordInt <= 9)
    ) {

      # Shuffle words, then slice array:
      # http://www.w3schools.com/php/func_array_shuffle.asp
      # http://www.w3schools.com/php/func_array_slice.asp

      shuffle($words);
      $passphrases = array_slice($words, 0, $wordInt);
    }
    else {
      echo 'Error: Please Enter Valid Number!';
    }

  endforeach;
?>
