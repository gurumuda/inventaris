
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
                <h4 class="page-title">Input</h4>
                <div class="ml-auto text-right">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Input</li>
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
             <?php echo form_open('admin/tampil'); ?>
             <div>
                <div class="form-group">
                    <label for="jenisRuang">Pilih Data Ruang</label>
                    <select name="jenisRuang" id="jenisRuang" class="form-control" required="">
                        <option value="">- Pilih Jenis Ruang -</option>
                        <!-- Jika login sebagai administrator -->
                        <?php if (pg_admin()): ?>
                            <option value="1">Ruang Kepala Sekolah</option>
                            <option value="2">Ruang Wakil Kepala Sekolah</option>
                            <option value="3">Ruang Tata Usaha</option>
                            <option value="4">Ruang Kepala Lab/Perpus</option>
                            <option value="5">Ruang Perpustakaan</option>
                            <option value="6">Ruang Laboratorium</option>
                            <option value="7">Ruang Kelas</option>
                            <option value="8">Ruang Guru</option>
                            <option value="9">Tempat Ibadah</option>
                            <option value="10">Ruang Bimbingan Konseling</option>
                            <option value="11">Ruang UKS</option>
                            <option value="12">Ruang Osis</option>
                            <option value="13">Toilet</option>
                            <option value="14">Gudang</option>
                        <?php endif; ?>

                        <!-- Jika login sebagai Kepala Sekolah -->
                        <?php if (pg_kepsek()): ?>
                            <option value="1">Ruang Kepala Sekolah</option>
                        <?php endif; ?>

                        <!-- Jika login sebagai Wakil Kepala Sekolah -->
                        <?php if (pg_wakasek()): ?>
                            <option value="2">Ruang Wakil Kepala Sekolah</option>
                        <?php endif; ?>

                        <!-- Jika login sebagai Katas-->
                        <?php if (pg_katas()): ?>
                            <option value="4">Ruang Tata Laksana Sekolah</option>
                        <?php endif; ?>

                        <!-- Jika login sebagai Kepala Perpustakaan -->
                        <?php if (pg_kapus()): ?>
                            <option value="5">Ruang Perpustakaan</option>
                        <?php endif; ?>

                        <!-- Jika login sebagai Kepala Laboratorium -->
                        <?php if (pg_kalab()): ?>
                            <option value="6">Ruang Laboratorium</option>
                        <?php endif; ?>

                        <!-- Jika login sebagai Pengelola Laboratorium -->
                        <?php if (pg_pelab()): ?>
                            <option value="6">Ruang Laboratorium</option>
                        <?php endif; ?>

                        <!-- Jika login sebagai Wali kelas -->
                        <?php if (pg_wali()): ?>
                            <option value="7">Ruang Kelas</option>
                        <?php endif; ?>

                        <!-- Jika login sebagai Guru BK -->
                        <?php if (pg_bk()): ?>
                            <option value="10">Ruang Bimbingan Konseling</option>
                        <?php endif; ?>

                        <!-- Jika login sebagai Pengelola UKS -->
                        <?php if (pg_uks()): ?>
                            <option value="11">Ruang UKS</option>
                        <?php endif; ?>

                        <!-- Jika login sebagai Kepala Laboratorium -->
                        <?php if (pg_osis()): ?>
                            <option value="12">Ruang Osis</option>
                        <?php endif; ?>

                    </select>
                </div>

                <div class="form-group" style="display: none" id="detail-lab">
                    <label for="detail-lab">Pilih Laboratorium</label>
                    <select name="detail-lab" id="det" class="form-control">
                       <option value="">- Pilih Laboratorium-</option>
                        <?php if (pg_admin() || pg_kalab()): ?>
                            <?php foreach ($laboratorium as $labo): ?>
                                <option value="<?= $labo->lab ;?>"><?php echo $labo->jnsRuang ?></option>
                            <?php endforeach; ?>
                        <?php endif ?>

                        <?php if (pg_pelab() ): ?>
                            <?php foreach ($laboratorium as $labo1): ?>
                                <option value="<?= $labo1->detailLabo ;?>"><?php echo $labo1->namaRuang ?></option>
                            <?php endforeach; ?>
                        <?php endif ?>

                    
                </select>
            </div>

            <div class="form-group" style="display: none" id="detail-kelas">
                <label for="detail-kls">Pilih Kelas</label>
                <select name="detail-kls" id="detail-kls" class="form-control">
                   <option value="">- Pilih kelas-</option>
                   <?php foreach ($kelas as $kls): ?>
                    <option value="<?= $kls->kodeRuang ?>"><?= $kls->namaRuang ?></option>
                <?php endforeach; ?>
            </select>
        </div>
    </div>
    <div class="card" id="tampil" style="display: none">
        <div class="card-body">
            <button type="submit" class="btn btn-primary btn-block" >Tampilkan Data</button>
        </div>

    </div>

</div>
<?php echo form_close(); ?>
</div>
<!-- ============================================================== -->
<!-- End PAge Content -->
<!-- ============================================================== -->
</div>