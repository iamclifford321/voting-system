  <!-- /.box -->
  <h1>Logs</h1>
  <div style="height:20px"></div>
  <div class="box student-box">
    <div class="box-header">
    	<div class="pull-right">
    		<a href="" class="allAddCss" data-toggle="modal" data-target="#modal-default">
				<i class="fa fa-print"></i> Print
    		</a>
    	</div>

    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <table class="table table-striped table-bordered table-his">
        <thead>
          <tr>
            <th>#</th>
            <th>Logs</th>
            <th>Date</th>
          </tr>
        </thead>
        <tbody>


    <?php
      $sql = mysqli_query($conn, "SELECT * from logs");
      $num = 1;
      while ($data = mysqli_fetch_array($sql)) {
          ?>
            <tr>
              <td><?php echo $num; ?></td>
              <td><?php echo $data['msg']; ?></td>
              <td><?php echo $data['dateHistory']; ?></td>
            </tr>
          <?php

          $num ++;
      }
    ?>
          </tbody>
      </table>
    </div>

    <!-- /.box-body -->
  </div>
  <!-- /.box -->
