<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Party</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
</head>
<body>
<div class="form-group">
  <h3>Please make sure you have logged in before you plan a party</h3>
  <form action="forms/planner.php" method="POST">
  <label>Name:</label><br>
  <input type="text" class="form-control" name="name" required><br>
  <label>Party Address: </label><br>
  <textarea class="form-control" rows="4" name="address" required></textarea><br>
  <label>Date: </label><br>
  <input type="date" class="form-control" name="date" required><br>
  <label>Time: (HH:MM:AM/PM)</label><br>
  <input type="time" class="form-control" name="time"required><br>
  <button type="submit" class="btn btn-default" name="submit">Submit</button>
</form>

<?php
if(!isset($_GET['form'])){
  exit();
} else {
  $r = $_GET['form'];
  if($r==="notloggedin"){
      echo"   <h3> You need to be logged in to Plan a Party</h3>
              <a href='Login.php'>Link To Login</a>";
  }
}
?>


</div>
</body>
</html>