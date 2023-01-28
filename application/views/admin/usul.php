<style>
    thead th {
        text-align: center
    }
</style>
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
                        <h4 class="page-title">Usulan</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Usul Barang</li>
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
                    <div class="col-12">
                        <div style="margin-bottom: 5px">
                            <button type="button" data-target="#modal-tambah" data-toggle="modal">Tambah Usulan</button>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title m-b-0">Daftar Usulan Barang</h5>
                            </div>
                            <div class="card-body">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Barang</th>
                                            <th>Jumlah</th>
                                            <th>Perkiraan Harga Satuan</th>
                                            <th>Perkiraan Jumlah Harga</th>
                                            <th>Keperluan</th>
                                            <th>Status</th>
                                            <th>Hapus</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $jms = array(); $no = 1; foreach ($usulan as $usul): 
                                            array_push($jms, $usul['jmlHarga']);

                                         ?>
                                            <tr>
                                                <td><?php echo $no++; ?></td>
                                                <td><?php echo $usul['namaBarang'] ?></td>
                                                <td><?php echo $usul['jmlBarang'] ?></td>
                                                <td nowrap="" style="text-align: right"><span style="float: left">Rp.</span> <?php echo rupiah($usul['kiraHarga']) ?></td>
                                                <td nowrap="" style="text-align: right"><span style="float: left">Rp.</span> <?php echo rupiah($usul['jmlHarga']) ?></td>
                                                <td><?php echo $usul['keperluan'] ?></td>
                                                <td style="text-align: center;">
                                                    <?php if ($usul['status'] == '1') { echo '<span class="fas fa-hourglass-start"></span>';} elseif ($usul['status'] == '2') { echo '<span class="fas fa-hourglass-half"></span>';} elseif ($usul['status'] == '3') { echo '<span class="fas fa-check-circle"></span>';} elseif ($usul['status'] == '0') { echo '<span class="fas fa-times-circle"></span>';} ?>
                                                </td>
                                                <td class="text-center">
                                                    <?php if ($usul['status'] == '3' || $usul['status'] == '0'): ?>
                                                        <a disabled=""><span class="fa fa-trash"></span></a>
                                                    <?php endif ?>
                                                    <?php if ($usul['status'] == '1' || $usul['status'] == '2'): ?>
                                                        <a href="<?= base_url('index.php/hapus/usulan/').$usul['id_'] ?>" onclick="return confirm('Anda akan menghapus <?php echo $usul['namaBarang']  ?>')"><span class="fa fa-trash"></span></a>
                                                    <?php endif ?>
                                                </td>

                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                    <tfoot>
                                        <?php if ($jms): ?>
                                        <th style="text-align: right" colspan="6">Perkiraan Jumlah Keseluruhan</th>
                                        <th nowrap="" colspan="2"><span>Rp.</span> <?php echo rupiah(array_sum($jms)) ?></th>
                                    <?php endif ?>
                                    </tfoot>
                                </table>
                                
                            </div>
                            
                        </div>
                        
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
               
               <div class="modal fade" id="modal-tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data Usulan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url('index.php/tambah/usulanBarang') ?>" method="post" id="usulanBarang">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="namaBarang">Nama Barang</label>
                            <input type="text" name="namaBarang" class="form-control" required="" placeholder="Nama barang">
                        </div>

                        <div class="form-group">
                            <label for="jmlBarang">Jumlah Barang</label>
                            <input type="number" name="jmlBarang" class="form-control" required="" placeholder="Jumlah barang yang diusulkan">
                        </div>

                        <div class="form-group">
                            <label for="kiraHarga">Perkiraan Harga Barang</label>
                            <input type="number" name="kiraHarga" class="form-control" required="" placeholder="Perkiraan harga satuan">
                        </div>

                        <div class="form-group">
                            <label for="keperluan">Keperluan</label>
                            <input type="text" name="keperluan" class="form-control" required="" placeholder="Pembelajaran / Ekstrakurikuler / Lomba dll">
                        </div>
                      

                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Simpan Data</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>