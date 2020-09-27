<?PHP

if(isset($_POST['submit']))
{
  $phone = $_POST["phone"];

}


?>
<html><head><title>FREECHAT | SIGN UP</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="" href="logo.png">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
   <link rel="stylesheet" href="css/style.css">

   <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
</head>




<body class="w3-light-grey" data-gr-c-s-loaded="true">
  <div class="loader">
    <img src="loading.gif" alt="Loading..." />
</div>

 <script type="text/javascript">
   window.addEventListener("load", function () {
    const loader = document.querySelector(".loader");
    loader.className += " hidden"; // class "loader hidden"
});
 </script>
<div class="w3-content" style="max-width:1600px">



  <div class="w3-row w3-padding w3-border">

    <div class="w3-col l12 s12">
    
      <!-- Blog entry -->
      <div class="w3-container w3-white w3-margin w3-padding-large">
        
         
          <div class="select-boxes">
    
  <div class="container">
<div class="col-lg-9">
	        <br>
  


<br>



  <form class="form-horizontal" action="signup.php" method="post"  id="reg_form" enctype="multipart/form-data">
    <fieldset>
      
      <!-- Form Name -->
      <legend> Account Information </legend>
    

      
      <div class="form-group">
        <label class="col-md-4 control-label">First Name</label>
        <div class="col-md-6  inputGroupContainer">
          <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input  name="first_name" placeholder="First Name" class="form-control"  type="text" autocomplete="off">
          </div>
        </div>
      </div>
      
      <!-- Text input-->
      
      <div class="form-group">
        <label class="col-md-4 control-label" >Last Name</label>
        <div class="col-md-6  inputGroupContainer">
          <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input name="last_name" placeholder="Last Name" class="form-control"  type="text" autocomplete="off">
          </div>
        </div>
      </div>
      
    
      <!-- Text input-->
      
      <div class="form-group">
        <label class="col-md-4 control-label">Phone</label>
        <div class="col-md-6  inputGroupContainer">
          <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
            <input name="phone" placeholder="(91+)" class="form-control" type="text" autocomplete="off">
          </div>
        </div>
      </div>
      

      <div class="form-group">
        <label class="col-md-4 control-label">E-Mail</label>
        <div class="col-md-6  inputGroupContainer">
          <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
            <input name="gmail" placeholder="E-Mail Address" class="form-control"  type="text" autocomplete="off">
          </div>
        </div>
      </div>

       <div class="form-group">
        <label class="col-md-4 control-label">Date of Birth</label>
        <div class="col-md-6  inputGroupContainer">
          <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
            <input name="dob" placeholder="E-Mail Address" class="form-control"  type="date" required>
          </div>
        </div>
      </div>
      
    
        <div class="form-group has-feedback">
            <label for="password"  class="col-md-4 control-label">
                    Password
                </label>

                <div class="col-md-6  inputGroupContainer">
                <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                 <input class="form-control" id="txtPassword" type="password" placeholder="password" 
                       name="password" data-minLength="20"
                       data-error="some error"
                       required/>

                       <button type="button" id="btnToggle" class="toggle"><i id="eyeIcon" class="  glyphicon glyphicon-eye-open"></i></button>

                </div>
             </div>
        </div>
     
        <div class="form-group has-feedback">
            <label for="confirmPassword"  class="col-md-4 control-label">
                   Confirm Password
                </label>
                 <div class="col-md-6  inputGroupContainer">
                <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
            <input class="form-control {$borderColor}" id="userPw2" type="password" placeholder="Confirm password" 
                       name="cpassword" data-match="#cpassword" data-minLength="20"
                       data-match-error="some error 2"
                       required/>
                <span class="glyphicon form-control-feedback"></span>
                <span class="help-block with-errors"></span>
      			 </div>
             </div>
        </div>


         <div class="form-group">
        <label class="col-md-4 control-label">Gender</label>
        <div class="col-md-6 selectContainer">
          <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
            <select name="gender" class="form-control selectpicker" required>
              <option value=" "  >Please select your gender</option>
              <option value="male"><i class="glyphicon glyphicon-lock"></i>MALE</option>
              <option value ="female"><i class="glyphicon glyphicon-icon-girl"></i>FEMALE</option>
              <option value = "other" >OTHER</option>
            </select>
          </div>
        </div>
      </div>
      
<center>
<main class="main_full">
  <div class="container">
    <div class="panel">
      <div class="button_outer">
        <div class="btn_upload">
          <input type="file" id="upload_file" name="picture" id="picture" required>
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
</main>
</center>
      
     
  
      <!-- Button -->
      <div class="form-group">
        <label class="col-md-4 control-label"></label>
        <div class="col-md-4">
          <button name="submit" type="submit" class="btn btn-warning" >Sign up <span class="glyphicon glyphicon-send"></span></button>
        </div>

        <div class="col-md-4">
          <a href="index.php"class="btn btn-danger" >Already have an account</a>
        </div>
      </div>
    </fieldset>
  </form>
</div>

</div>




<script type="text/javascript">
  let passwordInput = document.getElementById('txtPassword'),
    toggle = document.getElementById('btnToggle'),
    icon =  document.getElementById('eyeIcon');

function togglePassword() {
  if (passwordInput.type === 'password') {
    passwordInput.type = 'text';
    icon.classList.add("glyphicon-eye-close");
    //toggle.innerHTML = 'hide';
  } else {
    passwordInput.type = 'password';
    icon.classList.remove("glyphicon-eye-close");
    //toggle.innerHTML = 'show';
  }
}

function checkInput() {
  //if (passwordInput.value === '') {
  //toggle.style.display = 'none';
  //toggle.innerHTML = 'show';
  //  passwordInput.type = 'password';
  //} else {
  //  toggle.style.display = 'block';
  //}
}

toggle.addEventListener('click', togglePassword, false);
passwordInput.addEventListener('keyup', checkInput, false);
</script>    
    </div>   
      </div>
      
    </div>

  </div>

</div>
<script type="text/javascript">
var btnUpload = $("#upload_file"),
    btnOuter = $(".button_outer");
  btnUpload.on("change", function(e){
    var ext = btnUpload.val().split('.').pop().toLowerCase();
    if($.inArray(ext, ['gif','png','jpg','jpeg']) == -1) {
      $(".error_msg").text("Not an Image...");
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

</body>
</html>