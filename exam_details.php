<?php
session_start();

include '_includes/db1.inc.php';    


if(isset($_POST['submit']))
{
$_SESSION['code']=0;
$_SESSION['max']=$_POST['quantity'];

$a=$_POST['exam'];
$b=$_POST['quantity'];
$c=$_POST['usr_time'];
$d=$_POST['instr'];

$e=$_SESSION['loginid'];
 $sql = "INSERT INTO exam_upload_details (EU_Name,EU_Duration,EU_No_of_Q,EU_Instr,EU_Id,EU_Upload_Date)
VALUES ('".$a."',$c,$b,'".$d."','$e',CURDATE())";
if (mysqli_query($conn, $sql)) {






$sql1 = "SELECT max(EU_Id) as EU_Id  FROM exam_upload_details";
$result1 = mysqli_query($conn, $sql1);

if (mysqli_num_rows($result1) > 0) {
    
    while($row1 = mysqli_fetch_assoc($result1))
		{
$var=$row1['EU_Id'];


$_SESSION['examid']=$var;

$_SESSION['questionno']=0;
}
}



  //  echo "New record created successfully";
header('Location:questions.php');
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}






}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Exam Details</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

   </head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><img src="images/logo.png" alt="logo"></a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"><a href="logout.php" class="btn btn-danger square-btn-adjust"><font color="white">Logout</font></a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				
				
					<li>
                        <a   href="teacher_dashboard.html"><i class="fa fa-home fa-2x"></i> Welcome Page</a>
                    </li>
					
                    <li>
                        <a  href="view_profile_T.php"><i class="fa fa-user fa-2x"></i> Profile</a>
                    </li>
                     <li>
                        <a  href="edit_batch_T.php"><i class="fa fa-edit fa-2x"></i> Edit Batch</a>
                    </li>
                    <li>
                        <a  href="#"><i class="fa fa-upload fa-2x"></i> Student Performance Marks Upload</a>
                    </li>
						   <li  >
                        <a   href="upload_attendence.php"><i class="fa fa-upload fa-2x"></i> Student Attendance Upload</a>
                    </li>	
                      <li  >
                        <a  href="#"><i class="fa fa-pencil-square-o fa-2x"></i> Student Performance Details Report</a>
                    </li>
                    <li  >
                        <a  href="view_attendence.php"><i class="fa fa-pencil-square-o fa-2x"></i> Student Attendance Details Report</a>
                    </li>				
					
					
                  <li>
                        <a  href="teacher_studymaterial_upload.php"><i class="fa fa-upload fa-2x"></i> Study Material Upload</a>
                    </li>	
					
					
					<li>
                        <a  href="teacher_mocktest_upload.php"><i class="fa fa-upload fa-2x"></i> Mock Test/Practice Paper Upload</a>
                    </li>
					
					<li>
                        <a  href="teacher_assignment_upload.php"><i class="fa fa-upload fa-2x"></i> Assignment Upload</a>
                    </li>
					<li>
                        <a  href="teacher_view_assignment.php"><i class="fa fa-download fa-2x"></i> Assignment Download</a>
                    </li>
					<li>
                        <a class="active-menu" href="exam_details.php"><i class="fa fa-pencil-square-o fa-2x"></i> Setting Exams</a>
                    </li>
					<li>
                        <a  href="#"><i class="fa fa-users fa-2x"></i> Discussion Forum</a>
                    </li>	
					<li>
                        <a  href="#"><i class="fa fa-plus fa-2x"></i> Add Notice</a>
                    </li>
					<li>
                        <a  href="notice_board_T.php"><i class="fa fa-bell-o fa-2x"></i> View Notice Board</a>
                    </li>	
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
					<center>
					<img src="images/logo.png" alt="logo">
					<p> <br> </p>
                        </center>
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
				  <div id="templatemo_content" style="margin:0px; width:auto;">
        
        	<div class="content_box" style="margin:0px; width:auto;">
            
            	<h2><center><u><b>Examination Details</b></u></center></h2>
                
               						


                  <form action="" method="post">
                    <div  style=" margin-right: 20px; margin-left: 30px">
                    <label><b><br>Examination</b></label>
                      <input type="text" placeholder="Write Your Exam Name Here" style="width:70%; margin-left:20px; float: right top" name="exam" required">
                    </div>
<p><br></p>
                    <div  style="background-color:#fafff9; margin-right: 10px; margin-left: 10px">
                      <label><b>Number Of Questions  </b></label>
                      <input type="number" name="quantity" min="1" placeholder="Number Only" align="right" required>
						<p><br></p>
                      <label><b>Time in Minutes  </b></label>
                      <input type="text" name="usr_time" placeholder="Minutes" required style="height:20px; width: auto;" >
						<p><br></p>
<div class="row"><div class="form-group col-xs-11 col-md-8">
                       <label><b>Instructions </b><br></label>
					   
                       <textarea class="form-control" name="instr" placeholder="Write Your Instructions Here" cols="50" rows="25" name="Instruction" style="height:100px; width:100%; float: center" required></textarea>
                          						
												<p><br></p></div></div>

                      <input  type="submit" value="Proceed" name="submit">
                      
                    </div>

                  </form>



            	<div class="cleaner"></div>
            </div>
			</div>
                 <hr />
               
    </div>
             <!-- /. PAGE INNER  -->
			 <div id="templatemo_footer_wrapper" style="margin:0px; width:auto;">

        <div id="templatemo_footer" style="margin:0px; width:auto;">
        
            <ul class="footer_menu">
                                <li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="#">WebCods Solution & Consultancy Services </a></li>
            </ul>
        </div>
        
    </div>
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
	<script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="jsfile/sbr.js">
   
   
    </script>
    <script src="jsfile/com.js">
</script>

    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>