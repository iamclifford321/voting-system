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
    include 'ui/php_files/session.php';
    include 'ui/php_files/active.php';
    include 'ui/php_files/config.php';
    $sqlElec = mysqli_query($conn,"SELECT * from election where electionId = '".$_SESSION['electionId']."'");
    $dataElec = mysqli_fetch_array($sqlElec);
    $sql = mysqli_query($conn, "SELECT * from users where userId = '".$_SESSION['userId']."'");
    $data = mysqli_fetch_array($sql);
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
<body class="hold-transition <?php echo $dataElec['theme']; ?> layout-top-nav">
<div class="wrapper">

  <header class="main-header">
    <nav class="navbar navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <a href="../../index2.html" class="navbar-brand"><b>AVS</b>2.0</a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">

            <?php

              if ($data['type'] == 'System Admin') {
                ?>
                  <li class="<?php echo $overall; ?>">
                    <a href="AdminMainPage.php?q=overall">Dashboard</a>
                  </li>
                <?php
              }

            ?>




            <li class="<?php echo $students; ?>">
              <a href="AdminMainPage.php?q=students">Students</a>
            </li>
            <li class="<?php echo $candidates; ?>">
              <a href="AdminMainPage.php?q=candidates">Candidates</a>
            </li>


            <?php
              if ( $data['type'] == 'System Admin' ) {
                ?>
                  <li class="dropdown <?php echo $more; ?>">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">More options <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                      <li class="<?php echo $election; ?>">
                        <a href="AdminMainPage.php?q=election"><i class="fa fa-tasks"></i> Election</a></li>
                      <li class="<?php echo $user ?>">
                        <a href="AdminMainPage.php?q=user"><i class="fa fa-users"></i> Users</a></li>
                      <li class="<?php echo $logs; ?>">
                        <a href="AdminMainPage.php?q=logs"> <i class="fa fa-history"></i> Logs</a></li>
                      <li class="divider"></li>
                      <li class="<?php echo $theme ?>">
                        <a href="AdminMainPage.php?q=theme"><i class="fa fa-area-chart"></i> Color</a></li>
                      <li class="divider"></li>
                      <li>
                        <a href=""> <i class="fa fa-circle" style="color: red"></i> Live</a></li>
                    </ul>
                  </li>
                <?php
              }
            ?>
          </ul>
          <form class="navbar-form navbar-left" role="search">
            <div class="form-group">
              <input type="text" class="form-control" id="navbar-search-input" placeholder="Search">
            </div>
          </form>
        </div>
        <!-- /.navbar-collapse -->
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- User Account Menu -->
            <li class="dropdown user user-menu">
              <!-- Menu Toggle Button -->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <!-- The user image in the navbar-->
                <img src="ui/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                <span class="hidden-xs forNameUser"><?php echo $data['firstName'] . ' ' . $data['lastName']; ?></span>
              </a>
              <ul class="dropdown-menu">
                <!-- The user image in the menu -->
                <li class="user-header">
                  <img src="ui/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                  <p>
                    <span class="forNameUser">
                      <?php echo $data['firstName'] . ' ' . $data['lastName']; ?>
                    </span>

                    <small><?php echo $data['type'] ?></small>
                  </p>
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="AdminMainPage.php?q=profile" class="btn btn-default btn-flat">Profile</a>
                  </div>
                  <div class="pull-right">
                    <a href="#" class="btn btn-default btn-flat" id="signOut">Sign out</a>
                  </div>
                </li>
              </ul>
            </li>
          </ul>
        </div>
        <!-- /.navbar-custom-menu -->
      </div>
      <!-- /.container-fluid -->
    </nav>
  </header>
  <!-- Full Width Column -->
  <span id="electionIdHandler" style="display: none" span-value = "<?php
        echo $_SESSION['electionId']; ?>"></span>

 <span id="userIdHandler" style="display: none" span-value = "<?php
        echo $_SESSION['userId']; ?>"></span>



  <div class="content-wrapper">
    <div class="container">

      <?php

        include $page;

      ?>

    </div>
    <!-- /.container -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="container">
      <div class="pull-right hidden-xs">
        AVS<b>Version</b> 2.0
      </div>
      <strong><?php echo $dataElec['electionName']; ?></strong>
    </div>
    <!-- /.container -->
  </footer>
</div>
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
    $('#partylist, #position, #yearLevel, #course, #major, #roomOrSection,#whoCan').select2();
    $('.textarea').wysihtml5()
    $('#datepicker').datepicker({
      autoclose: true
    })
    $('.table-his').dataTable()
  })
</script>
</body>
</html>
