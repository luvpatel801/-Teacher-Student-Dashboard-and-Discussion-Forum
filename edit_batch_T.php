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
$sql1="UPDATE teacher_student_details SET Batch_Id='$a' where T_Stu_Id='$id'";
if (mysqli_query($conn, $sql1)){
header('Location:teacher_dashboard.html');
}
}
$res2=mysqli_query($conn,"SELECT * FROM batch_details ");
$name1=array(); 
$name2=array(); 

while($row1=mysqli_fetch_array($res2,MYSQLI_ASSOC)){
	array_push($name1,$row1['Batch_Id']);
	array_push($name2,$row1['Batch_Subject']);
        $rows[] = $row1;
}

	

?>



<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Edit Batch</title>

 
  
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
                        <a   href="teacher_dashboard.html"><i class="fa fa-home fa-2x"></i> Welcome Page</a>
                    </li>
					
                    <li>
                        <a  href="view_profile_T.php"><i class="fa fa-user fa-2x"></i> Profile</a>
                    </li>
                     <li>
                        <a class="active-menu"  href="edit_batch_T.php"><i class="fa fa-edit fa-2x"></i> Edit Batch</a>
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
                        <a  href="exam_details.php"><i class="fa fa-pencil-square-o fa-2x"></i> Setting Exams</a>
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
                <div class="row row_style">
                    <div class="col-xs-offset-1 col-xs-10 col-md-offset-2 col-md-8">
					<center>
					<img src="images/logo.png" alt="logo">
					<p> <br> </p>
                        </center>
                       
                    </div>
                
                 <!-- /. ROW  -->
				
				<div id="templatemo_content"  >
                        <div class="col-xs-offset-1 col-xs-10 col-md-offset-3 col-md-6">

          <div class="panel panel-login">
              <div class="panel-heading">
						<div class="row">
								<div class="col-xs-6">
              <h2><center><u><b>Teacher's Edit Batch</b></u></center></h2>
								</div>
								
								</div>
							</div>
                        <div class="panel-body">
                

                 <form action=""  id="register-form"   method="post"   role="form">
                    <div class="imgcontainer" style=" margin-right: 20px; margin-left: 30px">
                    <h2 style="color: #049b07; text-align: left"><b>Teacher's Edit Batch</b></h2>
             

                      <table style="width:100%; text-align: left;"> 
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
                                 <script>
/*var myDiv = document.getElementById("101");


//Create array of options to be added
var name = <?php echo json_encode($name2); ?>;
var id = <?php echo json_encode($name1); ?>;


//Create and append select list
var selectList = document.createElement("select");
selectList.id = "mySelect";
myDiv.appendChild(selectList);

//Create and append the options
for (var i = 0; i < id.length; i++) { 
    var option = document.createElement("option");
    option.value = id[i];
    option.text = name;
    selectList.appendChild(option);
}*/
</script>
                            </td>
                          </tr>
                          <tr>
                            <td><br><br><br><td>
                          </tr>
                        </table>
                       
                      
                      
                      </div>
                      
                    </div>
					

                

                  
                    <div class="imgcontainer" style=" margin-right: 80px; margin-left: 80px">
                  <input type="submit" name="submit" style="background-color: green; color: white; margin-right: 50px;">  
                     
                     
                    </div>

                  </form>
 <h1><br><br></h1>
 </div>


              <div class="cleaner"></div>
            </div>
                 <hr />
            </div>   
    </div>
	</div>
             <!-- /. PAGE INNER  -->
			         <div class="cleaner"></div>
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
	<script>
         
          $(function() {
          
            $('#login-form-link').click(function(e) {
              $("#login-form").delay(100).fadeIn(100);
              $("#register-form").fadeOut(100);
              $('#register-form-link').removeClass('active');
              $(this).addClass('active');
              e.preventDefault();
            });

            $('#register-form-link').click(function(e) {
              $("#register-form").delay(100).fadeIn(100);
              $("#login-form").fadeOut(100);
              $('#login-form-link').removeClass('active');
              $(this).addClass('active');
              e.preventDefault();
            });
            
          });

        </script>
     <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script>
    // Closes the sidebar menu
    $("#menu-close").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
    // Opens the sidebar menu
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
    // Scrolls to the selected menu item on the page
    $(function() {
        $('a[href*=#]:not([href=#],[data-toggle],[data-target],[data-slide])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
    //#to-top button appears after scrolling
    var fixed = false;
    $(document).scroll(function() {
        if ($(this).scrollTop() > 250) {
            if (!fixed) {
                fixed = true;
                // $('#to-top').css({position:'fixed', display:'block'});
                $('#to-top').show("slow", function() {
                    $('#to-top').css({
                        position: 'fixed',
                        display: 'block'
                    });
                });
            }
        } else {
            if (fixed) {
                fixed = false;
                $('#to-top').hide("slow", function() {
                    $('#to-top').css({
                        display: 'none'
                    });
                });
            }
        }
    });
   
    </script>
    <script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
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