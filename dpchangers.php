<?PHP
include 'conn.php';
session_start();
if(!isset($_SESSION['user'])){
   $user = $_SESSION['user'];
      echo "<script>alert('Login with your Account first!..');</script>";
      echo "<script>window.location='index.php';</script>";
   }
?>
<?PHP
include 'conn.php';
  $a = $_SESSION['user'];
  $se = "SELECT * FROM `userdetails` WHERE `sno` = '$a'";
  $qu=mysqli_query($conn, $se);
  $rw=mysqli_fetch_array($qu);
  $us = $rw['gmail'];

$files = $_FILES['dp'];
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


if(isset($_POST['dpchange']))
{
  $querys = "UPDATE `userdetails` SET `userdp` = '$destinationfile' WHERE `gmail` = '$us' ";

  $inserts =  "INSERT INTO `userprofiles` (`userprofile`,`userdps`) VALUES ('$us', '$destinationfile')";

  $sqlpic = mysqli_query($conn, $inserts);
  $sqls = mysqli_query($conn, $querys);
  if($sqls AND $sqlpic)
        {
            echo "<script> window.location.href='profile.php'</script>";
        }
        else
        {
          echo "<script>alert('FILE NOT UPLOADED.');</script>";
          echo "<script> window.location.href='profile.php'</script>";
        }
}

?>