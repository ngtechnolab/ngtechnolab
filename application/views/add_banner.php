<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html lang="en">
<head>
    <title>Add Banner</title>
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
                            <h3 class="card-title">Add Banner</h3><hr>
                            <div class="card-body">
                                <form id="frm" name="frm" action="<?php echo base_url();?>index.php/banner/add_banner" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label class="control-label">Banner Name</label>
                                        <div name="vBanner_Error" id="vBanner_Error"></div>
                                        <input type="text" placeholder="Banner Name" name="vBanner" id="vBanner" class="form-control">
                                    </div>                                    
                                    <div class="form-group">
                                        <label class="control-label">Description</label>
                                        <textarea rows="4" placeholder="Description" class="form-control" name="tDescription" id="tDescription"></textarea>
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
                                        <label class="control-label">Banner Order</label>
                                        <div name="iOrder_Error" id="iOrder_Error"></div>
                                        <input type="text" placeholder="Banner Order" name="iOrder" id="iOrder" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label>Location</label>
                                        <select id="eLocation" name="eLocation" class="form-control">
                                            <option value="Header">Header</option>
                                            <option value="Footer">Footer</option>
                                            <option value="Left">Left</option>
                                            <option value="Right">Right</option>
                                            <option value="Home">Home</option>
                                            <option value="Other">Other</option>
                                        </select>
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
                                <button class="btn btn-primary icon-btn submit" name="submit" id="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Add</button>&nbsp;&nbsp;&nbsp;
                                <button class="btn btn-default icon-btn cancel" name="cancel" id="cancel"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</button>
                            </div>
                        </div>
                    </form>
                    </div>
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
        location.href = "<?php echo base_url('index.php/banner');?>";
        return true;
    });
</script>
</html>
