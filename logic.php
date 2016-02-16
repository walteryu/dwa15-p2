<?php

  echo '<pre>';
  var_dump($_GET);
  echo '</pre>';

  $contestants = [];

  foreach($_GET as $inputName => $contestantsName):
    if($contestantsName != '') {
      $coin = rand(0,1);

      if($coin == 0 ) {
        $results =  'loser';
      }
      else {
        $results = 'winner';
      }
    }
    else {
      $contestants[$contestantsName] = 'No Name Entered';
    }

    $contestants[$contestantsName] = $results;
  endforeach;
?>
