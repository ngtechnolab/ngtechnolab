<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html lang="en">
<head>
    <title>Add Admin</title>
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
                            <h3 class="card-title">Add Admin</h3><hr>
                            <div class="card-body">
                                <form id="frm" name="frm" action="<?php echo base_url();?>index.php/admin/add_admin" method="post" enctype="multipart/form-data">

                                    <div class="form-group">
                                        <label class="control-label">Admin Name</label>
                                        <div name="vAdmin_Error" id="vAdmin_Error"></div>
                                        <input type="text" placeholder="Admin Name" name="vAdmin" id="vAdmin" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">Email Address</label>
                                        <div name="vEmail_Error" id="vEmail_Error"></div>
                                        <input type="text" placeholder="Email Address" name="vEmail" id="vEmail" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">Password</label>
                                        <div name="vPassword_Error" id="vPassword_Error"></div>
                                        <input type="password" placeholder="Password" name="vPassword" id="vPassword" class="form-control">
                                    </div>

                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <?php
                                            $image = base_url('assets/admin/img/avatar.png');
                                            ?>
                                            <img id="img" src="<?php echo $image;?>" width="100px" height="auto" class="img-fluid" />
                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="form-group">
                                            <label>Image</label>
                                            <input type="file" id="vImage" name='vImage' data-classbutton="btn btn-default" data-classinput="form-control inline v-middle input-s" class="form-control">
                                        </div>    
                                    </div><div class="clearfix"></div>

                                    <div class="form-group">
                                        <label class="control-label">Phone Number</label>
                                        <div name="vPhone_Error" id="vPhone_Error"></div>
                                        <input type="text" placeholder="Phone Number" name="vPhone" id="vPhone" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label>Status</label>
                                        <select id="eStatus" name="eStatus" class="form-control">
                                            <option value="Active">Active</option>
                                            <option value="Inactive">Inactive</option>
                                        </select>
                                    </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary icon-btn submit" name="submit" id="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Add</button>&nbsp;&nbsp;&nbsp;
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
    $(document).on('change','#vImage',function(){
        if (this.files && this.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#img').attr('src', e.target.result);
            };
            reader.readAsDataURL(this.files[0]);
        }
    });

    $(document).on('click','.cancel',function(){
        location.href = "<?php echo base_url('index.php/admin/category');?>";
        return true;
    });
</script>
</html>