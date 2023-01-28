
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
                <h4 class="page-title">Cetak</h4>
                <div class="ml-auto text-right">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Cetak</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Usulan Barang</li>
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
<?php echo form_open('admin/prevusul'); ?>
        <div class="row">
            <div class="col-12">
                <h4>Filter usulan barang</h4>
                <div class="row">
                    <div class="col-lg-6">
                       <div class="form-group row">
                        <div class="col-4">
                            <label for="">Pengusul</label>
                        </div>

                        <div class="col-8">
                            <select name="pengusul" id="pengusul" class="form-control">
                                <option value="">-- pilih pengusul --</option>
                                <?php foreach ($pengusul as $p): ?>
                                    <option value="<?= $p->id_pengusul ?>"><?= $p->nama ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row" style="margin-top: -10px">
                        <div class="col-4">
                            <label for="">Status</label>
                        </div>
                        <div class="col-8">
                            <select name="status" id="status" class="form-control">
                                <option value="">-- pilih status usulan --</option>
                                <option value="3">Disetujui</option>
                                <option value="0">Ditolak</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-sm-6">
                            <button type="submit" name="filter" class="btn btn-success"><span class="fa fa-filter"></span> Filter Barang</button>
                        </div>

                        <div class="col-sm-6 text-right" >
                            <a target="_blank" href="<?php if ($usul != '' && $stat == '') { echo  base_url('index.php/admin/printusul/').$usul; } elseif ($stat != '' && $usul == '') { echo  base_url('index.php/admin/printusul/').'x/'.$stat;} elseif ($stat == '' && $usul == '') { echo  base_url('index.php/admin/printusul');} elseif ($stat != '' && $usul != '') { echo  base_url('index.php/admin/printusul/').$usul.'/'.$stat;} ?>" class="btn btn-primary" ><span class="fa fa-print"></span> Cetak</a>
                        </div>
                        
                    </div>
                </div>
                <?php echo form_close(); ?>

            </div>
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Data Usulan Barang</h5>
                    
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="zero_config" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Barang</th>
                                    <th>Jumlah</th>
                                    <th>Harga Satuan</th>
                                    <th>Harga Barang</th>
                                    <th>Pengusul</th>
                                    <th>Keperluan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no=1; foreach ($barang as $brg): ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $brg->namaBarang; ?></td>
                                    <td><?= $brg->jmlBarang; ?></td>
                                    <td style="text-align: right"><span style="float: left">RP</span> <?= rupiah($brg->kiraHarga); ?></td>
                                    <td style="text-align: right"><span style="float: left">RP</span> <?= rupiah($brg->jmlHarga); ?></td>
                                    <td><?= $brg->nama; ?></td>
                                    <td><?= $brg->keperluan; ?></td>



                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- End PAge Content -->
<!-- ============================================================== -->
</div>