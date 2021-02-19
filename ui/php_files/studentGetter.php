<table id="students" class="table table-bordered table-striped">
	<thead>
		<tr>
		  <th>Name</th>
		  <th>User Id</th>
		  <th>Password</th>
		  <th>Action</th>
		</tr>
	</thead>
	<tbody id="candidateTbody">
<?php
	include 'config.php';

	$sql = mysqli_query($conn,"SELECT * from student where electionId = '".$_POST['electionIdHandler']."' ");
	$count = 0;
	while ($data = mysqli_fetch_array($sql)) {
		$count ++;
	    ?>
			<tr>
			
				<td><?php echo $data['firstName'] . " " . $data['middleName'] . ' '. $data['lastName']; ?></td>
				<td><?php echo $data['userName']; ?></td>
				<td>
					<?php
				 		echo $data['password'];
				 	?>
				 </td>
				<td>
					<button class="btn btn-primary editStudent" id="" studId="<?php echo $data['studentId']; ?>" data-toggle="modal" data-target="#modal-edit-students"><i class="fa fa-edit"></i></button>
					<button class="btn btn-warning deleteStudent" id="" studId="<?php echo $data['studentId']; ?>"><i class="fa fa-trash"></i></button>
				</td>


				
			</tr>
	    <?php
	    
	}
?>
	<span class="hiddenCount" spanValue="<?php echo $count; ?>"></span>
	</tbody>
	<tfoot>
		<tr>
		  <th>Name</th>
		  <th>Position</th>
		  <th>Party Lists</th>
		  <th>Action</th>
		</tr>
	</tfoot>
</table>

<script>
	$('#students').DataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : true
    })
</script>