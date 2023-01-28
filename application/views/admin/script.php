
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="<?= base_url('assets/template/admin/');?>assets/libs/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="<?= base_url('assets/template/admin/');?>assets/libs/popper.js/dist/umd/popper.min.js"></script>
<script src="<?= base_url('assets/template/admin/');?>assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="<?= base_url('assets/template/admin/');?>assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
<script src="<?= base_url('assets/template/admin/');?>assets/extra-libs/sparkline/sparkline.js"></script>
<!--Wave Effects -->
<script src="<?= base_url('assets/template/admin/');?>dist/js/waves.js"></script>
<!--Menu sidebar -->
<script src="<?= base_url('assets/template/admin/');?>dist/js/sidebarmenu.js"></script>
<!--Custom JavaScript -->
<script src="<?= base_url('assets/template/admin/');?>dist/js/custom.min.js"></script>
<!-- this page js -->
<script src="<?= base_url('assets/template/admin/');?>assets/extra-libs/multicheck/datatable-checkbox-init.js"></script>
<script src="<?= base_url('assets/template/admin/');?>assets/extra-libs/multicheck/jquery.multicheck.js"></script>
<script src="<?= base_url('assets/template/admin/');?>assets/extra-libs/DataTables/datatables.min.js"></script>
<!-- this page js -->
<script src="<?= base_url('assets/template/admin/');?>assets/libs/toastr/build/toastr.min.js"></script>
<script src="<?= base_url('assets/template/admin/');?>assets/libs/inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>
    <script src="<?= base_url('assets/template/admin/');?>dist/js/pages/mask/mask.init.js"></script>
   <script src="<?= base_url('assets/template/admin/');?>assets/libs/select2/dist/js/select2.full.min.js"></script>
    <script src="<?= base_url('assets/template/admin/');?>assets/libs/select2/dist/js/select2.min.js"></script>
<script src="<?= base_url()?>assets/myJs/print.min.js"></script>
<script src="<?= base_url()?>assets/myJs/my.js"></script>
<script>
        /****************************************
         *       Basic Table                   *
         ****************************************/
         $('#tabelKelas').DataTable();
         $('#tsnp1').DataTable();
         $('#tsnp2').DataTable();
         $('#tsnp3').DataTable();
         $('#tsnp4').DataTable();
         $('#tsnp5').DataTable();
         $('#tsnp6').DataTable();
         $('#tsnp7').DataTable();
         $('#tsnp8').DataTable();
         $('#tsnp9').DataTable();
         $('#tsnp10').DataTable();
         $('#tsnp11').DataTable();
         $('#tsnp12').DataTable();
         $('#tsnp13').DataTable();
         $('#tsnp14').DataTable();

         //***********************************//
        // For select 2
        //***********************************//
        

     </script>

     <script>
         $(document).ready(function() {
            $('.select2').select2({
                dropdownParent: $('#my')
            });
         });
     </script>

     <!-- =================== -->
     <!-- tampilkan konfirmasi hapus kelas -->
     <!-- =================== -->
     <script>
        mHapusRuang = $('#mHapusRuang');

        $('#tabelKelas').on('click','.hapusRuang', function(){
            id = $(this).data('id');
            namaKelas = $(this).data('namarg');
            
            $('#formHapusRuang [name="id"]').val(id);

            mHapusRuang.modal('show').on('shown.bs,modal');
        })
    </script>

    <!-- =================== -->
    <!-- tampilkan konfirmasi hapus GTK -->
    <!-- =================== -->
    <script>
        mHapusGTK = $('#mHapusGTK');

        $('#tabelKelas').on('click','.hapusGTK', function(){
            id = $(this).data('id');
            namaKelas = $(this).data('namakls');
            
            $('#formHapusGTK [name="id"]').val(id);

            mHapusGTK.modal('show').on('shown.bs,modal');
        })
    </script>

    <!-- =================== -->
    <!-- tampilkan form ubah kelas -->
    <!-- =================== -->
    <script>
        modalUbahRuang = $('#modalUbahRuang');
        var detaillab1 = document.getElementById('detail-lab1');

        $('#tabelKelas').on('click','.ubahRuang', function(){
            id = $(this).data('id');
            
            $.ajax({
                url: '<?= base_url('index.php/get/ubahRuang') ?>',
                type: 'post',
                data: {id: id},
                dataType: 'json',
                success: function(data){

                    detaillab1.style.display='block';

                    $('#formUbahRuang [name="jenisRuang"]').val(data[0].jenisRuang);
                    $('#formUbahRuang [name="idRuang"]').val(data[0].id_);
                    $('#formUbahRuang [name="kodeRuang"]').val(data[0].kodeRuang);
                    $('#formUbahRuang [name="namaRuang"]').val(data[0].namaRuang);
                    $('#formUbahRuang [name="pengelola"]').val(data[0].pengelola);
                    $('#formUbahRuang [name="detailLab"]').val(data[0].detailLabo);

                    modalUbahRuang.modal('show').on('shown.bs,modal');

                },
                error: function(data){
                    alert('error');
                }
            });

            
        })
    </script>

    <!-- =================== -->
    <!-- tampilkan form ubah GTK -->
    <!-- =================== -->
    <script>
        modalUbahGTK = $('#modalUbahGTK');

        $('#tabelKelas').on('click','.ubahGTK', function(){
            id = $(this).data('id');
            
            $.ajax({
                url: '<?= base_url('index.php/get/ubahGTK') ?>',
                type: 'post',
                data: {id: id},
                dataType: 'json',
                success: function(data){

                    $('#formUbahGTK [name="idGTK"]').val(data[0].id_);
                    $('#formUbahGTK [name="identitas"]').val(data[0].identitas);
                    $('#formUbahGTK [name="nama"]').val(data[0].nama);
                    $('#formUbahGTK [name="xuser"]').val(data[0].xuser);
                    $('#formUbahGTK [name="level"]').val(data[0].level);

                    
                    modalUbahGTK.modal('show').on('shown.bs,modal');

                },
                error: function(data){
                    alert('error');
                }
            });

            
        })
    </script>

    <script>
        const flash_success = $('.flash_data_success').data('flash_success');

        if (flash_success) {
            toastr.success(flash_success);
        }
    </script>

    <script>
        const flash_error = $('.flash_data_error').data('flash_error');

        if (flash_error) {
            toastr.error(flash_error);
        }
    </script>

    <script>
        var detaillab = document.getElementById('detail-lab');
        var detailKelas = document.getElementById('detail-kelas')

        $('#jenisRuang').on('change', function(){
            var jenisruang = $(this).val();

            if (jenisruang == '6') {
                detaillab.style.display='block';
            } else {
                detaillab.style.display='none';
            }

            if (jenisruang == '7') {
                detailKelas.style.display='block';
            } else {
                detailKelas.style.display='none';
            }

        })
    </script>

    <script>
        var detaillab1 = document.getElementById('detail-lab1');

        $('#jenisRuang1').on('change', function(){
            var jenisruang1 = $(this).val();

            if (jenisruang1 == '6') {
                detaillab1.style.display='block';
            } else {
                detaillab1.style.display='none';
            }
        })
    </script>

    <script>
        var tampil = document.getElementById('tampil');
        var det = document.getElementById('det');


       $('#jenisRuang').on('change', function(){
        var jenisRuang = $(this).val();

        if ((jenisRuang != '') && (jenisRuang != '6')) {
            tampil.style.display='block';
        }
       });

       $('#det').on('change', function(){
        tampil.style.display='block';

       });

    </script>



</body>

</html>