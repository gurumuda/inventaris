
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
                <h4 class="page-title">Dashboard</h4>
                <div class="ml-auto text-right">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
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
        <!-- Sales Cards  -->
        <!-- ============================================================== -->
        <div class="row">
            <!-- Column -->
            <div class="col-md-6 col-lg-4 col-xlg-3">
                <div class="card card-hover">
                    <div class="box bg-cyan text-center">
                        <h1 class="font-light text-white"><i class="mdi mdi-account-multiple"></i></h1>
                        <h6 class="text-white"><?= $jm_pengguna ?> Pengguna</h6>
                    </div>
                </div>
            </div>

            <!-- Column -->
            <div class="col-md-6 col-lg-4 col-xlg-3">
                <div class="card card-hover">
                    <div class="box bg-warning text-center">
                        <h1 class="font-light text-white"><i class="mdi mdi-collage"></i></h1>
                        <h6 class="text-white"><?= $jm_ruang ?> Ruangan</h6>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <div class="col-md-6 col-lg-4 col-xlg-3">
                <div class="card card-hover">
                    <div class="box bg-danger text-center">
                        <h1 class="font-light text-white"><i class="mdi mdi-border-outside"></i></h1>
                        <h6 class="text-white"><?= $jm_barang ?> Usulan Barang</h6>
                    </div>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Obrolan Singkat (refresh untuk melihat pesan baru)</h4>
                        <div class="chat-box scrollable" style="height:205px;">
                            <!--chat Row -->
                            <ul class="chat-list">
                               
                                <?php for ($i ; $i < $jumlah ;$i++) { ?>

                              
                                 <li class="<?php if ($chat[$i]->id_user == $this->session->userdata('identitas')) {echo 'odd';} ?> chat-item">
                                        <?php if ($chat[$i]->id_user != $this->session->userdata('identitas')): ?>
                                            <div class="chat-img"><img src="<?= base_url();?>assets/images/users/1.jpg" alt="user"></div>
                                        <?php endif ?>
                                     
                                     <div class="chat-content">
                                         <?php if ($chat[$i]->id_user != $this->session->userdata('identitas')): ?>
                                            <h6 class="font-medium"><?= $chat[$i]->nama ?></h6>
                                        <?php endif ?>
                                        
                                        <div class="box bg-light-info"><?= $chat[$i]->pesan ?></div>
                                    </div>
                                    <div class="chat-time"><?= $chat[$i]->waktu ?></div>
                                </li>
                                

                     
<?php
 }
                                     ?>

                            </ul>
                        </div>
                    </div>   <form action="<?php echo base_url('index.php/tambah/pesan') ?>" method="post">
                    <div class="card-body border-top">
                        <div class="row">
                            <div class="col-9">
                                <div class="input-field m-t-0 m-b-0">
                                    <input name="pesan" placeholder="Ketik pesan disini dan tekan  ''Enter''  untuk mengirim pesan" class="form-control border-0" required=""></input>
                                </div>
                            </div>
                            <div class="col-3">
                                <button type="submit" class="btn-circle btn-lg btn-cyan float-right text-white"><i class="fas fa-paper-plane"></i></button>
                            </div>

                        </div></form>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
