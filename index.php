<!--
  Filename: index.php
  Created By: Walter Yu
  Course: HES DWA-15, Spring 2016
  Description: P2 - XKCD Password Generator
-->

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>XKCD Password Generator</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">
  <?php require('logic.php') ?>
</head>

<body>
  <div class="container">
    <div class="text-center">
      <h3>XKCD Password Generator</h3>
      <h5>DWA-15, Spring 2016</h5>

      <table class="center-table">
        <tr>
          <td>
            <!-- Outputs last word count used to generate password.
              <h5>
                Generated Password
                <?php echo '(Last Word Count: '.$wordInt.'):'; ?>
              </h5>
            -->
            <h3>
              <?php foreach($passphrases as $key => $results): ?>
                <?php echo $results.' ' ?>
              <?php endforeach ?>
            </h3>
          </td>
        </tr>
      </table>
      </br>

      <form action='index.php' method='GET'>
        <!--
          Form element references listed below, in addition to video lectures.
          http://stackoverflow.com/questions/16517718/bootstrap-number-validation
          https://v4-alpha.getbootstrap.com/components/forms/
        -->

        <div class="form-group">
          <p>
            <label for="count">Please Enter Number of Words (Between 1-9):</label>
            <input type="number" id="count" name="count" min="1" max="9"></input>
          </p>
          <p>
            <label for="options">Add a Number to Last Passphrase?</label>
            <input type="checkbox" id="numbers" name="numbers" value="add_number"> Yes</input>
          </p>
          <p>
            <label for="options">Add a Character to Last Passphrase?</label>
            <input type="checkbox" id="characters" name="characters" value="add_char"> Yes</input>
          </p>
          <p>
            <label for="options">Shuffle Passphrases Again After Selection?</label>
            <input type="checkbox" id="shuffle" name="shuffle" value="shuffle_words"> Yes</input>
          </p>

          <p>
            <button type="submit" class="btn btn-primary">Generate Password</button>
          </p>
        </div>
      </form>

      <p>
        <!-- Link and image used from P2 Example: http://p2.dwa15.com/ -->
        <a href='http://xkcd.com/936/'>XKCD Comic - Password Strength</a><br>
        <img src='images/password_strength.png' width="370" height="300">
      </p>

    </div> <!-- /text-center -->
  </div> <!-- /container -->
  <br />
</body>
</html>
