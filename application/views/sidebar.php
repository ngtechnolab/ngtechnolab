<!-- Side-Nav-->
<aside class="main-sidebar hidden-print">
    <section class="sidebar">
        <div class="user-panel">
            <div class="pull-left image"><img src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/48.jpg" alt="User Image" class="img-circle"></div>
            <div class="pull-left info">
                <p>John Doe</p>
                <p class="designation">Frontend Developer</p>
            </div>
        </div>
        <!-- Sidebar Menu-->
        <ul class="sidebar-menu">
            <li class="active"><a href="<?php echo base_url('index.php/dashboard'); ?>"><i class="fa fa-dashboard"></i><span>Dashboard</span></a></li>
            <li class="treeview"><a href="#"><i class="fa fa-laptop"></i><span>Master</span><i class="fa fa-angle-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url('index.php/admin'); ?>"><i class="fa fa-circle-o"></i>Admin</a></li>
                    <li><a href="<?php echo base_url('index.php/banner'); ?>"><i class="fa fa-circle-o"></i>Banner</a></li>
                    <li><a href="<?php echo base_url('index.php/team'); ?>"><i class="fa fa-circle-o"></i>Team</a></li>
                    <li><a href="<?php echo base_url('index.php/client'); ?>"><i class="fa fa-circle-o"></i>Client</a></li>

                </ul>
            </li>
            <li class="treeview"><a href="#"><i class="fa fa-list"></i><span>General</span><i class="fa fa-angle-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url('index.php/category'); ?>"><i class="fa fa-circle-o"></i>Category</a></li>
                    <li><a href="<?php echo base_url('index.php/service'); ?>"><i class="fa fa-circle-o"></i>Services</a></li>
                    <li><a href="<?php echo base_url('index.php/work'); ?>"><i class="fa fa-circle-o"></i>Work</a></li>
                    <li><a href="<?php echo base_url('index.php/work_detail'); ?>"><i class="fa fa-circle-o"></i>Work Detail</a></li>
                    <li><a href="<?php echo base_url('index.php/contact'); ?>"><i class="fa fa-circle-o"></i>Contact</a></li>
                    <li><a href="<?php echo base_url('index.php/testimonial'); ?>"><i class="fa fa-circle-o"></i>Testimonial</a></li>
                </ul>
            </li>
            <li class="treeview"><a href="#"><i class="fa fa-file-text"></i><span>Setting</span><i class="fa fa-angle-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url('index.php/setting/edit_company'); ?>"><i class="fa fa-circle-o"></i>Company</a></li>
                    <li><a href="<?php echo base_url('index.php/setting/social'); ?>"><i class="fa fa-circle-o"></i>Social</a></li>
                </ul>
            </li>
        </ul>
    </section>
</aside>
