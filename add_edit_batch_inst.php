<?php 
    // session_start();
    // login first
    /**
        Warning: This is ONLY for debuging purpose; 
        MUST be removed (i.e. lines 4 to 11) in the live server.
    **/
    // to display errors
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    include '_includes/helpers.inc.php';




    include '_includes/db1.inc.php';    


    
    if (!isset($_SESSION['loginid'])) 
    {
        
        // ADD NEW BATCH
        if (isset($_POST['add-new']) AND $_POST['add-new'] == "Add New") 
        {
            include '_includes/db.inc.php';

            // assign variables for add/edit batches
            $Batch_Id = '';
            $Batch_Code = '';
            $Batch_Subject = '';
            $button = 'Add Batch';
            $name = 'add';

            // Display the batches from the database
            include 'get_batches.inc.php';            

            include 'batches_form.html.php';
            exit();
        }


        // Add data

        if(isset($_POST['add']) AND $_POST['add'] == "Add Batch") 
        {
            include '_includes/db.inc.php';

            // form validation
            include 'form_validation.inc.php';

            
            // Add batch details
            include 'add_batch.inc.php';

            header('Location: ' . $_SERVER['REQUEST_URI']);
            exit();
        
        } 

        /* edit a batch */
        if (isset($_POST['edit']) AND $_POST['edit'] == "Edit") 
        {   
            include '_includes/db.inc.php';

            $batch_id = sanitize($_POST['batch_id']);
            $button = 'Update Batch';
            $name = 'update';

            // Extract the row to edit
            include 'edit_batch.inc.php';

            // Display the batches from the database
            include 'get_batches.inc.php'; 

            // Display form with selected batch details to edit
            include 'batches_form.html.php';
            exit();
        }


        // update the selected batch
        if(isset($_POST['update']) AND $_POST['update'] == "Update Batch")
        {
            include '_includes/db.inc.php';

            // sanitizing the input values and form validation
            include 'form_validation.inc.php';
            // batch_id
            if ($batch_id == '') 
            {
                $error = 'Some problems with update. Check with the developer team.';
                include 'includes/error.html.php';
                exit();
            }

            // Update the selected batch
            include 'update_batch.inc.php';

            header('Location: ' . $_SERVER['REQUEST_URI']);
            exit();
        }
    
        /* to delete a batch (actually changing 'Ent_Type' to 'D') */

        if (isset($_POST['delete']) AND $_POST['delete'] == "Delete") 
        {
            include '_includes/db.inc.php';

            $batch_id = sanitize($_POST['batch_id']);

            // change the 'Ent_Type'
            include 'delete_batch.inc.php';

            header('Location: .');
            exit();
    	} 

        /* Display the list of batches */
        include '_includes/db.inc.php';

        // assign variables for add/edit batches
        $batch_id = '';
        $batch_code = '';
        $batch_subject = '';
        $button = 'Add Batch';
        $name = 'add';
        
        // Display the batches from the database
        include 'get_batches.inc.php';

        include 'batches_form.html.php';

 
}
else {
        header('Location: .');
        exit();
    }
	?>

                 <hr />