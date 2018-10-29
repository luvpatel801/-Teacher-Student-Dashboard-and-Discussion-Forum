<?php
session_start();


include '_includes/db1.inc.php';    



$id=$_SESSION['loginid'];

$id=$_SESSION['loginid'];

$a=$_SESSION['qwert'];

$b=$_SESSION['sub'];

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$questionid=$_SESSION['questionid'];

$sql = "SELECT * FROM Exam_Question_Details WHERE EQ_Id='$questionid'";
$result = mysqli_query($conn, $sql);
$question="";

$ans="";
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
$question=$row['EQ_Q'];

$ans=$row['EQ_Ans'];
$_SESSION['answer']=$ans;
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
    <link href="css/stylish-portfolio.css" rel="stylesheet">

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
            
                <h2><center><u><b>Subjective Type Answer Paper</b></u></center></h2>
                
                <style type="text/css">
                    

                </style>
               

                
                    <div class="imgcontainer" style=" margin-right: 20px; margin-left: 30px">
  <form action="question_decide.php" method="post">
                        <h3><b>Question </b></h3>
                        <h4><?php echo $question ?></h4>
                        <h3><b>Answer</b></h3>
                          <textarea name="Option1"  placeholder="Write Your Answer Here" cols="100" rows="5000"  style="height:120px; width: 100%; float: center"></textarea>
                        <input type="submit"  name="prev" class="previous" value="Previous" <?php if ($a=="l"){ ?> disabled <?php   } ?>/>
                        <input type="submit"  name="submit"  value="Submit" <?php if ($b=="y"){ ?> disabled <?php   } ?>/>
                         <input type="submit" class="previous"  name="next"  value="Next" <?php if ($a=="r"){ ?> disabled <?php   } ?>/>
 </form>
					<button id="myButton" class="float-left submit-button" >Submit Test</button>
<script type="text/javascript">
    document.getElementById("myButton").onclick = function () {
alert("Test Submitted");
        location.href = "https://social-shiksha.000webhostapp.com/student_dashboard.html";
    };
</script>
                    </div>

                 



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