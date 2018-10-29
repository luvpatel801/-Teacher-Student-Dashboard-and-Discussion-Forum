<?php

session_start();



include '_includes/db1.inc.php';      



// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$student_id=$_GET['role'];
$_SESSION['stu_check']=$student_id;
$exam_id=$_SESSION['examcheck'];
$sql = "SELECT * FROM exam_response_details WHERE ER_EU_Id='$exam_id' AND ER_User_Id='$student_id'";
$result = mysqli_query($conn, $sql);
$ans=array();
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
	if($row['ER_Marks_Obt']==-1){
       array_push($ans,$row['ER_Id']);
}
    }
} else {
    echo "0 results";
}
for($x=0;$x<sizeof($ans);$x++){
echo $ans[$x];
echo "<br>";
}
$_SESSION['maxresponse']=sizeof($ans)-1;

$_SESSION['unchecked_questions'] = $ans;

$_SESSION['unid']=0;
echo $_SESSION['maxresponse'];
header('Location:viewanswersheets.php');
mysqli_close($conn);
?>