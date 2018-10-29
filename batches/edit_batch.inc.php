<?php 
	// Extract the row to edit	
	$sql = "SELECT Batch_Code, Batch_Subject 
            FROM Batch_Details WHERE Batch_Id= $batch_id";

    // create a prepared statement 
    /*$stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $batch_id);
    $stmt->execute();
    $stmt->close();*/

    $result = mysqli_query($conn, $sql);

    $rowcount = mysqli_num_rows($result);


    if (!$result) 
    {

    	$error = 'Error fetching the selected batch.';
        include 'includes/error.html.php';
        exit();
    }

    $row = mysqli_fetch_array($result);

    $batch_code     = $row['Batch_Code'];
    $batch_subject  = $row['Batch_Subject'];

    // echo $batch_id . ' ' . $batch_code . ': ' . $batch_subject; exit();