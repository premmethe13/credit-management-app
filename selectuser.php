<?php
$con=mysqli_connect('localhost','root','','credit') or die("Error");
$q="select name from user";
$result=mysqli_query($con,$q) or die("Error");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Select User</title>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <form  action="userdetail.php" method="post">
      <h1> Select User from list</h1>
      <table class="flat-table flat-table-1">
        <div class="view">
          <table cellspacing=50px style="position: relative; left: 40%;">
            <tr>
              <td> <h2>Select User:</h2></td>
              <td>
                <?php
                  $con=mysqli_connect('localhost','root','','credit');
                  $q="select name from user";
                  $result=mysqli_query($con,$q);
                ?>
                <select name="name" onchange="this.form.submit()">
                  <option>--Select--</option> 
                  <?php  
                    while($row = $result->fetch_assoc()) { 
                  ?>
                    <option value="<?php echo $row['name']; ?>"> <?php echo $row["name"]; ?></option>
                  <?php }
                  ?>
                </select>
              </td>
           </tr>
          </table>
        </div>
      </table>
    </form> 
    <div class="css-button" >
      <p class="css-button-text">Home</p>
      <div class="css-button-inner">
        <a href="index.php" >
          <div class="reset-skew">
            <p class="css-button-inner-text">Home</p>
          </div>
        </a>
      </div>
    </div>
  </body>
</html>