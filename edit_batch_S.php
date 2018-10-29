<?php 
session_start();
$id=$_SESSION['loginid'];


include '_includes/db1.inc.php';    


if(!isset($_SESSION['loginid']))
{
echo "Please Log In ";
header('Location:index.html');
}


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 



if(isset($_POST['submit']))
{
$a= $_POST['mySelect'];
$sql1="UPDATE teacher_student_details SET T_Stu_Batch_Id='$a' where T_Stu_Id='$id'";
if (mysqli_query($conn, $sql1)){
header('Location:student_dashboard.html');
}
}
$res2=mysqli_query($conn,"SELECT * FROM batch_details ");
$name1=array(); 
$name2=array(); 

while($row1=mysqli_fetch_array($res2,MYSQLI_ASSOC)){
	/*array_push($name1,$row1['Batch_Id']);
	array_push($name2,$row1['Batch_Subject']);*/
        $rows[] = $row1;
}

	

?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Edit Student Batch</title>
	<meta name="keywords" content="free css templates, education, school, college, university, templatemo.com" />
    <meta name="description" content="Education template is for academic related websites" />
    <!--<link href="templatemo_style.css" rel="stylesheet" type="text/css" />-->
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Bootstrap Core CSS -->
    <!--<link href="css/bootstrap.min.css" rel="stylesheet">-->

    <!-- Custom CSS -->
    <!--<link href="css/stylish-portfolio.css" rel="stylesheet">-->

    <!-- Custom Fonts -->
    <!--<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">-->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

  

  
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
	      <link href="assets/css/style.css" rel="stylesheet" />

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
                        <a   href="student_dashboard.html"><i class="fa fa-home fa-2x"></i> Welcome Page</a>
                    </li>
					
                    <li>
                        <a  href="view_profile_S.php"><i class="fa fa-user fa-2x"></i> Profile</a>
                    </li>
                     <li>
                        <a class="active-menu" href="edit_batch_S.php"><i class="fa fa-edit fa-2x"></i> Edit Batch</a>
                    </li>
                    <li>
                        <a  href="#"><i class="fa fa-download fa-2x"></i> Study Material Download</a>
                    </li>
						   <li  >
                        <a   href="student_mock_view.php"><i class="fa fa-download fa-2x"></i> Mock Test/ Practice Paper Download</a>
                    </li>	  
                      <li  >
                        <a  href="student_assignment_upload.php"><i class="fa fa-upload fa-2x"></i> Assignment Upload</a>
                    </li>
                    <li  >
                        <a  href="student_view_assignment.php"><i class="fa fa-download fa-2x"></i> Assignment Download </a>
                    </li>				
					
					
                  <li>
                        <a  href="Exam_fees_check.php"><i class="fa fa-pencil-square-o fa-2x"></i> Giving Exams</a>
                    </li>	
					<li>
                        <a  href="#"><i class="fa fa-users fa-2x"></i> Discussion Forum</a>
                    </li>	
					<li>
                        <a  href="notice_board_S.php"><i class="fa fa-bell-o fa-2x"></i> Notice Board</a>
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
				 <div id="templatemo_content_wrapper">
        <center>
        <div id="templatemo_content" >
        
          <div class="content_box" style="float: center">
            
              <h2><center><u><b>Student's Edit Batch</b></u></center></h2>
                

                 <form action=""  id="register-form"   method="post"   role="form">
                    <div class="imgcontainer" style=" margin-right: 20px; margin-left: 30px">
                    <h2 style="color: #049b07; text-align: left"><b> </b></h2>
                        <h4 style="color: black; text-align: left"><u></u></h4>

                      <table class="table table-responsive" style="width:100%; text-align: left;"> 
                          <tr>
                        
                         
                            <td  style="color: black"><b>Batches</b></td>
                          </tr>
                          <tr>
                          
                            <td id="101">
                               <select id="mySelect" name="mySelect">
                                   <?php foreach ($rows as $row): ?>
                                      <option value="<?php echo $row['Batch_Id']; ?>">
                                          <?php echo $row['Batch_Subject']; ?>
                                       </option>
                                   <?php endforeach; ?>
                               </select>
                             
                            </td>
                          </tr>
                          <tr>
                            <td><br><br><br><td>
                          </tr>
                        </table>
                       
                      
                      
                      </div>
                      
                    </div>
</center>
                

                  
                    <div class="imgcontainer" style=" margin-right: 80px; margin-left: 80px">
                  <input type="submit" name="submit" style="background-color: green; color: white; margin-right: 50px;">  
                     
                     
                    </div>

                  </form>
 <h1><br><br></h1>


              <div class="cleaner"></div>
            </div> </center>
                 <hr />
               
    </div>
             
            </div>
			<!-- /. PAGE INNER  -->
			  <div id="templatemo_footer_wrapper">

        <div id="templatemo_footer">
        
            <ul class="footer_menu">
                                <li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="#">WebCods Solution & Consultancy Services </a></li>
            </ul>
        </div>
        
    </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
	
                <script src="jsfile/edit_batch_S/s1.js">
  
        </script>
     <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="jsfile/edit_batch_S/s2.js">
    
   
    </script>
    <script src="jsfile/com.js">

</script>
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>