<table class="table table-bordered list">
	<thead>
		<tr>
			<th>S.No.</th>
			<th>Batch Code</th>
			<th>Batch Subject</th>
			<th colspan="2">Action</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($rows as $row): ?>
			<tr>
				<td></td>
				<td><?php echo $row['Batch_Code']; ?></td>
				<td><?php echo $row['Batch_Subject']; ?></td>
				<td>
					<form action="" method="post"> 
                        <input type="hidden" name="batch_id" value="<?php echo $row['Batch_Id']; ?>" />
                        <input type="submit" class="btn btn-primary" name="edit" value="Edit" />
                    </form>
				</td>
				<td>
					<form action="" method="post"> 
                        <input type="hidden" name="batch_id" value="<?php echo $row['Batch_Id']; ?>" />
                        <input type="submit" class="btn btn-danger" name="delete" value="Delete" />
                    </form>
				</td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>
<!-- /.table table-bordered list -->
		
	