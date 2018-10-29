<?php 
	
	// Update batch details
    $sql = "UPDATE `Batch_Details` SET 
                `Batch_Code` = ?, `Batch_Subject` = ?, Ent_Type = 'E' 
                WHERE `Batch_Details`.`Batch_Id` = ?";

    // create a prepared statement 
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssi", $batch_code, $batch_subject, $batch_id);
    $stmt->execute();
    $stmt->close();