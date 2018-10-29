<div id="add-edit" class="form-group">
  <form id="add-edit" action="" method="post">
    <div class="form-group">
      <label for="batch_code">Batch Code:</label>
      <input type="text" class="form-control" id="batch_code" name="batch_code" value="<?php echo $batch_code; ?>" placeholder="Batch Code">
    </div>
    <div class="form-group">
      <label for="batch_name">Batch Name:</label>
      <input type="text" class="form-control" id="batch_subject" name="batch_subject" value="<?php echo $batch_subject; ?>" placeholder="Batch Name">
    </div>
    <input type="hidden" name="batch_id" value="<?php echo $batch_id; ?>" />
    <input type="submit" class="btn btn-info" name="<?php echo $name; ?>" value="<?php echo $button; ?>" />
  </form>
</div>
<!-- #add-edit .form-group -->