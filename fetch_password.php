<?php
include 'config.php';

$sql = "SELECT id, website, username, password FROM passwords";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<p>Website: " . $row["website"]. " </br> Username: " . $row["username"]. " </br> Password: " . $row["password"]. " <a href='delete_password.php?id=" . $row["id"]. "'>Delete</a></p>";
    }
} else {
    echo "0 results";
}
$conn->close();
