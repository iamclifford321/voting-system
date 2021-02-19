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
<?php

      include 'ui/php_files/config.php';
      include 'ui/php_files/session.php';
      include 'ui/php_files/checkDb.php';
      echo $_SESSION['userId']  . $_SESSION['userId'];
      if ($rows <= 0 ) {
        ?>
          <script>
            location.href = 'index.php';
          </script>
        <?php
      }

 ?>


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
      <div class="forcoverfront" style="max-width: 650px;">

        <div class="box forcoverforint-back" style="padding: 0px;">
          <div class="box-header" style="height: auto">
            <div class="box-title">
              <b>Election Lists</b>
            </div>
            <div class="pull-right">
              <button class="btn btn-custon" data-toggle="modal" data-target="#electionModal">
                <i class="fa fa-plus"></i>
              </button>
            </div>
          </div>



              <table class="table table-striped">
                <tbody class="tableBodyForalection">
                </tbody>
              </table>


      </div>

    </div>

    </div>
    <!-- /.container -->
  </div>


  <!-- modal -->
  <div class="modal fade" id="electionModal">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title"> <i class="fa fa-edit"></i> Add Election</h4>
        </div>
        <div class="modal-body">
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
                  <select id="electionFor" class="form-control">
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
          <button type="button" class="btn btn-primary" id="saveElection">Save</button>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
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
