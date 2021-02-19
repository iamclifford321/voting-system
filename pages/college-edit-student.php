<!--
		****************************
		****************************
		****************************
		****************************
		*** College ***
		****************************
		****************************
		****************************
		**************************** 
							-->
		<script src="ui/plugins/forUpdates.js"></script>
		<div class="college">
			<input type="hidden" name="idForCan" value="<?php echo $id ?>">
			<input type="hidden" name="identificationEdit" value="college">
			<div class="box-body">
	          <div class="row">
	            <div class="col-md-6">
	              <div class="form-group">
	                <label>First Name</label>
					<input type="text" class="form-control" required id="firstNameEdit" value="<?php echo $data['firstName'] ?>">
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
	   				<input type="text" class="form-control" required id="lastNameEdit" value="<?php echo $data['lastName'] ?>">
	              </div>
	          
	            </div>

	          	<div class="col-md-6">
	          		<label>Year level</label>
		              <div class="input-group">
		                <div class="input-group-btn">
		                  <button type="button" class="btn btn-primary modal-btnEdit" custom-data-toggle="custom-modalEdit" custom-data-target="#yearlevelmodalEdit"><i class="fa fa-plus-square"></i> new</button>
		                </div>
		                <!-- /btn-group -->
		      			<select name="yearLevelEdit" id="yearLevelEdit" class="form-control" style="width: 100%" required>
		      				<?php
		      					while ($yearlevelData = mysqli_fetch_array($yearlevelSql)) {
		      					    if ($yearlevelData['yearLevelid'] == $data['yearlevel']) {

		      					    	?>
											<option value="<?php echo $yearlevelData['yearLevelid']; ?>" selected >
												<?php echo $yearlevelData['Year']; ?>
											</option>
		      					    	<?php
		      					    	
		      					    }else{

		      					    	?>
											<option value="<?php echo $yearlevelData['yearLevelid']; ?>">
												<?php echo $yearlevelData['Year']; ?>
											</option>
		      					    	<?php

		      					    }
		      					}
		      				?>
		   				</select>
		              </div>
	          	</div>

	            <!-- /.col -->
	          </div>

	          	<div class="col-md-6">
	          		<label>Course</label>
		              <div class="input-group">
		                <div class="input-group-btn">
		                  <button type="button" class="btn btn-primary modal-btnEdit" custom-data-toggle="custom-modalEdit" custom-data-target="#coursesmodalEdit"><i class="fa fa-plus-square"></i> new</button>
		                </div>
		                <!-- /btn-group -->
		      			<select name="courseEdit" id="courseEdit" class="form-control" style="width: 100%" required>
		      				<?php

		      					while ($courseData = mysqli_fetch_array($courseSql)) {
		      					    if ($courseData['courseId'] == $data['course']) {
		      					    	?>
											<option value="<?php echo $courseData['courseId'] ?>" selected>
												<?php
													echo $courseData['courseName'];
												?>
											</option>
		      					    	<?php
		      					    }else{

		      					    	?>
											<option value="<?php echo $courseData['courseId'] ?>">
												<?php
													echo $courseData['courseName'];
												?>
											</option>
		      					    	<?php
		      					    }

		      					   
		      					}

		      				?>
		   					
		   				</select>
		              </div>
	          	</div>
	          	<div class="col-md-6">
	          		<label>Major</label>
		              <div class="input-group">
		                <div class="input-group-btn">
		                  <button type="button" class="btn btn-primary modal-btnEdit" custom-data-toggle="custom-modalEdit" custom-data-target="#majormodalEdit"><i class="fa fa-plus-square"></i> new</button>
		                </div>
		                <!-- /btn-group -->
		      			<select name="majorEdit" id="majorEdit" class="form-control" style="width: 100%">
		      				<?php
		      					while ($majorData = mysqli_fetch_array($majorSql)) {
		      					    if ($majorData['majorId'] == $data['major']) {
		      					    	?>
											<option value="<?php echo $majorData['majorId'] ?>" selected>
												<?php 
													echo $majorData['majorName'];
												 ?>
											</option>
		      					    	<?php
		      					    }else{
		      					    	?>
											<option value="<?php echo $majorData['majorId'] ?>">
												<?php 
													echo $majorData['majorName'];
												 ?>
											</option>
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


	
			<div class="custom-modalEdit" id="yearlevelmodalEdit">
			  <div class="modal-dialog modal-md">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close custom-close" aria-label="Close">
			          <span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title"> <i class="fa fa-edit"></i> Add Year level</h4>
			      </div>
			      <div class="modal-body">
					<div class="box-body">
						<div class="form-group">
							<label>Year level </label>
							<input type="text" class="form-control" name="input_yearLevelEdit">
						</div>
					</div>
				
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-default pull-left custom-close">Close</button>
			        <button type="button" class="btn btn-primary" name="btnyearLevelEdit" >Save</button>
			      </div>
			    </div>
			    <!-- /.modal-content -->
			  </div>
			  <!-- /.modal-dialog -->
			</div>

			<div class="custom-modalEdit" id="majormodalEdit">
			  <div class="modal-dialog modal-md">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close custom-close" aria-label="Close">
			          <span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title"> <i class="fa fa-edit"></i> Add Major</h4>
			      </div>
			      <div class="modal-body">
					<div class="box-body">
						<div class="form-group">
							<label>Major</label>
							<input type="text" class="form-control" name="input_majorEdit">
						</div>
					</div>
				
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-default pull-left custom-close">Close</button>
			        <button type="button" class="btn btn-primary" name="btnmajorEdit">Save</button>
			      </div>
			    </div>
			    <!-- /.modal-content -->
			  </div>
			  <!-- /.modal-dialog -->
			</div>
	
			<div class="custom-modalEdit" id="coursesmodalEdit">
			  <div class="modal-dialog modal-md">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close custom-close" aria-label="Close">
			          <span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title"> <i class="fa fa-edit"></i> Add Course</h4>
			      </div>
			      <div class="modal-body">
					<div class="box-body">
						<div class="form-group">
							<label>Course Name</label>
							<input type="text" class="form-control" name="input_courseEdit">
						</div>
					</div>
				
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-default pull-left custom-close">Close</button>
			        <button type="button" class="btn btn-primary" name="btncourseEdit">Save</button>
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
		*** College ***
		****************************
		****************************
		****************************
		**************************** 
							-->
