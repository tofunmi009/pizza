<?php
// Create database connection using config file
include_once("config.php");

// Fetch all complains data from database
$result = mysqli_query($mysqli, "SELECT * FROM register ORDER BY id DESC");
?>

<html>
<head>
    <title>Homepemail</title>
    <style>
    #complaint {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 60%;
   }
   #complaint td, #crime th {
  border: 1px solid #ddd;
  padding: 10px;
}
#complaint tr:nth-child(even){background-color: #f2f2f2;}

#complaint tr:hover {background-color: #ddd;}
#complaint th {
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
    margin-bottom:30px;
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

<a href="freecodecamp.php" id="new">Add New User</a><br/><br/>

    <table id="complaint" width='80%' border=1>

    <tr>
    <th>id</th>
           <th>name</th> <th>number</th> <th>email</th> <th>password</th><th></th>
    </tr>
    
    <?php
    $i=0;
    while($complaint_data = mysqli_fetch_array($result)) {
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
