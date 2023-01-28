
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
              <li class="breadcrumb-item active" aria-current="page">Data SNP</li>
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
    <div style="margin-bottom: 10px">
      <button type="button" data-toggle="modal" data-target="#modal-tambah"><span class="fa fa-plus"></span> Tambah Data</button>
      <?php if (pg_admin()): ?>
      <button type="button" data-toggle="modal" data-target="#modal-hapus-semua"><span class="fa fa-trash"></span> Hapus Semua Data</button>
    <?php endif ?>
    </div>
    <div class="row">
      <?php if (pg_admin()) { echo '<div class="col-md-6">';} else { echo '<div class="col-md-12">';} ?>
      
        <?php if (pg_admin() || pg_kepsek()):?>
        <div class="card">
          <div class="card-header">
            <h4>NON-SNP Ruang Kepala Sekolah</h4>
          </div>
          <div class="card-body">
           <table class="table" id="tsnp1">
             <thead>
               <tr>
                 <th>No</th>
                 <th>Kode Barang</th>
                 <th>Nama Barang</th>
                 <th></th>
               </tr>
             </thead>
             <tbody>
              <?php $no = 1; foreach ($nonsnpkepsek as $snk): ?>
              <tr>
                <td><?= $no++ ?></td>
                <td><?= $snk->kodeBarang ?></td>
                <td><?= $snk->namaBarang ?></td>
                <td>
                  <a href="<?= base_url('index.php/hapus/barangnonsnp/').$snk->id_;?>" onclick="return confirm('Anda akan menghapus <?= $snk->namaBarang ?>')"><span class="fa fa-trash"></span></a>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>

  <?php endif; ?>
  <?php if (pg_admin() || pg_wakasek()):?>

    <div class="card">
      <div class="card-header">
        <h4>NON-SNP Ruang Wakil Kepala Sekolah</h4>
      </div>
      <div class="card-body">
       <table class="table" id="tsnp2">
         <thead>
           <tr>
             <th>No</th>
             <th>Kode Barang</th>
             <th>Nama Barang</th>
             <th></th>
           </tr>
         </thead>
         <tbody>
          <?php $no = 1; foreach ($nonsnpwakasek as $wks): ?>
          <tr>
            <td><?= $no++ ?></td>
            <td><?= $wks->kodeBarang ?></td>
            <td><?= $wks->namaBarang ?></td>
            <td>
              <a href="<?= base_url('index.php/hapus/barangnonsnp/').$wks->id_;?>" onclick="return confirm('Anda akan menghapus <?= $wks->namaBarang ?>')"><span class="fa fa-trash"></span></a>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>

<?php endif; ?>
<?php if (pg_admin() || pg_katas()):?>

<div class="card">
  <div class="card-header">
    <h4>NON-SNP Ruang Tata Usaha</h4>
  </div>
  <div class="card-body">
   <table class="table" id="tsnp3">
     <thead>
       <tr>
         <th>No</th>
         <th>Kode Barang</th>
         <th>Nama Barang</th>
         <th></th>
       </tr>
     </thead>
     <tbody>
      <?php $no = 1; foreach ($nonsnptu as $stu): ?>
      <tr>
        <td><?= $no++ ?></td>
        <td><?= $stu->kodeBarang ?></td>
        <td><?= $stu->namaBarang ?></td>
        <td>
          <a href="<?= base_url('index.php/hapus/barangnonsnp/').$stu->id_;?>" onclick="return confirm('Anda akan menghapus <?= $stu->namaBarang ?>')"><span class="fa fa-trash"></span></a>
        </td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>
</div>
</div>

<?php endif ?>
<?php if (pg_admin() || pg_kalab() || pg_kapus()):?>

<div class="card">
  <div class="card-header">
    <h4>NON-SNP Ruang Kepala Lab / Perpus</h4>
  </div>
  <div class="card-body">
   <table class="table" id="tsnp4">
     <thead>
       <tr>
         <th>No</th>
         <th>Kode Barang</th>
         <th>Nama Barang</th>
         <th></th>
       </tr>
     </thead>
     <tbody>
      <?php $no = 1; foreach ($nonsnpkalab as $skl): ?>
      <tr>
        <td><?= $no++ ?></td>
        <td><?= $skl->kodeBarang ?></td>
        <td><?= $skl->namaBarang ?></td>
        <td>
          <a href="<?= base_url('index.php/hapus/barangnonsnp/').$skl->id_?>" onclick="return confirm('Anda akan menghapus <?= $skl->namaBarang ?>')"><span class="fa fa-trash"></span></a>
        </td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>
</div>
</div>

<?php endif ?>
<?php if (pg_admin() || pg_osis()):?>

<div class="card">
  <div class="card-header">
    <h4>NON-SNP Ruang Osis</h4>
  </div>
  <div class="card-body">
   <table class="table" id="tsnp11">
     <thead>
       <tr>
         <th>No</th>
         <th>Kode Barang</th>
         <th>Nama Barang</th>
         <th></th>
       </tr>
     </thead>
     <tbody>
      <?php $no = 1; foreach ($nonsnposis as $snos): ?>
      <tr>
        <td><?= $no++ ?></td>
        <td><?= $snos->kodeBarang ?></td>
        <td><?= $snos->namaBarang ?></td>
        <td>
          <a href="<?= base_url('index.php/hapus/barangnonsnp/').$snos->id_;?>" onclick="return confirm('Anda akan menghapus <?= $snos->namaBarang ?>')"><span class="fa fa-trash"></span></a>
        </td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>
</div>
</div>

<?php endif ?>
<?php if (pg_admin()):?>

<div class="card">
  <div class="card-header">
    <h4>NON-SNP Ruang Ibadah</h4>
  </div>
  <div class="card-body">
   <table class="table" id="tsnp12">
     <thead>
       <tr>
         <th>No</th>
         <th>Kode Barang</th>
         <th>Nama Barang</th>
         <th></th>
       </tr>
     </thead>
     <tbody>
      <?php $no = 1; foreach ($nonsnpibadah as $snib): ?>
      <tr>
        <td><?= $no++ ?></td>
        <td><?= $snib->kodeBarang ?></td>
        <td><?= $snib->namaBarang ?></td>
        <td>
          <a href="<?= base_url('index.php/hapus/barangnonsnp/').$snib->id_;?>" onclick="return confirm('Anda akan menghapus <?= $snib->namaBarang ?>')"><span class="fa fa-trash"></span></a>
        </td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>
</div>
</div>


<div class="card">
  <div class="card-header">
    <h4>NON-SNP WC</h4>
  </div>
  <div class="card-body">
   <table class="table" id="tsnp10">
     <thead>
       <tr>
         <th>No</th>
         <th>Kode Barang</th>
         <th>Nama Barang</th>
         <th></th>
       </tr>
     </thead>
     <tbody>
      <?php $no = 1; foreach ($nonsnpwc as $snpw): ?>
      <tr>
        <td><?= $no++ ?></td>
        <td><?= $snpw->kodeBarang ?></td>
        <td><?= $snpw->namaBarang ?></td>
        <td>
          <a href="<?= base_url('index.php/hapus/barangnonsnp/').$snpw->id_;?>" onclick="return confirm('Anda akan menghapus <?= $snpw->namaBarang ?>')"><span class="fa fa-trash"></span></a>
        </td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>
</div>
</div>

<div class="card">
  <div class="card-header">
    <h4>NON-SNP Gudang</h4>
  </div>
  <div class="card-body">
   <table class="table" id="tsnp14">
     <thead>
       <tr>
         <th>No</th>
         <th>Kode Barang</th>
         <th>Nama Barang</th>
         <th></th>
       </tr>
     </thead>
     <tbody>
      <?php $no = 1; foreach ($nonsnpgudang as $snpgd): ?>
      <tr>
        <td><?= $no++ ?></td>
        <td><?= $snpgd->kodeBarang ?></td>
        <td><?= $snpgd->namaBarang ?></td>
        <td>
          <a href="<?= base_url('index.php/hapus/barangnonsnp/').$snpgd->id_;?>" onclick="return confirm('Anda akan menghapus <?= $snpgd->namaBarang ?>')"><span class="fa fa-trash"></span></a>
        </td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>
</div>
</div>

<?php endif ?>



<?php if (pg_admin()) { echo '</div>';} ?>



<?php if (pg_admin() || pg_kapus()):?>

<?php if (pg_admin()) { echo '<div class="col-md-6">';} ?>

  <div class="card">
    <div class="card-header">
      <h4>NON-SNP Ruang Perpustakaan</h4>
    </div>
    <div class="card-body">
      <table class="table" id="tsnp5">
       <thead>
         <tr>
           <th>No</th>
           <th>Kode Barang</th>
           <th>Nama Barang</th>
           <th></th>
         </tr>
       </thead>
       <tbody>
        <?php $no = 1; foreach ($nonsnpperpus as $snper): ?>
        <tr>
          <td><?= $no++ ?></td>
          <td><?= $snper->kodeBarang ?></td>
          <td><?= $snper->namaBarang ?></td>
          <td>
            <a href="<?= base_url('index.php/hapus/barangnonsnp/').$snper->id_;?>" onclick="return confirm('Anda akan menghapus <?= $snper->namaBarang ?>')"><span class="fa fa-trash"></span></a>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>
</div>

<?php endif ?>

<?php if (pg_admin() || pg_kalab() || pg_pelab()):?>

<div class="card">
  <div class="card-header">
    <h4>NON-SNP Ruang Laboratorium</h4>
  </div>
  <div class="card-body">
   <table class="table" id="tsnp6">
     <thead>
       <tr>
         <th>No</th>
         <th>Kode Barang</th>
         <th>Nama Barang</th>
         <th>Laboratorium</th>
         <th></th>
       </tr>
     </thead>
     <tbody>
      <?php $no = 1; foreach ($nonsnplab as $snpl): ?>
      <tr>
        <td><?= $no++ ?></td>
        <td><?= $snpl->kodeBarang ?></td>
        <td><?= $snpl->namaBarang ?></td>
        <td>
          <?php 
          if ($snpl->detailLab == '1') {
            echo 'Biologi';
          } elseif ($snpl->detailLab == '2') {
            echo 'Kimia';
          } elseif ($snpl->detailLab == '3') {
            echo 'Fisika';
          } elseif ($snpl->detailLab == '4') {
            echo 'Bahasa';
          } elseif ($snpl->detailLab == '5') {
            echo 'Komputer';
          } elseif ($snpl->detailLab == '6') {
            echo 'IPS';
          } 

          ?>
        </td>
        <td>
          <a href="<?= base_url('index.php/hapus/barangnonsnp/').$snpl->id_?>" onclick="return confirm('Anda akan menghapus <?= $snpl->namaBarang ?>')"><span class="fa fa-trash"></span></a>
        </td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>
</div>
</div>

<?php endif ?>
<?php if (pg_admin() || pg_wali()):?>

<div class="card">
  <div class="card-header">
    <h4>NON-SNP Ruang Kelas</h4>
  </div>
  <div class="card-body">
   <table class="table" id="tsnp7">
     <thead>
       <tr>
         <th>No</th>
         <th>Kode Barang</th>
         <th>Nama Barang</th>
         <th>Kelas</th>
         <th></th>
       </tr>
     </thead>
     <tbody>
      <?php $no = 1; foreach ($nonsnpkelas as $snpk): ?>
      <tr>
        <td><?= $no++ ?></td>
        <td><?= $snpk->kodeBarang ?></td>
        <td><?= $snpk->namaBarang ?></td>
        <td><?= $snpk->detailKelas ?></td>
        <td>
          <a href="<?= base_url('index.php/hapus/barangnonsnp/').$snpk->id_;?>" onclick="return confirm('Anda akan menghapus <?= $snpk->namaBarang ?>')"><span class="fa fa-trash"></span></a>
        </td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>
</div>
</div>

<?php endif ?>
<?php if (pg_admin()):?>

<div class="card">
  <div class="card-header">
    <h4>NON-SNP Ruang Guru</h4>
  </div>
  <div class="card-body">
   <table class="table" id="tsnp8">
     <thead>
       <tr>
         <th>No</th>
         <th>Kode Barang</th>
         <th>Nama Barang</th>
         <th></th>
       </tr>
     </thead>
     <tbody>
      <?php $no = 1; foreach ($nonsnpguru as $sngr): ?>
      <tr>
        <td><?= $no++ ?></td>
        <td><?= $sngr->kodeBarang ?></td>
        <td><?= $sngr->namaBarang ?></td>
        <td>
          <a href="<?= base_url('index.php/hapus/barangnonsnp/').$sngr->id_;?>" onclick="return confirm('Anda akan menghapus <?= $sngr->namaBarang ?>')"><span class="fa fa-trash"></span></a>
        </td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>
</div>
</div>

<?php endif ?>
<?php if (pg_admin() || pg_uks()):?>

<div class="card">
  <div class="card-header">
    <h4>NON-SNP Ruang UKS</h4>
  </div>
  <div class="card-body">
   <table class="table" id="tsnp13">
     <thead>
       <tr>
         <th>No</th>
         <th>Kode Barang</th>
         <th>Nama Barang</th>
         <th></th>
       </tr>
     </thead>
     <tbody>
      <?php $no = 1; foreach ($nonsnpuks as $snu): ?>
      <tr>
        <td><?= $no++ ?></td>
        <td><?= $snu->kodeBarang ?></td>
        <td><?= $snu->namaBarang ?></td>
        <td>
          <a href="<?= base_url('index.php/hapus/barangnonsnp/').$snu->id_;?>" onclick="return confirm('Anda akan menghapus <?= $snu->namaBarang ?>')"><span class="fa fa-trash"></span></a>
        </td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>
</div>
</div>

<?php endif ?>


</div>
</div>

<!-- ============================================================== -->
<!-- End PAge Content -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Right sidebar -->
<!-- ============================================================== -->
<!-- .right-sidebar -->
<!-- ============================================================== -->
<!-- End Right sidebar -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->


<!-- Modal Tambah Data Ruang-->
<div class="modal fade" id="modal-tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Barang</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('index.php/tambah/barangnonsnp') ?>" method="post" id="formTambahBarangSNP">
        <div class="modal-body">
          <div class="form-group">
            <label for="jenisRuang">Jenis Ruang</label>
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
          <div class="form-group" id="detail-lab" style="display: none">
            <label for="detailLab">Jenis Ruang</label>
            <select name="detailLab" id="detailLab" class="form-control">
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

        <div class="form-group">
          <label for="kodeBarang">Kode Barang</label>
          <input type="text" name="kodeBarang" class="form-control" required="">
        </div>
        <div class="form-group">
          <label for="namaBarang">Nama Barang</label>
          <input type="text" name="namaBarang" class="form-control" required="">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
    </form>
  </div>
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="modal-hapus-semua" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Hapus Semua Data Barang</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('index.php/hapus/semuaBarangnon') ?>" id="formHapusSemuaBarang" method="post">
        <div class="modal-body">
          <h4>Yakin akan menghapus semua data barang?</h4>
          <input type="text" name="xPass" class="form-control" placeholder="Masukkan password">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-primary">Hapus Data Barang</button>
        </div>
      </form>
    </div>
  </div>
</div>