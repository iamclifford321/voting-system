<table id="candidates" class="table table-bordered table-striped">
	<thead>
		<tr>
		  <th>Election Name</th>
		  <th>School Name</th>
		  <th>Election For</th>
		  <th>Status</th>
		  <th>Action</th>
		</tr>
	</thead>
	<tbody id="candidateTbody">
<?php
	include 'config.php';
	$sql = mysqli_query($conn,"SELECT * from election where userId = '".$_POST['userIdHandler']."' && electionId != '".$_POST['electionIdHandler']."'");
		while ( $data = mysqli_fetch_array($sql) ) {
	     ?>
	        <tr>
	          <td>
	            <?php echo $data['electionName']; ?>
	          </td>

			  <td>
			  	<?php
			  		echo $data['schoolName'];
			  	?>
			  </td>

			  <td>
				<?php
					if ( $data['electionFor'] == 'junior' || $data['electionFor'] == 'senior' ) {
						echo ucfirst($data['electionFor']) . ' High';
					}else{
						echo ucfirst($data['electionFor']);
					}
				?>
			  </td>

	          <td>
	            <?php
	            if ($data['status'] == 'In Progres') {
	              ?>
	                  <i class="fa fa-circle" style="color: rgb(115,239,119)"></i>
	              <?php
	            }else{
	              ?>
	                  <i class="fa fa-circle" style="color: rgba(255,3,3,0.56)"></i>
	              <?php
	            }
	             echo $data['status']; 
	             ?>
	          </td>

	          <td>
	            <button type="button" class="btn btn-primary visitElection" style="padding: 5px; height: 30px" data-id = "<?php echo $data['electionId']; ?>"
	              data-name = "<?php echo $data['electionName']; ?>" data-type = "<?php echo $data['electionFor'] ?>"><i class="fa fa-eye"></i></button>
	            <button type="button" class="btn btn-danger deleteElection" style="padding: 5px; height: 30px" data-id = "<?php echo $data['electionId']; ?>"><i class="fa fa-trash"></i></button>
	            <button type="button" class="btn btn-success EditElection" style="padding: 5px; height: 30px" data-id = "<?php echo $data['electionId']; ?>" data-name = "<?php echo $data['schoolName']; ?>" data-toggle="modal" data-target="#modal-edit-Election"><i class="fa fa-edit"></i></button>
	          </td>
	        </tr>
	     <?php 
	  	}
?>

	</tbody>
	<tfoot>
		<tr>
		  <th>Election Name</th>
		  <th>School Name</th>
		  <th>Election For</th>
		  <th>Status</th>
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