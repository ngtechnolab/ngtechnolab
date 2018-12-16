<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html lang="en">
<head>
    <title>Change Password</title>
    <?php include 'css.php'; ?>
</head>
<body>
    <div class="wrapper">
        <?php include 'sidebar.php'; ?>
        <div class="main-panel">
            <?php include 'header.php'; ?>
            <!-- Main -->
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-md-10">
                        <div class="card">
                            <h3 class="card-title">Change Password</h3><hr>
                            <div class="card-body">
                                <form id="frm" name="frm" action="<?php echo base_url();?>index.php/admin/change_password_action" method="post" enctype="multipart/form-data">

                                    <div class="form-group">
                                        <label class="control-label">Password</label>
                                        <div name="vPassword_Error" id="vPassword_Error"></div>
                                        <input type="password" placeholder="Password" name="vPassword" id="vPassword" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">Confirm Password</label>
                                        <div name="vConfirmPassword_Error" id="vConfirmPassword_Error"></div>
                                        <input type="password" placeholder="Confirm Password" name="vConfirmPassword" id="vConfirmPassword" class="form-control">
                                    </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary icon-btn submit" name="submit" id="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Change</button>&nbsp;&nbsp;&nbsp;
                                <button type="cancel" class="btn btn-default icon-btn cancel" name="cancel" id="cancel"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</button>
                            </div>
                        </div>
                    </div>
                </form>
                    <div class="clearix"></div>          
                </div>
            </div>
            <!-- Main -->
        </div>
    </div>
</body>
<?php include 'js.php'; ?>
<script type="text/javascript">
    $(document).on('click','.cancel',function(){
        location.href = "<?php echo base_url('index.php/admin/profile');?>";
        return true;
    });
</script>
</html>
