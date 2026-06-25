<?php
include "db.php";

if(isset($_POST['edit_task'])){ 
    $id = $_GET['id'];
    $Task = $_POST['Task'];
    $remind_date = $_POST['remind_date'];
    $Desc = $_POST['Desc'];

    $qry="UPDATE tasks SET Task='$Task', remind_date='$remind_date', `Desc`='$Desc' WHERE Id=$id";
    $conn->query($qry); 
    echo "<script>alert('Task updated successfully');
    window.location.href='dashboad.php';
    </script>";
} 

$id = $_GET['id'];
$qry="SELECT * FROM tasks WHERE Id=$id";
$sttr = $conn->query($qry);
$row = $sttr->fetch_assoc();



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Task</title>
</head>
<body>
    <h1>Edit Task</h1>
    <form method="post" action="">
        <label>Task</label> 
        <br>
        <input type="text" name="Task" value="<?=$row['Task']?>" />

<br>
         <label>remind_date</label> 
         <br>    
         <input type="date" name="remind_date" value="<?=$row['remind_date']?>" />
<br>
        <label>Desc</label> 
        <br>
        <input type="text" name="Desc" value="<?=$row['Desc']?>" />
<br>
        <button type="submit" name="edit_task">edit task</button>
    </form>
        
    </body>                 



</head>