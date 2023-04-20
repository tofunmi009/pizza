<?php
// include database connection file
include_once("../config/config.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{
	$id = $_POST['id'];

	$id = $_POST['id'];
	$name = $_POST['name'];
	$number = $_POST['number'];
	$email = $_POST['email'];
	$pass = $_POST['pass'];
	// update user data
	$result = mysqli_query($mysqli, "UPDATE register SET name='$name',number='$number',email='$email',pass='$pass' WHERE id=$id");

	// Redirect to homepage to display updated user in list
	header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];

// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM register WHERE id=$id");

while($crime_data = mysqli_fetch_array($result))
{
	$name = $complain_data['name'];
	$number = $complain_data['number'];
	$email = $complain_data['email'];
	$pass = $complain_data['pass'];
}
?>
<html>
<head>
	<title>Edit User Data</title>
</head>

<body>
	<a href="index.php">Home</a>
	<br/><br/>

	<form name="update_user" method="post" action="edit.php">
		<table border="0">
		<tr>
				<td>name</td>
				<td><input type="text" name="name" ></td>
			</tr>
			<tr>
				<td>number</td>
				<td><input type="text" name="number" ></td>
			</tr>
			<tr>
				<td>email</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td>pass</td>
				<td><input type="text" name="pass"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>