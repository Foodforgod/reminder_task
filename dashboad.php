<?php 
include 'db.php';

if (isset($_GET['action']) && $_GET['action'] == 'delete') {
	$id=$_GET['id'];
	$qry="DELETE FROM attendante where id='$id'";
	$sttr=$conn->query($qry);
	echo "<script>alert('delete complete');
	window.location.href='Stundent_index.php';
	</script>";
}

$select="SELECT * FROM attendante";
$sttr=$conn->query($select);
$num=$sttr->num_rows;

if (isset($_GET['search'])) {
	$select="SELECT * FROM attendante where date(date_attendante)='$_GET[search]'";
    $sttr=$conn->query($select);

}



 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Stundent attendante system</title>
</head>
<body>
	<form method="get" action="">
		<input type="date" name="search">
		<button type="submit" name="btn">search</button>
	</form>
	<a href="add.php">add</a>
	<table>
	<thead>
		<th>Stundent name</th>
		<th>gender</th>
		<th>phone</th>
		<th>date-attendante</th>
	</thead>
	<tbody>
		<?php while($row=$sttr->fetch_assoc()) { ?>
		<tr>
			<td><?=$row['stundent_name']?></td>
			<td><?=$row['gender']?></td>
			<td><?=$row['phone']?></td>
			<td><?=$row['date_attendante']?></td>
			<td>
				<a href="edit.php?id=<?=$row['id']?>">edit</a>
				<a href="Stundent_index.php?action=delete&id=<?=$row['id']?>">delete</a>

			</td>
		</tr>
	<?php } ?>
	</tbody>
	</table>


</body>
</html>
