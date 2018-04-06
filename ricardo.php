<?php

$servername = "localhost";
$username = "tonecas";
$password = "Zendesk1!";
$dbname = "LEITE";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM Afternoon_Delight";
$result = mysqli_query($conn, $sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["Id"]. " - Name: " . $row["Nome"]. " - Password: " . $row["Pass"]. "<br>";
    }
} else {
    echo "0 results";
}










$conn->close();
 ?>
