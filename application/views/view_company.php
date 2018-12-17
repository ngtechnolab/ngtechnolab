<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html lang="en">
<head>
  <title>View Company</title>
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
                  <h3 class="card-title">Company</h3>
                </div>
                <div class="col-md-2">
                  <button class="btn btn-success icon-btn edit" name="edit" id="edit"><i class="fa fa-fw fa-lg fa-pencil"></i>Edit</button>
                </div>
              </div> 

              <div class="table-responsive">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Description</th>
                      <th>Image</th>
                      <th>Address</th>
                      <th>City</th>
                      <th>Zipcode</th>
                      <th>Mobilephone</th>
                      <th>Officephone</th>
                      <th>Fax</th>
                      <th>Email</th>
                      <th>Website</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($company as $value) { ?>  
                      <tr>
                        <td><?php echo $value->vCompany; ?></td>
                        <td><?php echo $value->tDescription; ?></td>
                        <td><?php echo $value->vImage; ?></td>
                        <td><?php echo $value->vAddress; ?></td>
                        <td><?php echo $value->vCity; ?></td>
                        <td><?php echo $value->vZipcode; ?></td>
                        <td><?php echo $value->vMobilePhone; ?></td>
                        <td><?php echo $value->vOfficePhone; ?></td>
                        <td><?php echo $value->vFax; ?></td>
                        <td><?php echo $value->vEmail; ?></td>
                        <td><?php echo $value->vWebsite; ?></td>
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
    $(document).on('click','.edit',function(){
        location.href = "<?php echo base_url('index.php/setting/edit_company');?>";
        return true;
    });
</script>
</html>
