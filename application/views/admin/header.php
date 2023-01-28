<div class="flash_data_error" data-flash_error="<?= $this->session->flashdata('error'); ?>"></div>
<div class="flash_data_success" data-flash_success="<?= $this->session->flashdata('success'); ?>"></div>

<!-- ============================================================== -->
<!-- Topbar header - style you can find in pages.scss -->
<!-- ============================================================== -->
<header class="topbar" data-navbarbg="skin5">
    <nav class="navbar top-navbar navbar-expand-md navbar-dark">
        <div class="navbar-header" data-logobg="skin5">
            <!-- This is for the sidebar toggle which is visible on mobile only -->
            <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
            <!-- ============================================================== -->
            <!-- Logo -->
            <!-- ============================================================== -->
            <a class="navbar-brand" href="javascript:void(0)">
                <!-- Logo icon -->
                <b class="logo-icon p-l-10">
                    <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                    <!-- Dark Logo icon -->
                    <img width="30px" src="<?= base_url('assets/');?>images/logo_instansi.png" alt="homepage" class="light-logo" />

                </b>
                <!--End Logo icon -->
                <!-- Logo text -->
                <span class="logo-text">
                   <!-- dark Logo text -->
                   <img src="<?= base_url('assets/');?>images/logo-text.png" alt="homepage" class="light-logo" />

               </span>
               <!-- Logo icon -->
               <!-- <b class="logo-icon"> -->
                <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                <!-- Dark Logo icon -->
                <!-- <img src="<?= base_url('assets/template/admin/');?>assets/images/logo-text.png" alt="homepage" class="light-logo" /> -->

                <!-- </b> -->
                <!--End Logo icon -->
            </a>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Toggle which is visible on mobile only -->
            <!-- ============================================================== -->
            <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
        </div>
        <!-- ============================================================== -->
        <!-- End Logo -->
        <!-- ============================================================== -->
        <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
            <!-- ============================================================== -->
            <!-- toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav float-left mr-auto">
                <li class="nav-item d-none d-md-block"><a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>
                <!-- ============================================================== -->
                <!-- create new -->
                <!-- ============================================================== -->
                
            <!-- ============================================================== -->
            <!-- Search -->
            <!-- ============================================================== -->
            <li class="nav-item search-box"> <a class="nav-link waves-effect waves-dark" href="javascript:void(0)"><i class="ti-search"></i></a>
                <form class="app-search position-absolute">
                    <input type="text" class="form-control" placeholder="Search &amp; enter"> <a class="srh-btn"><i class="ti-close"></i></a>
                </form>
            </li>
        </ul>
        <!-- ============================================================== -->
        <!-- Right side toggle and nav items -->
        <!-- ============================================================== -->
        <ul class="navbar-nav float-right">


        <!-- ============================================================== -->
        <!-- User profile and search -->
        <!-- ============================================================== -->
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?= base_url('assets/template/admin/');?>assets/images/users/1.jpg" alt="user" class="rounded-circle" width="31"></a>
            <div class="dropdown-menu dropdown-menu-right user-dd animated">
                 <a class="dropdown-item" href="<?php echo base_url('index.php/admin/profile') ?>"><i class="ti-user m-r-5 m-l-5"></i> My Profile</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?= base_url('index.php/login/logout') ?>"><i class="fa fa-power-off m-r-5 m-l-5"></i> Logout</a>
               
            </div>
        </li>
        <!-- ============================================================== -->
        <!-- User profile and search -->
        <!-- ============================================================== -->
    </ul>
</div>
</nav>
</header>
<!-- ============================================================== -->
<!-- End Topbar header -->
        <!-- ============================================================== -->


