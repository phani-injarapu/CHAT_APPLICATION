<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */

$servername = "localhost";
$username = "root";
$password = "";
$dbname="college";






$link = mysqli_connect($servername, $username, $password, $dbname);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security

$ID= mysqli_real_escape_string($link, $_REQUEST['ID']);
$PATIENT_NAME = mysqli_real_escape_string($link, $_REQUEST['PATIENT_NAME']);
$FATHER_NAME = mysqli_real_escape_string($link, $_REQUEST['FATHER_NAME']);
$ADDRESS = mysqli_real_escape_string($link, $_REQUEST['ADDRESS']);
$CITY = mysqli_real_escape_string($link, $_REQUEST['CITY']);
$CONTACT_NO = mysqli_real_escape_string($link, $_REQUEST['CONTACT_NO']);
$DOB = mysqli_real_escape_string($link, $_REQUEST['DOB']);
$AGE = mysqli_real_escape_string($link, $_REQUEST['AGE']);
$GENDER = mysqli_real_escape_string($link, $_REQUEST['GENDER']);
 
// Attempt insert query execution
$sql = "INSERT INTO DETAILS (ID,PATIENT_NAME,FATHER_NAME,ADDRESS,CITY,CONTACT_NO,DOB,AGE,GENDER) VALUES ('$ID','$PATIENT_NAME','$FATHER_NAME','$ADDRESS','$CITY','$CONTACT_NO','$DOB','$AGE','$GENDER')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute";// $sql. " . mysqli_error($link);
}
 


 



//$upd = mysqli_connect($servername, $username, $password, $dbname);
 
// Check connection

 
// Escape user inputs for security

 

$con=mysqli_connect($servername,$username,$password,$dbname);
$qry="SELECT * from DETAILS";
$result=mysqli_query($con,$qry);
$num=mysqli_num_rows($result);
mysqli_close($con);
 
//$con4=mysqli_connect($servername,$username,$password,$dbname);
//$qry4="SELECT * from DETAILS";
//$result1=mysqli_query($con4,$qry4);
//$num=mysqli_num_rows($result1);
//mysqli_close($con4);




  

  

?>

<!DOCTYPE html>
<html>
<head>
    <title>view reord</title>
 <style type="text/css">

body {
    font-family: Arial, Helvetica, sans-serif;
    background-color: black;
}
table tr:not(:first-child){
                cursor: pointer;transition: all .25s ease-in-out;
            }
            table tr:not(:first-child):hover{background-color: #fb2626;}


* {
    box-sizing: border-box;
}






/* Add padding to containers */
.container {
    padding: 16px;
    background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 295PX;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}

body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Button used to open the contact form - fixed at the bottom of the page */
.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}

/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}

/* Overwrite default styles of hr */
hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
}
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Button used to open the contact form - fixed at the bottom of the page */
.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}

/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
/* Set a style for the submit button */
.registerbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
    
    
    
}

.registerbtn:hover {
    opacity: 1;
}

/* Add a blue text color to links */
a {
    color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin 
{
    background-color: #f1f1f1;
    text-align: center;
}

table 
{
    border-collapse: collapse;
    width: 100%;
}
table tr:
{color:white;}
th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2;}

th {
    background-color: #4CAF50;
    color: white;
}
</style>
   
    
    
</head>
<body background="https://srmsmediloc.000webhostapp.com/building.jpg">
   
   
  
  <button class="open-button" onclick="openForm()">Open Form</button>
  
  
<div class="form-popup" id="myForm">
  <form action="https://srmsmediloc.cf/update.php" class="form-container">
    <script>
        
    </script>    
  
           
        <div style="height:400px;width200px;overflow:auto;border:8px solid>
   
            
        <label for="ID"><b>ENTER ID :</b></label>
    <input type="text" placeholder="ID NUMBER" name="ID" id="ID" required Readonly>

    <label for="PATIENT_NAME"><b>ENTER NAME :</b></label><br>
    <input type="text" placeholder="PATIENT NAME" name="PATIENT_NAME" id="PATIENT_NAME" required>

    <label for="FATHER_NAME"><b>ENTER FATHER NAME :</b></label>
    <input type="text" placeholder="FATHER'S NAME" name="FATHER_NAME" id="FATHER_NAME" required>
    
    <label for="ADDRESS"><b> ADDRESS :</b></label><br>
    <input type="text" placeholder="ADDRESS" name="ADDRESS" id="ADDRESS" required>
    
    <label for="CITY"><b>ENTER CITY :</b></label>
    <input type="text" placeholder="CITY" name="CITY" id="CITY" required>
    
    <label for="CONTACT_NO"><b>ENTER CONTACT NO :</b></label><br>
    <input type="text" placeholder="CONTACT NO." name="CONTACT_NO" id="CONTACT_NO" required>
    <label for="DOB"><b>ENTER D.O.B :</b></label>
    <input type="text" placeholder="D.O.B" name="DOB" id="DOB" required>
    
    <label for="AGE"><b>ENTER AGE :</b></label><br>
    <input type="text" placeholder="AGE" name="AGE" id="AGE" required>
    
    <label for="GENDER"><b>ENTER GENDER :</b></label>
    <input type="text" placeholder="GENDER" name="GENDER" id="GENDER" required>
    
    

    <br>

   
       <button type="submit" class="registerbtn" name"update">UPDATE</button>
       <button type="submit" class="registerbtn" name"delete">DELETE</button>
      
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  
  </div>
  

        
        
    </form>
</div>
</div>
<script>
function openForm() {
    document.getElementById("myForm").style.display = "block";
}

function closeForm() {
    document.getElementById("myForm").style.display = "none";
}
</script>


       
        
      

     </form>
       
   
  
    <center>     
    <h1 >REGISTRATION DATABASE</h1>
	</center>
    <table class="id" id="table">
         <tr>
          
            <th>ID</th>
            <th>PATIENT_NAME</th>
             <th>FATHER_NAME</th>
            <th>ADRRES</th>
            <th>CITY</th>
             <th>CONTACT_NO</th>
            <th>DOB</th>
            <th>AGE</th>
            <th>GENDER</th>
            
        </tr>
        <?php
        for ($i=1; $i<=$num; $i++) { 
          $row= mysqli_fetch_array($result);
                    
        ?>
        <tr>
      
            <td><?php echo $row['ID']; ?></td>
            <td><?php echo $row['PATIENT_NAME']; ?></td>
            <td><?php echo $row['FATHER_NAME']; ?></td>
            <td><?php echo $row['ADDRESS']; ?></td>
            <td><?php echo $row['CITY']; ?></td>
            <td><?php echo $row['CONTACT_NO']; ?></td>
            <td><?php echo $row['DOB']; ?></td>
            <td><?php echo $row['AGE']; ?></td>
            <td><?php echo $row['GENDER']; ?></td>
            
        </tr>
        <?php
            }

        ?>
        
        
       
    </table>
    <script>
    
                var table = document.getElementById('table');
                
                for(var i = 1; i < table.rows.length; i++)
                {
                    table.rows[i].onclick = function()
                    {
                         //rIndex = this.rowIndex;
                         document.getElementById("ID").value = this.cells[0].innerHTML;
                         document.getElementById("PATIENT_NAME").value = this.cells[1].innerHTML;
                         document.getElementById("FATHER_NAME").value = this.cells[2].innerHTML;
                          document.getElementById("ADDRESS").value = this.cells[3].innerHTML;
                           document.getElementById("CITY").value = this.cells[4].innerHTML;
                            document.getElementById("CONTACT_NO").value = this.cells[5].innerHTML;
                             document.getElementById("DOB").value = this.cells[6].innerHTML;
                              document.getElementById("AGE").value = this.cells[7].innerHTML;
                              document.getElementById("GENDER").value = this.cells[8].innerHTML;
                    };
                }
    
         </script>
</div>
</body>
</html>






