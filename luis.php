
<?php


$servername = "localhost";
$username = "tonecas";
$password = "Zendesk1!";
$dbname = "LEITE";
$valida = 0;









//header('Location: http://www.google.com');





















if (isset($_POST['uname']) && isset($_POST['psw']) && isset($_POST['psw-repeat']) && isset($_POST['email']) && isset($_POST['idade'])) {


  if ($_POST["psw"] == $_POST["psw-repeat"]){
  if ($_POST["idade"] <= 18 ){

  $user=htmlentities($_POST["uname"]);
  $pass=htmlentities($_POST["psw"]);
  $passcheck=htmlentities($_POST["psw-repeat"]);
  $email=htmlentities($_POST["email"]);
  $age=htmlentities($_POST["idade"]);
  $flag=htmlentities($_POST["flag"]);
  echo $flag;

  $conn = new mysqli($servername, $username, $password, $dbname);

  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
  #echo "yo";
  $sql="INSERT INTO `Glowing_Juniper` (`Id`, `Username`, `Password`, `Email`, `Age`) VALUES (NULL, '".$user."', '".$pass."', '".$email."', '".$age."');";
  #echo $sql;
  $result = mysqli_query($conn,$sql);
  header('Location: index.html');
  }
  else{
    //Idade insuficiente
    sleep (1);


    header('Location: luis2.php?flag=2');

  }
}
  else{
    //As palavras passes nao sao iguais.
    sleep ( 2 );
    header('Location: luis2.php?flag=1');

  }
}

else{
  echo "Variaveis vazias";
}
?>
