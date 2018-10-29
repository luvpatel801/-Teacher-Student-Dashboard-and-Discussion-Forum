<?php 
	
	// update the row with `Ent_Type` = 'D'
	$sql = "UPDATE 'id1697281_ss_portal'.`batch_details` 
                        SET `Ent_Type` = 'D' 
                        WHERE `batch_details`.`Batch_Id` = ?"; 
                        
    // Courtesy: http://php.net/manual/en/mysqli.prepare.php 
    // create a prepared statement 
    if ($stmt = mysqli_prepare ($conn, $sql)) {
        
        // bind parameters for markers 
        mysqli_stmt_bind_param($stmt, "i", $batch_id);

        // execute query 
        mysqli_stmt_execute($stmt);

        // fetch value 
        mysqli_stmt_fetch($stmt);

        // close statement 
        mysqli_stmt_close($stmt);
    }