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
                            <li class="breadcrumb-item active" aria-current="page">Kelola Usulan Barang</li>
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
                        <form action="<?php echo base_url('index.php/ubah/cek') ?>" method="post">
                        <?php if (pg_kepsek()): ?>
                            <button type="submit" name="setuju"><span class="fas fa-check"></span> Setujui Usulan Terpilih</button>
                            <button type="submit" name="tolak"><span class="fas fa-power-off"></span> Tolak Usulan Terpilih</button>
                            <button type="submit" name="reset"><span class="fas fa-undo-alt"></span> Reset Usulan Terpilih</button>
                        <?php endif ?>

                        <?php if (pg_wakasek()): ?>
                            <button type="submit" name="rekom"><span class="fas fa-check"></span> Rekomendasi Usulan Terpilih</button>
                        <?php endif ?>

                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title m-b-0">Daftar Usulan Barang</h5>
                        </div>
                        <div class="card-body">
                            <table class="table" style="width: 100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Pengusul</th>
                                        <th>Jabatan</th>
                                        <th>Nama Barang</th>
                                        <th>Jumlah</th>
                                        <th>Perkiraan Harga Satuan</th>
                                        <th>Perkiraan Jumlah Harga</th>
                                        <th>Keperluan</th>
                                        <th>Status</th>
                                        <?php if (pg_kepsek()): ?>
                                         <th>Hapus</th>
                                        <?php endif ?>

                                     <th>
                                        <label class="customcheckbox m-b-20">
                                            <input type="checkbox" id="mainCheckbox" />
                                            <span class="checkmark"></span>
                                        </label>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $jms = array(); $no = 1; foreach ($usulan as $usul): 
                                array_push($jms, $usul['jmlHarga']);

                                ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $usul['nama'] ?>

                                </td>
                                <td><?php if ($usul['level'] == '2' ) { echo 'Wakasek'; } elseif ($usul['level'] == '3' ) { echo 'Katas'; } elseif ($usul['level'] == '4' ) { echo 'Kep. Lab'; } elseif ($usul['level'] == '5' ) { echo 'Kep. Perpus'; } elseif ($usul['level'] == '6' ) { echo 'Pengelola Lab.'; } elseif ($usul['level'] == '7' ) { echo 'Wali Kelas'; } elseif ($usul['level'] == '8' ) { echo 'Guru/Staf'; } elseif ($usul['level'] == '10' ) { echo 'Guru BK'; } elseif ($usul['level'] == '11' ) { echo 'Penanggungjawab UKS'; } elseif ($usul['level'] == '12' ) { echo 'Pembina Osis'; } ?></td>
                                    <td><?php echo $usul['namaBarang'] ?></td>
                                    <td class="text-center"><?php echo $usul['jmlBarang'] ?></td>
                                    <td nowrap="" style="text-align: right"><span style="float: left">Rp.</span> <?php echo rupiah($usul['kiraHarga']) ?></td>
                                    <td nowrap="" style="text-align: right"><span style="float: left">Rp.</span> <?php echo rupiah($usul['jmlHarga']) ?></td>
                                    <td><?php echo $usul['keperluan'] ?></td>
                                    <td style="text-align: right;" nowrap="">
                                        <?php if (pg_kepsek()): ?>
                                            <?php if ($usul['stat'] == '1') { echo '<a href="'.base_url('index.php/ubah/setuju/').$usul['id_b'].'" class="badge  badge-danger">Setujui Usulan</a> | <a href="'.base_url('index.php/ubah/tolak/').$usul['id_b'].'" class="badge badge-primary">Tolak</a>';} elseif ($usul['stat'] == '2') { echo '<a href="'.base_url('index.php/ubah/setuju/').$usul['id_b'].'" class="badge badge-warning">Direkomendasi Wakasek</a> | <a href="'.base_url('index.php/ubah/tolak/').$usul['id_b'].'" class="badge badge-primary">Tolak</a>';} elseif ($usul['stat'] == '3') { echo '<a href="" class="badge badge-success">Telah Distujui</a> | <a href="'.base_url('index.php/ubah/tolak/').$usul['id_b'].'" class="badge badge-primary">Tolak</a>';} elseif ($usul['stat'] == '0') { echo '<span class="fas fa-times-circle"> Usulan ditolak</span>';} ?>
                                        <?php endif ?>
                                        <?php if (pg_wakasek()): ?>
                                            <?php if ($usul['stat'] == '1') {
                                                echo '<span class="badge badge-warning">diusulkan<span>';
                                            } elseif ($usul['stat'] == '2') {
                                                echo '<span class="badge badge-primary">direkomendasi<span>';
                                            } elseif ($usul['stat'] == '3') {
                                                echo '<span class="badge badge-success">disetujui Kepsek<span>';
                                            } elseif ($usul['stat'] == '0') {
                                                echo '<span class="badge badge-danger">ditolak Kepsek<span>';
                                            }
                                            ?>
                                        <?php endif ?>
                                    </td>
                                    <?php if (pg_kepsek()): ?>
                                        <td>
                                            <a href="<?= base_url('index.php/hapus/usulan/').$usul['id_'] ?>" onclick="return confirm('Anda akan menghapus <?php echo $usul['namaBarang']  ?>')"><span class="fa fa-trash"></span></a>
                                        </td>
                                    <?php endif ?>

                                    <td>
                                        <?php if (pg_kepsek()): ?>
                                            <label class="customcheckbox">
                                                <input type="checkbox" name="cek[]" value="<?php echo $usul['id_b'] ?>" class="listCheckbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        <?php endif ?>

                                        <?php if ((pg_wakasek()) && ($usul['stat'] == '1') ): ?>
                                        <input type="checkbox" name="cek[]" value="<?php echo $usul['id_b'] ?>">
                                    <?php endif ?>

                                </td>

                            </tr>
                        <?php endforeach; ?>
                    </tbody>

                </table>

                <table>
                    <thead>
                        <?php if ($jms and pg_kepsek()): ?>
                            <tr>
                               <th style="text-align: right">Keseluruhan</th>
                               <th width="10px"></th>
                               <th nowrap=""><span>Rp.</span> <?php echo rupiah(array_sum($jms)) ?></th>
                               <th width="50px"></th>

                               <th style="text-align: right">Disetujui</th>
                               <th width="10px"></th>
                               <th nowrap=""><span>Rp.</span> <?php echo rupiah($jmlAprove) ?></th>
                               <th width="50px"></th>

                               <th style="text-align: right">Ditolak</th>
                               <th width="10px"></th>
                               <th nowrap=""><span>Rp.</span> <?php echo rupiah($jmlReject) ?></th>
                           </tr>
                       <?php endif ?>
                   </thead>
               </table>

           </div>

       </div>

   </div>
</form>
</div>
<!-- ============================================================== -->
<!-- End PAge Content -->
<!-- ============================================================== -->
