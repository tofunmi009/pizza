<?php
// include database connection file
include_once("./config/config.php");

// Check if form is submitted for user update, then redirect to homepemail after update
if(isset($_POST['update']))
{
	$id = $_POST['id'];
	$name = $_POST['name'];
	$number = $_POST['number']; 
	$email = $_POST['email'];
    $pass = $_POST['street'];
    $pass = $_POST['apt'];
    $pass = $_POST['city'];
    $pass = $_POST['state'];
    $pass = $_POST['zip'];

	// update user data
	$result = mysqli_query($mysqli, "UPDATE delivery SET  name='$name',number='$number',email='$email',street='$street',apt='$apt',city='$city',state='$state',zip='$zip' WHERE id=$id");

	// Redirect to homepemail to display updated user in list
	header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];


// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM cdelivery WHERE id=$id");

while($complain_data = mysqli_fetch_array($result))
{
	
	$name = $complain_data['name'];
	$number = $complain_data['number'];
	$email = $complain_data['email'];
	$street = $complaint_data['street'];
	$apt = $complaint_data['apt'];
	$city = $complaint_data['city'];
	$state = $complaint_data['state'];
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
			Password
        <br>
        <input type="text" name="state" id="state">
        <br>
        <input type="checkbox" name="box" id="box">
        <br>
        <input type="submit" value="Submit">
        <br>
			</tr>
			
			<tr>
				<td><input type="hidden" name="id" value="<?php echo $_GET['id'];?>"></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>  