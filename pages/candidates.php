  <!-- /.box -->
  <h1 class="box-title">Candidates</h1>
  <div style="height:20px"></div>
  <div class="box candidate-box">
    <div class="box-header">
    	<div class="pull-right">
    		<a href="" class="allAddCss" data-toggle="modal" data-target="#modal-default">
				<i class="fa fa-user-plus"></i> Add
    		</a> 
    	</div>

    </div>
    <!-- /.box-header -->
    <div class="box-body" id="candidatesTable">

    </div>
    <!-- /.box-body -->
  </div>
  <!-- /.box -->
<!-- modal for add -->
<div class="modal fade" id="modal-default">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"> <i class="fa fa"></i> Add Candidate</h4>
      </div>
      <span id = "electionFor" style="display: none" span-value = "<?php echo $_SESSION['electionFor']; ?>"></span>
      <div class="modal-body candidateAll">

		<?php
			// include 'junior.php';
			// include 'senior.php';
			include $_SESSION['electionFor'].'.php';

		?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="saveCandidates">Save</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>



<!-- modal for edit -->
<div class="modal fade" id="modal-edit-candidate-candidate">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"> <i class="fa fa"></i> Edit Candidate</h4>
      </div>
      <div class="modal-body" id="edit-modal-candidate">



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="saveCandidatesEdit">Save</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
