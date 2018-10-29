<?php 
	
	// insert new batch
	$sql = "INSERT INTO 
            `Batch_Details` SET 
            batch_id = NULL,
            batch_code = ?,
            batch_subject = ?,
            Ent_Type = 'I'";

    // create a prepared statement 
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $batch_code, $batch_subject);
    $stmt->execute();
    $stmt->close();