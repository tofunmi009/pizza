<?php
	// Check If form submitted, insert form data into complain table.
	if(isset($_POST['Submit'])) {
		          
		$name = $_POST['name'];
		$number = $_POST['number']; 
		$email = $_POST['email'];
    $pass = $_POST['street'];
    $pass = $_POST['apt'];
    $pass = $_POST['city'];
    $pass = $_POST['state'];
    $pass = $_POST['zip'];

		// include database connection file
		include_once("config.php");

		// Insert user data into table
		$result = mysqli_query($mysqli, "INSERT INTO delivery(id,name,number,email,street,apt,city,state,zip) VALUES('id','$name','$number','$email','$street','$apt','$city','$state','$zip')");

		// Show messemail when user added
		echo "User added successfully.";
	}
?>


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
  body{
           background:url(wall.jpg)
        }
        input[type=text],#box ,#pass{
  width: 80%;
  padding: 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 1px solid rgb(204, 196, 196);
  border-radius: 4px;
  border: none;
  border: 1px solid rgba(128, 128, 128, 0.342);
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
div{
    background-color: white;
  width: 500px;
  border:1px solid  rgba(128, 128, 128, 0.486);
  padding: 50px;
  margin: 220px;
  -webkit-box-align: center;

}

    
    </style>
  </head>
<body>
<div>
    <form action="freecodecamp.php" method="POST" name="form1">
        Full Name
        <br>
        <input type="text" name="name" id="name">
        <br>
        Mobile Number
        <br>
        <input type="text" name="phone" id="phone">
        <br>
        Email Address
        <br>
        <input type="text" name="email" id="email">
        <br>
        Password
        <br>
        <input type="text" name="state" id="state">
        <br>
        <input type="checkbox" name="box" id="box">
        <br>
        <input type="submit" value="Submit">
        <br>
    </form>
    </div>
</body>
</html>