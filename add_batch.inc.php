<?php 
	
	// insert new batch
	$sql = "INSERT INTO 
            `id1697281_ss_portal`.`batch_details` SET 
            Batch_Id = NULL,
            Batch_Code = ?,
            Batch_Subject = ?,
            Ent_Type = 'I'";

    // create a prepared statement 
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $Batch_Code, $Batch_Subject);
    $stmt->execute();
    $stmt->close();