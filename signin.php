<?PHP
	include 'conn.php';
	session_start();
	
	if(isset($_POST['phonemail']) && isset($_POST['signpassword']))
	{
	
	
	$a=mysqli_real_escape_string($conn,$_POST['phonemail']);
	$b=mysqli_real_escape_string($conn,$_POST['signpassword']);
	
	$sql="SELECT * FROM `userdetails` WHERE `phone` = '$a' OR `gmail` = '$a'";
	

	$query = mysqli_query($conn, $sql);

	while($row = mysqli_fetch_array($query))
	{

	if($row['password']==$b)
	{
			$_SESSION['user']=$row['sno'];
				$online = "1";
				$querys = "UPDATE `userdetails` SET `onlines` = '$online' WHERE `phone` = '$a' OR `gmail` = '$a' ";
				$sqls = mysqli_query($conn, $querys);
				if($sqls)
				{

				$qs = "SELECT * FROM `userdetails` WHERE `phone` = '$a' OR `gmail` = '$a'";
     					 $queryss=mysqli_query($conn, $qs);
     					 $rows=mysqli_fetch_array($queryss);
						 if($rows['phone']==$a or $rows['gmail']==$a)
     				 {
				echo "<script> window.location.href='home.php'</script>";
			}
		}
			else
			{
				echo "<script>alert('Password');</script>";
		echo "<script>window.location='index.php';</script>";
			}
		}

	else
	{
		echo "<script>alert('Password is incorrect.');</script>";
		echo "<script>window.location='index.php';</script>";
	}
	}
}
else
{
	echo "<script>alert('Please Check Your Username and Password');</script>";
		echo "<script>window.location='index.php';</script>";


}

?>

<h1>USERNAME NOT FOUND</h1>
 <a href="index.php">back</a>