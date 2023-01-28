<script>
    window.print();
</script>
<style>
    td {
        padding-left: 4px;
        padding-right: 4px;
    }

    @page {size: landscape;}
</style>
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->

              
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title" style="text-align: center"><?= $st ?></h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="zero_config" class="table table-striped table-bordered" border="all" style="border-collapse: collapse; width: 100%">
                            <thead>
                                <tr style="background-color: #E7E7E7">
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
                                    <td style="text-align: center"><?= $brg->jmlBarang; ?></td>
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
