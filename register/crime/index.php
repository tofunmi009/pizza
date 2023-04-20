<?php
// Create database connection using config file
include_once("../config/config.php");

// Fetch all crimes data from database
$result = mysqli_query($mysqli, "SELECT * FROM register ORDER BY id DESC");
?>

<html>
<head>
    <title>Homepage</title>
   <style>
   #crime {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 60%;
   }
   #crime td, #crime th {
  border: 1px solid #ddd;
  padding: 10px;
}
#crime tr:nth-child(even){background-color: #f2f2f2;}

#crime tr:hover {background-color: #ddd;}
#crime th {
  padding-top: 14px;
  padding-bottom: 14px;
  text-align: left;
  background-color: #4CAF50;
  color: white;

}
#new{
    text-decoration:none;
    color:white;
    background-color:green;
    width:40%;
    padding:6px;
    margin:8px;
    border:none;
    border-radius:4px;
    cursor:pointer;
}
a{
    text-decoration:none;
    color: rgb(94, 85, 85);;
   
    width:40%;
    padding:6px;
    margin:8px;
    border:none;
    border-radius:4px;
    cursor:pointer;
}

   </style>
</head>

<body>
<a href="add.php" id="new">Add New User</a><br/><br/>

    <table id="crime">

    <tr>
    <th>id</th>
           <th>name</th> <th>number</th> <th>email</th> <th>password</th>
    </tr>
    <?php
    $i=0;
    while($crime_data = mysqli_fetch_array($result)) {
        $i++;
        echo "<tr>";
        echo "<td>".$i."</td>";
        echo "<td>".$complaint_data['name']."</td>";
        echo "<td>".$complaint_data['number']."</td>";
        echo "<td>".$complaint_data['email']."</td>";
        echo "<td>".$complaint_data['pass']."</td>";
        echo "<td><a href='edit.php?id=$complaint_data[id]'>Edit</a> | <a href='delete.php?id=$complaint_data[id]'>Delete</a></td></tr>";
    }
    ?>
    </table>
</body>
</html>