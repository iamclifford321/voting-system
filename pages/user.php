<h1>Users</h1>
<div style="height:20px"></div>
<div class="box Users-box">
    <div class="box-header">
    	<div class="pull-right">
    		<a href="" class="allAddCss" data-toggle="modal" data-target="#modal-default">
				<i class="fa fa-plus"></i> Add
    		</a>
    	</div>


      	<h3 class="box-title"> <i class="fa fa-list"></i> Users lists</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body" id="userTable">

    </div>
    <!-- /.box-body -->
  </div>
  <!-- /.box -->
<!-- modal for add -->
<div class="modal fade" id="modal-default">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"> <i class="fa fa"></i> Add Users</h4>
      </div>
      <span id = "electionFor" style="display: none" span-value = "<?php echo $_SESSION['electionFor']; ?>"></span>
      <div class="modal-body ElectionAll">
            <div class="box-body">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <div class="divError">
                        <label>First Name</label>
                        <i class="fa fa-times pull-right text-danger notifIcon" id="firstNameEmpty"></i>
                        <i class="fa fa-check pull-right text-success notifIcon" id="firstNameNotEmpty"></i>

                      </div>
              <input type="text" class="form-control inputs1 inputsSign" required id="firstName">
                    </div>
                    <!-- /.form-group -->

                    <!-- row -->
                  </div>
                  <!-- /.col -->

                  <div class="col-md-6">
                    <div class="form-group">
                      <div class="divError">
                        <label>Lastname</label>
                        <i class="fa fa-times pull-right text-danger notifIcon" id="lastNameEmpty"></i>
                        <i class="fa fa-check pull-right text-success notifIcon" id="lastNameNotEmpty"></i>

                      </div>

                      <input type="text" class="form-control inputs3 inputsSign" required id="lastName">
                    </div>

                    <!-- row -->
                  </div>
                  <!-- /.col -->
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <div class="divError">
                        <label>Email</label>
                        <i class="fa fa-times pull-right text-danger notifIcon" id="emailEmpty"></i>
                        <i class="fa fa-check pull-right text-success notifIcon" id="emailNotEmpty"></i>
                      </div>

                        <input type="Email" class="form-control inputs5 inputsSign" required id="email">
                    </div>
                  </div>
                </div>
                <!-- /.row -->

              </div>






      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="saveUserFrom">Save</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
