
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Settings</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Settings</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Profile</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
               <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Data Personal</h4>
                            </div>
                            <form action="<?php echo base_url('index.php/ubah/profile') ?>" method="post" class="form-horizontal">
                                <input type="hidden" name="id" value="<?php echo $profile['id_'] ?>">
                                <div class="card-body">
                                    
                                    <div class="form-group row">
                                        <label for="namaLengkap" class="col-sm-3 control-label col-form-label">Nama Lengkap</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="namaLengkap" id="namaLengkap" placeholder="Nama Lengkap" value="<?php echo $profile['nama'] ?>">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="identitas" class="col-sm-3 control-label col-form-label">Nomor Identitas</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="identitas" id="identitas" placeholder="Nama Lengkap" value="<?php echo $profile['identitas'] ?>">
                                        </div>
                                    </div>

                                     <div class="form-group row">
                                        <label for="username" class="col-sm-3 control-label col-form-label">Username Login</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="username" id="username" placeholder="Username Login" value="<?php echo $profile['xuser'] ?>">
                                        </div>
                                    </div>

                                     <div class="form-group row">
                                        <label for="password" class="col-sm-3 control-label col-form-label">Password Login</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="password" id="password" placeholder="Password Login (kosongkan jika tidak diubah)">
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top">
                                    <div class="card-body">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
      

                    </div>
        
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
               