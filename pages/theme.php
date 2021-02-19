<h1>Themes</h1>
<div style="height:20px"></div>
<div class="row">
<?php
  $skins = ['blue','black','green','red','orange','purple'];
  foreach ($skins as $skinsValue) {
    ?>

      <div class="col-lg-4 col-md-4 col-sm-6">
        <div class="box theme-box" data-theme="<?php echo ($skinsValue == 'orange') ? 'yellow' : $skinsValue; ?>">
          <div class="box-header">
            <h3 class="box-title"> <i class="fa fa-square" style="color: <?php echo $skinsValue; ?>"></i> <label> Theme </label> </h3>
            <div class="pull-right">
              <label><?php echo ucfirst($skinsValue); ?></label>
            </div>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <h1 style="font-weight: bold; opacity: .8; color: <?php echo $skinsValue; ?>"><?php echo ucfirst($skinsValue); ?> <i class="fa fa-check pull-right" style="<?php if ( $dataElec['theme'] == 'skin-' . $skinsValue ) { echo 'visibility: visible'; }else{ echo 'visibility: hidden'; } ?>"></i></h1>
            <br>
          </div>
        </div>
      </div>

    <?php
  }
?>




</div>
