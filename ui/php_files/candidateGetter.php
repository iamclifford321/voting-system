<table id="candidates" class="table table-bordered table-striped">
	<thead>
		<tr>
		  <th>Name</th>
		  <th>Position</th>
		  <th>Party Lists</th>
		  <th>Sex</th>
		  <th>Action</th>
		</tr>
	</thead>
	<tbody id="candidateTbody">
<?php
	include 'config.php';

	$sql = mysqli_query($conn,"SELECT candidateId, firstName, lastName, (SELECT positionName from position where positionId = position) as positionName, (SELECT partyListName from partylist where partyId = partyList ) as partyListName, sex from candidate where electionId = '".$_POST['electionIdHandler']."' ");
	while ($data = mysqli_fetch_array($sql)) {
		
	    ?>
			<tr>
				<td><?php echo $data['firstName'] . " " . $data['lastName']; ?></td>
				<td><?php echo $data['positionName']; ?></td>
				<td><?php echo $data['partyListName']; ?></td>
				<td><?php echo $data['sex']; ?></td>
				<td>
					<button class="btn btn-primary editCandidate" id="" canId="<?php echo $data['candidateId']; ?>" data-toggle="modal" data-target="#modal-edit-candidate-candidate"><i class="fa fa-edit"></i></button>
					<button class="btn btn-warning deleteCandidate" id="" canId="<?php echo $data['candidateId']; ?>"><i class="fa fa-trash"></i></button>
				</td>


				
			</tr>
	    <?php
	}
?>

	</tbody>
	<tfoot>
		<tr>
		  <th>Name</th>
		  <th>Position</th>
		  <th>Party Lists</th>
		  <th>Sex</th>
		  <th>Action</th>
		</tr>
	</tfoot>
</table>

<script>
	$('#candidates').DataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : true
    })
</script>