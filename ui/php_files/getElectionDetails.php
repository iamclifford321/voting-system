<?php
	include 'config.php';
	$sql = mysqli_query($conn, "SELECT * from election where electionId = '".$_POST['electionId']."'");
	$data = mysqli_fetch_array($sql);
	$electionForArr = [ 'junior', 'senior', 'college' ];
	foreach ($electionForArr as $electionForArrValue) {

		if ($electionForArrValue == $data['electionFor']) {
			?>
				
				<option value="<?php echo $electionForArrValue; ?>" selected>
					<?php
						if ( $electionForArrValue == 'junior' || $electionForArrValue == 'senior' ) {
							echo ucfirst($electionForArrValue) . ' High';
						}else{
							echo ucfirst($electionForArrValue);
						}
					?>
				</option>

			<?php	
		}else{

			?>
				
				<option value="<?php echo $electionForArrValue; ?>">
					<?php
						if ( $electionForArrValue == 'junior' || $electionForArrValue == 'senior' ) {
							echo ucfirst($electionForArrValue) . ' High';
						}else{
							echo ucfirst($electionForArrValue);
						}
					?>
				</option>

			<?php	

		}

	}