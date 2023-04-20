
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./bootstrap/bootstrap.css">
    <script src="./bootstrap/jquery.js"></script>
    <script src="./bootstrap/bootstrap.js"></script>
	<style>
      .header{
        background-color: #00b9d1;
        padding:0.2%;
  margin:-22px 0 10px -12px;
	color:white;
  position:fixed;
  margin-bottom:95px;
  position:absolute;
  padding-left:60rem;
  left:0px;
  right:0;
  top:5px;
  
      }
h1.header{
  text-align:center;
}
      
       h1{
           text-align: center;
           margin-top: 30px;
          color: lightslategrey;
          font-family: Verdana, Geneva, Tahoma, sans-serif;
       }
        input[type=text] {
  width: 80%;
  padding: 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 1px solid rgb(204, 196, 196);
  border-radius: 4px;
  border: none;
  border-bottom: 2px solid grey;
  display: inline-block;
 
}
input[type=submit] {
    width:80%;
    background-color: #00b9d1;
    color:white;
    padding: 24px;
    margin: 08px;
    border: none;
  border-radius: 4px;
  cursor: pointer;
}
input[type=submit]:hover {
  background-color: #1b4d1e;
}

    
  
  

    </style>
</head>

<body>
	<div class="header">
		<h1>COMPLAINT APP</h1>
</div>
	
	
	<br/><br/>
	
	<form action="add.php" method="post" name="form1" class= "page">
		<table width="25%" border="0">
	
			<tr>
				<td>Full Name</td>
				<td> <input type="text" name="fname" id="fname" placeholder="Enter Full Name..." required></td>
 
			</tr>
			
			<tr>
				<td>lastname</td>
				<td><input type="text" name="lname" id="lname"placeholder="Enter Lastname..."  required></td>
			</tr>
			<tr>
				<td>age</td>
				<td><input type="text" name="age" id="age"placeholder="Enter Age..." required></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="Submit" value="Submit"></td>
			</tr>
		</table>
	</form>
</div>
<?php

// Check If form submitted, insert form data into complain table.
if(isset($_POST['Submit'])) {
      
  $Full Name = $_POST['fname'];
  
  $lastname = $_POST['lname'];
  
  $age = $_POST['age'];


  // include database connection file
  include_once("./config/config.php");

  // Insert user data into table
  $result = mysqli_query($mysqli, "INSERT INTO register(Full Name,lastname,age) VALUES('$Full Name','$lastname','$age')");

  // Show message when user added
  echo "User added successfully. <a href='index.php'>View record</a>";
}
?>
</body>
</html>