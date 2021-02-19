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
		<div class="juniorHighSchool">
			<input type="hidden" name="identification" value="junior">
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
	            </div>
	            <!-- /.col -->
	            <div class="col-md-6">
	              <div class="form-group">
	                <label>Last Name</label>
	   				<input type="text" class="form-control" required id="lastName">
	              </div>
	              <!-- /.form group -->
	            </div>
	          	<div class="col-md-6">
	          		<label>Grade / Year</label>
		              
		      			<select name="GradeOrYear" id="GradeOrYear" class="form-control" style="width: 100%" required>
		      				<option value="">---- o0o ----</option>
		   					<option value="Grade 7">Grade 7</option>
		   					<option value="Grade 8">Grade 8</option>
		   					<option value="Grade 9">Grade 9</option>
		   					<option value="Grade 10">Grade 10</option>
		   				</select>
	          	</div>
	            <!-- /.col -->
	          </div>

	          <!-- row -->
	          <div class="row">
	          	<div class="col-md-12">
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
		*** high school (junior) ***
		****************************
		****************************
		****************************
		**************************** 
							-->
