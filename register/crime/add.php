
<html>
<head>
	<title>Add crimes</title>
	<style>
    input[type=submit]{
    width:40%;
    color:white;
    background-color:green;
    padding:6px;
    margin:8px;
    border:none;
    border-radius:4px;
    cursor:pointer;
}
input[type=text]{
	width:70%;
	border-radius:4px;
	padding:6px;
	margin:8px;
	border-bottom: 2px solid grey;
	display:inline-block;
	border:1px solid gray;
}
a{
	width:40%;
    color:white;
    background-color: green;
    padding:6px;
    margin:8px;
    border:none;
    border-radius:4px;
    cursor:pointer;	
	text-decoration:none;
}
    </style>
</head>

<body>
	<a href="index.php">Go to Home</a>
	<br/><br/>

	<div>
    <form action="freecodecamp.php">
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
        <input type="password" name="pass" id="pass">
        <br>
        <input type="checkbox" name="box" id="box">
        <br>
        <input type="submit" value="Submit">
        <br>
    </form>
    </div>

	<?php

	// Check If form submitted, insert form data into crimes table.
	if(isset($_POST['Submit'])) {
		          
		$name = $_POST['name'];
		$number = $_POST['number']; 
		$email = $_POST['email'];
    	$pass = $_POST['pass'];

		// include database connection file
		include_once("./config/config.php");

		// Insert user data into table
		$result = mysqli_query($mysqli, "INSERT INTO crimes(id,name,number,email,pass) VALUES('id','$name','$number','$email','$pass')");

		// Show message when user added
		echo "User added successfully.";
	}
	?>
</body>
</html>