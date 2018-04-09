
<?php
$nome=htmlentities($_POST["uname"]);
$pass=htmlentities($_POST["psw"]);
$servername = "localhost";
$username = "tonecas";
$password = "Zendesk1!";
$dbname = "LEITE";
$valida = 0;

































$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM Glowing_Juniper";
$result = mysqli_query($conn, $sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        //echo "id: " . $row["Id"]. " - Name: " . $row["Username"]. " - Password: " . $row["Password"]. "<br>";
        if ($nome == $row["Username"] && $pass == $row["Password"]) {
          $valida=1;
          session_start();
          $_SESSION["user"]=$row["Username"];
        }
    }
} else {
    echo "0 results";
}
if ($valida == 1) {
  echo "Logged in.";
  //echo $_SESSION["user"];
  header('Location: index.html');
}
else {
  echo "Unsucesseful log in.";
}



$conn->close();

 ?>
