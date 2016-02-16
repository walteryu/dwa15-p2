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
      <h1>Raffle Exercise</h1>

      <form action='index.php' method='GET'>
        <!-- Code Reference: https://v4-alpha.getbootstrap.com/components/forms/ -->

        <h3>Enter Contestant Names Below</h3>

        <div class="form-group">
          <label for="contestant1">Name:</label>
          <input type="text" class="form-control" id="contestant1", name='c1'>
        </div>
        <div class="form-group">
          <label for="contestant2">Name:</label>
          <input type="text" class="form-control" id="contestant2", name='c2'>
        </div>
        <div class="form-group">
          <label for="contestant3">Name:</label>
          <input type="text" class="form-control" id="contestant3", name='c3'>
        </div>
        <div class="form-group">
          <label for="contestant4">Name:</label>
          <input type="text" class="form-control" id="contestant4", name='c4'>
        </div>

        <h3>Testing Radio Buttons Below</h3>

        <p><input type='radio' name='boolean' value='yes'>Yes</input>
        <p><input type='radio' name='boolean' value='no'>No</input>

        <p><button type="submit" class="btn btn-primary">Run Raffle!</button>
      </form>

      <h3>Raffle Results</h3>

      <table>
        <?php foreach($contestants as $name => $results) { ?>
          <tr>
            <td><?php echo $name.' = ' ?></td>
            <td><?php echo $results ?></td>
          </tr>
        <?php } ?>
      </table>

    </div> <!-- /text-center -->
  </div> <!-- /container -->
  <br />
</body>
</html>
