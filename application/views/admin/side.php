        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin5">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav" class="p-t-30">

                        <!-- ================================================== -->
                        <!-- Jika login sebagai admin -->
                        <!-- ================================================== -->

                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= base_url('index.php/admin') ?>" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span></a></li>

                        <?php if(pg_admin()): ?>

                            <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-settings"></i><span class="hide-menu">Settings </span></a>
                                <ul aria-expanded="false" class="collapse  first-level">
                                    <li class="sidebar-item"><a href="<?= base_url('index.php/admin/ruang') ?>" class="sidebar-link"><i class="mdi mdi-kodi"></i><span class="hide-menu"> Ruang </span></a></li>
                                    <li class="sidebar-item"><a href="<?= base_url('index.php/admin/gtk') ?>" class="sidebar-link"><i class="mdi mdi-human-male-female"></i><span class="hide-menu"> GTK </span></a></li>
                                    <li class="sidebar-item"><a href="<?= base_url('index.php/admin/snp') ?>" class="sidebar-link"><i class="mdi mdi-animation"></i><span class="hide-menu"> SNP Barang </span></a></li>
                                    <li class="sidebar-item"><a href="<?= base_url('index.php/admin/nonsnp') ?>" class="sidebar-link"><i class="mdi mdi-plus"></i><span class="hide-menu"> Non SNP Barang </span></a></li>
                                </ul>
                            </li>

                        <?php endif; ?>

                        <?php if (!pg_admin() && !pg_guru()): ?>

                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-settings"></i><span class="hide-menu">Settings </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="<?= base_url('index.php/admin/nonsnp') ?>" class="sidebar-link"><i class="mdi mdi-plus"></i><span class="hide-menu"> Non SNP Barang </span></a></li>
                            </ul>
                        </li>

                    <?php endif; ?>

                    <?php if (!pg_guru()): ?>

                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= base_url('index.php/admin/input') ?>" aria-expanded="false"><i class="mdi mdi-arrow-up-bold-hexagon-outline"></i><span class="hide-menu">Input Sarpras</span></a></li>

                    <?php endif; ?>

                    <?php if (pg_kepsek() || pg_wakasek()): ?>

                    <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-cards-variant"></i><span class="hide-menu">Usulan </span></a>
                        <ul aria-expanded="false" class="collapse  first-level">

                            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= base_url('index.php/admin/kelolausul') ?>" aria-expanded="false"><i class="mdi mdi-border-color"></i><span class="hide-menu"> Kelola Usulan Barang</span></a></li>

                        <?php endif ?>

                        <?php if (!pg_kepsek()): ?>
                            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= base_url('index.php/admin/usul') ?>" aria-expanded="false"><i class="mdi mdi-airplay"></i><span class="hide-menu"> Usulan Barang</span></a></li>
                        <?php endif ?>

                        

                        <?php if (pg_kepsek() || pg_wakasek()): ?>
                    </ul>
                </li>
                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-printer"></i><span class="hide-menu"> Cetak</span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item"><a href="<?= base_url('index.php/admin/prevbarang') ?>" class="sidebar-link"><i class="mdi mdi-stackexchange"></i><span class="hide-menu"> Keadaan Barang</span></a></li>
                        <li class="sidebar-item"><a href="<?= base_url('index.php/admin/prevusul') ?>" class="sidebar-link"><i class="mdi mdi-view-day"></i><span class="hide-menu"> Usulan </span></a></li>
                        
                    </ul>
                </li>

            <?php endif ?>




        </ul>
    </nav>
    <!-- End Sidebar navigation -->
</div>
<!-- End Sidebar scroll-->
</aside>
<!-- ============================================================== -->
<!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->