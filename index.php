<?php  
include 'db.php';


if (isset($_GET['action']) && $_GET['action'] == 'delete') {
	$id=$_GET['id'];
	$qry="DELETE FROM rs_table where id='$id'";
	$sttr=$conn->query($qry);
	echo"<script>alert('delete complete');
	window.location.href='index.php';
	</script>";
}


$select="SELECT * FROM rs_table";
$sttr=$conn->query($select);
$num=$sttr->num_rows;

if (isset($_GET['search'])) {

	$select="SELECT * FROM rs_table where foodtype like '%".$_GET['f_search']."%'";
    $sttr=$conn->query($select);
}

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>restaurent system</title>
</head>
<body>
	<form method="get"action="">
		<input type="text" name="f_search">
		<button type="submit" name="search">search</button>
	</form>
<a href="add.php">Add Menu</a>
<table>
	<thead>
		<th>foodname</th>
		<th>foodtype</th>
		<th>foodprice</th>
		<th>rating</th>
	</thead>
	<tbody>
		<?php while($row=$sttr->fetch_assoc()) { ?> 
		<tr>
			
			<td><?=$row['foodname']?></td>
			<td><?=$row['foodtype']?></td>
			<td><?=$row['foodprice']?></td>
			<td><?=$row['rating']?></td>
			<td>
				<a href="edit.php?id=<?=$row['id']?>">edit</a>
				<a href="index.php?action=delete&id=<?=$row['id']?>">delete</a>
			</td>
			
		</tr>
		<?php } ?>
	</tbody>
</table>
</body>
</html>
