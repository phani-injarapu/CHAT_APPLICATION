
 <html><head><title>FREECHAT</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="" href="logo.png">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> 

   <link rel="stylesheet" href="css/style.css">
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


  <form class="form-horizontal" action="signin.php" method="post"  id="reg_form">
    <fieldset>
      
      <!-- Form Name -->
      <legend> Login</legend>
    

      
      <div class="form-group">
        <label class="col-md-4 control-label">Phone or Email</label>
        <div class="col-md-6  inputGroupContainer">
          <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
            <input name="phonemail" placeholder=" phone or email" class="form-control" type="text" autocomplete="off">
          </div>
        </div>
      </div>
      
   
      
    
        <div class="form-group has-feedback">
            <label for="password"  class="col-md-4 control-label">
                    Password
                </label>
                <div class="col-md-6  inputGroupContainer">
                <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
            <input class="form-control" id="userPw" type="password" placeholder="password" 
                       name="signpassword" data-minLength="5"
                       data-error="some error"
                       required autocomplete="off"/>
                <span class="glyphicon form-control-feedback"></span>
                <span class="help-block with-errors"></span>
                </div>
             </div>
        </div>
     
       
      <!-- Button -->
      <div class="form-group">
        <label class="col-md-4 control-label"></label>
        <div class="col-md-4">
          <button type="submit" class="btn btn-warning" >Login<span class="glyphicon glyphicon-send"></span></button>
        </div>
         <div class="col-md-4">
          <a href="register.php"class="btn btn-danger" >Create an account</a>
        </div>
      </div>
    </fieldset>
  </form>
</div>

</div> 
    </div>

          
            
      </div>
      
    </div>

  </div>

</div>



</body>
</html>