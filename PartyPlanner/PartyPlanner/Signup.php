<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Welcome to the Party Planner</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
</head>
<body>
    <form method="POST" action="forms/SignUp.php" data-toggle="validator">
        <div class="form-group">
            <label for="FirstName">First Name:</label>
            <input type="text" name="FirstName" class="form-control" placeholder="Enter your First Name" required>
            <label for="LastName">Last Name:</label>
            <input type="text" name="LastName" class="form-control" placeholder="Enter your Last Name" required>
            <label for="email">Email Address:</label>
            <input type="email" name="email" class="form-control" placeholder="Enter your Email Address" required>
            <label for="Password">Password:</label>
            <input type="password" data-minlength="6" class="form-control" name="password" placeholder="Password" required>
            <label for="FirstName">Confirm Password</label>
            <input type="password" class="form-control" id="inputPasswordConfirm" placeholder="Confirm" required>  
            <button type="submit" class="btn btn-default">Create Account</button>
            
        </div>
    </form>
    
</body>
</html>