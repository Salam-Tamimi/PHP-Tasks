<?php
include('db.php');
$result = mysqli_query($conn, "SELECT * FROM crud_example");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>read</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/nicecss@2.1.0/dist/nice.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

<?php

if( mysqli_num_rows($result) > 0){

?>  
    <br>
    <center>
        <a href="add.php"><button type="button" class="btn btn-secondary m-1">Add</button></a>
    </center>
    <br>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Author</th>
                <th scope="col">Published_year</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
<?php
$i = 0;
while($record = mysqli_fetch_array($result)){
?>
        <tr>
            <th><?php echo $record["id"]; ?></th>                                
            <td><?php echo $record["title"]; ?></td>
            <td><?php echo $record["author"]; ?></td>                                
            <td><?php echo $record["published_year"]; ?></td>
            <td>
                <a href="update.php?id=<?php echo $record["id"]; ?>"><button type="button" class="btn btn-outline-success m-1">Update</button></a>
                <a href="delete.php?id=<?php echo $record["id"]; ?>"><button type="button" class="btn btn-outline-danger m-1">Delete</button></a>
            </td>
        </tr>
<?php
$i++;
}
?>
    </table>

<?php
} else{
    echo "<h1>No Record here!</h1><br>";
}
?>

</body>
</html>
