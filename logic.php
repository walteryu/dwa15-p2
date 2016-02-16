<?php

  $words = array(
    'brisant',
    'classification',
    'finite',
    'nyx',
    'lucian',
    'heraklion',
    'repaste',
    'liaopeh',
    'sandpapery',
    'unhypnotisable',
    'owens',
    'downrightness',
    'zoometry',
    'undertenancy',
    'uredia',
    'headboard',
    'sleepcoat',
    'perquisite',
    'depolymerized',
    'unsharpened',
    'outrating',
    'unelective',
    'mashona',
    'dentition',
    'judgeable',
    'subscriber',
    'drivingly',
    'anagrammatizing',
    'fluorspar',
    'impetuosity',
    'federation',
    'extraphysical',
    'barrault',
    'unintuitive',
    'unjamming',
    'serge',
    'quoits',
    'eager',
    'ytterbite',
    'congregation',
    'dilaudid',
    'interfoliar',
    'falser',
    'eugenol',
    'klabund',
    'enumerative',
    'reval',
    'superserviceably',
    'unromanticised',
    'triacetyloleandomycin'
  );

  # foreach($_GET as $inputName => $contestantsName):
  #   if($contestantsName != '') {
  #     $coin = rand(0,1);
  #     if($coin == 0 ) {
  #       $results =  'loser';
  #     }
  #     else {
  #       $results = 'winner';
  #     }
  #   }
  #   else {
  #     $contestants[$contestantsName] = 'No Name Entered';
  #   }
  #   $contestants[$contestantsName] = $results;
  # endforeach;

  # Remember server-side validation!

  /*
    Code References:
    PHP array_rand: https://secure.php.net/manual/en/function.array-rand.php
   */

  $phrases = [];

  foreach($_GET as $wordCount):

    $wordInt = intval($wordCount);

    if(
      ($wordInt >= 1 ) && ($wordInt <= 9)
    ) {
      $shuffled_array = array(shuffle($words));
      $phrases = array_slice($shuffled_array, 0, $wordInt);

      /*
        $phrases = array_rand($words, $wordInt);
        echo 'Entire Phrases Array Contents: ';
        echo var_dump($phrases).'<br>';
        echo 'First Member of Phrases Array: ';
        echo var_dump($phrases[0]).'<br>';
        echo 'Entire Words Array Contents: ';
        echo var_dump($words).'<br>';
        echo 'First Member of Words Array: ';
        echo $words[0].'<br>';
      */
    }
    else {
      # $phrases[$wordInt] = 'Please Enter Valid Number!';
      echo 'Error: Please Enter Valid Number!'.'<br>';
      echo 'Convert String Input: ';
      echo $wordInt.'<br>';
      echo 'Verify Integer Class: ';
      echo var_dump($wordInt);
    }
    # $phrases[$wordInt] = $results;
  endforeach;
?>
