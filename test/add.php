<?php

include_once 'db.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $id = $_POST['id'];
    $title = $_POST['title'];
    $author = $_POST['author'];
    $published_year = $_POST['published_year'];

    $sql = "INSERT INTO crud_example (id, title, author, published_year) 
    VALUES ('$id','$title', '$author', '$published_year')";
    if (mysqli_query($conn, $sql)) { 
        header("Location: read.php"); 
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Insert Data</title>
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
            <button type="submit">Add</button>
        </div>
    </form>
</div>
</body>
</html>