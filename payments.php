<?php
include 'config.php';

$sql = "SELECT Users.name, Subscriptions.plan_name, Payments.payment_date
        FROM Payments
        JOIN Users ON Payments.user_id = Users.user_id
        JOIN Subscriptions ON Payments.subscription_id = Subscriptions.subscription_id";

$result = $conn->query($sql);

echo "<h2>Payment Records</h2>";

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo $row['name'] . " paid for the " . $row['plan_name'] . " plan on " . $row['payment_date'] . "<br>";
    }
} else {
    echo "No payment records found.";
}

$conn->close();
?>