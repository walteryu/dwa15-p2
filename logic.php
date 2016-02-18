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

  # var_dump used for debugging purposes.
  # echo '<pre>';
  # echo 'Form Field Input:'.'<br>';
  # var_dump($_POST);
  # echo '</pre>';

  # Set initial values for word count/passphrases.
  $wordInt = 0;
  $passphrases = ['Please Enter Number of Words'];

  foreach($_POST as $userInput):
    if ($userInput == "add_number") {

      # Add number to last member of using array_pop/array_push:
      # https://secure.php.net/manual/en/function.array-pop.php
      # https://secure.php.net/manual/en/function.array-push.php

      $last_phrase = array_pop($passphrases);
      $new_phrase = $last_phrase.$random;
      array_push($passphrases, $new_phrase);
    }
    elseif ($userInput == "add_char") {
      $last_phrase = array_pop($passphrases);
      shuffle($characters);

      # Select first element of chars array.
      $select_char = current($characters);

      # Insert back element after modification.
      $new_phrase = $last_phrase.$select_char;
      array_push($passphrases, $new_phrase);
    }
    elseif ($userInput == "shuffle_words") {
      shuffle($passphrases);
    }
    else {
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
        # Sends flash message if input is not numbers between 1 and 9.
        echo '<div class="alert alert-danger">'.'Please Enter Valid Number!'.'</div>';
      }
    }
  endforeach;
?>
