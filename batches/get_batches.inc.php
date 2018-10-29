<?php 
	
	// Display the batches from the database
	$sql = "SELECT * FROM Batch_Details WHERE `Ent_Type` != 'D'";
    $res2 = mysqli_query($conn, $sql);
    $result = array();
    /*$code = array(); 
    $subject = array(); */
    $rowcount=mysqli_num_rows($res2);

    if ($rowcount > 0) 
    {
        // display batches
        while ($row1 = mysqli_fetch_array($res2))
        {
                        
            $rows[] = $row1;
        }
        include 'display_batches.html.php';
    }
    else 
    {
        $error = "No batches to display.";
        include 'no_batches.html.php';
    }

    // $add_new = '<a href="?add"><button class="btn">Add New</button></a>';
    