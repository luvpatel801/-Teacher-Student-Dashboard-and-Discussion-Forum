<?php 


include '_includes/db1.inc.php';    



if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$res2=mysqli_query($conn,"SELECT * FROM batch_details ");

$name1=array();
$name2=array();


while($row1=mysqli_fetch_array($res2,MYSQLI_ASSOC)){
	array_push($name1,$row1['Batch_Id']);
	array_push($name2,$row1['Batch_Subject']);
	
	
}


?>

<html>
<body>
<div id="myDiv">Append here</div>
<script src="jsfile/Add_Batches_S/s1.js">
</script>
</body>
</html>