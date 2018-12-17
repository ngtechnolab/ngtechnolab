<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html lang="en">
<head>
	<title>Social Information</title>
    <?php include 'css.php'; ?>
</head>
<body>

<div class="wrapper">

    <?php include 'sidebar.php'; ?>

    <div class="main-panel">

        <?php include 'navigation.php'; ?>
		
        <!-- Main -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-11">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Social Media Information</h4>
                    </div>
                    <div class="content">
                    <form id="frm" name="frm" action="<?php echo base_url();?>index.php/setting/add_social" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-lg-10 col-md-9">                                    
                                    
                                    <div class="form-group">
                                        <label>Facebook</label>
                                        <div name="vFacebook_Error" id="vFacebook_Error"></div>
                                        <input type="text" name="vFacebook" id="vFacebook" class="form-control border-input" placeholder="Facebook Profile">
                                    </div>

                                    <div class="form-group">
                                        <label>Twitter</label>
                                        <div name="vTwitter_Error" id="vTwitter_Error"></div>
                                        <input type="text" name="vTwitter" id="vTwitter" class="form-control border-input" placeholder="Twitter Profile">
                                    </div>

                                    <div class="form-group">
                                        <label>LinkedIn</label>
                                        <div name="vLinkedIn_Error" id="vLinkedIn_Error"></div>
                                        <input type="text" name="vLinkedIn" id="vLinkedIn" class="form-control border-input" placeholder="LinkedIn Profile">
                                    </div>

                                    <div class="form-group">
                                        <label>Instagram</label>
                                        <div name="vInstagram_Error" id="vInstagram_Error"></div>
                                        <input type="text" name="vInstagram" id="vInstagram" class="form-control border-input" placeholder="Instagram Profile">
                                    </div>

                                    <div class="form-group">
                                        <label>Youtube</label>
                                        <div name="vYoutube_Error" id="vYoutube_Error"></div>
                                        <input type="text" name="vYoutube" id="vYoutube" class="form-control border-input" placeholder="Youtube Profile">
                                    </div>

                                    <div class="form-group">
                                        <label>Blogger</label>
                                        <div name="vBlogger_Error" id="vBlogger_Error"></div>
                                        <input type="text" name="vBlogger" id="vBlogger" class="form-control border-input" placeholder="Blogger Profile">
                                    </div>

                                    <div class="form-group">
                                        <label>Pinterest</label>
                                        <div name="vPinterest_Error" id="vPinterest_Error"></div>
                                        <input type="text" name="vPinterest" id="vPinterest" class="form-control border-input" placeholder="Pinterest Profile">
                                    </div>

                                    <div class="form-group">
                                        <label>Behance</label>
                                        <div name="vBehance_Error" id="vBehance_Error"></div>
                                        <input type="text" name="vBehance" id="vBehance" class="form-control border-input" placeholder="Behance Profile">
                                    </div>
                                    
                                </div>
                            </div>
                    <div class="text-left">
                        <input type="submit" class="btn btn-warning btn-fill btn-wd" value="Add" name="submit" id="submit">
                        <a href="<?php echo base_url();?>index.php/dashboard/index" id="cancel" name="cancel" class="btn btn-default btn-fill btn-wd">Cancel</a>
                    </div>

                    </div>                    
                    <div class="clearfix"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
        <!-- Main -->

        <?php include 'footer.php'; ?>

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
    $(document).on('click', '#submit', function(){
        vCompany = $("#vCompany").val();
        
    });
</script>
</html>
