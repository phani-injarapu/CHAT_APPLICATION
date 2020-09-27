<?PHP
	include 'conn.php';
	session_start();

	if (isset($_SESSION['user'])) {

		$a=$_SESSION['user'];
		$online = "0";
		$querys = "UPDATE `userdetails` SET `onlines` = '$online' WHERE `sno` = '$a'";
		$sqls = mysqli_query($conn, $querys);
	if($sqls)
		{
		session_destroy();
		unset($_SESSION['sno']);
		echo "<script>alert('Do You Want To LogOut');</script>";
		echo "<script>window.location='index.php';</script>";
	}
	else
	{
		echo "<script>alert('LogOut not working');</script>";
		echo "<script>window.location='home.php';</script>";
	}

}
	else {
		header('location:home.php');
	}


?>
