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

  $school=$_POST['school'];
  $college=$_POST['college'];
  $address=$_POST['address'];
  $city=$_POST['city'];
  $hobbies=$_POST['hobbies'];
  $currentstatus=$_POST['currentstatus'];
  $relationship=$_POST['relationship'];

if(isset($_POST['editprofiles']))
{
      
           $schoolupdate = "UPDATE `userdetails` SET `school` = '$school' WHERE `gmail` = '$us' ";
           $schoolconn = mysqli_query($conn, $schoolupdate);
           $schoolsql = mysqli_query($conn, $schoolconn);
      
        
           $collegeupdate = "UPDATE `userdetails` SET `college` = '$college' WHERE `gmail` = '$us' ";
           $collegeconn = mysqli_query($conn, $collegeupdate);
           $collegesql = mysqli_query($conn, $collegeconn);
         

     
           $addressupdate = "UPDATE `userdetails` SET `address` = '$address' WHERE `gmail` = '$us' ";
           $addressconn = mysqli_query($conn, $addressupdate);
           $addresssql = mysqli_query($conn, $addressconn);
         

      
           $cityupdate = "UPDATE `userdetails` SET `city` = '$city' WHERE `gmail` = '$us' ";
           $cityconn = mysqli_query($conn, $cityupdate);
           $citysql = mysqli_query($conn, $cityconn);
         
      
           $hobbiesupdate = "UPDATE `userdetails` SET `hobbies` = '$hobbies' WHERE `gmail` = '$us' ";
           $hobbiesconn = mysqli_query($conn, $hobbiesupdate);
           $hobbiessql = mysqli_query($conn, $hobbiesconn);
         

      
           $currentstatusupdate = "UPDATE `userdetails` SET `currentstatus` = '$currentstatus' WHERE `gmail` = '$us' ";
           $currentstatusconn = mysqli_query($conn, $currentstatusupdate);
           $currentstatussql = mysqli_query($conn, $currentstatusconn);
         

       
           $relationshipupdate = "UPDATE `userdetails` SET `relationship` = '$relationship' WHERE `gmail` = '$us' ";
           $relationshipconn = mysqli_query($conn, $relationshipupdate);
           $relationshipsql = mysqli_query($conn, $relationshipconn);
         


           if( ($schoolsql) OR ($collegesql) OR ($addresssql) OR ($citysql) OR ($hobbiessql) OR ($currentstatussql) OR ($relationshipsql))
             {
                echo "<script> window.location.href='about.php'</script>";
              }
          
           else
             {
                 echo "<script> window.location.href='about.php'</script>";
              }
}
