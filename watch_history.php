<?php
include 'config.php';

$sql = "SELECT Users.name, Movies.title, WatchHistory.watch_date
        FROM WatchHistory
        JOIN Users ON WatchHistory.user_id = Users.user_id
        JOIN Movies ON WatchHistory.movie_id = Movies.movie_id";

$result = $conn->query($sql);

echo "<h2>Watch History</h2>";

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo $row['name'] . " watched " . $row['title'] . " on " . $row['watch_date'] . "<br>";
    }
} else {
    echo "No watch history found.";
}

$conn->close();
?>