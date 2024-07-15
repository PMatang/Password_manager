<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $id = $_GET['id'];

    $sql = "DELETE FROM passwords WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-size: 20px;
    font-family: 'Segoe UI','Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    text-decoration: none;
}

body{
    background-color: black;
    color: white;
    box-flex-group: #d8f1ff;
    display: flex;
    justify-content: center;
    align-items: center;
}
a{
    color: rgb(69, 190, 255);
}
</style>
</head>
<body>
    <a href="index.php">Return to List</a>
</body>
</html>