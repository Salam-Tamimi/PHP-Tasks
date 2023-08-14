<?php

include('db.php');

if(count($_POST) > 0){
    $id = $_POST['id'];
    $title = $_POST['title'];
    $author = $_POST['author'];
    $published_year = $_POST['published_year'];

    $query1 = "UPDATE crud_example SET title = '$title', author = '$author', published_year = '$published_year' WHERE id = '$id'";
    $updateResult = mysqli_query($conn, "");

    if (!$updateResult) {
        echo "Update error: " . mysqli_error($conn);
    }   
    else{
        header("Location: read.php"); 
        exit();
    }
}

$result = mysqli_query($conn, "SELECT * FROM crud_example WHERE id = '" . $_GET['id'] . "' ");
$record = mysqli_fetch_array($result)
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Update</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/nicecss@2.1.0/dist/nice.css">

</head>
<body>
<div class="form-container">
    <form method="post" action="">

        <div class="form-input">
            <label for="title" class="form-label">title</label>
            <input type="hidden" id="id" name="id" value="<?php echo $record["id"]; ?>" required>
            <?php echo $record["id"]; ?>
        </div>
        <div class="form-input">
            <label for="author" class="form-label">Aauthor</label>
            <input type="text" id="author" name="author" value="<?php echo $record["author"]; ?>" required>
        </div>
        <div class="form-input">
            <label for="published_year" class="form-label">published_year</label>
            <input type="number" id="published_year" name="published_year" value="<?php echo $record["published_year"]; ?>" required>
        </div>
        <div class="form-button">
            <button type="submit">Submit</button>
        </div>
    </form>
</div>
</body>
</html>
