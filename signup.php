 <?PHP
	include 'conn.php';
	session_start();

	if(isset($_POST["phone"])){

    
  }else{
  	echo "<script>alert('something wrong!..');</script>";
    header('location:register.php');
  }
	
	$a=$_POST['first_name'];
	$b=$_POST['last_name'];
	$c=$_POST['phone'];
	$d=$_POST['gmail'];
	$e=$_POST['dob'];
	$f=$_POST['password'];
	$g=$_POST['gender'];
	
$files = $_FILES['picture'];
$filename = $files['name'];
$fileerror = $files['error'];
$filetmp = $files['tmp_name'];

$fileext = explode('.',$filename);
$filecheck = strtolower(end($fileext));

$fileextstored = array('png','jpg','jpeg');

if(in_array($filecheck, $fileextstored))
{
  $destinationfile = 'samples/'.$filename;
  move_uploaded_file($filetmp, $destinationfile);
}

	$query = "INSERT INTO `userdetails` (`fname`,`lname`, `phone`,`gmail`,`dob`,`password`,`gender`,`userdp`) VALUES ('$a', '$b','$c','$d','$e','$f','$g','$destinationfile')";


	$querypic = "INSERT INTO `userprofiles` (`userprofile`,`userdps`) VALUES ('$d', '$destinationfile')";
	
	$sql = mysqli_query($conn, $query);

	$sqlpic = mysqli_query($conn, $querypic);

	if($sql AND $sqlpic){
		echo "<script>window.location='index.php';</script>";
		
	}else{
		echo "<script>alert('Failed Try again!..');</script>";
		echo "<script>window.location='register.php';</script>";
	}
	
?>