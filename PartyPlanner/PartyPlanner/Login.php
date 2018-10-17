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
        <form method="POST" action="forms/LoginForm.php">
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <input id="email" type="text" class="form-control" name="email" placeholder="Email" required>
                </div>
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                  <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>
                </div>
                <div>
                    <button class = "btn btn-submit">Login</button>
                </div>
              </form>
              <br>
              <br>
              <br>
              <a href="Signup.php">SignUp</a>
    <?php
      if(!isset($_GET['login'])){
        exit();
      } else {
        if($_GET['login']=="error"){
          echo "<p> Username or Password is wrong";
        }
      }
      ?>


</body>
</html>