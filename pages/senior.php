<!--
		****************************
		****************************
		****************************
		****************************
		*** high school (senior) ***
		****************************
		****************************
		****************************
		**************************** 
							-->
		<div class="senior">
			<input type="hidden" name="identification" value="senior">
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
			   				<input type="Number" class="form-control" required id='age'>
			              </div>
			              <!-- /.form-group -->
						</div>
						<div class="col-md-6">
			              <!-- /.form-group -->
			              <div class="form-group">
			                <label>Sex</label>
			   				<select name="sex" id="sex" class="form-control" required id='sex'>
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
				<div class="col-md-8">
					<div class="row">
			          	<div class="col-md-6">
			          		<label>Grade / Year</label>
				              
				      			<select name="GradeOrYear" id="GradeOrYear" class="form-control" style="width: 100%" required>
				      				<option value="">---- o0o ----</option>
				   					<option value="Grade 11">Grade 11</option>
				   					<option value="Grade 12">Grade 12</option>
				   				</select>
				              
			          	</div>
			          	<div class="col-md-6">
			          		<label>Room / Section</label>
				              <div class="input-group">
				                <div class="input-group-btn">
				                  <button type="button" class="btn btn-primary modal-btn" custom-data-toggle="custom-modal" custom-data-target="#room-Section"><i class="fa fa-plus-square"></i> new</button>
				                </div>
				                <!-- /btn-group -->
				      			<select name="roomOrSection" id="roomOrSection" class="form-control" style="width: 100%" required>
				      				<option value="">---- o0o ----</option>

				   					
				   				</select>
				              </div>
			          	</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<label> Strand </label>
		      			<select name="strand" id="strand" class="form-control" style="width: 100%" required>
		      				<option value="">---- o0o ----</option>
		   					<option value="Gas">GAS</option>
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
								<option value="grade">Grade</option>
								<option value="roomOrSection">Room or Section</option>
								<option value="strand">Strand</option>
							</select>

						</div>

						<div class="jumbotron-cutom bg-warning">
		                  <p class="text-warning"><b> <i class="fa fa-info-circle"></i> Reminder</b> <br/>
							<ul>
								<li><small>All - All student can vote in this postion.</small></li>
								<li><small>Grade - Only student that has same year level as the candidate can vote in this postion.</small></li>
								<li><small>Room or Section - Only student that has same room or section as the candidate can vote in this postion.</small></li>
								<li><small>Strand - Only student that has same strand as the candidate can vote in this postion.</small></li>
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
			        <button type="button" class="btn btn-primary" name="positiontbtn">Save</button>
			      </div>
			    </div>
			    <!-- /.modal-content -->
			  </div>
			  <!-- /.modal-dialog -->
			</div>
	
			<div class="custom-modal" id="room-Section">
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
							<input type="text" class="form-control" id="RoomOrSectionVal">
						</div>
					</div>
				
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-default pull-left custom-close">Close</button>
			        <button type="button" class="btn btn-primary" id="saveRoomOrSection">Save</button>
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
		*** high school (Senior) ***
		****************************
		****************************
		****************************
		**************************** 
							-->
