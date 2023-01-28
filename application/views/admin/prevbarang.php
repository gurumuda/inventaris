<style>
    thead th {
        text-align: center;
    }
    thead tr {
        vertical-align: middle;
    }
    thead {
        background-color: #E6FAFB;
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
                <h4 class="page-title">Cetak</h4>
                <div class="ml-auto text-right">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Cetak</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Keadaan barang</li>
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
            <div class="col-12" style="margin-bottom: 10px">
               <div class="row no-print">
                <div class="col-xs-12">
                  <a href="<?php echo base_url('index.php/admin/printbarang'); ?>" target="_blank" class="btn btn-success "><i class="fa fa-print"></i> Cetak</a>
              </div>
          </div>
      </div>
      <div class="card cetak" id="printElement">
        <div class="card-body">
            <h5 class="card-title text-center">KONDISI SARANA SEKOLAH <br> TAHUN 2020 BERDASARKAN PERATURAN MENTERI PENDIDIKAN NASIONAL <br> NOMOR 4 TAHUN 2007</h5>
            <hr>
            <div class="table-responsive">
                <table id="zero_config" class="table table-bordered">
                    <thead>
                        <tr>
                            <th width="20px" rowspan="3">No</th>
                            <th rowspan="3">Nama Sarana</th>

                        </tr>
                        <tr>
                            <th colspan="4">Kondisi Saat Ini</th>
                            <th colspan="2">Kebutuhan</th>
                        </tr>
                        <tr>
                            <th width="50px">Jumlah</th>
                            <th width="50px">Jumlah Baik</th>
                            <th width="50px">Jumlah Rusak</th>
                            <th width="50px">Jumlah Rusak Berat</th>
                            <th width="50px">Jumlah</th>
                            <th width="50px">Selisih</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr style="background-color: #F1F1F1">
                            <th>A</th>
                            <th colspan="7">SARANA PRASARANA PERPUSTAKAAN</th>
                        </tr>
                        <?php if (empty($barangperpustakaan)): ?>
                          <tr>
                            <td colspan="8">Belum ada data</td>
                        </tr>
                    <?php endif ?>
                    <?php foreach ($barangperpustakaan as $brg1): ?>
                        <tr>
                            <td><?= $brg1->kodeBarang; ?></td>
                            <td><?= $brg1->namaBarang; ?></td>
                            <td class="text-right"><?= $brg1->jmlSemua; ?></td>
                            <td class="text-right"><?= $brg1->jmlBaik; ?></td>
                            <td class="text-right"><?= $brg1->jmlRskRingan; ?></td>
                            <td class="text-right"><?= $brg1->jmlRskBerat; ?></td>
                            <td class="text-right"><?= $brg1->jmlPerlu; ?></td>
                            <td class="text-right" nowrap="">
                                <?php $selisih1 = ((int)$brg1->jmlBaik - (int)$brg1->jmlPerlu);
                                    if ($selisih1 > 0) {
                                        echo '+ '.$selisih1;
                                    } elseif ($selisih1 == 0) {
                                        echo '';
                                    } else {
                                        echo $selisih1;
                                    }
                                    
                                 ?>
                            </td>
                        </tr>
                    <?php endforeach ?>

                    <tr style="background-color: #F1F1F1">
                        <th>B</th>
                        <th colspan="7">SARANA PRASARANA RUANG LABORATORIUM BIOLOGI</th>
                    </tr>
                    <?php if (empty($baranglabbiologi)): ?>
                        <tr>
                            <td colspan="8">Belum ada data</td>
                        </tr>
                    <?php endif ?>
                    <?php foreach ($baranglabbiologi as $brg2): ?>
                        <tr>
                            <td><?= $brg2->kodeBarang; ?></td>
                            <td><?= $brg2->namaBarang; ?></td>
                            <td class="text-right"><?= $brg2->jmlSemua; ?></td>
                            <td class="text-right"><?= $brg2->jmlBaik; ?></td>
                            <td class="text-right"><?= $brg2->jmlRskRingan; ?></td>
                            <td class="text-right"><?= $brg2->jmlRskBerat; ?></td>
                            <td class="text-right"><?= $brg2->jmlPerlu; ?></td>
                            <td class="text-right" nowrap="">
                                <?php $selisih2 = ((int)$brg2->jmlBaik - (int)$brg2->jmlPerlu);
                                    if ($selisih2 > 0) {
                                        echo '+ '.$selisih2;
                                    } elseif ($selisih2 == 0) {
                                        echo '';
                                    } else {
                                        echo $selisih2;
                                    }
                                    
                                 ?>
                            </td>
                        </tr>
                    <?php endforeach ?>

                    <tr style="background-color: #F1F1F1">
                        <th>C</th>
                        <th colspan="7">SARANA PRASARANA RUANG LABORATORIUM FISIKA</th>
                    </tr>
                    <?php if (empty($baranglabfisika)): ?>
                        <tr>
                            <td colspan="8">Belum ada data</td>
                        </tr>
                    <?php endif ?>
                    <?php foreach ($baranglabfisika as $brg3): ?>
                        <tr>
                            <td><?= $brg3->kodeBarang; ?></td>
                            <td><?= $brg3->namaBarang; ?></td>
                            <td class="text-right"><?= $brg3->jmlSemua; ?></td>
                            <td class="text-right"><?= $brg3->jmlBaik; ?></td>
                            <td class="text-right"><?= $brg3->jmlRskRingan; ?></td>
                            <td class="text-right"><?= $brg3->jmlRskBerat; ?></td>
                            <td class="text-right"><?= $brg3->jmlPerlu; ?></td>
                            <td class="text-right" nowrap="">
                                <?php $selisih3 = ((int)$brg3->jmlBaik - (int)$brg3->jmlPerlu);
                                    if ($selisih3 > 0) {
                                        echo '+ '.$selisih3;
                                    } elseif ($selisih3 == 0) {
                                        echo '';
                                    } else {
                                        echo $selisih3;
                                    }
                                    
                                 ?>
                            </td>
                        </tr>
                    <?php endforeach ?>

                    <tr style="background-color: #F1F1F1">
                        <th>D</th>
                        <th colspan="7">SARANA PRASARANA RUANG LABORATORIUM KIMIA</th>
                    </tr>
                    <?php if (empty($baranglabkimia)): ?>
                        <tr>
                            <td colspan="8">Belum ada data</td>
                        </tr>
                    <?php endif ?>
                    <?php foreach ($baranglabkimia as $brg4): ?>
                        <tr>
                            <td><?= $brg4->kodeBarang; ?></td>
                            <td><?= $brg4->namaBarang; ?></td>
                            <td class="text-right"><?= $brg4->jmlSemua; ?></td>
                            <td class="text-right"><?= $brg4->jmlBaik; ?></td>
                            <td class="text-right"><?= $brg4->jmlRskRingan; ?></td>
                            <td class="text-right"><?= $brg4->jmlRskBerat; ?></td>
                            <td class="text-right"><?= $brg4->jmlPerlu; ?></td>
                            <td class="text-right" nowrap="">
                                <?php $selisih4 = ((int)$brg4->jmlBaik - (int)$brg4->jmlPerlu);
                                    if ($selisih4 > 0) {
                                        echo '+ '.$selisih4;
                                    } elseif ($selisih4 == 0) {
                                        echo '';
                                    } else {
                                        echo $selisih4;
                                    }
                                    
                                 ?>
                            </td>
                        </tr>
                    <?php endforeach ?>

                    <tr style="background-color: #F1F1F1">
                        <th>E</th>
                        <th colspan="7">SARANA PRASARANA RUANG LABORATORIUM KOMPUTER</th>
                    </tr>
                    <?php if (empty($baranglabkomputer)): ?>
                        <tr>
                            <td colspan="8">Belum ada data</td>
                        </tr>
                    <?php endif ?>
                    <?php foreach ($baranglabkomputer as $brg5): ?>
                        <tr>
                            <td><?= $brg5->kodeBarang; ?></td>
                            <td><?= $brg5->namaBarang; ?></td>
                            <td class="text-right"><?= $brg5->jmlSemua; ?></td>
                            <td class="text-right"><?= $brg5->jmlBaik; ?></td>
                            <td class="text-right"><?= $brg5->jmlRskRingan; ?></td>
                            <td class="text-right"><?= $brg5->jmlRskBerat; ?></td>
                            <td class="text-right"><?= $brg5->jmlPerlu; ?></td>
                            <td class="text-right" nowrap="">
                                <?php $selisih5 = ((int)$brg5->jmlBaik - (int)$brg5->jmlPerlu);
                                    if ($selisih5 > 0) {
                                        echo '+ '.$selisih5;
                                    } elseif ($selisih5 == 0) {
                                        echo '';
                                    } else {
                                        echo $selisih5;
                                    }
                                    
                                 ?>
                            </td>
                        </tr>
                    <?php endforeach ?>

                    <tr style="background-color: #F1F1F1">
                        <th>F</th>
                        <th colspan="7">SARANA PRASARANA RUANG LABORATORIUM BAHASA</th>
                    </tr>
                    <?php if (empty($baranglabbahasa)): ?>
                        <tr>
                            <td colspan="8">Belum ada data</td>
                        </tr>
                    <?php endif ?>
                    <?php foreach ($baranglabbahasa as $brg6): ?>
                        <tr>
                            <td><?= $brg6->kodeBarang; ?></td>
                            <td><?= $brg6->namaBarang; ?></td>
                            <td class="text-right"><?= $brg6->jmlSemua; ?></td>
                            <td class="text-right"><?= $brg6->jmlBaik; ?></td>
                            <td class="text-right"><?= $brg6->jmlRskRingan; ?></td>
                            <td class="text-right"><?= $brg6->jmlRskBerat; ?></td>
                            <td class="text-right"><?= $brg6->jmlPerlu; ?></td>
                            <td class="text-right" nowrap="">
                                <?php $selisih6 = ((int)$brg6->jmlBaik - (int)$brg6->jmlPerlu);
                                    if ($selisih6 > 0) {
                                        echo '+ '.$selisih6;
                                    } elseif ($selisih6 == 0) {
                                        echo '';
                                    } else {
                                        echo $selisih6;
                                    }
                                    
                                 ?>
                            </td>
                        </tr>
                    <?php endforeach ?>

                    <tr style="background-color: #F1F1F1">
                        <th>G</th>
                        <th colspan="7">SARANA PRASARANA RUANG PIMPINAN</th>
                    </tr>
                    <?php if (empty($barangkepsek)): ?>
                        <tr>
                            <td colspan="8">Belum ada data</td>
                        </tr>
                    <?php endif ?>
                    <?php foreach ($barangkepsek as $brg7): ?>
                        <tr>
                            <td><?= $brg7->kodeBarang; ?></td>
                            <td><?= $brg7->namaBarang; ?></td>
                            <td class="text-right"><?= $brg7->jmlSemua; ?></td>
                            <td class="text-right"><?= $brg7->jmlBaik; ?></td>
                            <td class="text-right"><?= $brg7->jmlRskRingan; ?></td>
                            <td class="text-right"><?= $brg7->jmlRskBerat; ?></td>
                            <td class="text-right"><?= $brg7->jmlPerlu; ?></td>
                            <td class="text-right" nowrap="">
                                <?php $selisih7 = ((int)$brg7->jmlBaik - (int)$brg7->jmlPerlu);
                                    if ($selisih7 > 0) {
                                        echo '+ '.$selisih7;
                                    } elseif ($selisih7 == 0) {
                                        echo '';
                                    } else {
                                        echo $selisih7;
                                    }
                                    
                                 ?>
                            </td>
                        </tr>
                    <?php endforeach ?>

                    <tr style="background-color: #F1F1F1">
                        <th>H</th>
                        <th colspan="7">SARANA PRASARANA RUANG GURU</th>
                    </tr>
                    <?php if (empty($barangruanguru)): ?>
                        <tr>
                            <td colspan="8">Belum ada data</td>
                        </tr>
                    <?php endif ?>
                    <?php foreach ($barangruanguru as $brg8): ?>
                        <tr>
                            <td><?= $brg8->kodeBarang; ?></td>
                            <td><?= $brg8->namaBarang; ?></td>
                            <td class="text-right"><?= $brg8->jmlSemua; ?></td>
                            <td class="text-right"><?= $brg8->jmlBaik; ?></td>
                            <td class="text-right"><?= $brg8->jmlRskRingan; ?></td>
                            <td class="text-right"><?= $brg8->jmlRskBerat; ?></td>
                            <td class="text-right"><?= $brg8->jmlPerlu; ?></td>
                            <td class="text-right" nowrap="">
                                <?php $selisih8 = ((int)$brg8->jmlBaik - (int)$brg8->jmlPerlu);
                                    if ($selisih8 > 0) {
                                        echo '+ '.$selisih8;
                                    } elseif ($selisih8 == 0) {
                                        echo '';
                                    } else {
                                        echo $selisih8;
                                    }
                                    
                                 ?>
                            </td>
                        </tr>
                    <?php endforeach ?>

                    <tr style="background-color: #F1F1F1">
                        <th>I</th>
                        <th colspan="7">SARANA PRASARANA RUANG TATA USAHA</th>
                    </tr>
                    <?php if (empty($barangruangtata)): ?>
                        <tr>
                            <td colspan="8">Belum ada data</td>
                        </tr>
                    <?php endif ?>
                    <?php foreach ($barangruangtata as $brg9): ?>
                        <tr>
                            <td><?= $brg9->kodeBarang; ?></td>
                            <td><?= $brg9->namaBarang; ?></td>
                            <td class="text-right"><?= $brg9->jmlSemua; ?></td>
                            <td class="text-right"><?= $brg9->jmlBaik; ?></td>
                            <td class="text-right"><?= $brg9->jmlRskRingan; ?></td>
                            <td class="text-right"><?= $brg9->jmlRskBerat; ?></td>
                            <td class="text-right"><?= $brg9->jmlPerlu; ?></td>
                            <td class="text-right" nowrap="">
                                <?php $selisih9 = ((int)$brg9->jmlBaik - (int)$brg9->jmlPerlu);
                                    if ($selisih9 > 0) {
                                        echo '+ '.$selisih9;
                                    } elseif ($selisih9 == 0) {
                                        echo '';
                                    } else {
                                        echo $selisih9;
                                    }
                                    
                                 ?>
                            </td>
                        </tr>
                    <?php endforeach ?>

                    <tr style="background-color: #F1F1F1">
                        <th>J</th>
                        <th colspan="7">SARANA PRASARANA TEMPAT IBADAH</th>
                    </tr>
                    <?php if (empty($barangruangibadah)): ?>
                        <tr>
                            <td colspan="8">Belum ada data</td>
                        </tr>
                    <?php endif ?>
                    <?php foreach ($barangruangibadah as $brg10): ?>
                        <tr>
                            <td><?= $brg10->kodeBarang; ?></td>
                            <td><?= $brg10->namaBarang; ?></td>
                            <td class="text-right"><?= $brg10->jmlSemua; ?></td>
                            <td class="text-right"><?= $brg10->jmlBaik; ?></td>
                            <td class="text-right"><?= $brg10->jmlRskRingan; ?></td>
                            <td class="text-right"><?= $brg10->jmlRskBerat; ?></td>
                            <td class="text-right"><?= $brg10->jmlPerlu; ?></td>
                            <td class="text-right" nowrap="">
                                <?php $selisih10 = ((int)$brg10->jmlBaik - (int)$brg10->jmlPerlu);
                                    if ($selisih10 > 0) {
                                        echo '+ '.$selisih10;
                                    } elseif ($selisih10 == 0) {
                                        echo '';
                                    } else {
                                        echo $selisih10;
                                    }
                                    
                                 ?>
                            </td>
                        </tr>
                    <?php endforeach ?>

                    <tr style="background-color: #F1F1F1">
                        <th>K</th>
                        <th colspan="7">SARANA PRASARANA RUANG KONSELING</th>
                    </tr>
                    <?php if (empty($barangruangkonsol)): ?>
                        <tr>
                            <td colspan="8">Belum ada data</td>
                        </tr>
                    <?php endif ?>
                    <?php foreach ($barangruangkonsol as $brg11): ?>
                        <tr>
                            <td><?= $brg11->kodeBarang; ?></td>
                            <td><?= $brg11->namaBarang; ?></td>
                            <td class="text-right"><?= $brg11->jmlSemua; ?></td>
                            <td class="text-right"><?= $brg11->jmlBaik; ?></td>
                            <td class="text-right"><?= $brg11->jmlRskRingan; ?></td>
                            <td class="text-right"><?= $brg11->jmlRskBerat; ?></td>
                            <td class="text-right"><?= $brg11->jmlPerlu; ?></td>
                            <td class="text-right" nowrap="">
                                <?php $selisih11 = ((int)$brg11->jmlBaik - (int)$brg11->jmlPerlu);
                                    if ($selisih11 > 0) {
                                        echo '+ '.$selisih11;
                                    } elseif ($selisih11 == 0) {
                                        echo '';
                                    } else {
                                        echo $selisih11;
                                    }
                                    
                                 ?>
                            </td>
                        </tr>
                    <?php endforeach ?>

                    <tr style="background-color: #F1F1F1">
                        <th>L</th>
                        <th colspan="7">SARANA PRASARANA RUANG UKS</th>
                    </tr>
                    <?php if (empty($barangruanguks)): ?>
                        <tr>
                            <td colspan="8">Belum ada data</td>
                        </tr>
                    <?php endif ?>
                    <?php foreach ($barangruanguks as $brg12): ?>
                        <tr>
                            <td><?= $brg12->kodeBarang; ?></td>
                            <td><?= $brg12->namaBarang; ?></td>
                            <td class="text-right"><?= $brg12->jmlSemua; ?></td>
                            <td class="text-right"><?= $brg12->jmlBaik; ?></td>
                            <td class="text-right"><?= $brg12->jmlRskRingan; ?></td>
                            <td class="text-right"><?= $brg12->jmlRskBerat; ?></td>
                            <td class="text-right"><?= $brg12->jmlPerlu; ?></td>
                            <td class="text-right" nowrap="">
                                <?php $selisih12 = ((int)$brg12->jmlBaik - (int)$brg12->jmlPerlu);
                                    if ($selisih12 > 0) {
                                        echo '+ '.$selisih12;
                                    } elseif ($selisih12 == 0) {
                                        echo '';
                                    } else {
                                        echo $selisih12;
                                    }
                                    
                                 ?>
                            </td>
                        </tr>
                    <?php endforeach ?>

                    <tr style="background-color: #F1F1F1">
                        <th>M</th>
                        <th colspan="7">SARANA PRASARANA RUANG OSIS</th>
                    </tr>
                    <?php if (empty($barangruangosis)): ?>
                        <tr>
                            <td colspan="8">Belum ada data</td>
                        </tr>
                    <?php endif ?>
                    <?php foreach ($barangruangosis as $brg13): ?>
                        <tr>
                            <td><?= $brg13->kodeBarang; ?></td>
                            <td><?= $brg13->namaBarang; ?></td>
                            <td class="text-right"><?= $brg13->jmlSemua; ?></td>
                            <td class="text-right"><?= $brg13->jmlBaik; ?></td>
                            <td class="text-right"><?= $brg13->jmlRskRingan; ?></td>
                            <td class="text-right"><?= $brg13->jmlRskBerat; ?></td>
                            <td class="text-right"><?= $brg13->jmlPerlu; ?></td>
                            <td class="text-right" nowrap="">
                                <?php $selisih13 = ((int)$brg13->jmlBaik - (int)$brg13->jmlPerlu);
                                    if ($selisih13 > 0) {
                                        echo '+ '.$selisih13;
                                    } elseif ($selisih13 == 0) {
                                        echo '';
                                    } else {
                                        echo $selisih13;
                                    }
                                    
                                 ?>
                            </td>
                        </tr>
                    <?php endforeach ?>

                    <tr style="background-color: #F1F1F1">
                        <th>N</th>
                        <th colspan="7">SARANA PRASARANA RUANG WC</th>
                    </tr>
                    <?php if (empty($barangruangtoilet)): ?>
                        <tr>
                            <td colspan="8">Belum ada data</td>
                        </tr>
                    <?php endif ?>
                    <?php foreach ($barangruangtoilet as $brg14): ?>
                        <tr>
                            <td><?= $brg14->kodeBarang; ?></td>
                            <td><?= $brg14->namaBarang; ?></td>
                            <td class="text-right"><?= $brg14->jmlSemua; ?></td>
                            <td class="text-right"><?= $brg14->jmlBaik; ?></td>
                            <td class="text-right"><?= $brg14->jmlRskRingan; ?></td>
                            <td class="text-right"><?= $brg14->jmlRskBerat; ?></td>
                            <td class="text-right"><?= $brg14->jmlPerlu; ?></td>
                            <td class="text-right" nowrap="">
                                <?php $selisih14 = ((int)$brg14->jmlBaik - (int)$brg14->jmlPerlu);
                                    if ($selisih14 > 0) {
                                        echo '+ '.$selisih14;
                                    } elseif ($selisih14 == 0) {
                                        echo '';
                                    } else {
                                        echo $selisih14;
                                    }
                                    
                                 ?>
                            </td>
                        </tr>
                    <?php endforeach ?>

                    <tr style="background-color: #F1F1F1">
                        <th>O</th>
                        <th colspan="7">SARANA PRASARANA GUDANG</th>
                    </tr>
                    <?php if (empty($barangruanggudang)): ?>
                        <tr>
                            <td colspan="8">Belum ada data</td>
                        </tr>
                    <?php endif ?>
                    <?php foreach ($barangruanggudang as $brg15): ?>
                        <tr>
                            <td><?= $brg15->kodeBarang; ?></td>
                            <td><?= $brg15->namaBarang; ?></td>
                            <td class="text-right"><?= $brg15->jmlSemua; ?></td>
                            <td class="text-right"><?= $brg15->jmlBaik; ?></td>
                            <td class="text-right"><?= $brg15->jmlRskRingan; ?></td>
                            <td class="text-right"><?= $brg15->jmlRskBerat; ?></td>
                            <td class="text-right"><?= $brg15->jmlPerlu; ?></td>
                            <td class="text-right" nowrap="">
                                <?php $selisih15 = ((int)$brg15->jmlBaik - (int)$brg15->jmlPerlu);
                                    if ($selisih15 > 0) {
                                        echo '+ '.$selisih15;
                                    } elseif ($selisih15 == 0) {
                                        echo '';
                                    } else {
                                        echo $selisih15;
                                    }
                                    
                                 ?>
                            </td>
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
