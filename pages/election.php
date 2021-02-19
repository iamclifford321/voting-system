  <!-- /.box -->
<h1 class="box-title">Election</h1>
<div style="height:20px"></div>
  <div class="box Election-box">
    <div class="box-header">

    </div>
    <!-- /.box-header -->
    <div class="box-body" id="">
      <h1 class="text-success">Clifford</h1>
    </div>
    <!-- /.box-body -->
  </div>
  <div class="box Election-box">
    <div class="box-header">
    	<div class="pull-right">
    		<a href="" class="allAddCss" data-toggle="modal" data-target="#modal-default">
				<i class="fa fa-plus"></i> Add
    		</a>
    	</div>


      	<h3 class="box-title"> <i class="fa fa-list"></i> Election lists</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body" id="ElectionTable">

    </div>
    <!-- /.box-body -->
  </div>
  <!-- /.box -->
<!-- modal for add -->
<div class="modal fade" id="modal-default">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"> <i class="fa fa"></i> Add Election</h4>
      </div>
      <span id = "electionFor" style="display: none" span-value = "<?php echo $_SESSION['electionFor']; ?>"></span>
      <div class="modal-body ElectionAll">
        <div class="body-box">
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label>School name</label>
                <input type="text" class="form-control" id="schoolName">
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label> Election for <i class="fa fa-question-circle"></i></label>
                <select id="electionForFrom" class="form-control">
                  <option value="junior">Junior High</option>
                  <option value="senior">Senior High</option>
                  <option value="college">College</option>
                </select>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="saveElectionFrom">Save</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>



<!-- modal for edit -->
<div class="modal fade" id="modal-edit-Election">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"> <i class="fa fa"></i> Edit Election</h4>
      </div>
      <div class="modal-body" id="edit-modal-Election">
        <div class="body-box">
          <input type="hidden" id="hiddenIdElection">
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label>School name</label>
                <input type="text" class="form-control" id="schoolNameEdit">
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label> Election for <i class="fa fa-question-circle"></i></label>
                <select id="electionForEdit" class="form-control" disabled>
                  <option value="junior">Junior High</option>
                  <option value="senior">Senior High</option>
                  <option value="college">College</option>
                </select>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="saveElectionsEdit">Save</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
