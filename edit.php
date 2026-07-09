<?php  
include 'db.php';


if (isset($_POST['edit'])) {
	$id=$_GET['id'];
	$foodname=$_POST['foodname'];
	$foodtype=$_POST['foodtype'];
	$foodprice=$_POST['foodprice'];
	$rating=$_POST['rating'];
	$qry="UPDATE rs_table set foodname='$foodname',foodtype='$foodtype',foodprice='$foodprice',rating='$rating' where id='$id'";
	$sttr=$conn->query($qry);
	echo"<script>alert('edit complete');
	window.location.href='index.php';
	</script>";
}

$id=$_GET['id'];
$select="SELECT * FROM rs_table where id='$id'";
$sttr=$conn->query($select);
$num=$sttr->num_rows;
$row=$sttr->fetch_assoc();


 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>restaurent edit system</title>
</head>
<body>
	<form method="post" action="">
	<h1>Edit</h1>
	<label>foodname</label>
	<input type="text" name="foodname" value="<?=$row['foodname']?>">
	<br>
	<label>foodtype</label>
	<select name="foodtype">
		<option value="food">food</option>
		<option value="drink">drink</option>
	</select>
	<br>
	<label>foodprice</label>
	<input type="number" name="foodprice" value="<?=$row['foodprice']?>">
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
	<button type="submit" name="edit">edit</button>
</form>
</body>
</html>
