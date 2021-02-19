<?php 
  include 'config.php';
  include 'session.php';
  $sql = mysqli_query($conn,"SELECT * from election where userId = '".$_SESSION['userId']."'");
  $rows = mysqli_num_rows($sql);
  if ($rows <= 0) {
    ?>
      <tr>
        <td style="border-color: rgba(0,0,0,0); padding-left: 20px;">
          No data available in lists
        </td>
      </tr>
    <?php
  }
  while ( $data = mysqli_fetch_array($sql) ) {
     ?>
        <tr>
          <td colspan="" rowspan="" headers="" style="border-color: rgba(0,0,0,0); padding-left: 20px;">
            <?php echo $data['electionName']; ?>
          </td>
          <td style="border-color: rgba(0,0,0,0)">

            <?php
            if ($data['status'] == 'In Progres') {
              ?>
                  <i class="fa fa-circle" style="color: rgb(115,239,119)"></i>
              <?php
            }else{
              ?>
                  <i class="fa fa-circle" style="color: rgba(255,3,3,0.56)"></i>
              <?php
            }
             echo $data['status']; 
             ?>
          </td>
          <td style="border-color: rgba(0,0,0,0)">
            <button type="button" class="btn btn-primary visitElection" style="padding: 5px; height: 30px" data-id = "<?php echo $data['electionId']; ?>"
              data-name = "<?php echo $data['electionName']; ?>" data-type = "<?php echo $data['electionFor'] ?>"><i class="fa fa-eye"></i></button>
            <button type="button" class="btn btn-danger deleteElection" style="padding: 5px; height: 30px" data-id = "<?php echo $data['electionId']; ?>"><i class="fa fa-trash"></i></button>
          </td>
        </tr>
     <?php 
  }

?>