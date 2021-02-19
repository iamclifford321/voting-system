<table id="candidates" class="table table-bordered table-striped">
	<thead>
		<tr>
		  <th>Name</th>
		  <th>Email</th>
		  <th>Password</th>
		  <th>Type</th>
		  <th>Action</th>
		</tr>
	</thead>
	<tbody id="candidateTbody">
<?php
	include 'config.php';
	$sql = mysqli_query($conn,"SELECT * from users where userAbove = '".$_POST['userIdHandler']."' and electionId = '".$_POST['electionIdHandler']."' ");
		while ( $data = mysqli_fetch_array($sql) ) {
	     ?>
	        <tr>
	          <td>
	            <?php echo $data['firstName']. ' ' . $data['lastName']; ?>
	          </td>


			  <td>
				<?php echo $data['email']; ?>
			  </td>
			  <td>
	            <?php echo $data['password']; ?>
	          </td>
	          <td>
	            <?php echo $data['type']; ?>
	          </td>

	          <td>

	            <button type="button" class="btn btn-danger deleteUser" style="padding: 5px; height: 30px" data-id = "<?php echo $data['userId']; ?>"><i class="fa fa-trash"></i></button>

	          </td>
	        </tr>
	     <?php 
	  	}
?>

	</tbody>
	<tfoot>
		<tr>
		  <th>Name</th>
		  <th>Email</th>
		  <th>Password</th>
		  <th>Type</th>
		  <th>Action</th>
		</tr>
	</tfoot>
</table>

<script>
	$('#candidates').DataTable({
      'paging'      : false,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : false,
      'info'        : true,
      'autoWidth'   : true
    })
</script>