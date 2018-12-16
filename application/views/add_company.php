<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html lang="en">
<head>
    <title>Company Information</title>
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
                            <h3 class="card-title">Company Information</h3><hr>
                            <div class="card-body">
                                <form id="frm" name="frm" action="<?php echo base_url();?>index.php/setting/add_company" method="post" enctype="multipart/form-data">
                                    <input type="hidden" name="iCompanyId" id="iCompanyId" value="<?php echo $company[0]->iCompanyId; ?>">
                                    <div class="form-group">
                                        <label class="control-label">Company Name</label>
                                        <div name="vCompany_Error" id="vCompany_Error"></div>
                                        <input type="text" placeholder="Company Name" name="vCompany" id="vCompany" value="<?php echo $company[0]->vCompany; ?>" class="form-control">
                                    </div>                                    
                                    <div class="form-group">
                                        <label class="control-label">Description</label>
                                        <textarea rows="4" placeholder="Description" class="form-control" name="tDescription" id="tDescription"><?php echo $company[0]->tDescription; ?></textarea>
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
                                        <label class="control-label">Address</label>
                                        <textarea rows="4" placeholder="Company Address" class="form-control" name="vAddress" id="vAddress"><?php echo $company[0]->vAddress; ?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">City</label>
                                        <div name="vCity_Error" id="vCity_Error"></div>
                                        <input type="text" placeholder="City Name" name="vCity" id="vCity" value="<?php echo $company[0]->vCity; ?>" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Zipcode</label>
                                        <div name="vZipcode_Error" id="vZipcode_Error"></div>
                                        <input type="text" placeholder="Enter Zipcode" name="vZipcode" id="vZipcode" value="<?php echo $company[0]->vZipcode; ?>" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Mobilephone</label>
                                        <div name="vMobilePhone_Error" id="vMobilePhone_Error"></div>
                                        <input type="text" placeholder="Enter Mobile Number" name="vMobilePhone" id="vMobilePhone" value="<?php echo $company[0]->vMobilePhone; ?>" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Officephone</label>
                                        <div name="vOfficePhone_Error" id="vOfficePhone_Error"></div>
                                        <input type="text" placeholder="Enter Office Number" name="vOfficePhone" id="vOfficePhone" value ="<?php echo $company[0]->vOfficePhone; ?>" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Fax</label>
                                        <div name="vFax_Error" id="vFax_Error"></div>
                                        <input type="text" placeholder="Fax NUmber" name="vFax" id="vFax" value="<?php echo $company[0]->vFax; ?>" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Email</label>
                                        <div name="vEmail_Error" id="vEmail_Error"></div>
                                        <input type="text" placeholder="Email Address" name="vEmail" id="vEmail" value="<?php echo $company[0]->vEmail; ?>" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Website</label>
                                        <div name="vWebsite_Error" id="vWebsite_Error"></div>
                                        <input type="text" placeholder="Web Address" name="vWebsite" id="vWebsite" value="<?php echo $company[0]->vWebsite; ?>" class="form-control">
                                    </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary icon-btn update" name="update" id="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Update</button>&nbsp;&nbsp;&nbsp;
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

    $(document).on('click','.update',function(){
        location.href = "<?php echo base_url('index.php/setting/edit_company');?>";
        return true;
    });

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
        location.href = "<?php echo base_url('index.php/setting/company');?>";
        return true;
    });
</script>
</html>
