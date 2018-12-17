<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html lang="en">
<head>
  <title>View Admin</title>
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
                  <h3 class="card-title">Admins</h3>
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
                      <th>Email</th>
                      <th>Phone</th>
                      <th>Status</th>
                      <th>Added</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($data as $value) { ?>  
                      <tr>
                        <td><?php echo $value->vAdmin; ?></td>
                        <td><?php echo $value->vEmail; ?></td>
                        <td><?php echo $value->vPhone; ?></td>
                        <td><?php echo $value->eStatus; ?></td>
                        <td><?php echo $value->dtAdminDate;; ?></td>
                        <td>
                          <a href="#" class="btn btn-warning icon-btn edit" name="edit" id="edit"><i class="fa fa-pencil"></i></a>
                          <a href="<?php echo base_url('index.php/admin/delete/'); echo $value->iAdminId; ?>" class="btn btn-danger icon-btn delete" name="delete" id="delete"><i class="fa fa-remove"></i></a>
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
        location.href = "<?php echo base_url('index.php/admin/add');?>";
        return true;
    });
</script>
</html>
