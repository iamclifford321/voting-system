<h1>Profile</h1>
<div style="height:20px"></div>
<div class="row">
    <div class="col-md-7">
      <div class="box Users-box">
        <div class="box-header">
          <h3 class="box-title"> <i class="fa fa-user"></i> User's Information</h3>
          <div class="pull-right">
            <label for="editInfo">
              <b>Edit</b>
              <i class="fa fa-edit"></i>
            </label>
            <input type="checkbox" name="editInfo" id="editInfo" style="display: none;">
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">


          <div class="info">

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Firstname</label>
                  <input type="text" class="form-control texts1" id="firstName" value="<?php echo $data['firstName']; ?>">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Lastname</label>
                  <input type="text" class="form-control texts2" id="lastName" value="<?php echo $data['lastName']; ?>">
                </div>
              </div>

            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Email</label>
                  <input type="email" class="form-control texts3" id="email" value="<?php echo $data['email']; ?>">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Username</label>
                  <input type="text" class="form-control texts4" id="userName" value="<?php echo $data['username']; ?>">
                </div>
              </div>
              <div class="col-md-12 " id="btn-save-info">
                <div class="pull-right">
                  <button class="btn btn-primary" id="saveInfo"><i class="fa fa-save"></i> Save</button>
                </div>
              </div>
            </div>
            </div>
          </div>


        </div>
          <!-- /.box-body -->
      </div>
      <div class="col-md-5">
        <div class="box Users-box">
          <div class="box-header">
            <h3 class="box-title"> <i class="fa fa-lock"></i> User's Security</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">


            <div class="info">

              <div class="row">

                <div class="col-md-12">
                  <div class="form-group">
                    <label>Old password</label>
                    <input type="password" class="form-control pass1" id="passwordOld">
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control pass2" id="passwordNew">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Confirm pass</label>
                    <input type="password" class="form-control pass3" id="passwordCon">
                  </div>
                </div>
                <div class="col-md-12 " id="btn-save-sec">
                  <div class="pull-right">
                    <button class="btn btn-primary" id="savePass"><i class="fa fa-save"></i> Save</button>
                  </div>
                </div>
              </div>
            </div>


          </div>
            <!-- /.box-body -->
        </div>
      </div>
    </div>

</div>
