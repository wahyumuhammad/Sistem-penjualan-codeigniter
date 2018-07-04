  <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>DASHBOARD</h2>
            </div>

            <!-- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-pink hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">shopping_cart</i>
                        </div>
                        <div class="content">
                            <div class="text">Total Penjualan</div>
                            <div class="number count-to" data-from="0" data-to="<?php echo $total_penjualan; ?>" data-speed="15" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-cyan hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">report</i>
                        </div>
                        <div class="content">
                            <div class="text">Total Barang Kosong</div>
                            <div class="number count-to" data-from="0" data-to="<?php echo $total_barang_kosong; ?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-light-green hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">store</i>
                        </div>
                        <div class="content">
                            <div class="text">Total Barang Gudang</div>
                            <div class="number count-to" data-from="0" data-to="<?php echo $total_barang; ?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-orange hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">monetization_on</i>
                        </div>
                        <div class="content">
                            <div class="text">Keuntungan (Rp)</div>
                            <div class="number count-to" data-from="0" data-to="<?php echo $total_untung; ?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>

           
            </div>
            <!-- #END# Widgets -->
            <div class="row clearfix">
            
        </div>

            <div class="row clearfix">
                             <!-- Task Info -->
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                    <div class="card">
                        <div class="header">
                            <h2>Data Kredit Karyawan</h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>ID</th>
                                            <th>Nama Karyawan</th>
                                            <th>Jabatan</th>
                                            <th>Status</th>
                                            <th>Gaji</th>
                                            <th>Total Kredit</th>
                                            <th>Potong Gaji</th>
                                        
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>ID</th>
                                            <th>Nama Karyawan</th>
                                            <th>Jabatan</th>
                                            <th>Status</th>
                                            <th>Gaji</th>
                                            <th>Total Kredit</th>
                                            <th>Potong Gaji</th>
                                            
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php 
                                         $i = 1;  
                                            foreach ($data_karyawan as $row) {
                                            $id             = $row->id;
                                            $nama_karyawan  = $row->nama_karyawan;
                                            $jabatan        = $row->jabatan;
                                            $status         = $row->status;
                                            $gaji           = $row->gaji;
                                            $total_kredit   = $row->total_kredit;
                                     ?> 
                                        <tr>
                                        <?php if ($total_kredit > 0) { ?>
                                            <td><?php echo $i++ ?></td>
                                            <td><?php echo $id ?></td>
                                            <td><?php echo $nama_karyawan ?></td>
                                            <td><?php echo $jabatan ?></td>
                                            <td><?php echo $status ?></td>
                                            <td><?php echo $gaji ?></td>
                                            <td><?php echo $total_kredit ?></td>
                                            <td><?php echo $gaji - $total_kredit ?></td>
                                        
                                        <?php } ?>
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- #END# Task Info -->
                <!-- Browser Usage -->
               
                <!-- #END# Browser Usage -->
            </div>
           
         <div class="row clearfix">
            
        </div>
            <div class="row clearfix">
                             <!-- Task Info -->
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                    <div class="card">
                        <div class="header">
                            <h2>Data Stok Barang Habis</h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Barang</th>
                                            <th>ID barang</th>
                                            <th>Jumlah</th>
                                            <th>Harga Jual</th>
                                            <th>Harga Beli</th>
                                            <th>Status</th>
                                        
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Barang</th>
                                            <th>ID barang</th>
                                            <th>Jumlah</th>
                                            <th>Harga Jual</th>
                                            <th>Harga Beli</th>
                                            <th>Status</th>
                                            
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php 

                                          $i = 1;  
                                         foreach ($barang_habis as $row) {

                                         $nama   = $row->nama;
                                         $ID     = $row->id;
                                         $jumlah = $row->jumlah;
                                         $harga_jual  = $row->harga_jual;
                                         $harga_beli  = $row->harga_beli;
                                     

                                     ?>
                                        <tr>
                                        <td><?php echo $i++ ?></td>
                                            <td><?php echo $nama ?></td>
                                            <td><?php echo $ID ?></td>
                                            <td><?php echo $jumlah ?></td>
                                            <td><?php echo $harga_jual ?></td>
                                            <td><?php echo $harga_beli ?></td>
                                            <td><?php if ($jumlah == 0) {
                                                                echo 'Kosong';
                                                            }else{
                                                                echo 'Ada';
                                                            } ?></td>
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- #END# Task Info -->
                <!-- Browser Usage -->
               
                <!-- #END# Browser Usage -->
            </div>
        </div>
    </section>

     <!-- Jquery Core Js -->
    <script src="<?php echo base_url() ?>adminBSB/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="<?php echo base_url() ?>adminBSB/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="<?php echo base_url() ?>adminBSB/plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="<?php echo base_url() ?>adminBSB/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="<?php echo base_url() ?>adminBSB/plugins/node-waves/waves.js"></script>

    <!-- Jquery DataTable Plugin Js -->
    <script src="<?php echo base_url() ?>adminBSB/plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="<?php echo base_url() ?>adminBSB/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="<?php echo base_url() ?>adminBSB/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url() ?>adminBSB/plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="<?php echo base_url() ?>adminBSB/plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="<?php echo base_url() ?>adminBSB/plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="<?php echo base_url() ?>adminBSB/plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="<?php echo base_url() ?>adminBSB/plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="<?php echo base_url() ?>adminBSB/plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

    <!-- Custom Js -->
    <script src="<?php echo base_url() ?>adminBSB/js/admin.js"></script>
    <script src="<?php echo base_url() ?>adminBSB/js/pages/tables/jquery-datatable.js"></script>

    <!-- Demo Js -->
    <script src="<?php echo base_url() ?>adminBSB/js/demo.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>

    <script>
        
                var ctx = document.getElementById("myChart").getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: ["Januari", "Februari", "Maret", "April", "Mei", "Juni","Juli","Agustus","September","Oktober","November","Desember"],
                        datasets: [{
                            label: 'Total Penjualan',
                            data: [1,10,20],
                            backgroundColor: '#2196F3',
                            borderColor: '#2196F3',
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            yAxes: [{
                                ticks: {
                                    beginAtZero:true
                                }
                            }]
                        }
                    }
                });
    </script>
</body>

</html>