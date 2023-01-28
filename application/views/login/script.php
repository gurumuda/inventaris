

    <!-- ============================================================== -->
    <!-- All Required js -->
    <!-- ============================================================== -->
    <script src="<?= base_url('assets/template/admin/');?>assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?= base_url('assets/template/admin/');?>assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="<?= base_url('assets/template/admin/');?>assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- this page js -->
    <script src="<?= base_url('assets/template/admin/');?>assets/libs/toastr/build/toastr.min.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugin js -->
    <!-- ============================================================== -->
    <script>

    $('[data-toggle="tooltip"]').tooltip();
    $(".preloader").fadeOut();
   
    </script>

    <script>
        const flash_error = $('.flash_error').data('flash_error');

        if (flash_error) {
           toastr.error(flash_error);
        }
    </script>

    <script type="text/javascript">
    $(document).ready(function(){       
        $('.form-checkbox').click(function(){
            if($(this).is(':checked')){
                $('.form-password').attr('type','text');
            }else{
                $('.form-password').attr('type','password');
            }
        });
    });
</script>

</body>

</html>