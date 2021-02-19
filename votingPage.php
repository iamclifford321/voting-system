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
  <style type="text/css" media="screen">
    div.CU-outer-row{
      margin-bottom: 20px;
      margin-bottom: 20px;
      background-color: white;
      padding: 0 0px 20px 0px;
      padding-left: 20px;
      padding-right: 20px;
      padding-top: 20px;
      border-radius: 5px;
      box-shadow: 0px 0px 6px 1px #00000026;
    }  
    div.CU-card{
      padding: 25px 10px;
      box-shadow: 0 5px 5px 0 rgba(0, 0, 0, 0.1);
      background: #fdfdfda3;
      border-radius: 5px;
      transition: box-shadow .2s;
      margin-bottom: 20px;
      border: 1px solid #f1ecec;
    }
    div.CU-card:hover{
      box-shadow: 0px 6px 12px 3px rgba(0, 0, 0, 0.11);
    }    
    div.row h2{
      margin-top: 5px;
      margin-bottom: 20px;
      text-align: center;
      padding-bottom: 10px;
    }
    div.AVS-img-div{
      position: relative;
    }
    div.AVS-img-div div.AVS-img-divInner{
      width: 100px; 
      height: 100px; 
      border:1px solid rgba(0, 0, 0, .11);
      margin: auto;
      margin-bottom: 0px;
      border-radius: 100%;
    }
    div.CU-hr-div{
      position: relative;
      padding: 0px 10px;
    }
    div.select-single{
      position: absolute;
      width: 40px;
      height: 40px;
      background: none;
      top: 0px;
      right: 10px;
      border: 3px solid;
      border-color: #ded7d7;
      border-radius: 50%;
    }
    div.select-multi-active::before{

      content: '';
      position: absolute;
      height: 28px;
      width: 5px;
      background: #4db1a7;
      left: 50%;
      top: 6%;
      transform: rotate(44deg);
      border-radius: 3px;
    }

    div.select-multi-active::after{

      content: '';
      position: absolute;
      height: 13px;
      width: 5px;
      background: #4db1a7;
      left: 19%;
      top: 43%;
      transform: rotate(-45deg);
      border-radius: 3px;
    }
    div.select-multi{
      position: absolute;
      width: 40px;
      height: 40px;
      background: none;
      top: 0px;
      right: 10px;
      border-radius: 5px;
      border: 3px solid;
      border-color: #ded7d7;
    }
    div.candidate-Status-active::after{
      content: '';
      position: absolute;
      height: 22px;
      width: 22px;
      background: #4db1a7;
      border-radius: 100%;
      left: 19%;
      top: 17%;
    }
    div.candidate-Status-active, div.select-multi-active{
      border-color: rgb(77, 177, 167);
    }
    input.checkBox-position,input.radio-position{
      visibility: hidden;
    }
    button.Clear-Selected{
      position: 
      absolute; 
      top: -60px; 
      right: 15px;
      display: none;
    }
    div.button-div{
      
    }
    div.button-div-inner button{

      padding: 10px 15px;
      font-size: 15px;
      display: block;
      width: 100%;
    }
    div.button-div-inner{
      max-width: 200px;
      min-width: 200px;
      margin: auto;
    }
  </style>

<div class="wrapper">
  <header class="main-header">
    <nav class="navbar navbar-static-top">
      <div class="container">
        <div class="">
          <a href="../../index2.html" class="navbar-brand"><b>AVS</b>2.0</a>
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
                <span class="hidden-xs forNameUser"><?php echo 'Clifford Ursabia' // $data['firstName'] . ' ' . $data['lastName']; ?></span>
              </a>
              <ul class="dropdown-menu">
                <!-- The user image in the menu -->
                <li class="user-header">
                  <img src="ui/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                  <p>
                    <span class="forNameUser">
                      <?php echo 'Clifford Ursabia' //$data['firstName'] . ' ' . $data['lastName']; ?>
                    </span>
                    
                    <small><?php echo 'Grade 10' //$data['type'] ?></small>
                  </p>
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="">
                    <a href="#" class="btn btn-default btn-flat" id="signOut" style="display:block; width:100%;">Sign out</a>
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
  <div class="content-wrapper">
    <div class="container">

      <?php

        $selectPostion = mysqli_query($conn, "SELECT * from position where electionId = '4'");
        
        while ($positionData = mysqli_fetch_array($selectPostion)) {
          ?>

          <div class="CU-outer-row">
              
              <div class="row" style="">
                <h2><?php echo ucfirst($positionData['positionName']); ?></h2>
                <div class="CU-hr-div">
                  <button type="button" class="Clear-Selected btn btn-default" inputConnected="position<?php echo $positionData['positionName']; ?>">Deselect</button>
                  <hr>
                </div>
              
          <?php
             // echo $positionData['positionName'];
             $positionId = $positionData['positionId'];
             $selectCandidates = mysqli_query($conn, "SELECT * from candidate left join partylist on candidate.partyList = partylist.partyId left join major on candidate.major = major.majorId left join yearlevel on candidate.yearLevel = yearlevel.yearLevelid left join course on candidate.course = course.courseId left join roomorsection on candidate.roomOrSection = roomorsection.roomOrSectionId where candidate.electionId = '4' and candidate.position = '$positionId'");
             while ( $selectCandidatesData = mysqli_fetch_array($selectCandidates) ) {

                ?>
                  
                  <div class="col-sm-1 col-lg-3">
                    <label style="width: 100%; font-weight: normal;">
                      <div class="CU-card">
                         <div class="AVS-img-div">
                           <div class="AVS-img-divInner">
                            <!-- Image Here -->
                           </div>

                           <?php  
                            if ( $positionData['type'] == 'multi' ) {
                              ?>
                               <input type="checkbox" name="position<?php echo $positionData['positionName']; ?>" class="checkBox-position" position-type="<?php echo $positionData['type']; ?>" min = '<?php echo $positionData['min']; ?>' max = '<?php echo $positionData['max']; ?>' value="<?php echo $selectCandidatesData['candidateId'] ?>">
                              <?php
                            }else{
                              ?>
                               <input type="radio" name="position<?php echo $positionData['positionName']; ?>" class="radio-position" position-type="<?php echo $positionData['type']; ?>" min = '<?php echo $positionData['min']; ?>' max = '<?php echo $positionData['max']; ?>' value="<?php echo $selectCandidatesData['candidateId'] ?>">
                              <?php
                            }
                           ?>
                         <div class="candidate-Status select-<?php echo $positionData['type']; ?>">
                         </div>
                         </div>
                         <div class="AVS-label-name">
                            <p style="text-align: center; margin-bottom: 0px;">
                              <b><?php echo $selectCandidatesData['firstName'] . ' ' . $selectCandidatesData['middleName'] . ' ' . $selectCandidatesData['lastName'];?></b>
                              <small style="text-align: center; display: block;">
                                <?php echo $positionData['positionName']; ?>
                              </small>
                            </p>
                            <hr>
                            <p style="text-align: center; font-style: intalic;">
                              &quot;
                              <?php echo $selectCandidatesData['partyListName'];  ?>
                              &quot;
                            </p>
                         </div>

                      </div> 
                    </label>

                  </div>
                 <?php
             }
           ?>
            </div>
          </div>
          <div style="height: 1px; width: 90%; background-color: rgba(0,0,0,.11); margin: 50px auto;"></div>
           <?php
        }
      ?>
      <div class="button-div">
        <div class="button-div-inner">
          <button type="button" class="btn btn-primary" id="SubmitVotes">Submit Vote</button>
        </div>
      </div>
      
    </div>
    <!-- /.container -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="container">
      <div class="pull-right hidden-xs">
        AVS<b>Version</b> 2.0
      </div>
      <strong><?php echo 'TNHS Election (2010)'  // $dataElec['electionName']; ?></strong>
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
<script type="text/javascript">
  $(document).ready(function(){
    $('#SubmitVotes').on('click', function(){
      var CandidatesId = [];
      $('input[type="checkbox"]').each(function(){
        
        if(this.checked){
          CandidatesId.push(this.value);
        }
        
      })

      $('input[type="radio"]').each(function(){
        
        if (this.checked) {
          CandidatesId.push(this.value);
        }
      })
      if (CandidatesId.length) {
        $.ajax({
            url : 'ui/php_files/submitVote.php',
            method : 'POST',
            data : {
              CandidatesId : CandidatesId
          },
          success : function(response){
            console.log(response);
          }
        })
        this.disabled = true;
      }else{
        alert('you shoud vote atleast 1 candidates')
      }


      
    })

    // candidate-Status-active
    // position-type
    // :
    $(document).on('click','.Clear-Selected', function(){

      $('[name=' + $(this).attr('inputConnected') + ']').each(function(){
        this.checked = false;
        if (this.type == 'checkbox') {
          $(this).next().removeClass('select-multi-active');
        }else{
          $(this).next().removeClass('candidate-Status-active');
        }

      });
      $(this).fadeOut();
    });
    $(document).on('change','.checkBox-position',function(){
      var min = $(this).attr('min');
      var max = parseInt($(this).attr('max'));
      var countMax = 0;
      $('[name=' + this.name + ']').each(function(){
        if(this.checked){
          countMax ++;
        }
      });
      if( countMax > max ){
        this.checked = false;
        alert('only ' + max + ' allowed.');
      }     
      var nextElement = $(this).next();
      if(this.checked){
        nextElement.addClass('select-multi-active');
      }else{
        nextElement.removeClass('select-multi-active');
      }
      if(countMax > 0){
        $('[inputConnected=' + this.name + ']').fadeIn();
      }else{
        $('[inputConnected=' + this.name + ']').fadeOut();
      }
    })

    $(document).on('change','.radio-position',function(){
      $('[name=' + this.name + ']').each(function(){
        var nextElement = $(this).next();
        if(this.checked){
          $('[inputConnected=' + this.name + ']').fadeIn();
          nextElement.addClass('candidate-Status-active');
        }else{
          nextElement.removeClass('candidate-Status-active');
        }
      })
    })
  })
</script>
</body>
</html>
