<!--
		****************************
		****************************
		****************************
		****************************
		*** high school (junior) ***
		****************************
		****************************
		****************************
		**************************** 
							-->
		<script src="ui/plugins/forUpdates.js"></script>
		<div class="juniorHighSchool">
			<input type="hidden" name="idForCan" value="<?php echo $id ?>">
			<input type="hidden" name="identificationEdit" value="junior">
			<div class="box-body">
	          <div class="row">
	            <div class="col-md-6">
	              <div class="form-group">
	                <label>First Name</label>
					<input type="text" class="form-control" required id="firstNameEdit" value="<?php echo $data['firstName']; ?>">
	              </div>
	              <!-- /.form-group -->
	              <div class="form-group">
	                <label>Middle Name</label>
	   				<input type="text" class="form-control" required id="middleNameEdit" value="<?php echo $data['middleName']; ?>">
	              </div>
	            </div>

	            <!-- /.col -->
	            <div class="col-md-6">
	              <div class="form-group">
	                <label>Last Name</label>
	   				<input type="text" class="form-control" required id="lastNameEdit" value="<?php echo $data['lastName']; ?>">
	              </div>
	            </div>
	          	<div class="col-md-6">

	          		<label>Grade / Year</label>
		              
		      			<select name="GradeOrYearEdit" id="GradeOrYearEdit" class="form-control" style="width: 100%" required>
		      			
		      				<?php 
		      				$starting = 7;
		      					while ( $starting <= 10 ) {
		      					 if ($data['grade'] == 'Grade ' . $starting ) {
		      					 	echo '<option value="Grade '.$starting.'" Selected>Grade '.$starting.'</option>';
		      					 }else{
		      					 	echo '<option value="Grade '.$starting.'">Grade '.$starting.'</option>';
		      					 }
		      					 
		      					 $starting ++;   
		      					}
		      				 ?>
		   				</select>
		             
	          	</div>
	            <!-- /.col -->
	          </div>
	          <div class="row">

	          	<div class="col-md-12">
	          		<label>Room / Section</label>
		              <div class="input-group">
		                <div class="input-group-btn"> 
		                  <button type="button" class="btn btn-primary modal-btnEdit" custom-data-toggle="custom-modalEdit" custom-data-target="#room-SectionEdit"><i class="fa fa-plus-square"></i> new</button>
		                </div>
		                <!-- /btn-group -->
		      			<select name="roomOrSectionEdit" id="roomOrSectionEdit" class="form-control" style="width: 100%" required>
		      				<?php

		      					while ( $roomorsectionData = mysqli_fetch_array($roomorsectionSql) ) {
		      					    if ($data['roomorsection'] == $roomorsectionData['roomOrSectionId']) {
		      					    	?>
											<option value="<?php echo $roomorsectionData['roomOrSectionId'] ?>" selected><?php echo $roomorsectionData['roomOrSectionName'];  ?></option>
		      					    	<?php
		      					    }else{
		      					    	?>
											<option value="<?php echo $roomorsectionData['roomOrSectionId'] ?>"><?php echo $roomorsectionData['roomOrSectionName'];  ?></option>
		      					    	<?php
		      					    }
		      					}

		      				?>
		   				</select>
		              </div>
	          	</div>
	          </div>
	        </div>
	        <!-- /.box-body -->
		</div>


	

		<!-- 
		*
		**
		***
		**** modals
		***
		**
		* 
		-->



		<div class="coversAllEdit">
	


	
			<div class="custom-modalEdit" id="room-SectionEdit">
			  <div class="modal-dialog modal-md">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close custom-close" aria-label="Close">
			          <span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title"> <i class="fa fa-edit"></i> Add Room / Section</h4>
			      </div>
			      <div class="modal-body">
					<div class="box-body">
						<div class="form-group">
							<label>Room or Section name </label>
							<input type="text" class="form-control" id="RoomOrSectionValEdit">
						</div>
					</div>
				
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-default pull-left custom-close">Close</button>
			        <button type="button" class="btn btn-primary" id="saveRoomOrSectionEdit">Save</button>
			      </div>
			    </div>
			    <!-- /.modal-content -->
			  </div>
			  <!-- /.modal-dialog -->
			</div>

	
		</div>
	<script>
			$(function () {
			    $('#partylistEdit, #positionEdit, #yearLevelEdit, #courseEdit, #majorEdit, #roomOrSectionEdit').select2();
			    $('#datepickerEdit').datepicker({
			      autoclose: true
			    })
		  	})
	</script>


		          <!-- 
					 *
					**
				  **** 
		  modals ***** 
				  ****  
					** 
					 * 
					 -->



	<!--
		****************************
		****************************
		****************************
		****************************
		*** high school (junior) ***
		****************************
		****************************
		****************************
		**************************** 
							-->
