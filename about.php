<?PHP
include 'conn.php';
session_start();
if(!isset($_SESSION['user'])){
   $user = $_SESSION['user'];
      echo "<script>alert('Login with your Account first!..');</script>";
      echo "<script>window.location='index.php';</script>";
   }
?>

<html lang="en">
  <head>
   <title>
    <?PHP
  include 'conn.php';
  $user = $_SESSION['user'];
  $bc = $user;
  $qs = "SELECT * FROM `userdetails` WHERE `sno` = '$bc'";
    $querys=mysqli_query($conn, $qs);
    $rows=mysqli_fetch_array($querys);
   
  

   if($rows['sno']==$bc)
      {
        echo "Profile - ".$rows['fname'];
      }
      ?>

   </title>
   <link rel="icon" type="" href="logo.png">
    <meta charset="utf-8">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <link rel="stylesheet" href="css/allstyles.css">
       <link rel="stylesheet" href="css/lessstyles.css">
       <link rel="stylesheet" href="css/profiles.css">
       <style type="text/css">
         .modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
       </style>
  </head>
  <body>
      
      <div class="wrapper d-flex align-items-stretch" >
         <nav id="sidebar" style="background-color: #fd7e14;">

            <div class="p-4 pt-5" style="position: fixed;background-color: #fd7e14;width: 250px;max-height: 750px;overflow: auto;">
              <?PHP
  include 'conn.php';
  include 'conn.php';
  $user = $_SESSION['user'];
  $bc = $user;
  $qs = "SELECT * FROM `userdetails` WHERE `sno` = '$bc'";
    $querys=mysqli_query($conn, $qs);
    $rows=mysqli_fetch_array($querys);

          echo'
          <div class="content-profile-pages">

   <div class="profile-user-pages">

      <div class="img-user-profiles">
        <img class="avatars" src='.$rows['userdp'].' alt="jofpin"/>
        </div>
    </div>

    </div>
          ';
?>
            <div class="footer">
           <input type="text" name="fdsc" class="form-control" placeholder="Search">
           </div>
 <ul class="list-unstyled components mb-5">

<?PHP
  include 'conn.php';
  $user = $_SESSION['user'];
  $bc = $user;
  $sql = "SELECT * FROM `userdetails`";
  $result=mysqli_query($conn, $sql);
    
    if($result->num_rows >0)
    {
      while($row = $result-> fetch_assoc())
      {
      if($row['sno'] != $bc)
      {
      $colo = "1";
    if($row['onlines']==$colo)
      {
        echo "<li><a href='about.php?q=".$row['sno']."' ><span style='color:#BED905;cursor:pointer;'>
      <span style='font-size:13px;font-weight: 900;'>&nbsp".$row['fname']."&nbsp".$row['lname']."</span><span></a></li>";

     }
     else
     {
      echo "<li><a href='about.php?q=".$row['sno']."' ><span style='color:white;cursor:pointer;'>
      <span style='font-size:13px;font-weight: 900;'>&nbsp".$row['fname']."&nbsp".$row['lname']."</span><span></a></li>";
     }
  }
        
      }
    }


?>
           </ul>

           

         </div>
      </nav>



        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">

            <button type="button" id="sidebarCollapse" class="btn btn-primary">
              <i class="icon-t">FREE CHAT</i>
              <span class="sr-only">Toggle Menu</span>
            </button>
            <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="glyphicon glyphicon-align-justify"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <div class="row">  <div class="col"  id="search">
                        <i class="glyphicon glyphicon-search" id="search-icon"></i>
                    <form>
                  <input type="text" id="search-input" name="search" autocomplete="off" placeholder="Search ">
                  </form>
                
                </div></div>
              <ul class="nav navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="home.php"><b class="icon-t" style="color:indigo;"><span class='glyphicon glyphicon-home'></span></b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><b class="icon-t"  style="color:green;"><span class='glyphicon glyphicon-envelope'></span></b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><b class="icon-t"  style="color:teal;"><span class='glyphicon glyphicon-bell'></span></b></a>
                </li>

                <?PHP
  include 'conn.php';
  $user = $_SESSION['user'];
  $bc = $user;
  $qs = "SELECT * FROM `userdetails` WHERE `sno` = '$bc'";
    $querys=mysqli_query($conn, $qs);
    $rows=mysqli_fetch_array($querys);
   
  

   if($rows['sno']==$bc)
      {
    echo"<li ><a href='signout.php'><span class='glyphicon glyphicon-log-in'>&nbsp</span>Logout</a></li>

<li style='text-transform: uppercase;'><a href='profile.php'><b style='color:#BED905;'>".$rows['fname']." ".$rows['lname']."</b></a></li>";

}
?>
              </ul>
            </div>
          </div>
        </nav>

        <header>

<?PHP
  include 'conn.php';
  $user = $_SESSION['user'];
  $bc = $user;
  $qs = "SELECT * FROM `userdetails` WHERE `sno` = '$bc'";
    $querys=mysqli_query($conn, $qs);
    $rows=mysqli_fetch_array($querys);
    $nulls = " ";

   if($rows['sno']==$bc)
      {
echo'<div class="content-profile-page">

   <div class="profile-user-page card">

      <div class="img-user-profile">
        <img class="profile-bgHome" src='.$rows['userbdp'].' />
        <img class="avatar" src='.$rows['userdp'].' alt="jofpin"/>




<div class="file-input">
      <a href="#overlay"><label class="file-input__label" for="file-input">
        
        <span>Upload file</span></label></a>
    </div>









       </div>

        <button style="background-color:inherit;border:none;" ><a href="#overlays"><i class="glyphicon glyphicon-pencil" style="font-size:25px;"></i></a></button>
          <div class="user-profile-data">
            <h1>'.$rows['fname']." ".$rows['lname'].'</h1>
            <p>'.$rows['attitude'].'</p>
          </div> 
          <div class="description-profile"><span style="color:#fd7e14;"><b>'.$rows['school'].'</b></span> |
          <span style="color:#ffc107;"><b>  '.$rows['college'].'</b> </span> |  
          <span style="color:#28a745;"><b> '.$rows['currentstatus'].'</b></span> | 
          <span style="color:#17a2b8;"><b> '.$rows['city'].' | </b></span>';

          if($rows['relationship'] == "Single")
          {

         echo'<span style="color:#e83e8c;"><b>'.$rows['relationship'].'</b></span>&nbsp<i class = "glyphicon glyphicon-user" style="color:brown"></i>';

         }

         if($rows['relationship'] == "Married")
         {
          echo'<span style="color:#e83e8c;"><b>'.$rows['relationship'].'</b></span>&nbsp<i class = "glyphicon glyphicon-heart" style="color:red"></i>';
         }
        
        echo'</div><ul class="data-user">
    <li><button style="background-color:  #6610f2;border-radius:50px;" onclick="myabout()">ABOUT</button></li>
        <li><button style="background-color:  #6f42c1;border-radius:50px;" onclick="mypics()">PHOTOS</button></li>
        <li><button style="background-color: #007bff;border-radius:50px;" onclick="my()">VIEW as</button></li>
        <br><br>
       </ul>
       <ul class="data-user">
        <li><a><strong>3390</strong><span>Posts</span></a></li>
        <li><a><strong>718</strong><span>Followers</span></a></li>
        <li><a><strong>239</strong><span>Following</span></a></li>
       </ul>

      </div>
    </div>';
  }

    


 echo  ' <div id="myModal" class="modal">
                  <div class="modal-content">
                    <span class="close">&times;</span>
                          <div class="container-fluid">
  <span style="color:blue;font-size:22px"><b>EDIT YOUR PROFILE</b></span>
     <center><span style="color:red;font-size:10px"><b>NOTE : <i>Update atleast one field</i></b></span></center><br>

  <form class="form-horizontal" action="editprofile.php" method="post">
    <div class="form-group">
      <label class="control-label col-sm-2">School:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="school" placeholder="Enter Your School Name" value="'.$rows['school'].'" autocomplete="off">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2">College:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" name ="college" placeholder="Enter Your College Name" value="'.$rows['college'].'" autocomplete="off">
      </div>
    </div>

     <div class="form-group">
      <label class="control-label col-sm-2">Street:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" name="address" placeholder="Enter Your Street Details" value="'.$rows['address'].'" autocomplete="off">
      </div>
    </div>

     <div class="form-group">
      <label class="control-label col-sm-2">City:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" name= "city" placeholder="Enter Your City" value="'.$rows['city'].'" autocomplete="off">
      </div>
    </div>

   

     <div class="form-group">
      <label class="control-label col-sm-2">Hobbies:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" name="hobbies" placeholder="Hobbies" value="'.$rows['hobbies'].'" autocomplete="off">
      </div>
    </div>

     <div class="form-group">
      <label class="control-label col-sm-2">Present Job:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" name="currentstatus" placeholder="Current Status" value="'.$rows['currentstatus'].'" autocomplete="off">
      </div>
    </div>

      <div class="form-group">
      <label class="control-label col-sm-2">Relationship:</label>
       <select class="form-control col-sm-10" name="relationship"  value="'.$rows['relationship'].'">
    <option value="">-- Relationship --</option>
    <option value="Single">Single</option>
    <option value="Married">Married</option>
        </select>
    </div>

    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <input type="submit" name="editprofiles" class="btn btn-primary">
      </div>
    </div>

  </form>
</div>
</div>
</div>



 <div class="content-profile-page">

            <div class="col-md-12 card">
                <div class="panel panel-primary" >
                    <div class="panel-heading col-md-12"><h3 class="panel-title">ABOUT YOU</h3></div></div>

                   <div class="col-md-12"> <div class="col-md-11"></div><div class="col-md-1"><button class="btn btn-danger" id="myBtn">Edit&nbsp<i class="glyphicon glyphicon-pencil"></i></button></div></div>



         
                    <div class="panel-body col-md-12" >


                        
                       

                          <div class="col-md-6">
                              <span style="color:#28a745;"><b>Phone<br></b></span>
                              <span style="color:#28a745;">'.$rows['phone'].'</span>

                          </div>

                           <div class="col-md-6">

                                 <span style="color:#20c997;"><b>Gmail<br></b></span>
                              <span style="color:#20c997;">'.$rows['gmail'].'</span>

                          </div>
                          

                    </div>
                      



                    <div class="panel-body col-md-12" >

                          
                          <div class="col-md-6">

                              <span style="color: #dc3545;"><b>DOB <br></b></span>
                              <span style="color: #dc3545;">'.$rows['dob'].'</span>

                          </div>

                           <div class="col-md-6">

                               <span style="color: brown"><b>Gender <br></b></span>
                              <span style="color: brown">'.$rows['gender'].'</span>
                            </div>

                     </div>

          <div class="panel-body col-md-12" >

                          
                          <div class="col-md-6">
                            <span style="color:  brown;"><b>Hobbies<br></b></span>
                            <span style="color:  brown;">'.$rows['hobbies'].'</span>
                            
                               


                          </div>

                           

                          
                          <div class="col-md-6">

                             <span style="color:  #fd7e14;"><b>Present<br></b></span>
                                  <span style="color: #fd7e14;">'.$rows['currentstatus'].'</span>
                          </div>

                    

            </div>


            <div class="panel-body col-md-12" >

                   

                          <div class="col-md-4">

                               <span style="color:  #e83e8c;"><b>School<br></b></span>
                          
                              <span style="color:  #e83e8c;">'.$rows['school'].'</span>

                          </div>

                           <div class="col-md-4">

                                 <span style="color: #fd7e14;"><b>College<br></b></span>
                              <span style="color: #fd7e14;">'.$rows['college'].'</span>

                          </div>

                            <div class="col-md-4">

                                <span style="color: #dc3545;"><b>City<br></b></span>
                              <span style="color: #dc3545;">'.$rows['city'].'</span>

                          </div>

                      </div>




                  


                <div class="panel-body col-md-12" >


                        
                        <div class="col-md-8" >
                             <span style="color:  red;"><b>Street<br></b></span>
                              <span style="color:  red;">'.$rows['address'].'</span>

                        </div>

                          <div class="col-md-4">
                             <span style="color:  #dc3545;"><b>Relationship<br></b></span>
                              <span style="color:  #dc3545;">'.$rows['relationship'].'</span>
                          </div>

                </div>


                  <div class="panel-body col-md-12" >
                  
                          <div class="col-md-4">

                              <span style="color:  blue;"><b>Another Number<br></b></span>
                          
                              <span style="color:  blue;">'.$rows['aphone'].'</span>

                          </div>
                   
                    </div>
                
                
            </div>

    </div>
</div>';
?>

    <script>
function myabout() {
  location.replace("about.php")
}

function mypics() {
  location.replace("#")
}

function my() {
  location.replace("#")
}
</script>
      <section>
        <?PHP
if(isset($_GET['q']))
{
  $bc = $_GET['q'];
  $qs = "SELECT * FROM `userdetails` WHERE `sno` = '$bc'";
    $querys=mysqli_query($conn, $qs);
    $rows=mysqli_fetch_array($querys);
  $ur=$rows['gmail'];
   if($rows['sno']==$bc)
      {
        $colo = "1";
echo ' 
<form action=" " method="post" >
<div class="chatbox-holder">
  <div class="chatbox group-chat">
    <div class="chatbox-top">
      <div class="chatbox-avatar">
        <a target="_blank" href="#"><img src="user.png" /></a>
      </div>
      
      <div class="chat-group-name">';


             $colo = "1";
      
             if($rows['onlines']==$colo)
                {

                  
                  echo'<span style="color:  #fff;"> '.$rows['fname'].' '.$rows['lname'].'</span>';
                  echo "&nbsp&nbsp<span class='glyphicon glyphicon-record' style='color: blue;cursor:pointer;font-size:10px;'></span>";

                }
                else
                {
              echo'<span style="color:  #fff;"> '.$rows['fname'].' '.$rows['lname'].'</span>';
            }
    echo'</div>


      <div class="chatbox-icons">

        <label for="chkSettings"><i class="glyphicon glyphicon-cog"></i></label><input type="checkbox" id="chkSettings" />
        <div class="settings-popup">
          <ul>
            <li><a href="#">Group members</a></li>
            <li><a href="#">Add members</a></li>
            <li><a href="#">Delete members</a></li>
            <li><a href="#">Leave group</a></li>
          </ul>
        </div>

        <a href="javascript:void(0);"><i class="glyphicon glyphicon-minus"></i></a>
        <a href="javascript:void(0);"><i class="glyphicon glyphicon-remove"></i></a>       
      </div>  

    </div>
    



    <div class="chat-messages">';


$a = $_SESSION['user'];
$se = "SELECT * FROM `userdetails` WHERE `sno` = '$a'";
$qu=mysqli_query($conn, $se);
$rw=mysqli_fetch_array($qu);
$us = $rw['gmail'];

$chat_details = "SELECT * FROM `usermessages` WHERE `user_sender` = '$us' AND `user_receiver` = '$ur' OR (`user_sender` = '$ur' AND `user_receiver` = '$us')";

$chat_query = mysqli_query($conn,$chat_details);


  if($chat_query->num_rows > 0){

    while($rowss = $chat_query->fetch_assoc() )
    {

      if($rowss['user_sender'] == $us AND $rowss['user_receiver'] == $ur) 
      {
        echo' 

        <div class="message-receivers">
          '.$rowss['send_time'].'
         </div>
        <div class="message-box-holder">
        <div class="message-box">
          '.$rowss["message"].'
        </div>
        </div>';
      }
     if($rowss['user_sender'] == $ur AND $rowss['user_receiver'] == $us)
      {
          echo'<div class="message-box-holder">
        <div class="message-sender">
          <a href="#">'.$rows['fname'].' '.$rows['lname'].'</a>
         </div>
        <div class="message-box message-partner">
          '.$rowss["message"].'
        </div>
        <div class="message-senders">
          '.$rowss['send_time'].'
         </div>
      </div>';
    }
}

}
    echo'</div>
    
    <div class="chat-input-holder">
      <input type="text" class="chat-input" name="mess" autocomplete="off">
      <input type="submit" value="Send" name="sender" class="message-send" />
    </div>
    
    <div class="attachment-panel">
      <a href="#" class="glyphicon glyphicon-thumbs-up"></a>
      <a href="#" class="glyphicon glyphicon-camera"></a>
      <a href="#" class="glyphicon glyphicon-facetime-video"></a>
      <a href="#" class="glyphicon glyphicon-picture"></a>
      <a href="#" class="glyphicon glyphicon-paperclip"></a>
      <a href="#" class="glyphicon glyphicon-link"></a>
      <a href="#" class="glyphicon glyphicon-trash"></a>
      <a href="#" class="glyphicon glyphicon-search"></a>
    </div>
  </div>
</div>
</form>';
}
}
?>

<?PHP
  $a = $_SESSION['user'];
  $se = "SELECT * FROM `userdetails` WHERE `sno` = '$a'";
  $qu=mysqli_query($conn, $se);
    $rw=mysqli_fetch_array($qu);
    $us = $rw['gmail'];
if(isset($_POST["sender"]) ){

  $bc = $_GET['q'];
  $qs = "SELECT * FROM `userdetails` WHERE `sno` = '$bc'";
    $querys=mysqli_query($conn, $qs);
    $rows=mysqli_fetch_array($querys);
  $ur=$rows['gmail'];
    $message=$_POST['mess'];
    $null = "";
    if($message == $null)
    {
      
    }
    else
    {
  $query = "INSERT INTO `usermessages` (`user_sender`,`user_receiver`,`message`) VALUES ('$us', '$ur','$message')";
  $sql = mysqli_query($conn, $query);
  if($sql){
    $count_int = "SELECT * FROM `usermessages` WHERE `user_sender` = '$us' AND `user_receiver` = '$ur'";
    $count_query = mysqli_query($conn, $count_int);
    if($count_query->num_rows >0)
    {
      $c="0";
      while($counts = $count_query-> fetch_assoc())
      {
          
          $c++;
          $ud = "UPDATE `usermessages` SET `clist` = '$c' WHERE `user_sender` = '$us' AND `user_receiver` = '$ur' ";
          $uds = mysqli_query($conn,$ud);
    }
  }
     
  }else{
    echo "<script>alert('Failed Try again!..');</script>";
  }
  } 
}
?>

<div id="overlay">
    <a href="#" class="close">&times;</a>
    <form action="dpchangers.php" method="post" enctype="multipart/form-data">
    <main class="main_full">
  <div class="container">
    <div class="panel">
      <div class="button_outer">
        <div class="btn_upload">
          <input type="file" id="upload_file" name="dp" id="dp" required>
          Upload Image
        </div>
        <div class="processing_bar"></div>
        <div class="success_box"></div>
      </div>
    </div>
    <div class="error_msg"></div>
    <div class="uploaded_file_view" id="uploaded_view">
      <span class="file_remove">X</span>
    </div>
  </div>
          <button name="dpchange" type="submit" class="btn btn-danger" style="float: right;" >SAVE</button>
     </form> 
</main> 
</div>
<div id="mask" onclick="document.location='#';"></div>






<script type="text/javascript">
var btnUpload = $("#upload_file"),
    btnOuter = $(".button_outer");
  btnUpload.on("change", function(e){
    var ext = btnUpload.val().split('.').pop().toLowerCase();
    if($.inArray(ext, ['gif','png','jpg','jpeg']) == -1) {
      $(".error_msg").text("Save Image...");
    } else {
      $(".error_msg").text("");
      btnOuter.addClass("file_uploading");
      setTimeout(function(){
        btnOuter.addClass("file_uploaded");
      },3000);
      var uploadedFile = URL.createObjectURL(e.target.files[0]);
      setTimeout(function(){
        $("#uploaded_view").append('<img src="'+uploadedFile+'" />').addClass("show");
      },3500);
    }
  });
  $(".file_remove").on("click", function(e){
    $("#uploaded_view").removeClass("show");
    $("#uploaded_view").find("img").remove();
    btnOuter.removeClass("file_uploading");
    btnOuter.removeClass("file_uploaded");
  });
</script>




<script type="text/javascript">
  $(function(){
  $('.glyphicon-minus').click(function(){    


    $(this).closest('.chatbox').toggleClass('chatbox-min');
  });


  $('.glyphicon-remove').click(function(){
    $(this).closest('.chatbox').hide();
  });
});

</script>
<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
<script type="text/javascript">
  const body = document.querySelector('body');
const searchBtn = document.querySelector('#search');
const searchInput = document.querySelector('#search-input');
let active = false;

body.addEventListener('click', (e) => {
  if(e.target.id === 'search' || e.target.id === 'search-input' || e.target.id === 'search-icon') {
    if(!active) {
      searchBtn.classList.add('active');
      searchInput.classList.add('active');
      active = true;
    }
  } else {
      searchBtn.classList.remove('active');
      searchInput.classList.remove('active');
      searchInput.value = '';
      active = false;
  }
});

</script>
      </section>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>