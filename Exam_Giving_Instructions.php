<?php
session_start();


include '_includes/db1.inc.php';    


$id=$_SESSION['loginid'];

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$examid=$_SESSION['examid'];


$sql = "SELECT * FROM Exam_Upload_Details WHERE EU_Id='$examid'";
$result = mysqli_query($conn, $sql);
$duration=0;
$fullmarks="";
$total=0;
$inst="";

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {

$duration=$row['EU_Duration'];
$fullmarks=$row['EU_Name'];
$total=$row['EU_No_of_Q'];
$inst=$row['EU_Instr'];

}

}
else
{
echo "No results";
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Education</title>
   

    <!-- Custom CSS -->

    <!-- Custom Fonts --> 
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
          <a href="view_profile_S.php">Profile</a>
        <a href="edit_batch_S.php">Edit Batch</a>
          <a href="#">Study Material Download</a>
          <a href="#">Mock Test/Pratice Paper Download</a>
          <a href="#">Assignment Upload</a>
          <a href="#">Assignment Download</a>
          <a href="Exam_fees_check.php" style="text-decoration:none; color:#fff; display: inline-block; border: 1px solid #ccc; box-sizing: border-box; background-color: white; color: black; font-style: bold;">Giving Exams</a>
          <a href="#">Discussion Forum</a>
          <a href="#">Notice Board</a>
          <a href="logout.php">Log Out</a>
    </div>




   <div id="templatemo_menu_wrapper">
        <div id="templatemo_menu_C">
            
          

    </div> <!-- end of templatemo_menu -->
    </div>


    <div id="templatemo_content_wrapper">

       
        
        <div id="templatemo_content" >
        
            <div class="content_box" >
            
                <h2><center><u><b>Examination Instructions</b></u></center></h2>
                
               

                  <form action="question_decide.php">
                    <div class="imgcontainer" style=" margin-right: 20px; margin-left: 30px">
                    <h3><center><b><?php echo $fullmarks?></b></center></h3>
                    <h4>Duration                    :      <?php echo $duration?> minutes</h4>
                    <h4>Name                  :      <?php echo $fullmarks?></h4>
                    <h4>Total Number Of Questions   :     <?php echo $total?></h4>
                       <label><b>Instruction</b><br></label>
                       <ul>
                           <li><?php echo $inst?></li>
                          
                        </ul>
                          
                      <input type ="submit" value="Start">
                      

                  </form>



                <div class="cleaner"></div>
            </div>
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