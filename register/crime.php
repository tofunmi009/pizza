
  <?php
// Create database connection using config file
include_once("./config/config.php");

// Fetch all complains data from database
$result = mysqli_query($mysqli, "SELECT * FROM crimes ORDER BY id ASC");
?>
  <div class="header">
    
    <h1>POLICE REPORTING APP</h1> 
    <a href="#">Home</a>
    <a href="#">About Us</a>
    <a href="#">Contact</a>
</div> 

  <br><br><br><br><br>
  

  <div class="crime">
  <a href="crimadd.php" id="new">Add New User</a><br/><br/>
<table id="crime" width='80%' border=1>
<tr>
<th>id</th> <th>crime</th> <th>description</th> <th>  </th>
</tr>


<?php





$i=0;
while($crime_data = mysqli_fetch_array($result)) {
    $i++;
    echo "<tr>";
    echo "<td>".$i."</td>";
   
    echo "<td>".$crime_data['crime']."</td>";
    echo "<td>".$crime_data['description']."</td>";
    echo "<td><a href='edit.php?id=$crime_data[id]'>Edit</a> | <a href='delete.php?id=$crime_data[id]'>Delete</a></td></tr>";
}


?>

</table>
</div>


<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Document</title>
    
</head>
<body> 

<?php

include_once("navbar.php");
?>
</div>
</div>

</body>
</html>
