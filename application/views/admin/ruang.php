
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
                            <li class="breadcrumb-item active" aria-current="page">Room</li>
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
                    <button type="button" data-toggle="modal" data-target="#modal-tambah-ruang"><span class="fa fa-plus"></span> Tambah Ruang</button>
                    <button type="button" data-toggle="modal" data-target="#modal-hapus"><span class="fa fa-trash"></span> Hapus Semua Ruang</button>
                </div>


                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Data Ruang</h5>
                        <div class="table-responsive">
                            <table id="tabelKelas" class="table table-striped table-bordered">
                                <thead>
                                    <tr style="text-align: center">
                                        <th width="5%">No</th>
                                        <th>Jenis Ruang</th>
                                        <th>Nama Ruang</th>
                                        <th>Pengelola Ruang</th>
                                        <th width="20%">Opsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; foreach($ruang as $rg ): ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $rg->jnsRuang ?></td>
                                        <td><?= $rg->namaRuang ?></td>
                                        <td><?= $rg->nama ?></td>
                                        <td align="center">
                                            <button type="button" class="badge hapusRuang" data-toggle="modal" data-id="<?= $rg->id_; ?>" data-namaRuang="<?= $rg->namaRuang; ?>"><span class="fa fa-trash"></span> Hapus</button> | <button type="button" class="badge ubahRuang" data-id="<?= $rg->id_; ?>"><span class="fa fa-edit"></span> Ubah</button>
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
    <div class="modal fade" id="mHapusRuang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Hapus Ruang</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url('index.php/hapus/ruang') ?>" id="formHapusRuang" method="post">
                    <div class="modal-body">
                        <h4>Yakin akan menghapus?</h4>
                        <input type="hidden" name="id">
                        <input type="text" name="xPass" class="form-control" placeholder="Masukkan password">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Hapus Ruang</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal Tambah Data Ruang-->
    <div class="modal fade" id="modal-tambah-ruang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data Ruang</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url('index.php/tambah/ruang') ?>" method="post" id="formTambahRuang">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="jenisRuang">Jenis Ruang</label>
                            <select name="jenisRuang" id="jenisRuang" class="form-control" required="">
                                <option value="">- Pilih Jenis Ruang -</option>
                                <option value="1">Ruang Kepala Sekolah</option>
                                <option value="2">Ruang Wakil Kepala Sekolah</option>
                                <option value="3">Ruang Tata Usaha</option>
                                <option value="4">Ruang Kepala Laboratorium</option>
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
                            </select>
                        </div>
                        <div class="form-group" id="detail-lab" style="display: none">
                            <label for="detailLab">Detail Ruang Laboratorium</label>
                            <select name="detailLab" id="detailLab" class="form-control">
                                <option value="">- Pilih Laboratorium-</option>
                                <option value="1">Laboratorium Biologi</option>
                                <option value="2">Laboratorium Kimia</option>
                                <option value="3">Laboratorium Fisika</option>
                                <option value="4">Laboratorium Bahasa</option>
                                <option value="5">Laboratorium Komputer</option>
                                <option value="6">Laboratorium IPS</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="kodeRuang">Kode Ruang</label>
                            <input type="text" name="kodeRuang" class="form-control" required="">
                        </div>
                        <div class="form-group">
                            <label for="namaRuang">Nama Ruang</label>
                            <input type="text" name="namaRuang" class="form-control" required="">
                        </div>
                        <div class="form-group" id="my">
                            <label for="pengelola">Pengelola Ruang</label>
                            <select name="pengelola" id="pengelola" class="select2 form-control custom-select" style="width: 100%; height:36px;">
                                <option value="">- Pilih Pengelola -</option>
                                <?php foreach ($wali as $wl): ?>
                                    <option value="<?= $wl->identitas ?>"><?= $wl->nama;?></option>
                                <?php endforeach; ?>
                            </select>
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

    <!-- Modal Ubah Data Kelas-->
    <div class="modal fade" id="modalUbahRuang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ubah Data Ruang</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url('index.php/ubah/ruang') ?>" method="post" id="formUbahRuang">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="jenisRuang">Jenis Ruang</label>
                            <select name="jenisRuang" id="jenisRuang1" class="form-control" required="">
                                <option value="">- Pilih Jenis Ruang -</option>
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
                            </select>
                        </div>
                        <div class="form-group" id="detail-lab1" style="display: none">
                            <label for="detailLab">Detail Ruang Laboratorium</label>
                            <select name="detailLab" id="detailLab" class="form-control">
                                <option value="">- Pilih Laboratorium-</option>
                                <option value="1">Laboratorium Biologi</option>
                                <option value="2">Laboratorium Kimia</option>
                                <option value="3">Laboratorium Fisika</option>
                                <option value="4">Laboratorium Bahasa</option>
                                <option value="5">Laboratorium Komputer</option>
                                <option value="6">Laboratorium IPS</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="kodeRuang">Kode Ruang</label>
                            <input type="hidden" name="idRuang" />
                            <input type="text" name="kodeRuang" class="form-control" required="">
                        </div>
                        <div class="form-group">
                            <label for="namaRuang">Nama Ruang</label>
                            <input type="text" name="namaRuang" class="form-control" required="">
                        </div>
                        <div class="form-group">
                            <label for="pengelola">Pengelola Ruang</label>
                            <select name="pengelola" id="pengelola" class="form-control" style="width: 100%; height:36px; border-radius: 0px">
                                <option value="">- pilih pengelola -</option>
                                <?php foreach ($wali as $wl): ?>
                                    <option value="<?= $wl->identitas ?>"><?= $wl->nama;?></option>
                                <?php endforeach; ?>
                            </select>
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
    <div class="modal fade" id="modal-hapus" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Hapus Semua Ruang</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url('index.php/hapus/semuaRuang') ?>" id="formHapusSemuaRuang" method="post">
                    <div class="modal-body">
                        <h4>Yakin akan menghapus semua ruang?</h4>
                        <input type="text" name="xPass" class="form-control" placeholder="Masukkan password">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Hapus Ruang</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
