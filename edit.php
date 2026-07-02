<?php 
include 'db.php';

if (isset($_POST['edit'])) {
	$id=$_GET['id'];
	$date_attendante=$_POST['date_attendante'];

	$qry="UPDATE attendante set date_attendante='$date_attendante' where id='$id'";
	$sttr=$conn->query($qry);
	echo "<script>alert('edit complete');
	window.location.href='Stundent_index.php';
	</script>";
}



$id=$_GET['id'];
$select="SELECT * FROM attendante where id='$id'";
$sttr=$conn->query($select);
$num=$sttr->num_rows;
$row=$sttr->fetch_assoc();




 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Update date</title>
</head>
<body>
	<form method="post" accept="">
	<h1>Modify date</h1>
	<label>date-attendante</label>
	<input type="text" name="date_attendante" value="<?=$row['date_attendante']?>">
    <br>
    <button type="submit" name="edit">sumbit</button>
    </form>
</body>
</html>
