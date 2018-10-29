<?php 


include '_includes/db1.inc.php';    



if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$res2=mysqli_query($conn,"SELECT * FROM exam_fees WHERE EF_Fee_Paid_YN='N'");
$res1=mysqli_query($conn,"SELECT * FROM exam_fees WHERE EF_Fee_Paid_YN='Y'");

$name=array();
$name3=array();
$name4=array();
$name1=array();

while($row=mysqli_fetch_array($res2,MYSQLI_ASSOC)){
	array_push($name,$row['EF_User_Id']);
	$res3=mysqli_query($conn,"SELECT * FROM teacher_student_details WHERE T_Stu_User_Id='".$row['EF_User_Id']."'");
	while($row3=mysqli_fetch_array($res3,MYSQLI_ASSOC)){
	        array_push($name3,$row3['T_Stu_Name']);
        }
}

while($row2=mysqli_fetch_array($res1,MYSQLI_ASSOC)){
	array_push($name1,$row2['EF_User_Id']);
        $res4=mysqli_query($conn,"SELECT * FROM teacher_student_details WHERE T_Stu_User_Id='".$row2['EF_User_Id']."'");
	while($row4=mysqli_fetch_array($res4,MYSQLI_ASSOC)){
	        array_push($name4,$row4['T_Stu_Name']);
        }
}
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Exam Fees</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   <link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="all">
          <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" media="all">
          <script type="text/javascript" src="js/bootstrap.js"></script>
          <script type="text/javascript" src="js/bootstrap.min.js"></script>
          <script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
          <script type="text/javascript" src="js/cufon-yui.js"></script>
          <script type="text/javascript" src="js/cufon-replace.js"></script>
          <script type="text/javascript" src="js/Myriad_Pro_300.font.js"></script>
          <script type="text/javascript" src="js/Myriad_Pro_400.font.js"></script>
          <script type="text/javascript" src="js/script.js"></script>
          <script src="jsfile/admin_exam_fees/s1.js"></script>
<style>
.state-icon {
    left: -5px;
}
.list-group-item-primary {
    color: rgb(255, 255, 255);
    background-color: rgb(66, 139, 202);
}

/* DEMO ONLY - REMOVES UNWANTED MARGIN */
.well .list-group {
    margin-bottom: 0px;
}
</style>
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-inverse navbar-cls-top " role="navigation" style="margin-bottom: 0">
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
font-size: 16px;"><a href="logout.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				
				<li>
                        <a   href="admin_dashboard.html"><i class="fa fa-home fa-2x"></i> Welcome Page</a>
                    </li>
					
                    <li>
                        <a  href="admin.php"><i class="fa fa-address-card-o fa-2x"></i> Registration Fees</a>
                    </li>
                     <li>
                        <a class="active-menu" href="admin_exam_fees.php"><i class="fa fa-pencil-square-o fa-2x"></i> Exam Fees</a>
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
                 <hr />
             
        <div class="col-md-12 text-center"><h3>Students List	</h3></div><br><br>
  		<div class="col-md-12">
		
          <div class="list-group" id="list1">
		 
		  <script src="jsfile/admin_exam_fees/s2.js">
</script>

        
          </div>
		
        </div>
    
   
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
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