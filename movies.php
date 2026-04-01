<?php
include 'config.php';

$result = $conn->query("SELECT * FROM Movies");

echo "<h2>Movie List</h2>";

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo $row['title'] . " - " . $row['genre'] . "<br>";
    }
} else {
    echo "No movies found.";
}

$conn->close();
?>