<?php
include "db.php";

if (isset($_GET['action']) && $_GET['action'] == 'delete'){ 
 $id = $_GET['id'];
 $qry="DELETE FROM tasks WHERE Id=$id"; 
 $conn->query($qry); 
 echo"<script>alert('Task deleted successfully');
    window.location.href='dashboad.php';
    </script>";

}

 $select= "SELECT * FROM `tasks`";
 $sttr=$conn->query($select);
 $num=$sttr->num_rows; 

 if(isset($_GET['search_box'])){ 
 $select= "SELECT * FROM `tasks` WHERE Task like '%".$_GET['search_box']."%'";
 $sttr=$conn->query($select);
 }
 



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title> 
</head>
<body>
<form method=get action="">
<input type=text name="search_box" /> 
<button type=submit name="search">search</button> 
</form>
<br>
<a href="add_task.php">add task</a>
<head>
    <body>

    
<table> 
    <thead> 
        <th>Id</th> 
        <th>Task</th>
        <th>remind_date</th>    
        <th>Desc</th> 
    </thead> 
    <tbody>
        <?php while($row=$sttr->fetch_assoc()){ ?>
            <tr> 
            <td><?=$row['Id']?></td>
            <td><?=$row['Task']?></td> 
            <td><?=$row['remind_date']?></td>
            <td><?=$row['Desc']?></td>
            <td>
               <a href="edit.php?id=<?=$row['Id']?>">edit</a>
               <a href="dashboad.php?action=delete&id=<?=$row['Id']?>">delete</a>
            </td>
     </tr>
      <?php } ?> 
    </tbody> 
    
                   
                
          
</table>  

</td> 

</body>

</head>

</html>