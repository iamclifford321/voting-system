<!--
  
  Avs ver 2.0

    Author : Clifford Ursabia
    EmailAccount : iamclifford321@gmail.com

  ******* Theme *******

    ThemeName : Admin Lte 2 
    ThemeVersion : Version 2.4.0
    ThemeAuthor : Almsaeed Studio
    ThemeWebsite : https://adminlte.io/

-->
<?php include 'ui/php_files/checkDb.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Voting System</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="ui/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="ui/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="ui/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="ui/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="ui/dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" type="text/css" href="ui/plugins/style.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="ui/bower_components/select2/dist/css/select2.min.css">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <!-- Sweeet alert 2 -->
  <link rel="stylesheet" href="ui/plugins/sweetalert2.min.css" />
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-green layout-top-nav">
<!-- <div class="wrapper"> -->

<!--   <header class="main-header">
    <nav class="navbar navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <a href="index.php" class="navbar-brand"><b>AVS</b>2.0</a>
        </div>
        <div class="pull-right">
          <div class="navbar-brand">
             Sign Up
          </div>
        
        </div>
      </div>
    </nav>
  </header> -->
  <!-- Full Width Column -->
  <div class="content-wrapper">
    <div class="container">
      <div class="forcoverfront">
        <?php
          if ($rows >= 1) {
            ?>
                <center>
                  <h3>
                    Log In
                  </h3>
                </center>

            <?php
          }
        ?>
        <div class="box forcoverforint-back">
          <div class="box-header">
            <div class="box-title">
              <b>Automated Voting System</b>V2.0
            </div>
          </div>
          <br>
          <?php

            if ($rows <= 0) {
              ?>
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
                  <div class="col-md-6">
                    <div class="form-group">
                      <div class="divError">
                        <label>Password</label>
                        <i class="fa fa-times pull-right text-danger notifIcon" id="passwordEmpty"></i>
                        <i class="fa fa-check pull-right text-success notifIcon" id="passwordNotEmpty"></i>

                      </div>
                      
                      <input type="password" class="form-control inputs2 inputsSign" required id="password">
                    </div>
                  </div>
                  <div class="col-md-6">

                    <div class="form-group">
                      <div class="divError">
                        <label>Confirm Password</label>   
                        <i class="fa fa-times pull-right text-danger notifIcon" id="confirmPassEmpty"></i>
                        <i class="fa fa-check pull-right text-success notifIcon" id="confirmPassNotEmpty"></i>                     
                      </div>
                      <input type="password" class="form-control inputs4 inputsSign" required id="confirmPass">
                    </div>

                  </div>
                </div>
                <div class="jumbotron-cutom bg-warning">
                  <p class="text-warning"><b> <i class="fa fa-info-circle"></i> Reminder</b> <br/> We recommend you to use 8 or more letter character for your Password</p>
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

              <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="saveUser">Save</button>
              </div>
              <?php
            }else{
              ?>
              <div class="box-body">

                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <div class="divError">
                        <label>Username</label>
                        <i class="fa fa-times pull-right text-danger notifIcon" id="emailEmpty"></i>
                        <i class="fa fa-check pull-right text-success notifIcon" id="emailNotEmpty"></i>
                      </div>
                      
                        <input type="text" class="form-control" required id="userLog">
                    </div>
                  </div>
                </div>
                <!-- /.row -->

                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <div class="divError">
                        <label>Password</label>
                        <i class="fa fa-times pull-right text-danger notifIcon" id="passwordEmpty"></i>
                        <i class="fa fa-check pull-right text-success notifIcon" id="passwordNotEmpty"></i>

                      </div>
                      
                      <input type="password" class="form-control" required id="passwordLog">
                    </div>
                  </div>
                </div>


              </div>

              <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="logIn">Log in</button>
              </div>
              <?php
            }

          ?>

      </div>

    </div>

    </div>
    <!-- /.container -->
  </div>
  <!-- /.content-wrapper -->
<!-- </div> -->
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="ui/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="ui/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="ui/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="ui/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="ui/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="ui/dist/js/demo.js"></script>
<!-- custom script -->
<script src="ui/plugins/script.js"></script>
<!-- DataTables -->
<script src="ui/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="ui/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- bootstrap datepicker -->
<script src="ui/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="ui/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Select2 -->
<script src="ui/bower_components/select2/dist/js/select2.full.min.js"></script>
<!-- Sweet alert -->
<script src="ui/plugins/sweetalert2.min.js"></script>
<script src="ui/plugins/sweetalert2.all.min.js"></script>
<!-- bootstrap notify -->
<script src="ui/plugins/bootstrap-notify.js"></script>
<script>

  $(function () {
    $('#partylist, #position, #yearLevel, #course, #major, #roomOrSection').select2();
    $('.textarea').wysihtml5()
    $('#datepicker').datepicker({
      autoclose: true
    })

  })
</script>
</body>
</html>
