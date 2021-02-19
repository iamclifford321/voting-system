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

	              <!-- row -->
					<div class="row">
						<div class="col-md-6">
			              <!-- /.form-group -->
			              <div class="form-group">
			                <label>Age</label>
			   				<input type="Number" class="form-control" required id="ageEdit" value="<?php echo $data['age']; ?>">
			              </div>
			              <!-- /.form-group -->
						</div>
						<div class="col-md-6">
			              <!-- /.form-group -->
			              <div class="form-group">
			                <label>Sex</label>
			   				<select name="sexEdit" id="sexEdit" class="form-control" required>
			   					<?php 
			   						$sex = ['Male','Female'];

			   						foreach ($sex as $sexValue) {
			   							if ($data['sex'] == $sexValue) {
			   								?>
												<option value="<?php echo $sexValue; ?>" selected> <?php echo $sexValue; ?></option>
			   								<?php
			   							}else{
			   								?>
												<option value="<?php echo $sexValue; ?>"> <?php echo $sexValue; ?></option>
			   								<?php
			   							}
			   						}
			   					 ?>
			   				</select>
			              </div>
			              <!-- /.form-group -->	
						</div>
					</div>
	              <!-- / row -->

	            </div>
	            <!-- /.col -->
	            <div class="col-md-6">
	              <div class="form-group">
	                <label>Last Name</label>
	   				<input type="text" class="form-control" required id="lastNameEdit" value="<?php echo $data['lastName'] ?>">
	              </div>
	              <!-- /.form-group -->
		  			<div class="form-group">
		                <label>Facebook Url</label> <small class="text-muted">(Optional)</small>
		   				<input type="text" class="form-control" id="urlEdit" value="<?php echo $data['facebookUrl']; ?>">
		            </div>
	              <!-- /.form-group -->
	            <div class="form-group">
	                <label>Date Birth</label>

	                <div class="input-group">
	                  <div class="input-group-addon">
	                    <i class="fa fa-calendar"></i>
	                  </div>
	                  <input type="text" class="form-control" id="datepickerEdit" required value="<?php echo $data['birthDate']; ?>">
	                </div>
	                <!-- /.input group -->
	            </div>
	              <!-- /.form group -->
	            </div>

	            <!-- /.col -->
	          </div>
	          <!-- /.row -->
	          <div class="row">
	          	<div class="col-md-7">
					<div class="form-group">
	          		  <label>Party list</label>
		              <div class="input-group">
		                <div class="input-group-btn">
		                  <button type="button" class="btn btn-primary modal-btnEdit" custom-data-toggle="custom-modalEdit" custom-data-target="#partylistmodalEdit"><i class="fa fa-plus-square"></i> new</button>
		                </div>
		                <!-- /btn-group -->
		      			<select name="partylistEdit" id="partylistEdit" class="form-control" style="width: 100%" required>
		      				<?php
		      					while ($partylistData = mysqli_fetch_array($partylistSql)) {
		      					   if ($partylistData['partyId'] == $data['partyList']) {
		      					    	?>
											<option value="<?php echo $partylistData['partyId']; ?>" selected ><?php echo $partylistData['partyListName']; ?></option>
		      					    	<?php
		      					    }else{
		      					    	?>
											<option value="<?php echo $partylistData['partyId']; ?>" ><?php echo $partylistData['partyListName']; ?></option>
		      					    	<?php
		      					    } 
		      					}
		      				?>

		   				</select>
		              </div> 
					</div>
	          		
	          	</div>
	          	<div class="col-md-5">
	          		<div class="form-group">
	          		  <label>Position</label>
		              <div class="input-group">
		                <div class="input-group-btn">
		                  <button type="button" class="btn btn-primary modal-btnEdit" custom-data-toggle="custom-modalEdit" custom-data-target="#positionmodalEdit"><i class="fa fa-plus-square"></i> new</button>
		                </div>
		                <!-- /btn-group -->
		      			<select name="positionEdit" id="positionEdit" class="form-control" style="width: 100%" required>
		      				<?php
		      					while ($positionData = mysqli_fetch_array($positionSql)) {
		      					    if ($positionData['positionId'] == $data['position']) {
		      					    	?>
											<option value="<?php echo $positionData['positionId']; ?>" selected ><?php echo $positionData['positionName']; ?></option>
		      					    	<?php
		      					    }else{
		      					    	?>
											<option value="<?php echo $positionData['positionId']; ?>"><?php echo $positionData['positionName']; ?></option>
		      					    	<?php
		      					    }
		      					}
		      				?>
		   					
		   				</select>
		              </div> 
	          		</div>
	     
	          		
	          	</div>
	          </div>
	          <!-- row -->
	          <div class="row">
	          	<div class="col-md-4">
	          		<label>Year level</label>
		              <div class="input-group">
		                <div class="input-group-btn">
		                  <button type="button" class="btn btn-primary modal-btnEdit" custom-data-toggle="custom-modalEdit" custom-data-target="#yearlevelmodalEdit"><i class="fa fa-plus-square"></i> new</button>
		                </div>
		                <!-- /btn-group -->
		      			<select name="yearLevelEdit" id="yearLevelEdit" class="form-control" style="width: 100%" required>
		      				<?php
		      					while ($yearlevelData = mysqli_fetch_array($yearlevelSql)) {
		      					    if ($yearlevelData['yearLevelid'] == $data['yearLevel']) {

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
	          	<div class="col-md-4">
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
	          	<div class="col-md-4">
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
			<div class="custom-modalEdit" id="partylistmodalEdit">
			  <div class="modal-dialog modal-md">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close custom-close" aria-label="Close">
			          <span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title"> <i class="fa fa-edit"></i> Add partylist</h4>
			      </div>
			      <div class="modal-body">
			              
					
					<div class="box-body">
						<div class="form-group">
							<label>Partylist Name</label>
							<input type="text" class="form-control" id="partyNameEdit">
						</div>
					</div>

				
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-default pull-left custom-close">Close</button>
			        <button type="button" class="btn btn-primary" id="savePartyEdit" name="partylistbtnEdit">Save</button>
			      </div>
			    </div>
			    <!-- /.modal-content -->
			  </div>
			  <!-- /.modal-dialog -->
			</div>

			<div class="custom-modalEdit" id="positionmodalEdit">
			  <div class="modal-dialog modal-md">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close custom-close" aria-label="Close">
			          <span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title"> <i class="fa fa-edit"></i> Add Position</h4>
			      </div>
			      <div class="modal-body">
					<div class="box-body">
						<div class="form-group">
							<label>Position Name</label>
							<input type="text" class="form-control" id="positionNameEdit">
						</div>
						<div class="form-group">
							<label>Who can vote in this position <i class="fa fa-question-circle"></i></label>
			                
							<select name="WhoCan" class="form-control" >
								<option value="all">All</option>
								<option value="yearlevel">Year Level</option>
								<option value="course">Course</option>
								<option value="major">Major</option>
							</select>

						</div>

						<div class="jumbotron-cutom bg-warning">
		                  <p class="text-warning"><b> <i class="fa fa-info-circle"></i> Reminder</b> <br/>
							<ul>
								<li><small>All - All student can vote in this postion.</small></li>
								<li><small>Year Level - Only student that has same year level as the candidate can vote in this postion.</small></li>
								<li><small>Course - Only student that has same course as the candidate can vote in this postion.</small></li>
								<li><small>Major - Only student that has same major as the candidate can vote in this postion.</small></li>
							</ul>
		                  </p>
		                </div>
						<div class="form-group">
							<label>Type</label>
							<select name="typeEdit" id="typeEdit" class="form-control">
								<option value="multi">Multi select</option>
								<option value="single" selected>Single select</option>

							</select>
						</div>
						<div class="limitSelect">
							<hr>
							<div class="row">

								<div class="col-md-6">
									<div class="form-group">
										<label>Min </label>
										<input type="number" name="minimumEdit" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label > Max </label>
										<input type="number" name="maximumEdit" class="form-control">
									</div>
								</div>
							</div>							
						</div>

					</div>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-default pull-left custom-close">Close</button>
			        <button type="button" class="btn btn-primary"  name="positiontbtnEdit">Save</button>
			      </div>
			    </div>
			    <!-- /.modal-content -->
			  </div>
			  <!-- /.modal-dialog -->
			</div>
	
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
