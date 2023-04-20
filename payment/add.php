
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./bootstrap/bootstrap.css">
    <script src="./b ootstrap/jquery.js"></script>
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
  $name = $_POST['name'];
  $number = $_POST['number']; 
  $email = $_POST['email'];
  $pass = $_POST['street'];
  $pass = $_POST['apt'];
  $pass = $_POST['city'];
  $pass = $_POST['state'];
  $pass = $_POST['zip'];

  // include database connection file
  include_once("./config/config.php");

  // Insert user data into table
  $result = mysqli_query($mysqli, "INSERT INTO delivery(id,name,number,email,street,apt,city,state,zip) VALUES('id','$name','$number','$email','$street','$apt','$city','$state','$zip')");
  // Show message when user added
  echo "User added successfully. <a href='index.php'>View record</a>";
}
?>
</body>
</html>