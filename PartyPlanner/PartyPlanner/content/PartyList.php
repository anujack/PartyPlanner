<?php
  include_once "includes/db.php";
  $query = "SELECT * FROM parties;";
  $result = mysqli_query($conn,$query);
  $stage = "";
  

?>
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
        <table class="table">
                <thead>
                  <tr>
                    <th>Party Name</th>
                    <th>Address</th>
                    <th>Date & Time</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  include_once "includes/functions.php";
                  if(mysqli_num_rows($result)>0){
                    while($row=mysqli_fetch_assoc($result)){
                      $n = $row['name'];
                      $a = $row['address'];
                      $d = $row['date'];
                      $t = $row['time'];
                      if(time_test($row)){
                        $stage = "success";
                      } else {
                        $stage = "danger";
                      }                     
                      echo "<tr class = '$stage'><td>$n</td><td>$a</td><td>$d,$t<td></tr>";
                    }
                  }
                  
                  ?>                

                </tbody>
              </table>
            </div>
            
            </body>
            </html>