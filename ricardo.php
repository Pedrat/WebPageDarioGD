
<?php

$nome=htmlentities($_POST["uname"]);
$pass=htmlentities($_POST["psw"]);

echo $nome;
echo $pass;



$servername = "localhost";
$username = "tonecas";
$password = "Zendesk1!";














$dbname = "LEITE";
$valida = 0;

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
        if ($nome == $row["Nome"] && $pass == $row["Pass"]) {
          $valida=1;
          echo "OLAAAAA caralhao";
        }
    }
} else {
    echo "0 results";
}










$conn->close();

 ?>
