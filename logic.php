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

  /*
    Code References:
    PHP array_rand: https://secure.php.net/manual/en/function.array-rand.php
  */

  $phrases = [];

  echo '<pre>';
  echo 'Form Field Input'.'<br>';
  var_dump($_GET);
  echo '</pre>';

  foreach($_GET as $wordCount):

    $wordInt = intval($wordCount);

    if(
      ($wordInt >= 1 ) && ($wordInt <= 9)
    ) {
      shuffle($words);
      var_dump($words);

      foreach($words as $key => $results):
        echo $results.'<br>';
      endforeach;
    }
    else {
      echo 'Error: Please Enter Valid Number!';
    }
    # $phrases[$wordInt] = $results;
  endforeach;
?>
