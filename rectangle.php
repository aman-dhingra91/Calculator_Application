<?php
include('include/header.php');
?>
    <main>
        <section>
<?php
//$_GET[]; - method=get in form 
//$_POST[]; - method=post in form
//$_REQUEST[];- can be used post or get
if(isset($_POST['go']))
{
$w=$_POST['width'];
$h=$_POST['height'];
$d=$_POST['depth'];
//echo $w."&nbsp;&nbsp;".$h."&nbsp;&nbsp;".$d;
//$w=$_GET['width'];
//$h=$_GET['height'];
//$d=$_GET['depth'];
$volume=$w*$h*$d;
echo "<center><h1>Volume of Rectangular Cube is:".$volume."</h1></center>";
}
?>


<form method="post" action="rectangle.php">
<fieldset>
  <legend>Part I - Rectangular Cube Volume Calculator:</legend>
		Width: <input type="number" name="width" required/><br><br>
		Height: <input type="number" name="height" required/><br><br>
		Depth: <input type="number" name="depth" required/><br>
		<input type="submit" name="go" value="Go!" />
	</fieldset>
	</form>
	
	</section>
    </main>
    
<?php
include('include/footer.php');
?>