<?php
session_start();

include '_includes/db1.inc.php';    


$id=$_SESSION['loginid'];

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM teacher_student_details WHERE T_Stu_Id='$id'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
   
    while($row = mysqli_fetch_assoc($result)) {
       $a= $row['T_Stu_Name'];
		$b= $row['T_Stu_No'];
		$e=$row['T_Stu_Pswd'];
		$d= $row['T_Stu_Addr'];
		
		$c= $row['T_Stu_User_Id'];
		
		
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Education</title>
   
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet"> 
       <link href="assets/css/style.css" rel="stylesheet" />

  
</head>

<body>
    <div id="templatemo_header_wrapper">
                 <span style="font-size:22px;cursor:pointer;float: left;margin-top: 10px;margin-left: 10px" onclick="openNav()">&#9776; <b>open</b></span>
        <div id="templatemo_header">
        	<div id="site_title">
                <h1><a href="http://www.templatemo.com" target="_parent">
                    <img src="images/logo.png" alt="Site Title" />
                    <span> </span>
                </a></h1>
            </div>
            <p> </p>
        
        </div> <!-- end of templatemo_header -->

    </div> <!-- end of templatemo_menu_wrapper -->

   
    <div id="mySidenav" class="sidenav">
          <a href="javascript:void(0)" class="closebtn" style="font-size:25px" onclick="closeNav()">&times;</a>
          <a href="view_profile_T.php" >Profile</a>
          <a href="edit_batch_T.php">Edit Batch</a>
          <a href="#">Student Performance Marks Upload</a>
          <a href="upload_attendence.php">Student Attendence Upload</a>
          <a href="#">Student Performance Details Report</a>
          <a href="view_attendence.php">Student Attendence Details Report</a>
          <a href="teacher_studymaterial_upload.php">Study Material Upload</a>
          <a href="teacher_mocktest_upload.php">Mock Test/Pratice Paper Upload</a>
          <a href="teacher_assignment_upload.php">Assignment Upload</a>
          <a href="teacher_view_assignment.php">Assignment Download</a>
          <a href="exam_details.php">Setting Exams</a>
          <a href="#">Discussion Forum</a>
          <a href="notice_board_T.php">Notice Board</a>
          <a href="logout.php">Log Out</a>
    </div>






   <div id="templatemo_menu_wrapper">
        <div id="templatemo_menu_C">
            
          

    </div> <!-- end of templatemo_menu -->
    </div>


    <div id="templatemo_content_wrapper">
        
        <div id="templatemo_content" >
        
        	<div class="content_box" >
            
            	<h2><center><u><b>Teacher's Profile</b></u></center></h2>
                
               

                
                    <div class="imgcontainer" style=" margin-right: 20px; margin-left: 30px">
	                    <a href="view_profile_T.php" style="background-color: #c4efff; "><b>View Profile</b></a>
                      
                    </div>
                 

                 <form action="Teacher_update.php"  id="register-form"  name="fname" method="post"  onsubmit="return validateForm()" role="form">
                    <div class="imgcontainer" style=" margin-right: 20px; margin-left: 30px">
                    <h2 style="color: #049b07; text-align: left"><b>User Profile</b></h2>
                        <h4 style="color: black; text-align: left"><u>You Can Update Your Profile Using The Form Below</u></h4>
                       
                      
                     <table style="width:100%; text-align: left;"> 
                          <tr>
                            <td  style="color: black"><b>Name</b></td>
                          </tr>
                          <tr>
                            <td><input type="text" required  name="fullname"  tabindex="1" class="form-control"  value=<?php echo $a ?> style="height: 5px;"></td>
                          </tr>
                        </table>
                      <table style="width:100%; text-align: left;">
                          <tr>
                            <td  style="color: black"><b>Password</b></td>
                            <td  style="color: black"><b>Confirm Password</b></td>
                          </tr>
                          <tr>
                            <td><input type="password" name="pass"  tabindex="1" class="form-control" required   value="<?php echo $e?>" style="height: 5px;"></td>
                            <td><input type="password" name="cpass"  tabindex="1" required class="form-control" required value="<?php echo $e?>" style="height: 5px;"></td>
                          </tr>
                      </table>
                   
                   
                      
                      <table style="width:100%; text-align: left;"> 
                          <tr>
                         
                           <td  style="color: black"><b>User ID</b></td>
                            <td  style="color: black"><b>Phone Number</b></td>
                          </tr>
                          <tr>
                         
                            <td><input type="text"   name="UID"  tabindex="1" class="form-control" value=<?php echo $c?> style="height: 5px;"></td>
                            <td><input type="text" required name="mobile"  tabindex="1" class="form-control" value=<?php echo $b;?> style="height: 5px;"></td>
                          </tr>
                        </table>
                         <table style="width:100%; text-align: left;"> 
                          <tr>
                            <td  style="color: black"><b>Address</b></td>
                          </tr>
                          <tr>
                            <td><textarea name="add"  cols="50" rows="100" name="address" style="height:120px; width: 100%; float: center"><?php echo $d?></textarea></td>
                          </tr>
                      </table>
                      
                      </div>
                      
                    </div>

               
                    <div class="imgcontainer" style=" margin-right: 20px; margin-left: 30px">
               <input type="submit" value="Save" style="background-color: blue; color: white;float: left">
               <input type="submit" value="Delete" name="delete" style="background-color: blue; color: white;float: center">          
               <input type="submit" value="Cancel" name="cance" style="background-color: blue; color: white;float: right">  
                 
                    </div>

                  </form>



            	<div class="cleaner"></div>
            </div><!--<div class="content_box_bottom"></div>-->
         
            </div> <!-- end of content -->
        
        <div class="cleaner"></div>

    </div>

    <div id="templatemo_footer_wrapper">

        <div id="templatemo_footer">
        
            <ul class="footer_menu">
                                <li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="#">WebCods Solution & Consultancy Services </a></li>
            </ul>
        </div>
        
    </div>
    </div>



                <script src="jsfile/edit_profile_S/s1.js">
        
        </script>
     <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="jsfile/sbr.js">
   
    </script>
    <script src="jsfile/com.js">

</script>

</body>
</html>