<?php
session_start();
echo $_SESSION["user"];
if (isset($_SESSION["user"])){
	header('Location: fatima.html');
}
else{


		//echo "Not loged in!<br>";
		//echo $_SESSION["user"];
		header('Location: fatima2.html');
    //header('Location: luis.html');
		//<html>
		//<p>
		//</html>

}

?>
