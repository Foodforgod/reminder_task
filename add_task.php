<?php
include "db.php";

if(isset($_POST['add_task'])){ 
    $Task = $_POST['Task'];
    $remind_date = $_POST['remind_date'];
    $Desc = $_POST['Desc'];

    $qry="INSERT INTO tasks(Task,remind_date,`Desc`) VALUES ('$Task','$remind_date','$Desc')";
    $conn->query($qry); 
    echo "<script>alert('Task added successfully');
    window.location.href='dashboad.php';
    </script>";
} 




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Task</title>
</head>
<body>
    <h1>Add Task</h1>
    <form method="post" action="">
        <label>Task</label> 
        <br>
        <input type="text" name="Task" />

<br>
         <label>remind_date</label> 
         <br>    
         <input type="date" name="remind_date" />
<br>
        <label>Desc</label> 
        <br>
        <input type="text" name="Desc" />
<br>
        <button type="submit" name="add_task">add task</button>
    </form>
        
    </body>                 



</head>