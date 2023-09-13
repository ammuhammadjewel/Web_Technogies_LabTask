<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <center style="display: flex;">
    <fieldset style="width: 100px; text-align: center">
      <legend>Security Officer</legend>
      <form method="post" action="security_Officer.php">
        <h1>Security Officer</h1>
        <hr>
        <input type="submit" name="dash" value="Dashboard">
        <hr>
        <input type="submit" name="f1" value="Feature 1">
        <hr>
        <input type="submit" name="f2" value="Feature 2">
        <hr>
        <input type="submit" name="f3" value="Feature 3">
        <hr>
        <input type="submit" name="f4" value="Feature 4">
        <hr>
        <input type="submit" name="f5" value="Feature 5">
        <hr>
      </form>
    </fieldset>

    <fieldset style="width: 100%;">
      <legend>Information</legend>
      <?php
        if(isset($_POST['dash'])) {
          // Display Dashboard information
          echo "<h2>Dashboard Information</h2>";
          // Generate dynamic content for the Dashboard here
          if($_POST['dash'] === 'Dashboard') {
            echo "Content for the Dashboard";
          }
        } elseif(isset($_POST['f1'])) {
          // Display Feature 1 information
          echo "<h2>Feature 1 Information</h2>";
          // Generate dynamic content for Feature 1 here
          if($_POST['f1'] === 'Feature 1') {
            echo "Content for Feature 1";
          }
        } elseif(isset($_POST['f2'])) {
          // Display Feature 2 information
          echo "<h2>Feature 2 Information</h2>";
          // Generate dynamic content for Feature 2 here
          if($_POST['f2'] === 'Feature 2') {
            echo "Content for Feature 2";
          }
        } elseif(isset($_POST['f3'])) {
          // Display Feature 3 information
          echo "<h2>Feature 3 Information</h2>";
          // Generate dynamic content for Feature 3 here
          if($_POST['f3'] === 'Feature 3') {
            echo "Content for Feature 3";
          }
        } elseif(isset($_POST['f4'])) {
          // Display Feature 4 information
          echo "<h2>Feature 4 Information</h2>";
          // Generate dynamic content for Feature 4 here
          if($_POST['f4'] === 'Feature 4') {
            echo "Content for Feature 4";
          }
        } elseif(isset($_POST['f5'])) {
          // Display Feature 5 information
          echo "<h2>Feature 5 Information</h2>";
          // Generate dynamic content for Feature 5 here
          if($_POST['f5'] === 'Feature 5') {
            echo "Content for Feature 5";
          }
        }
      ?>
    </fieldset>

    <form>
      <input type="submit" name="login" value="LogOut">
    </form>
  </center>
</body>
</html>
