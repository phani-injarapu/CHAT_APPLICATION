<!DOCTYPE html>
<html>
<head>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <title>hai</title>
    <style type="text/css">

      
.card__outer {
  position: relative;
  width: 100%;
  max-width: 800px;
  min-height: 450px;
  perspective: 700px;
}

.pfCard__wrapper {
  --color-default: #4b4b4b;
  --color-bg: white;
  --color-navbar: #6b6b6b;
  --color-primary: #262626;
  --color-secondary: #5173b8;
  --color-content: #6b6b6b;
  --color-stat-heading: #929292;
  --color-btn: #4e607a;
  --color-btn-word: white;
  --color-sunny: rgb(237, 131, 65);
  --color-night: rgb(31, 78, 121);

  position: relative;
  width: 100%;
  min-height: 90%;
  border-radius: 15px;
  overflow: hidden;
  background-color: var(--color-bg);
  box-shadow: 0 5px 5px 2px #737373;
  color: var(--color-default);
}
.pfCard__bio {
  position: relative;
  width: 100%;
}
.pfCard__bio > img {
  filter: brightness(0.7);
  pointer-events: none;
  user-select: none;
   width: 85%;
  height: 85%;
  padding:20px 0px 0px 180px;
  
}
.pfCard__content {
  position: relative;
  padding: 20px;
}

.pfCard__avatar {
  width: 200px;
  margin: 0 auto;
  text-align: center;
  pointer-events: none;
  user-select: none;
}
.avatar__description > h1 {
  margin: 0;
  margin-top: 5px;
  font-weight: 500;
  font-size: 25px;
  color: var(--color-primary, #262626);
}
.avatar__description > p {
  margin-top: 5px;
  font-size: 13px;
  color: var(--color-secondary, #929292);
}
.pfCard__stat {
  margin-top: 20px;
}
.statList {
  list-style: none;
  display: flex;
  justify-content: space-between;
  margin: 0;
  padding: 0 10px;
}
.statList__item {
  text-align: center;
}
.statList__item > h1 {
  font-size: 18px;
  font-weight: 600;
  margin: 0;
  color: var(--color-stat-heading, #929292);
}
.statList__item > p {
  font-size: 25px;
  margin: 0;
  margin-top: 12px;
}
.pfCard__description {
  text-align: center;
}
.pfCard__description > p {
  margin-bottom: 10px;
  font-size: 18px;
  color: var(--color-content);  
}
.description__location {
  display: flex;
  align-items: center;
  justify-content: center;
  color: var(--color-secondary);
  font-size: 13px;
}
.description__location > i {
  margin-right: 5px;
}

/* font special color*/
.sunny {
  color: var(--color-sunny);
}
.night {
  color: var(--color-night);
}

.pfCard__avatar--back {
  text-align: center;
}
.pfCard__content--back {
  padding-top: 60px;
}
.pfCard__avatar--back {
  position: absolute;
  width: 60px;
  height: 60px;
  top: -30px;
  left: 50%;
  transform: translate(-50%, 0);

  display: inline-flex;
  justify-content: center;
  align-items: center;
  background-color: rgb(124, 170, 142);
  border-radius: 50%;
  box-shadow: 0px 2px 4px 2px rgba(10, 10, 10, 0.7);
}
.pfCard__avatar--back > i {
  color: white;
}



@keyframes pulse {
  0% {
    transform: scale(1);
  }
  50% {
    transform: scale(1.5);
  }
  100% {
    transform: scale(1);
  }
}


      
body {
  padding-top: 50px;
}

.sub-header {
  padding-bottom: 10px;
  border-bottom: 1px solid #eee;
}


.navbar-fixed-top {
  border: 0;
}

.sidebar {
  display: none;
}
@media (min-width: 768px) {
  .sidebar {
    position: fixed;
    top: 51px;
    bottom: 0;
    left: 0;
    z-index: 1000;
    display: block;
    padding: 20px;
    overflow-x: hidden;
    overflow-y: auto; 
    background-color: #f5f5f5;
    border-right: 1px solid #eee;
  }
}


.nav-sidebar {
  margin-right: -21px; /* 20px padding + 1px border */
  margin-bottom: 20px;
  margin-left: -20px;
}
.nav-sidebar > li > a {
  padding-right: 20px;
  padding-left: 20px;
}
.nav-sidebar > .active > a,
.nav-sidebar > .active > a:hover,
.nav-sidebar > .active > a:focus {
  color: #fff;
  background-color: #428bca;
}


/*
 * Main content
 */

.main {
  padding: 20px;
}
@media (min-width: 768px) {
  .main {
    padding-right: 40px;
    padding-left: 40px;
  }
}
.main .page-header {
  margin-top: 0;
}




.placeholders {
  margin-bottom: 30px;
  text-align: center;
}
.placeholders h4 {
  margin-bottom: 0;
}
.placeholder {
  margin-bottom: 20px;
}
.placeholder img {
  display: inline-block;
  border-radius: 50%;
}

    </style>
</head>
<body>
 <div class="card__outer container" style="padding-top: 30px; cursor: pointer;">
  <div class="card">
    <div class="card__face card__face--front">

      <div class="pfCard__wrapper">
        <header class="pfCard__bio">
<?PHP
  $a = $_SESSION['user'];
  $se = "SELECT * FROM `userdetails` WHERE `sno` = '$a'";
    $qu=mysqli_query($conn, $se);
    $rws=mysqli_fetch_array($qu);
    $pict = $rws['gmail'];

  $urp = "SELECT * FROM `userprofiles` WHERE `userprofile` = '$pict'";
  $urqs = mysqli_query($conn,$urp);
  $rowss = mysqli_fetch_array($urqs);

  echo "<img src = ' ".$rowss['userpost']." '>";

?>
          


        </header>
                 <?PHP
  $a = $_SESSION['user'];
  $se = "SELECT * FROM `userdetails` WHERE `sno` = '$a'";
  $qu=mysqli_query($conn, $se);
    $rws=mysqli_fetch_array($qu);
    echo"<center><b style='color:brown; text-transform:uppercase;font-size:25px;'>";
    echo $rws['fname'];
    echo " ".$rws['lname'];
    echo"</b></center><br>";

        

     

       
              
           echo '
           <div class="pfCard__content">
          <div class="pfCard__avatar">
            <div class="avatar__description">
            </div>
          </div>
          <div class="pfCard__description">
            <p>
             <span class="sunny">'.$rws['attitude'].'</span>
            </p>
            <div class="description__location">
              <span class="night">'.$rws['city'].'</span>
            </div>
          </div>
          <div class="pfCard__stat">
            <ul class="statList">
              <li class="statList__item">
                <h1>Post</h1>
                <p>27</p>
              </li>
              <li class="statList__item">
                <h1>Follower</h1>
                <p>13.5K</p>
              </li>
              <li class="statList__item">
                <h1>Likes</h1>
                <p>8.4K</p>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>';

?>

  </div>
</div>

      </div>
    </div>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><img src='logo.png' width=30></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">HOME</a></li>
            <li><a href="#">PROFILE</a></li>
            <li><a href="#">FIND FRIENDS</a></li>
            <li><a href="#">LOGOUT</a></li>
          </ul>
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="#">Overview <span class="sr-only">(current)</span></a></li>
            <li><a href="#">Reports</a></li>
            <li><a href="#">Analytics</a></li>
            <li><a href="#">Export</a></li>
             <li><a href="">Nav item</a></li>
            <li><a href="">Nav item again</a></li>
            <li><a href="">One more nav</a></li>
            <li><a href="">Another nav item</a></li>
            <li><a href="">More navigation</a></li>
             <li><a href="">Nav item</a></li>
            <li><a href="">Nav item again</a></li>
            <li><a href="">One more nav</a></li>
            <li><a href="">Another nav item</a></li>
            <li><a href="">More navigation</a></li>
             <li><a href="">Nav item</a></li>
            <li><a href="">Nav item again</a></li>
            <li><a href="">One more nav</a></li>
            <li><a href="">Another nav item</a></li>
            <li><a href="">More navigation</a></li>
          </ul>
        
        </div>


        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Dashboard</h1>

          <div class="row placeholders">
            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
          </div>

          <h2 class="sub-header">Section title</h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Header</th>
                  <th>Header</th>
                  <th>Header</th>
                  <th>Header</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1,001</td>
                  <td>Lorem</td>
                  <td>ipsum</td>
                  <td>dolor</td>
                  <td>sit</td>
                </tr>
                <tr>
                  <td>1,002</td>
                  <td>amet</td>
                  <td>consectetur</td>
                  <td>adipiscing</td>
                  <td>elit</td>
                </tr>
                <tr>
                  <td>1,003</td>
                  <td>Integer</td>
                  <td>nec</td>
                  <td>odio</td>
                  <td>Praesent</td>
                </tr>
                <tr>
                  <td>1,003</td>
                  <td>libero</td>
                  <td>Sed</td>
                  <td>cursus</td>
                  <td>ante</td>
                </tr>
                <tr>
                  <td>1,004</td>
                  <td>dapibus</td>
                  <td>diam</td>
                  <td>Sed</td>
                  <td>nisi</td>
                </tr>
                <tr>
                  <td>1,005</td>
                  <td>Nulla</td>
                  <td>quis</td>
                  <td>sem</td>
                  <td>at</td>
                </tr>
                <tr>
                  <td>1,006</td>
                  <td>nibh</td>
                  <td>elementum</td>
                  <td>imperdiet</td>
                  <td>Duis</td>
                </tr>
                <tr>
                  <td>1,007</td>
                  <td>sagittis</td>
                  <td>ipsum</td>
                  <td>Praesent</td>
                  <td>mauris</td>
                </tr>
                <tr>
                  <td>1,008</td>
                  <td>Fusce</td>
                  <td>nec</td>
                  <td>tellus</td>
                  <td>sed</td>
                </tr>
                <tr>
                  <td>1,009</td>
                  <td>augue</td>
                  <td>semper</td>
                  <td>porta</td>
                  <td>Mauris</td>
                </tr>
                <tr>
                  <td>1,010</td>
                  <td>massa</td>
                  <td>Vestibulum</td>
                  <td>lacinia</td>
                  <td>arcu</td>
                </tr>
                <tr>
                  <td>1,011</td>
                  <td>eget</td>
                  <td>nulla</td>
                  <td>Class</td>
                  <td>aptent</td>
                </tr>
                <tr>
                  <td>1,012</td>
                  <td>taciti</td>
                  <td>sociosqu</td>
                  <td>ad</td>
                  <td>litora</td>
                </tr>
                <tr>
                  <td>1,013</td>
                  <td>torquent</td>
                  <td>per</td>
                  <td>conubia</td>
                  <td>nostra</td>
                </tr>
                <tr>
                  <td>1,014</td>
                  <td>per</td>
                  <td>inceptos</td>
                  <td>himenaeos</td>
                  <td>Curabitur</td>
                </tr>
                <tr>
                  <td>1,015</td>
                  <td>sodales</td>
                  <td>ligula</td>
                  <td>in</td>
                  <td>libero</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  

</body>
</html>