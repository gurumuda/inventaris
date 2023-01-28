
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
                            <li class="breadcrumb-item active" aria-current="page">GTK</li>
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
                <div style="margin-bottom: 10px">
                    <button type="button" data-toggle="modal" data-target="#modal-tambah-gtk"><span class="fa fa-plus"></span> Tambah GTK</button>
                    <button type="button" data-toggle="modal" data-target="#modal-hapus"><span class="fa fa-trash"></span> Hapus Semua GTK</button>
                </div>


                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Data GTK</h5>
                        <div class="table-responsive">
                            <table id="tabelKelas" class="table table-striped table-bordered">
                                <thead>
                                    <tr style="text-align: center">
                                        <th width="5%">No</th>
                                        <th>Identitas</th>
                                        <th>Nama</th>
                                        <th width="10%">Status</th>
                                        <th>Level</th>
                                        <th width="20%">Opsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; foreach($gtk as $gtk ): ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $gtk->identitas ?></td>
                                        <td><?= $gtk->nama ?></td>
                                        <td align="center">
                                            <?php if ($gtk->status == '1') {
                                                echo '<a href="'.base_url('index.php/ubah/statusgtk/').$gtk->id_.'" class="badge badge-success">Aktiv</a>';
                                            } else {
                                                echo '<a href="'.base_url('index.php/ubah/statusgtk/').$gtk->id_.'" class="badge badge-warning">Non Aktiv</a>';
                                            }
                                            ?>
                                        </td>
                                        <td>
                                            <?php 

                                            if ($gtk->level == '1') {
                                                echo 'Kepala Sekolah';
                                            } elseif ($gtk->level == '2') {
                                                echo 'Wakil Kepala Sekolah';
                                            } elseif ($gtk->level == '3') {
                                                echo 'Kepala Tata Laksana Sekolah';
                                            } elseif ($gtk->level == '4') {
                                                echo 'Kepala Laboratorium';
                                            } elseif ($gtk->level == '5') {
                                                echo 'Kepala Perpustakaan';
                                            } elseif ($gtk->level == '6') {
                                                echo 'Pengelola Laboratorium';
                                            } elseif ($gtk->level == '7') {
                                                echo 'Wali Kelas';
                                            } elseif ($gtk->level == '8') {
                                                echo 'Guru / Staf';
                                            } elseif ($gtk->level == '10') {
                                                echo 'Guru BK';
                                            } elseif ($gtk->level == '11') {
                                                echo 'Penanggungjawab UKS';
                                            } elseif ($gtk->level == '12') {
                                                echo 'Pembina Osis';
                                            } 

                                            ?>
                                        </td>
                                        <td align="center">
                                            <button type="button" class="badge hapusGTK" data-toggle="modal" data-id="<?= $gtk->id_; ?>" data-namagtk="<?= $gtk->nama; ?>"><span class="fa fa-trash"></span> Hapus</button> | <button type="button" class="badge ubahGTK" data-id="<?= $gtk->id_; ?>"><span class="fa fa-edit"></span> Ubah</button>
                                        </td>
                                    </tr>

                                <?php endforeach; ?>
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
    
    <!-- Modal -->
    <div class="modal fade" id="mHapusGTK" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Hapus GTK</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url('index.php/hapus/gtk') ?>" id="formHapusGTK" method="post">
                    <div class="modal-body">
                        <h4>Yakin akan menghapus?</h4>
                        <input type="hidden" name="id">
                        <input type="text" name="xPass" class="form-control" placeholder="Masukkan password">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Hapus GTK</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal Tambah Data GTK-->
    <div class="modal fade" id="modal-tambah-gtk" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data GTK</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url('index.php/tambah/gtk') ?>" method="post" id="formTambahGTK">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="identitas">No Identitas GTK</label>
                            <input type="number" name="identitas" class="form-control" required="">
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama GTK</label>
                            <input type="text" name="nama" class="form-control" required="">
                        </div>
                        <div class="form-group">
                            <label for="xuser">Username (Login)</label>
                            <input type="text" name="xuser" class="form-control" required="">
                        </div>
                        <div class="form-group">
                            <label for="xpass">Password (Login)</label>
                            <input type="text" name="xpass" class="form-control" required="">
                        </div>
                        <div class="form-group">
                            <label for="level">Level</label>
                            <select name="level" id="level" class="form-control">
                                <option value="">- pilih level -</option>
                                <option value="1">Kepala Sekolah</option>
                                <option value="2">Wakil Kepala Sekolah</option>
                                <option value="3">Kepala Tata Usaha</option>
                                <option value="4">Kepala Laboratorium</option>
                                <option value="5">Kepala Perpustakaan</option>
                                <option value="6">Pengelola Laboratorium</option>
                                <option value="7">Wali Kelas</option>
                                <option value="8">Guru/Staf</option>
                                <option value="10">Guru Bimbingan Konseling</option>
                                <option value="11">Penanggungjawab UKS</option>
                                <option value="12">Pembina Osis</option>
                            </select>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Simpan Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal Tambah Data GTK-->
    <div class="modal fade" id="modalUbahGTK" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ubah Data GTK</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url('index.php/ubah/gtk') ?>" method="post" id="formUbahGTK">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="identitas">No Identitas GTK</label>
                            <input type="number" name="identitas" class="form-control" required="">
                            <input type="hidden" name="idGTK">
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama GTK</label>
                            <input type="text" name="nama" class="form-control" required="">
                        </div>
                        <div class="form-group">
                            <label for="xuser">Username (Login)</label>
                            <input type="text" name="xuser" class="form-control" required="">
                        </div>
                        <div class="form-group">
                            <label for="xpass">Password (Login)</label>
                            <input type="text" name="xpass" class="form-control" >
                            <small class="text-danger">Kosongkan password jika password tidak diubah</small>
                        </div>
                        <div class="form-group">
                            <label for="level">Level</label>
                            <select name="level" id="level" class="form-control">
                                 <option value="">- pilih level -</option>
                                <option value="1">Kepala Sekolah</option>
                                <option value="2">Wakil Kepala Sekolah</option>
                                <option value="3">Kepala Tata Usaha</option>
                                <option value="4">Kepala Laboratorium</option>
                                <option value="5">Kepala Perpustakaan</option>
                                <option value="6">Pengelola Laboratorium</option>
                                <option value="7">Wali Kelas</option>
                                <option value="8">Guru/Staf</option>
                                <option value="10">Guru Bimbingan Konseling</option>
                                <option value="11">Penanggungjawab UKS</option>
                                <option value="12">Pembina Osis</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Simpan Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modal-hapus" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Hapus Semua GTK</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url('index.php/hapus/semuaGTK') ?>" id="formHapusSemuaGTK" method="post">
                    <div class="modal-body">
                        <h4>Yakin akan menghapus semua GTK?</h4>
                        <input type="text" name="xPass" class="form-control" placeholder="Masukkan password">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Hapus GTK</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>