<?php
session_start();

include '_includes/db1.inc.php';    


$id=$_SESSION['loginid'];

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM exam_fees WHERE EF_User_Id='$id'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $ans=$row['EF_Fee_Paid_YN'];
		if($ans=='Y'){  
		header('Location:Exam_Details1.php');
		}else if($ans=='N'){
		echo "<script>
                       alert('You have not paid the exam fees.. Redirecting');
                      </script>";
header('Refresh:1;url=student_dashboard.html');

		}
		
		
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>