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
   <title>Sidebar 01</title>
    <meta charset="utf-8">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <link rel="stylesheet" href="css/allstyles.css">

      <style type="text/css">
.content-profile-page {
  margin: 1em auto;
  width: 84em;
}

.card {
  background: #fff;
  border-radius: 0.3rem;
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.2);
  border: .1em solid rgba(0, 0, 0, 0.2);
  margin-bottom: 1em; 
}

.profile-user-page .img-user-profile {
  margin: 0 auto;
  text-align: center; 
}
.profile-user-page .img-user-profile .profile-bgHome {
  border-bottom: .2em solid #f5f5f5;
  width: 84em;
  height: 16em;
  }
.profile-user-page .img-user-profile .avatar {
  margin: 0 auto;
  background: #fff;
  width: 7em;
  height: 7em;
  padding: 0.25em;
  border-radius: .4em;
  margin-top: -10em;
  box-shadow: 0 0 .1em rgba(0, 0, 0, 0.35);
}
.profile-user-page button {
  position: absolute;
  font-size: 13px;
  font-weight: bold;
  cursor: pointer;
  width: 7em; 
  background: #3498db;
  border: 1px solid #2487c9;
  color: #fff;
  outline: none;
  border-radius: 0 .6em .6em 0;
  padding: .80em;
}

.profile-user-page button:hover {
  background: #51a7e0;
  transition: background .2s ease-in-out;
  border: 1px solid #2487c9;
}
.profile-user-page .user-profile-data, .profile-user-page .description-profile {
  text-align: center;
  padding: 0 1.5em; 
}
.profile-user-page .user-profile-data h1 {
  font-family: "Lato", sans-serif;
  margin-top: 0.35em;
  color: #292f33;
  margin-bottom: 0; 
}
.profile-user-page .user-profile-data p {
  font-family: "Lato", sans-serif;
  color: #8899a6; 
  font-size: 1.1em;
  margin-top: 0;
  margin-bottom: 0.5em; 
}
.profile-user-page .description-profile {
  color: #75787b;
  font-size: 0.98em; 
}
.profile-user-page .data-user {
  font-family: "Quicksand", sans-serif;
  margin-bottom: 0;
  cursor: pointer;
  padding: 0;
  list-style: none;
  display: table;
  width: 100.15%; 
}
.profile-user-page .data-user li {
  margin: 0;
  padding: 0;
  width: 33.33334%;
  display: table-cell;
  text-align: center;
  border-left: 0.1em solid transparent; 
}
.profile-user-page .data-user li:first-child {
  border-left: 0; 
}
.profile-user-page .data-user li:first-child a {
  border-bottom-left-radius: 0.3rem; 
  }
.profile-user-page .data-user li:last-child a {
  border-bottom-right-radius: 0.3rem; 
}
.profile-user-page .data-user li a, .profile-user-page .data-user li strong {
  display: block; 
}
.profile-user-page .data-user li a {
  background-color: #f7f7f7;
  border-top: 1px solid rgba(242,242,242,0.5);
  border-bottom: .2em solid #f7f7f7;
  box-shadow: inset 0 1px 0 rgba(255,255,255,0.4),0 1px 1px rgba(255,255,255,0.4);
  padding: .93em 0;
  color: #46494c; 
}
.profile-user-page .data-user li a strong, .profile-user-page .data-user li a span {
  font-weight: 600;
  line-height: 1; 
}
.profile-user-page .data-user li a strong {
  font-size: 2em; 
}
.profile-user-page .data-user li a span {
  color: #717a7e; 
}
.profile-user-page .data-user li a:hover {
  background: rgba(0, 0, 0, 0.05);
  border-bottom: .2em solid #3498db;
  color: #3498db; 
}
.profile-user-page .data-user li a:hover span {
  color: #3498db; 
}

footer h4 {
  display: block;
  text-align: center;
  clear: both;
  font-family: "Coda", sans-serif;
  color: #566965;
  line-height: 6;
  font-size: 1em;
}
footer h4 a {
  text-decoration: none;
  color: #3498db;
}
/**********************************************************************************************************************************************************/
/**********************************************************************************************************************************************************/
/**********************************************************************************************************************************************************/
/**********************************************************************************************************************************************************/
/**********************************************************************************************************************************************************/
/**********************************************************************************************************************************************************/
/**********************************************************************************************************************************************************/
/**********************************************************************************************************************************************************/
/**********************************************************************************************************************************************************/
/**********************************************************************************************************************************************************/
/**********************************************************************************************************************************************************/
/**********************************************************************************************************************************************************/
/**********************************************************************************************************************************************************/
/**********************************************************************************************************************************************************/
/**********************************************************************************************************************************************************/
/**********************************************************************************************************************************************************/
/**********************************************************************************************************************************************************/
/**********************************************************************************************************************************************************/
/**********************************************************************************************************************************************************/
/**********************************************************************************************************************************************************/
/**********************************************************************************************************************************************************/
/**********************************************************************************************************************************************************/
/**********************************************************************************************************************************************************/
/**********************************************************************************************************************************************************/
/**********************************************************************************************************************************************************/
/**********************************************************************************************************************************************************/
/**********************************************************************************************************************************************************/
/* Footer finished */
        .chatbox-holder {
  position: fixed;
  right: 0;
  bottom: 0;
  display: flex;
  align-items: flex-end;
  height: 0;
}

.chatbox {
  width: 320px;
  height: 400px;
  margin: 0 20px 0 0;
  position: relative;
  box-shadow: 0 0 5px 0 rgba(0, 0, 0, .2);
  display: flex;
  flex-flow: column;
  border-radius: 10px 10px 0 0;
  background: white;
  bottom: 0;
  transition: .1s ease-out;
}

.chatboxs {
  width: 270px;
  height: 85%;
  display: flex;
  flex-flow: column;
  background:#36688D;
  bottom: 0;
  padding: 10px 10px 10px 10px;
  overflow: auto;
  margin-left: 0;

}

.chatbox-top {
  position: relative;
  display: flex;
  padding: 10px 0;
  border-radius: 10px 10px 0 0;
  background: rgba(0, 0, 0, .05);
}

.chatbox-icons {
  padding: 0 10px 0 0;
  display: flex;
  position: relative;
}

.chatbox-icons .glyphicon {
  background: rgba(220, 0, 0, .6);
  padding: 3px 5px;
  margin: 0 0 0 3px;
  color: white;
  border-radius: 0 5px 0 5px;
  transition: 0.3s;
}

.chatbox-icons .glyphicon:hover {
  border-radius: 5px 0 5px 0;
  background: rgba(220, 0, 0, 1);
}

.chatbox-icons a, .chatbox-icons a:link, .chatbox-icons a:visited {
  color: white;
}

.chat-partner-name, .chat-group-name {
  flex: 1;
  padding: 0 0 0 95px;
  font-size: 15px;
  font-weight: bold;
  color: #30649c;
  text-shadow: 1px 1px 0 white;
  transition: .1s ease-out;
}

.status {
  width: 12px;
  height: 12px;
  border-radius: 50%;
  display: inline-block;
  box-shadow: inset 0 0 3px 0 rgba(0, 0, 0, 0.2);
  border: 1px solid rgba(0, 0, 0, 0.15);
  background: #cacaca;
  margin: 0 3px 0 0;
}

.online {
  background: #b7fb00;
}

.away {
  background: #ffae00;
}

.donot-disturb {
  background: #ff4343;
}

.chatbox-avatar {
  width: 80px;
  height: 80px;
  overflow: hidden;
  border-radius: 50%;
  background: white;
  padding: 3px;
  box-shadow: 0 0 5px 0 rgba(0, 0, 0, .2);
  position: absolute;
  transition: .1s ease-out;
  bottom: 0;
  left: 6px;
}

.chatbox-avatar img {
  width: 100%;
  height: 100%;
  border-radius: 50%;
}

.chat-messages {
  border-top: 1px solid rgba(0, 0, 0, .05);
  padding: 10px;
  overflow: auto;
  display: flex;
  flex-flow: row wrap;
  align-content: flex-start;
  flex: 1;
  
}

.message-box-holder {
  width: 100%;
  margin: 0 0 15px;
  display: flex;
  flex-flow: column;
  align-items: flex-end;
}

.message-sender {
  font-size: 12px;
  margin: 0 0 15px;
  color: #30649c;
  align-self: flex-start;
}
.message-senders {
  font-size: 8px;
  margin: 0 0 15px;
  color: #30649c;
  align-self: flex-start;
}

.message-receivers {
  width: 100%;
  margin: 0 0 1px;
  display: flex;
  flex-flow: column;
  align-items: flex-end;
  color: green;
  font-size: 8px;
}


.message-sender a, .message-sender a:link, .message-sender a:visited, .chat-partner-name a, .chat-partner-name a:link, .chat-partner-name a:visited {
  color: #30649c;
  text-decoration: none;
  font-weight: bold;
}

.message-box {
  padding: 6px 10px;
  border-radius: 6px 0 6px 0;
  position: relative;
  background: rgba(100, 170, 0, .1);
  border: 2px solid rgba(100, 170, 0, .1);
  color: #6c6c6c;
  font-size: 12px;
}

.message-box:after {
  content: "";
  position: absolute;
  border: 10px solid transparent;
  border-top: 10px solid rgba(100, 170, 0, .2);
  border-right: none;
  bottom: -22px;
  right: 10px;
}

.message-partner {
  background: rgba(0, 114, 135, .1);
  border: 2px solid rgba(0, 114, 135, .1);
  align-self: flex-start;
}

.message-partner:after {
  right: auto;
  bottom: auto;
  top: -22px;
  left: 9px;
  border: 10px solid transparent;
  border-bottom: 10px solid rgba(0, 114, 135, .2);
  border-left: none;
}

.chat-input-holder {
  display: flex;
  border-top: 1px solid rgba(0, 0, 0, .1);
}

.chat-input {
  resize: none;
  padding: 5px 10px;
  height: 40px;
  font-family: 'Lato', sans-serif;
  font-size: 14px;
  color: #999999;
  flex: 1;
  border: none;
  background: rgba(0, 0, 0, .05);
   border-bottom: 1px solid rgba(0, 0, 0, .05);
}

.chat-input:focus, .message-send:focus {
  outline: none;
}

.message-send::-moz-focus-inner {
  border:0;
  padding:0;
}

.message-send {
  -webkit-appearance: none;
  background: #9cc900;
  background: -moz-linear-gradient(180deg, #00d8ff, #00b5d6);
  background: -webkit-linear-gradient(180deg, #00d8ff, #00b5d6);
  background: -o-linear-gradient(180deg, #00d8ff, #00b5d6);
  background: -ms-linear-gradient(180deg, #00d8ff, #00b5d6);
  background: linear-gradient(180deg, #00d8ff, #00b5d6);
  color: white;
  font-size: 12px;
  padding: 0 15px;
  border: none;
  text-shadow: 1px 1px 0 rgba(0, 0, 0, 0.3);
}

.attachment-panel {
  padding: 3px 10px;
  text-align: right;
}

.attachment-panel a, .attachment-panel a:link, .attachment-panel a:visited {
  margin: 0 0 0 7px;
  text-decoration: none;
  color: rgba(0, 0, 0, 0.5);
}

.chatbox-min {
  margin-bottom: -362px;
/*   height: 46px; */
}

.chatbox-min .chatbox-avatar {
  width: 60px;
  height: 60px;
}

.chatbox-min .chat-partner-name, .chatbox-min .chat-group-name {
  padding: 0 0 0 75px;
}

.settings-popup {
  background: white;
  border-radius: 20px/10px;
  box-shadow: 0 3px 5px 0 rgba(0, 0, 0, .2);
  font-size: 13px;
  opacity: 0;
  padding: 10px 0;
  position: absolute;
  right: 0;
  text-align: left;
  top: 33px;
  transition: .15s;
  transform: scale(1, 0);
  transform-origin: 50% 0;
  width: 120px;
  z-index: 2;
  border-top: 1px solid rgba(0, 0, 0, .2);
  border-bottom: 2px solid rgba(0, 0, 0, .3);
}

.settings-popup:after, .settings-popup:before {
  border: 7px solid transparent;
  border-bottom: 7px solid white;
  border-top: none; 
  content: "";
  position: absolute;
  left: 45px;
  top: -10px;
  border-top: 3px solid rgba(0, 0, 0, .2);
}

.settings-popup:before {
  border-bottom: 7px solid rgba(0, 0, 0, .25);
  top: -11px;
}

.settings-popup:after {
  border-top-color: transparent;
}

#chkSettings {
  display: none;
}

#chkSettings:checked + .settings-popup {
  opacity: 1;
  transform: scale(1, 1);
}

.settings-popup ul li a, .settings-popup ul li a:link, .settings-popup ul li a:visited {
  color: #999;
  text-decoration: none;
  display: block;
  padding: 5px 10px;
}

.settings-popup ul li a:hover {
  background: rgba(0, 0, 0, .05);
}


      </style>
  </head>
  <body>
      
      <div class="wrapper d-flex align-items-stretch">
         <nav id="sidebar" style="background-color: #fd7e14;">
            <div class="p-4 pt-5">
            <a href="#" class="img logo rounded-circle mb-5" style="background-image: url(logo.jpg);"></a>
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
        echo "<li><a href='sample.php?q=".$row['sno']."' ><span style='color:#BED905;cursor:pointer;'>
      <span style='font-size:13px;font-weight: 900;'>&nbsp".$row['fname']."&nbsp".$row['lname']."</span><span></a></li>";
     }
     else
     {
      echo "<li><a href='sample.php?q=".$row['sno']."' ><span style='color:white;cursor:pointer;'>
      <span style='font-size:13px;font-weight: 900;'>&nbsp".$row['fname']."&nbsp".$row['lname']."</span><span></a></li>";
     }
  }
        
      }
    }


?>
           </ul>
           <div class="footer">
           <input type="text" name="fdsc" class="form-control" placeholder="Search">
           </div>

         </div>
      </nav>



        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">

            <button type="button" id="sidebarCollapse" class="btn btn-primary">
              <i class="">FREE CHAT</i>
              <span class="sr-only">Toggle Menu</span>
            </button>
            <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="nav navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="home.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">MESSAGES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">NOTIFICATIONS</a>
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

<li style='text-transform: uppercase;'><a><b style='color:#BED905;'>".$rows['fname']." ".$rows['lname']."</b></a></li>";

}
?>
              </ul>
            </div>
          </div>
        </nav>

        <header>

     <div class="content-profile-page">

   <div class="profile-user-page card">

      <div class="img-user-profile">
        <img class="profile-bgHome" src="logo.jpg" />
        <img class="avatar" src="logo.jpg" alt="jofpin"/>
       </div>

          <button>Follow</button>
          <div class="user-profile-data">
            <h1>Jose Pino</h1>
            <p>github.com/jofpin</p>
          </div> 
          <div class="description-profile">Front-end | Security Researcher | CSS Warrior | <a href="https://twitter.com/bullgit" title="bullgit"><strong>@bullgit</strong></a> | I love to create small things for the internet!</div>
       
       <ul class="data-user">
        <li><a><strong>3390</strong><span>Posts</span></a></li>
        <li><a><strong>718</strong><span>Followers</span></a></li>
        <li><a><strong>239</strong><span>Following</span></a></li>
       </ul>

      </div>
    </div>

      </div>
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
        <a target="_blank" href="#"><img src="user.png" /></a>
      </div>
      
      <div class="chat-group-name">';


             $colo = "1";
      
            if($rows['onlines']==$colo)
                {

                  echo "<span class='glyphicon glyphicon-record' style='color:green;cursor:pointer;font-size:10px;'></span>";
                  echo'<span style="color:green"> '.$rows['fname'].' '.$rows['lname'].'</span>';

                }
                else
                {
              echo''.$rows['fname'].' '.$rows['lname'].'';
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

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>