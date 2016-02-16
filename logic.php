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

  # echo '<pre>';
  # echo 'Form Field Input:'.'<br>';
  # var_dump($_GET);
  # echo '</pre>';

  foreach($_GET as $wordCount):

    $wordInt = intval($wordCount);

    if(
      ($wordInt >= 1 ) && ($wordInt <= 9)
    ) {

      # Shuffle words, then slice array:
      # http://www.w3schools.com/php/func_array_shuffle.asp
      # http://www.w3schools.com/php/func_array_slice.asp

      shuffle($words);
      # var_dump($words);
      $passphrases = array_slice($words, 0, $wordInt);
    }
    else {
      echo 'Error: Please Enter Valid Number!';
    }

  endforeach;
?>
