<?php 
include 'db.php';

if (isset($_POST['add'])) {
    $stundent_name=$_POST['stundent_name'];
    $gender=$_POST['gender'];
    $phone=$_POST['phone'];


	$qry="INSERT INTO attendante(stundent_name,gender,phone)values('$stundent_name','$gender','$phone')";
	$sttr=$conn->query($qry);
	echo "<script>alert('add complete');
	window.location.href='Stundent_index.php';
	</script>";
}


 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Add new stundent</title>
</head>
<body>
	<form method="post" action="">
	<h1>Add stundent</h1>
	<label>stundent name</label>
	<input type="text" name="stundent_name">
	<br>
	<label>gender</label>
	<select name='gender'>
		<option value="male">male</option>
		<option value="female">female</option>
	</select>
	<br>
	<label>phone</label>
	<input type="number" name="phone">
	<br>
	<button type="submit" name="add">sumbit</button>
    </form>
</body>
</html>
