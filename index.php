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
  <br />
  <div class="container">
    <div class="text-left">
      <h1>XKCD Password Generator</h1>
      <h3>DWA-15, Spring 2016</h3>
      <br>

      <form action='index.php' method='GET'>
        <!--
          Form Element Reference:
          http://stackoverflow.com/questions/16517718/bootstrap-number-validation
          https://v4-alpha.getbootstrap.com/components/forms/
        -->

        <div class="form-group">
          <h4>
            <label for="count">Please Enter Number of Words (Between 1-9):</label>
            <input type="number" id="count" name="count" min="1" max="9">
          </h4>
        </div>

        <div class="form-group">
          <h4>
            <label for="count">Add a Number to Last Passphrase?</label>
            <input type="checkbox" id="numbers" name="numbers" value="add_number"> Yes</input>
          </h4>
          <h4>
            <label for="count">Add a Character to Last Passphrase?</label>
            <input type="checkbox" id="characters" name="characters" value="add_char"> Yes</input>
          </h4>
        </div>

        <p><button type="submit" class="btn btn-primary">Generate Password</button>
      </form>

      <table>
        <tr>
          <td>
            <h3>
              Generated Password:
              <?php foreach($passphrases as $key => $results): ?>
                <?php echo $results.' ' ?>
              <?php endforeach ?>
            </h3>
            <h4><?php echo 'Last Word Count: '.$wordInt; ?></h4>
          </td>
        </tr>

      </table>

    </div> <!-- /text-center -->
  </div> <!-- /container -->
  <br />
</body>
</html>
