<?php 
	
	// sanitizing the input values and form validation

    $batch_id = sanitize($_POST['batch_id']);
    $batch_code = sanitize($_POST['batch_code']);
    $batch_subject = sanitize($_POST['batch_subject']);

	// batch_code
    if ($batch_code == '') 
    {
        echo "Batch code can't be left blank! ";
    }

    // batch_subject
    if ($batch_subject == '') 
    {
        echo "Batch subject can't be left blank! ";
    }
