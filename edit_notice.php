<?php

include '_includes/db1.inc.php';    


session_start();

if ($conn->connect_error) {
	
    die("Connection failed: " . $conn->connect_error);
} 
if(!isset($_SESSION['loginid']))
{
echo "<script>
     alert('login required')
       </script> ";
echo "<b> redirecting.........</b>";
header('Refresh:2;url=index.html');
}

if(!isset($_SESSION['ninja']))
{
echo "Please Log in again...You have been logged out";
header('Refresh:2;url=logout.php');
}

if(isset($_POST['cancel']))
{
$q=$_SESSION['ninja'];
if($q=="i")
{
header('Location:notice_board_c.php');
}
else if($q=="t")
{
header('Location:notice_board_T.php');
}
else if($q=="s")
{
header('Location:notice_board_S.php');
}

}
$a=$_SESSION['noticeid'];
$sql2="SELECT * FROM Notice_Board_Details WHERE NB_Id='$a' ";
$result2 = mysqli_query($conn, $sql2);
if (mysqli_num_rows($result2) > 0) {
   
    while($row2= mysqli_fetch_assoc($result2)) {
       $c=$row2['NB_Notice'];

	
		$b= $row2['NB_Content'];

		}
}
		
if(isset($_POST['submitt']))
{

$nb_heading=$_POST['head'];
$nb_content=$_POST['cont'];
$type=$_SESSION['ninja'];
$id=$_SESSION['noticeid'];
if($type=="i"){
$sql = "UPDATE Notice_Board_Details SET NB_Notice='$nb_heading',NB_Content='$nb_content' ,Ent_Type='E' WHERE NB_Id='$id'";

if (mysqli_query($conn, $sql)) {
   echo "<script>
alert('Record updated successfully')
</script>";
  header('Refresh:1;url=notice_board_c.php');
}
 else {
    echo "Error updating record: " . mysqli_error($conn);
}
}

else if($type=='t'){
$sql = "UPDATE Notice_Board_Details SET NB_Notice='$nb_heading',NB_Content='$nb_content',Ent_Type='E'  WHERE NB_Id='$id'";

if (mysqli_query($conn, $sql)) {

echo "<script>
alert('Record updated successfully')
</script>";
  header('Refresh:1;url=notice_board_T.php');
}
 else {
    echo "Error updating record: " . mysqli_error($conn);
}

}


}
if(isset($_POST['delete']))
{



$id11=$_SESSION['noticeid'];
$sql = "UPDATE Notice_Board_Details SET Ent_Type='D' WHERE NB_Id='$id11'";

if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}















}


?>
<html>
<head>
</head>

<body>
<form action="" method="post">
<input type="text" value="<?php echo $c?>" name="head">
<br>
<input type="text" value="<?php echo $b?>" name="cont">
<br>
<input type="submit" name="submitt">
</form>
</body>
</html>