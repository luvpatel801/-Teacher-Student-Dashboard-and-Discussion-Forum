<?php

include '_includes/db1.inc.php';    


session_start();

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if(!isset($_SESSION['loginid']))
{
echo "<script>
     alert('login required')
       </script> ";
echo "<b> redirecting.........</b>";
header('Refresh:2;url=index.html');
}

$id=$_SESSION['loginid'];
if(isset($_POST['canc']))
{
header('Location:view_profile_T.php');
}
if(isset($_POST['delete']))
{
$sql = "UPDATE coaching_details SET Ent_Type='D'";

if (mysqli_query($conn, $sql)) {
echo "<script>
     alert('institute deleted');
      </script>";
echo "<b>Redirecting in 3 second</b>";
header('Refresh:3;url=index.html');
   } 
else {
    echo "Error updating record: " . mysqli_error($conn);
}

}
else
{

echo $id;
$new_name=$_POST['Iname'];
echo $new_name;
$new_no=$_POST['mobile'];
$type=$_POST['type'];
$new_addr=$_POST['add'];
echo $new_addr;
$new_user_id=$_POST['UID'];
$new_pswd=$_POST['pass'];
$new_ent='E';


//Institute update
//assuming id to be coming from session

// and all other value to be coming from the post
$sql="UPDATE coaching_details SET Inst_Name='$new_name',
Inst_No='$new_no',Inst_Addr='$new_addr',Inst_User_Id='$new_user_id',Inst_Pswd='$new_pswd',
Ent_Type='$new_ent',Inst_Exam_Type='$type' where Inst_Id='$id' ";
if (mysqli_query($conn, $sql)){
echo "<script>
           alert('data updates successfully');
	   </script>
	   ";
header('Location:view_profile_C.php');
	   }else {
    echo "Error updating record: " . mysqli_error($conn);
}
}
	 mysqli_close($conn)
?>