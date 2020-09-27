<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="css/lessstyles.css">
</head>
<body>

</body>
</html>
<?php  
 if(isset($_POST["employee_id"]))  
 {  
      include 'conn.php';
      $output = '';  
      $query = "SELECT * FROM `userdetails` WHERE `sno` = '".$_POST["employee_id"]."'";  
      $result = mysqli_query($conn, $query);  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
<form action=" " method="post" >
<div class="chatbox-holder">
  <div class="chatbox group-chat">
    <div class="chatbox-top">
      <div class="chatbox-avatar">
        <a target="_blank" href="#"><img src="'.$row['userdp'].'" /></a>
      </div>
      
      <div class="chat-group-name">


            <span style="color:  #fff;"> '.$row['fname'].' '.$row['lname'].'</span>
            
    e</div>


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
    



    <div class="chat-messages">

    </div>
    
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
</form>
                ';  
      }  
      echo $output;  
 }  
 ?>


