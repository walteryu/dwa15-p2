<!--
  Filename: index.php
  Created By: Walter Yu
  Course: HES, DWA-15, Spring 2016
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

      <form action='index.php' method='GET'>
        <!--
           Code References:
           Number Fields: http://stackoverflow.com/questions/16517718/bootstrap-number-validation
           Form Elements: https://v4-alpha.getbootstrap.com/components/forms/
        -->

        <h3>Generate Password Below</h3>

        <div class="form-group">
          <label for="count">Number of Words:</label>
          <input type="number" class="form-control" id="count" name='count' min='1' max='9'>
        </div>

        <!--
          <h3>Additional Options</h3>
          <p><input type='radio' name='boolean' value='yes'>Yes</input>
          <p><input type='radio' name='boolean' value='no'>No</input>
        -->

        <p><button type="submit" class="btn btn-primary">Generate Password</button>
      </form>

      <h3>Results</h3>

      <table>
        <?php foreach($phrases as $key => $results) { ?>
          <tr>
            <td><?php echo 'Pass Phrase =  ' ?></td>
            <td><?php echo $results ?></td>
            <br>
          </tr>
          <tr>
            <td><?php print_r(array_values($words)) ?></td>
          </tr>
        <?php } ?>
      </table>

    </div> <!-- /text-center -->
  </div> <!-- /container -->
  <br />
</body>
</html>
