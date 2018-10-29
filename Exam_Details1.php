<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
   <head>
<title></title>
<link href="auth-buttons.css" rel="stylesheet" />
<link href="StyleSheet.css" rel="stylesheet" />
   </head>
<body>


<?php


include '_includes/db1.inc.php';    



if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT * FROM exam_upload_details ";
$result = mysqli_query($conn, $sql);
echo "<table>";
if (mysqli_num_rows($result) > 0) {
    
    while($row = mysqli_fetch_assoc($result)) {
       echo "<tr>";
	   echo "<td>";
	   echo $row['EU_Name'];
	   echo "</td>";
	   echo "<td>";
	   echo $row['EU_No_of_Q'];
	   echo "</td>";
	   echo "<td>";
	   
	   
	   echo "<p><a class='btn-auth  large' href='nextpage.php?role=";
	   echo $row['EU_Id'];
	   echo "' /a> Click to Go";
	   
	   echo "</b> </a></p>";
	   echo "</td>";
	   echo "</tr>";
	   echo "<br>";
	   
		
		
    }
} else {
    echo "0 results";
}
?>
</body>
</html>