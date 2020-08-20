<?php 
session_start();
$con=mysqli_connect('localhost','root','','credit') or die("Error");

$q="select * from user ";
$result=mysqli_query($con,$q) or die("Error");
$row_count=mysqli_num_rows($result);
//echo $_SESSION['name'];

?>
<html>
    <head>
        <title>View Users Info</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <h2>User Information</h2>
        <table class="flat-table flat-table-1">
            <thead>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Credit</th>
            </thead>
            <tbody>
                <?php
                    if ($result->num_rows > 0) {
                        // output each row
                        while($row = $result->fetch_assoc()):
                            echo "<tr>";
                            echo "<td>" . $row["id"] . "</td>";
                            echo "<td>" . $row["name"] . "</td>";
                            echo "<td>" . $row["email"] . "</td>";
                            echo "<td>" . $row["credit"] . "</td>";
                            echo "</tr>";
                        
                            endwhile;
                    }

                    else { echo "0 results"; }
                ?>
            </tbody>
        </table>
        <br><br>
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