<?php
session_start();
$id=$_SESSION['email'];
//$id='jainharshit505@gmail.com';
$pass=$_POST['pass'];


include '_includes/db1.inc.php';    



if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "UPDATE Coaching_Details SET Inst_Pswd='.$pass.' WHERE Inst_Email = '$id'";
$sql1 = "UPDATE Teacher_Details SET T_Pswd='$pass' WHERE T_Email = '$id'";
$sql2 = "UPDATE Student_Details SET Stu_Pswd='$pass'  WHERE Stu_Email ='$id'";

if (mysqli_query($conn, $sql1)) {

echo "
<script>
alert('password changed');
</script>";
if( mysqli_query($conn, $sql2)){

}else if(mysqli_query($conn, $sql)){

} 
}
else {
    echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
echo "Redirecting to the login page in 2 seconds";
header( "refresh:2;url=index.html" );
?>