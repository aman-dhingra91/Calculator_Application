<?php
include('include/header.php');

define("Db_Server","localhost");
define("Db_User","root");
define("Db_Pass","");
define("Db_Name","calculator");

	//To Create the connection to the database
	$connection=mysqli_connect(Db_Server,Db_User,Db_Pass);
    
	//To seslect the database
	$db_select=mysqli_select_db($connection,Db_Name);
	

?>
    <main>
        <section>
		
		<?php
	if(isset($_POST['go']))
	{
		
		if(isset($_POST['username']) && isset($_POST['pass'])) {
        $u_name = $_POST['username'];
        $u_pass = $_POST['pass'];
        $query = "select * from user where username='$u_name' and pass='$u_pass'";
        $result = mysqli_query($connection, $query);
        if(mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);
            echo "<center><h1>Welcome User</h1></center>";

        } else {
           echo "<center><h1>invalid username or password</h1></center>";
  }
    }
		
	}
	?>
		<form method="post" action="login.php">
<fieldset>
  <legend>My Login Page:</legend>
		Username: <input type="text" name="username" required/><br><br>
		password: <input type="password" name="pass" required/><br><br>
		

		<input type="submit" name="go" value="Login Me!" />
	</fieldset>
	</form>
		</section>
		</main>
    
<?php
include('include/footer.php');
?>