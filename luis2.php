<HTML>

<HEAD>
		<style type = "text/css">
			h1{
			color: Navy;
			text-align:CENTER;
			}


			.row {
						  display: -ms-flexbox; /* IE10 */
						  display: flex;
						  -ms-flex-wrap: wrap; /* IE10 */
						  flex-wrap: wrap;
						  margin: 0 -16px;
						}

						.col-25 {
						  -ms-flex: 25%; /* IE10 */
						  flex: 25%;
						}

						.col-50 {
						  -ms-flex: 50%; /* IE10 */
						  flex: 50%;
						}

						.col-75 {
						  -ms-flex: 75%; /* IE10 */
						  flex: 75%;
						}

						.col-25,
						.col-50,
						.col-75 {
						  padding: 0 16px;
						}

						.container {
						  background-color: #f2f2f2;
						  padding: 5px 20px 15px 20px;
						  border: 1px solid lightgrey;
						  border-radius: 3px;
						}

						input[type=text] {
						  width: 100%;
						  margin-bottom: 20px;
						  padding: 12px;
						  border: 1px solid #ccc;
						  border-radius: 3px;
						}

						label {
						  margin-bottom: 10px;
						  display: block;
						}

						.icon-container {
						  margin-bottom: 20px;
						  padding: 7px 0;
						  font-size: 24px;
						}

						.btn {
						  background-color: #4CAF50;
						  color: white;
						  padding: 12px;
						  margin: 10px 0;
						  border: none;
						  width: 100%;
						  border-radius: 3px;
						  cursor: pointer;
						  font-size: 17px;
						}

						.btn:hover {
						  background-color: #45a049;
						}

						span.price {
						  float: right;
						  color: grey;
						}

						/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (and change the direction - make the "cart" column go on top) */
						@media (max-width: 800px) {
						  .row {
						    flex-direction: column-reverse;
						  }
						  .col-25 {
						    margin-bottom: 20px;
						  }
}
		</style>

<TITLE>DiOliveira Profutos Recreativos</TITLE>

</HEAD>
<?$flag=$_GET["flag"];?>
<BODY BGCOLOR="FFFFFF">


<div class="row">
  <div class="col-75">
    <div class="container">



<form action="luis.php" method="post" style="border:1px solid #ccc" >

  <div class="container">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
		<label for="username"><b>Username</b></label>
    <input type="text" placeholder="Insira Username" name="uname" required>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Insira Email" name="email" required>
    <?php
    $flag=$_GET["flag"];
    if ($flag == 2){
      echo "<strong>Underage.</strong>";
    } ?>
    <label for="idade"><b>Idade</b></label>
    <input type="number" placeholder="Insira idade" name="idade" required>
		<p>
    <?php
    $flag=$_GET["flag"];
    if ($flag == 1){
      echo "<strong>Passwords don't match.</strong>";
    } ?>
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" required>

    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>

    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

    <div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
      <button type="submit" class="signupbtn">Sign Up</button>
    </div>
  </div>
</form>
    </div>
  </div>



</BODY>

</HTML>
