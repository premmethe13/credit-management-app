<?php
   session_start();
   $con=mysqli_connect('localhost','root','','credit') or die("Error");
   
   $q="select tr_id , senderName , receiverName , credit from transactions";
   $result=mysqli_query($con,$q) or die("Error");
   $row_count=mysqli_num_rows($result);
?>

<html>
    
<link rel="stylesheet" href="css/style.css">
    <body>
        <h2>View Transactions</h2>
    <table class="flat-table flat-table-1">
		<tr>
			<th>Id</th>
			<th>Sender</th>
			<th>Receiver</th>
			<th>Credits transferred</th>
		</tr>
		<?php
			if ($result->num_rows > 0) {
				// output each row
				while($row = $result->fetch_assoc()):

					
					echo "<tr>";
                    echo "<td>" . $row["tr_id"] . "</td>";
                    echo "<td>" . $row["senderName"] . "</td>";
                    echo "<td>" . $row["receiverName"] . "</td>";
                    echo "<td>" . $row["credit"] . "</td>";
                    echo "</tr>";
				
						endwhile;
			}

 			else { echo "0 results"; }
		?>
     </table>
     
     <div class="css-button" >
                  <p class="css-button-text">Home</p>
                  <div class="css-button-inner">
                  <a href="index.php" >
                  <div class="reset-skew">
                  <p class="css-button-inner-text">Home</p>
                </div></a>
                </div>
                </div>
    </body>
</html>