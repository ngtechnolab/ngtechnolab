<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html lang="en">
<head>
  <title>View Banner</title>
  <?php include 'css.php'; ?>
</head>
<body>
  <div class="wrapper">
    <?php include 'sidebar.php'; ?>
    <div class="main-panel">
      <?php include 'header.php'; ?>
      <div class="content-wrapper">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="row">
                <div class="col-md-10">
                  <h3 class="card-title">Banner</h3>
                </div>
                <div class="col-md-2">
                  <button class="btn btn-success icon-btn add" name="add" id="add"><i class="fa fa-fw fa-lg fa-plus"></i>Add</button>
                </div>
              </div> 

              <div class="table-responsive">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Image</th>
                      <th>Order</th>
                      <th>Location</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($data as $value) { ?>  
                      <tr>
                        <td><?php echo $value->vBanner; ?></td>
                        <td><?php echo $value->vImage; ?></td>
                        <td><?php echo $value->iOrder; ?></td>
                        <td><?php echo $value->eLocation; ?></td>
                        <td><?php echo $value->eStatus;; ?></td>
                        <td>
                          <a href="#" class="btn btn-warning icon-btn edit" name="edit" id="edit"><i class="fa fa-pencil"></i></a>
                          <a href="<?php echo base_url('index.php/banner/delete/'); echo $value->iBannerId; ?>" class="btn btn-danger icon-btn delete" name="delete" id="delete"><i class="fa fa-remove"></i></a>
                        </td>
                      </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>   
    </div>
  </div>
</div>
</body>
<?php include 'js.php'; ?>
<script type="text/javascript">
    $(document).on('click','.add',function(){
        location.href = "<?php echo base_url('index.php/banner/add');?>";
        return true;
    });
</script>
</html>
