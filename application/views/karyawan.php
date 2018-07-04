    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                
            </div>
            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Data User
                            </h2>
                            <!-- <button type="button" class="btn btn-default waves-effect">DEFAULT</button> -->
                            <br>
                            <button type="button" class="btn btn-primary waves-effect" data-toggle="modal" data-target="#mymodal" data-id="">Tambah Data</button>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                     <tr>
                                        <th>#</th>
                                        <th>ID</th>
                                        <th>NAMA KARYAWAN</th>
                                        <th>JABATAN</th>
                                        <th>STATUS</th>
                                        <th>GAJI</th>
                                       <!--  <th>TOTAL KREDIT</th> -->
                                        <th>Update</th>
                                        <th>Delete</th>  
                                    </tr>
                                    </thead>
                                <tbody>
                                    <tr>
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
                                        <td><?php echo $i++ ?></td>
                                        <td><?php echo $id ?></td>
                                        <td><?php echo $nama_karyawan ?></td>
                                        <td><?php echo $jabatan ?></td>
                                        <td><?php echo $status ?></td>
                                        <td><?php echo $gaji ?></td>
                                      
                                        <td><center>
                                                <a 
                                                            href="javascript:;"
                                                            data-id="<?php echo $id; ?>"
                                                            data-nama="<?php echo $nama_karyawan; ?>"
                                                            data-jabatan="<?php echo $jabatan; ?>"
                                                            data-status="<?php echo $status ?>"
                                                            data-gaji="<?php echo $gaji ?>"
                                                            data-toggle="modal" data-target="#update_modal">
                                                 <button type="button" class="btn bg-blue waves-effect" data-id="">Update</button>
                                                </a>
                                            </center>
                                        </td>
                                        <td><center>
                                           <a href="ckaryawan/hapus/<?php echo $id; ?>" class="btn bg-pink waves-effect">Delete</a>
                                            </center>
                                        </td>
                                    </tr>
                                     <?php } ?>
                                </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Examples -->
           
            <div class="modal fade" id="mymodal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">Tambah Data Karyawan</h4>
                        </div>
                        <div class="modal-body">

                            <form id="form_advanced_validation" method="POST" action="<?php echo base_url() ?>index.php/ckaryawan/input_karyawan">
                                <div class="form-group form-float">
                                <h4 class="card-inside-title">Nama Karyawan</h4>
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="nama" id="nama">
                                      <!--   <label class="form-label">Nama Barang</label> -->
                                    </div>
                                   
                                </div>
                                <div class="form-group form-float">
                                <h4 class="card-inside-title">Jabatan</h4>
                                    <div class="form-line">
                                        <input type="text" name="jbt" id="jbt" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                <h4 class="card-inside-title">Status</h4>
                                    <div class="form-line">
                                          <select class="form-control show-tick" data-show-subtext="true" id="status" name="status">
                                                    <option value="Tetap">Tetap</option>
                                                    <option value="Tidak Tetap">Tidak Tetap</option>
                                            </select>

                                       <!--  <label class="form-label">Nama Barang</label> -->
                                    </div>
                                   
                                </div>
                                <div class="form-group form-float">
                                <h4 class="card-inside-title">Gaji</h4>
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="gaji" id="gaji" required>
                                   <!--      <label class="form-label">Nama Barang</label> -->
                                    </div>
                                   
                                </div>
                            <!--     <div class="form-group form-float">
                                <h4 class="card-inside-title">Total Kredit</h4>
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="kredit" id="kredit" required>
                                    </div>
                                   
                                </div> -->
                               
                             <div class="modal-footer">

                            <button type="submit" class="btn btn-link waves-effect">SAVE CHANGES</button>
                            <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                        </div>
                        </form>

                        </div>
                       
                    </div>
                </div>
        </div> 

        <div class="modal fade" id="update_modal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">Update Data Karyawan</h4>
                        </div>
                        <div class="modal-body">

                            <form id="form_advanced_validation" method="POST" action="<?php echo base_url() ?>index.php/ckaryawan/update_karyawan">

                                <div class="form-group form-float">
                                <h4 class="card-inside-title">ID Karyawan</h4>
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="id" id="id">
                                      <!--   <label class="form-label">Nama Barang</label> -->
                                    </div>
                                   
                                </div>
                                <div class="form-group form-float">
                                <h4 class="card-inside-title">Nama Karyawan</h4>
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="nama" id="nama">
                                      <!--   <label class="form-label">Nama Barang</label> -->
                                    </div>
                                   
                                </div>
                                <div class="form-group form-float">
                                <h4 class="card-inside-title">Jabatan</h4>
                                    <div class="form-line">
                                        <input type="text" name="jbt" id="jbt" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                <h4 class="card-inside-title">Status</h4>
                                    <div class="form-line">
                                          <select class="form-control show-tick" data-show-subtext="true" id="status" name="status">
                                                    <option value="Tetap">Tetap</option>
                                                    <option value="Tidak Tetap">Tidak Tetap</option>
                                            </select>

                                       <!--  <label class="form-label">Nama Barang</label> -->
                                    </div>
                                   
                                </div>
                                <div class="form-group form-float">
                                <h4 class="card-inside-title">Gaji</h4>
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="gaji" id="gaji" required>
                                   <!--      <label class="form-label">Nama Barang</label> -->
                                    </div>
                                   
                                </div>
                               
                             <div class="modal-footer">

                            <button type="submit" class="btn btn-link waves-effect">SAVE CHANGES</button>
                            <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                        </div>
                        </form>

                        </div>
                       
                    </div>
                </div>
        </div> 
      </section>


    <script>
        $(document).ready(function() {
            // Untuk sunting
            $('#update_modal').on('show.bs.modal', function (event) {
                var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
                var modal          = $(this)

                // Isi nilai pada field
                modal.find('#id').attr("value",div.data('id'));
                modal.find('#nama').attr("value",div.data('nama'));
                modal.find('#jbt').attr("value",div.data('jabatan'));
                modal.find('#status').attr("value",div.data('status'));
                modal.find('#gaji').attr("value",div.data('gaji'));
            });
        });
    </script>

   

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
    <script src="<?php echo base_url() ?>adminBSB/js/pages/forms/basic-form-elements.js"></script>

    <script src="<?php echo base_url() ?>adminBSB/plugins/autosize/autosize.js"></script>ini

    <!-- Moment Plugin Js -->
    <script src="<?php echo base_url() ?>adminBSB/plugins/momentjs/moment.js"></script>

    <!-- Bootstrap Material Datetime Picker Plugin Js -->
    <script src="<?php echo base_url() ?>adminBSB/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>

</body>

</html>