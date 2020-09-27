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
      	echo "Welcome - ".$rows['fname'];
      }
      ?>

   </title>
   <link rel="icon" type="" href="logo.png">
    <meta charset="utf-8">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <link rel="stylesheet" href="css/allstyles.css">
       <link rel="stylesheet" href="css/lessstyles.css">
       <link rel="stylesheet" href="css/homes.css">

       <style type="text/css">
        body
{
  background:url(https://subtlepatterns.com/patterns/sativa.png) repeat fixed;
}

        form#multiphase{ border:#000 1px solid; padding:24px; width:350px; }
form#multiphase > #phase2, #phase3, #show_all_data{ display:none; }
        .infopage
        {
          background-color: inherit;
          border: 2px solid #fd7e14 !important;
          border-radius: 20px;
        }
.cons
{
  font-size: 12px;
  color:red !important;
  text-transform: uppercase !important;
  font-weight: 700;
}
.user-avatars
{
  width: 35px;
  height: 30px;
  border-radius: 50%;
  position: relative;
}
                #search {
  height: 20px;
  width: 100px;
  border: solid 0px;
  border-radius: 10px;
  display: flex;
  justify-content: center;
  align-items: center;
  font-size: 35px;
  transition: 0.4s;
  color: #dc3545;

  margin-left: 120px;
}

#search-input {
  height: 100%;
  font-size: 18px;
  font-weight: 600;
  background: none;
  color: red;
  border: none;
  outline: 0;
  visibility: hidden;
  transition: 0.1s;
  margin-top:40px;

}

#search.active {
  width: 350px;
  height: 50px;
  border: solid 2px;
}

#search-input.active {
  width: 260px;
  margin-left: 16px;
  visibility: visible;
  
}

#search-icon
{
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
        echo "<li>
        <a href='home.php?q=".$row['sno']."' ><span style='color:#BED905;cursor:pointer;'>
      <span style='font-size:13px;font-weight: 900;'><img class='user-avatars' src='".$row['userdp']."'  />&nbsp".$row['fname']."&nbsp".$row['lname']."</span><span></a></li>";
     }
     else
     {
      echo "<li><a href='home.php?q=".$row['sno']."' ><span style='color:white;cursor:pointer;'>
      <span style='font-size:13px;font-weight: 900;'><img class='user-avatars' src='".$row['userdp']."'/>&nbsp".$row['fname']."&nbsp".$row['lname']."</span><span></a></li>";
     }
  }
        
      }
    }


?>
           </ul>

         </div>
      </nav>


        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5" >

        <nav class="navbar navbar-expand-lg navbar-light bg-light"style="left: 50px;">
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
    echo"<li ><a href='signout.php'><b><span class='glyphicon glyphicon-log-in'>&nbsp</span>Logout</b></a></li>

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
  $dashs = "- - -";

  if(($rows['address'] == $dashs) OR ($rows['hobbies'] == $dashs ) OR ($rows['school'] == $dashs) OR ($rows['college'] == $dashs) OR ($rows['currentstatus']== $dashs) OR ($rows['city'] == $dashs) OR ($rows['relationship']== $dashs))
  {
    echo'
<center><progress id="progressBar" value="0" max="100" style="width:250px;"></progress>
<h3 id="status">5% <small>please Enter your complete details</small></h3></center>
<form id="multiphase" onsubmit="return false" class="container-fluid infopage">
  <div id="phase1">
    <span style="color:#e83e8c;"><b>Address:</b></span> <input class="form-control cons" id="address" name="address" autocomplete="off"><br>
   <span style="color:#e83e8c;"><b> City: </b></span><input class="form-control cons" id="city" name="city" autocomplete="off"><br>
    <button class="btn btn-primary" onclick="processPhase1()">Continue</button>
  </div>
  <div id="phase2">
     <span style="color:red"><b>School:</b></span> <input class="form-control cons" id="school" name="school" autocomplete="off"><br>
     <span style="color:red"><b>College:</b></span> <input class="form-control cons" id="college" name="college" autocomplete="off"><br>
     <span style="color:red"><b>Present Job:</b></span><input class="form-control  cons" id="currentstatus" name="currentstatus" autocomplete="off"><br>
    <button class="btn btn-primary"  onclick="processPhase2()">Continue</button>
  </div>

  <div id="phase3">
   <span style="color:brown"><b> Hobbies:</b></span> <input class="form-control cons" id="hobbies" name="hobbies" autocomplete="off"><br>
   <span style="color:brown"><b> Relationship:</b></span> <select id="relationship" name="relationship" class="form-control cons" autocomplete="off">
      <option value=""></option>
      <option value="Single">Single</option>
      <option value="Married">Married</option>
    </select><br>
    <button class="btn btn-primary"  onclick="processPhase3()">Continue</button>
  </div>
  <div id="show_all_data">
    <span style="color:#6610f2"><b>  Address:</b></span> <span id="display_address" style="color: #007bff"></span> <br>
   <span style="color: #007bff"><b>  City:</b></span> <span id="display_city" style="color:#6610f2"></span> <br>
    <span style="color:#6610f2"><b> School:</b></span> <span id="display_school" style="color: #007bff"></span> <br>
    <span style="color: #007bff"><b>College:</b></span> <span id="display_college" style="color:#6610f2"></span> <br>
    <span style="color:#6610f2"><b> Present:</b></span> <span id="display_currentstatus"style="color: #007bff"></span> <br>
   <span style="color: #007bff"><b> Hobbies:</b></span> <span id="display_hobbie" style="color:#6610f2"></span> <br>
    <button class="btn btn-danger"  onclick="submitForm()">Submit Data</button>
  </div>
  
</form>

    ';
  }



    ?>

 <?PHP
     include 'conn.php';
    $qs = "SELECT * FROM `userprofiles`";
   $result=mysqli_query($conn, $qs);

  if($result->num_rows >0)
    {
      while($row = $result-> fetch_assoc())
      {
      echo '
<center><div class="content-profile-page" style="margin-bottom:100px;">
   <div class="profile-user-page card" style="width:500px;background-color:#f6f7f8;border-top-left-radius:30px;border-top-right-radius:30px;border:0px;">
     <div class="panel-body">
      <center><img  src= '.$row["userdps"].' style="width:470px;height:500px"></center> </div>    
   </div>
<div class="tab-nav-container">
<form action " " >
    <div class="tabs purpule">
        <i class="glyphicon glyphicon-heart-empty"></i>
        
    </div>
</form>
<form action " " >
    <div class="tabs pink">
        <i class="glyphicon glyphicon-thumbs-down"></i>
    </div>
</form>

<form action " " >
    <div class="tabs yellow">
        <i class="glyphicon glyphicon-comment"></i>
        
    </div>
</form>
<form action " " >
    <div class="tabs teal">
        <i class="glyphicon glyphicon-gift"></i>
    </div>
</form>
</div>
</div></center>';
      }
        
    }
                        ?>




































</header></div>
</div>

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
        <a target="_blank" href="#"><img src="'.$rows['userdp'].'" /></a>
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
    
  }
  else{
    echo "<script>alert('Failed Try again!..');</script>";
  }
  } 
}
?>

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
      </section>

<section></section>
<script type="text/javascript">
  const tabs = document.querySelectorAll('.tab');

tabs.forEach(clickedTab => {
    // Add onClick event listener on each tab
    clickedTab.addEventListener('click', () => {
        // Remove the active class from all the tabs (this acts as a "hard" reset)
        tabs.forEach(tab => {
            tab.classList.remove('active');
        });

        // Add the active class on the clicked tab
        clickedTab.classList.add('active');
        const clickedTabBGColor = getComputedStyle(clickedTab).getPropertyValue('color');
        console.log(clickedTabBGColor);
        document.body.style.background = clickedTabBGColor;
    });
});
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
<script>
var addresss,citys,schools,colleges,present,hobbie,relationships;
function _(x){
  return document.getElementById(x);
}
function processPhase1(){
  addresss = _("address").value;
  citys = _("city").value;
  if(addresss.length > 2 && citys.length > 2){
    _("phase1").style.display = "none";
    _("phase2").style.display = "block";
    _("progressBar").value = 33;
    _("status").innerHTML = "20%";
  } else {
      alert("Please fill in the fields"); 
  }
}
function processPhase2(){
 schools = _("school").value;
  colleges = _("college").value;
   present = _("currentstatus").value;
  if(schools.length > 2 && colleges.length > 2 && present.length > 3){
    _("phase2").style.display = "none";
    _("phase3").style.display = "block";
    _("progressBar").value = 66;
    _("status").innerHTML = "60%";
  } else {
      alert("Please fill in the fields"); 
  }
}
function processPhase3(){
  hobbie = _("hobbies").value;
  relationships = _("relationship").value;
  if(relationships.length > 0){
     _("phase3").style.display = "none";
    _("show_all_data").style.display = "block";
    _("display_address").innerHTML = addresss;
    _("display_city").innerHTML = citys;
    _("display_school").innerHTML = schools;
    _("display_college").innerHTML = colleges;
    _("display_currentstatus").innerHTML = present;
     _("display_hobbie").innerHTML = hobbie;
    _("display_relationships").innerHTML = relationships;
    _("progressBar").value = 100;
    _("status").innerHTML = "100%";
  } else {
      alert("Please choose your gender"); 
  }
  
}
function submitForm(){
  _("multiphase").method = "post";
  _("multiphase").action = "editinfo.php";
  _("multiphase").submit();
}

</script>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>