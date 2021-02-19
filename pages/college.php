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
		<div class="college">
			<input type="hidden" name="identification" value="college">
			<div class="box-body">
	          <div class="row">
	            <div class="col-md-6">
	              <div class="form-group">
	                <label>First Name</label>
					<input type="text" class="form-control" required id="firstName">
	              </div>
	              <!-- /.form-group -->
	              <div class="form-group">
	                <label>Middle Name</label>
	   				<input type="text" class="form-control" required id="middleName">
	              </div>

	              <!-- row -->
					<div class="row">
						<div class="col-md-6">
			              <!-- /.form-group -->
			              <div class="form-group">
			                <label>Age</label>
			   				<input type="Number" class="form-control" required id="age">
			              </div>
			              <!-- /.form-group -->
						</div>
						<div class="col-md-6">
			              <!-- /.form-group -->
			              <div class="form-group">
			                <label>Sex</label>
			   				<select name="sex" id="sex" class="form-control" required id="sex">
			   					<option value="Male">Male</option>
			   					<option value="Female">Female</option>
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
	   				<input type="text" class="form-control" required id="lastName">
	              </div>
	              <!-- /.form-group -->
		  			<div class="form-group">
		                <label>Facebook Url</label> <small class="text-muted">(Optional)</small>
		   				<input type="text" class="form-control" id="url">
		            </div>
	              <!-- /.form-group -->
	            <div class="form-group">
	                <label>Date Birth</label>

	                <div class="input-group">
	                  <div class="input-group-addon">
	                    <i class="fa fa-calendar"></i>
	                  </div>
	                  <input type="text" class="form-control" id="datepicker" required>
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
		                  <button type="button" class="btn btn-primary modal-btn" custom-data-toggle="custom-modal" custom-data-target="#partylistmodal"><i class="fa fa-plus-square"></i> new</button>
		                </div>
		                <!-- /btn-group -->
		      			<select name="partylist" id="partylist" class="form-control" style="width: 100%" required>
		      				<option value="">---- o0o ----</option>

		   				</select>
		              </div> 
					</div>
	          		
	          	</div>
	          	<div class="col-md-5">
	          		<div class="form-group">
	          		  <label>Position</label>
		              <div class="input-group">
		                <div class="input-group-btn">
		                  <button type="button" class="btn btn-primary modal-btn" custom-data-toggle="custom-modal" custom-data-target="#positionmodal"><i class="fa fa-plus-square"></i> new</button>
		                </div>
		                <!-- /btn-group -->
		      			<select name="position" id="position" class="form-control" style="width: 100%" required>
		      				<option value="">---- o0o ----</option>
		   					
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
		                  <button type="button" class="btn btn-primary modal-btn" custom-data-toggle="custom-modal" custom-data-target="#yearlevelmodal"><i class="fa fa-plus-square"></i> new</button>
		                </div>
		                <!-- /btn-group -->
		      			<select name="yearLevel" id="yearLevel" class="form-control" style="width: 100%" required>
		      				<option value="">---- o0o ----</option>
		   				</select>
		              </div>
	          	</div>
	          	<div class="col-md-4">
	          		<label>Course</label>
		              <div class="input-group">
		                <div class="input-group-btn">
		                  <button type="button" class="btn btn-primary modal-btn" custom-data-toggle="custom-modal" custom-data-target="#coursesmodal"><i class="fa fa-plus-square"></i> new</button>
		                </div>
		                <!-- /btn-group -->
		      			<select name="course" id="course" class="form-control" style="width: 100%" required>
		      				<option value="">---- o0o ----</option>
		   					
		   				</select>
		              </div>
	          	</div>
	          	<div class="col-md-4">
	          		<label>Major</label>
		              <div class="input-group">
		                <div class="input-group-btn">
		                  <button type="button" class="btn btn-primary modal-btn" custom-data-toggle="custom-modal" custom-data-target="#majormodal"><i class="fa fa-plus-square"></i> new</button>
		                </div>
		                <!-- /btn-group -->
		      			<select name="major" id="major" class="form-control" style="width: 100%">
		      				<option value="">---- o0o ----</option>
		   				
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



		<div class="coversAll">
			<div class="custom-modal" id="partylistmodal">
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
							<input type="text" class="form-control" id="partyName">
						</div>
					</div>

				
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-default pull-left custom-close">Close</button>
			        <button type="button" class="btn btn-primary" id="saveParty" name="partylistbtn">Save</button>
			      </div>
			    </div>
			    <!-- /.modal-content -->
			  </div>
			  <!-- /.modal-dialog -->
			</div>

			<div class="custom-modal" id="positionmodal">
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
							<input type="text" class="form-control" id="positionName">
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
							<select name="type" id="type" class="form-control">
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
										<input type="number" name="minimum" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label > Max </label>
										<input type="number" name="maximum" class="form-control">
									</div>
								</div>
							</div>							
						</div>

					</div>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-default pull-left custom-close">Close</button>
			        <button type="button" class="btn btn-primary"  name="positiontbtn">Save</button>
			      </div>
			    </div>
			    <!-- /.modal-content -->
			  </div>
			  <!-- /.modal-dialog -->
			</div>
	
			<div class="custom-modal" id="yearlevelmodal">
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
							<input type="text" class="form-control" name="input_yearLevel">
						</div>
					</div>
				
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-default pull-left custom-close">Close</button>
			        <button type="button" class="btn btn-primary" name="btnyearLevel" ">Save</button>
			      </div>
			    </div>
			    <!-- /.modal-content -->
			  </div>
			  <!-- /.modal-dialog -->
			</div>

			<div class="custom-modal" id="majormodal">
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
							<input type="text" class="form-control" name="input_major">
						</div>
					</div>
				
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-default pull-left custom-close">Close</button>
			        <button type="button" class="btn btn-primary" name="btnmajor">Save</button>
			      </div>
			    </div>
			    <!-- /.modal-content -->
			  </div>
			  <!-- /.modal-dialog -->
			</div>
	
			<div class="custom-modal" id="coursesmodal">
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
							<input type="text" class="form-control" name="input_course">
						</div>
					</div>
				
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-default pull-left custom-close">Close</button>
			        <button type="button" class="btn btn-primary" name="btncourse">Save</button>
			      </div>
			    </div>
			    <!-- /.modal-content -->
			  </div>
			  <!-- /.modal-dialog -->
			</div>
		</div>



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
