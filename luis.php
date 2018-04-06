
<?php


$servername = "localhost";
$username = "tonecas";
$password = "Zendesk1!";
$dbname = "LEITE";
$valida = 0;































if (isset($_POST['uname']) && isset($_POST['psw']) && isset($_POST['psw-repeat']) && isset($_POST['email']) && isset($_POST['idade'])) {



  $user=$_POST["uname"];
  $pass=$_POST["psw"];
  $passcheck=$_POST["psw-repeat"];
  $email=$_POST["email"];
  $age=$_POST["idade"];


  $conn = new mysqli($servername, $username, $password, $dbname);

  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
  #echo "yo";
  $sql="INSERT INTO `Glowing_Juniper` (`Id`, `Username`, `Password`, `Email`, `Age`) VALUES (NULL, '".$user."', '".$pass."', '".$email."', '".$age."');";
  #echo $sql;
  $result = mysqli_query($conn,$sql);
}

else{
  echo "Variaveis vazias";
}
?>
