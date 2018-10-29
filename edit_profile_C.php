<?php

session_start();

include '_includes/db1.inc.php';    


if(!isset($_SESSION['loginid']))
{
echo "<script>
     alert('login required')
       </script> ";
echo "<b> redirecting.........</b>";
header('Refresh:2;url=index.html');
}
$rt=$_SESSION['loginid'];
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
} 
$sql = "SELECT *  FROM Coaching_Details WHERE Inst_Id='$rt'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    
    while($row = mysqli_fetch_assoc($result))
		{
			
 $a=$row['Inst_User_Id'];
	$b=$row['Inst_Name'];
$f=$row['Inst_No'];
	$c=$row['Inst_User_Id'];
	$d=$row['Inst_Email'];
     $e=$row['Inst_Addr'];
		$g=$row['Inst_Pswd'];
    }
} else {
    echo "0 results";
}



?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Education</title>
    <meta name="keywords" content="free css templates, education, school, college, university, templatemo.com" />
    
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
     <link href="assets/css/style.css" rel="stylesheet" />

  
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet"> 
  
 
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
            
            	<h2><center><u><b>Institution's Profile</b></u></center></h2>
                
               

                
                    <div class="imgcontainer" style=" margin-right: 20px; margin-left: 30px">
	                    <a href="view_profile_C.php" style="background-color: #c4efff; "><b>View Profile</b></a>
                     
                    </div>
                 
 <form action="Coaching_Update.php"  id="register-form"  name="fname" method="post"  onsubmit="return validateForm()" role="form">
                    <div class="imgcontainer" style=" margin-right: 20px; margin-left: 30px">
                    <h2 style="color: #049b07; text-align: left"><b>User Profile</b></h2>
                        <h4 style="color: black; text-align: left"><u>You Can Update Your Profile Using The Form Below</u></h4>
                       
                      
                      <table style="width:100%; text-align: left;"> 
                          <tr>
                            <td ></td>
                            <td><br></td>
                          </tr> 
                        <tr>
                            <td  style="color: black"><b>Institution Name</b></td>
                            
                          </tr>
                          <tr>
                            <td><input type="text"   name="Iname"  tabindex="1" class="form-control" value=<?php echo $b ?>  style="height: 5px;"></td>
                          </tr>
                      </table>
                      <table style="width:100%; text-align: left;">
                          <tr>
                            <td  style="color: black"><b>Password</b></td>
                            <td  style="color: black"><b>Confirm Password</b></td>
                          </tr>
                          <tr>
                            <td><input type="password" name="pass" value=<?php echo $g?>  tabindex="1" class="form-control" required    style="height: 5px;"></td>
                            <td><input type="password" name="cpass"  tabindex="1" value=<?php echo $g?> required class="form-control"   style="height: 5px;"></td>
                          </tr>
                      </table>
                    
                      <table style="width:100%; text-align: left;"> 
                          <tr>
                           <!-- <td  style="color: black"><b>Teacher ID</b></td>
                            <td  style="color: black"><b>User ID</b></td>-->
                            <td  style="color: black;height: 10px;"><b>Examination Type</b></td>
                          </tr>
                          <tr>
                      
                            <td>
                                  <select name="type" style="height: 20px; width: 100%;margin-bottom: 2px;">
                                
                              
                                    <option value="Test Series">Test Series</option>
                                    <option value="Subject Wise Exam">Subject Wise Exam</option>
                           </select>
                            </td>
                          </tr>
                        </table>
                      
                      <table style="width:100%; text-align: left;margin-top: 3px;"> 
                          <tr>
                           <!--<td  style="color: black"><b>Email</b></td>-->
                           <td  style="color: black"><b>User ID</b></td>
                            <td  style="color: black"><b>Phone Number</b></td>
                          </tr>
                          <tr>
                        
                            <td><input type="text" required  name="UID"  tabindex="1" class="form-control" value="<?php echo $c;?>" value="" style="height: 5px;"></td>
                            <td><input type="text" required name="mobile"  tabindex="1" class="form-control" value="<?php echo $f;?>" value="" style="height: 5px;"></td>
                          </tr>
                        </table>
                         <table style="width:100%; text-align: left;"> 
                          <tr>
                            <td  style="color: black"><b>Address</b></td>
                          </tr>
                          <tr>
                            <td><textarea  cols="50" rows="100" name="add" style="height:120px; width: 100%; float: center"> <?php echo $e ?></textarea></td>
                          </tr>
                      </table>
                      
                      </div>
                      
                    </div>
                 
                    <div class="imgcontainer" style=" margin-right: 20px; margin-left: 30px">
                <input type="submit" value="Save" style="background-color: blue; color: white;float: left">
               <input type="submit" value="Delete" name="delete" style="background-color: blue; color: white;float: right">          
             
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



                <script src="jsfile/edit_profile_C/s1.js">
        
        </script>
     <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="jsfile/edit_profile_C/s2.js">
    
    </script>
    <script src="jsfile/com.js">

</script>

</body>
</html>