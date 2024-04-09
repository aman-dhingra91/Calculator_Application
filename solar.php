<?php
include('include/header.php');
?>
    <main>
        <section>
	<?php
	if(isset($_POST['go']))
	{
$home=$_POST['home'];
$size=$_POST['size'];
$sun=$_POST['sun'];
$cardinal=$_POST['cardinal'];
$heat=$_POST['heat'];
$af=$size*$sun;
		echo "<center><h1>Addition Factors:".$af." </h1></center>";

	}
	?>	

<form method="post" action="solar.php">
<fieldset>
  <legend>Part II - Home Solar Heating Calculator:</legend>
		Home Style: <input type="text" name="home" required/><br><br>
		Home Size : <input type="number" name="size" required/><br><br>
		Sunlight Index: <input type="number" name="sun" required/><br>
		Home Facing Cardinal Direction: <input type="text" name="cardinal" required/><br>
		Solar Heating Type: <input type="text" name="heat" required/><br>
		

		<input type="submit" name="go" value="Go!" />
	</fieldset>
	</form>
		
		
		</section>
    </main>
    
<?php
include('include/footer.php');
?>