<?php  
include 'db.php';


if (isset($_POST['add'])) {
	$foodname=$_POST['foodname'];
	$foodtype=$_POST['foodtype'];
	$foodprice=$_POST['foodprice'];
	$rating=$_POST['rating'];
	$qry="INSERT INTO rs_table(foodname,foodtype,foodprice,rating)values('$foodname','$foodtype','$foodprice','$rating')";
	$sttr=$conn->query($qry);
	echo"<script>alert('add complete');
	window.location.href='index.php';
	</script>";
}



?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>restaurent add system</title>
</head>
<body>
	<form method="post" action="">
	<h1>Add</h1>
	<label>foodname</label>
	<input type="text" name="foodname">
	<br>
	<label>foodtype</label>
	<select name="foodtype">
		<option value="food">food</option>
		<option value="drink">drink</option>
	</select>
	<br>
	<label>foodprice</label>
	<input type="number" name="foodprice">
	<br>
	<label>rating</label>
	<select name="rating">
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
	</select>
	<br>
	<button type="submit" name="add">add</button>
</form>
</body>
</html>