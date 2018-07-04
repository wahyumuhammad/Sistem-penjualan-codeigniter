

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                    
                </h2>
            </div>
            <?php 

            $alert = $this->session->flashdata('message');
            if (isset($alert)) {
             ?>
            <div class="alert alert-danger">
                <strong><?php echo $this->session->flashdata('message'); ?></strong>
            </div>
            <?php } ?>
            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Data Penjualan
                            </h2>
                            <!-- <button type="button" class="btn btn-default waves-effect">DEFAULT</button> -->
                            <br>
                            <button type="button" class="btn btn-primary waves-effect" data-toggle="modal" data-target="#mymodal" data-id="">Tambah Data Penjualan</button>
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
                                            <th>Pembeli</th>
                                            <th>Cash/Kredit</th>
                                            <th>Tanggal</th>
                                            <th>Barang Dijual</th>
                                            <th>ID barang</th>
                                            <th>Terjual /pc</th>
                                            <th>Jumlah</th>
                                            <th>Total</th>
                                            <th>Keuntungan</th>
                                            <th><center>Update</center></th>
                                            <th><center>Delete</center></th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Pembeli</th>
                                            <th>Cash/Kredit</th>
                                            <th>Tanggal</th>
                                            <th>Barang Dijual</th>
                                            <th>ID barang</th>
                                            <th>Terjual /pc</th>
                                            <th>Jumlah</th>
                                            <th>Total</th>
                                            <th>Keuntungan</th>
                                            <th><center>Update</center></th>
                                            <th><center>Delete</center></th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                  <?php 

                                          $i = 1;  
                                         foreach ($data_penjualan as $row) {

                                         $id                = $row->id;  
                                         $pembeli           = $row->nama_pembeli;
                                         $payment           = $row->payment_method;
                                         $tanggal           = $row->tanggal;
                                         $nama_barang       = $row->nama_barang;
                                         $jumlah            = $row->jumlah;
                                         $harga             = $row->harga;
                                         $total_harga       = $row->total_harga;
                                         $untung            = $row->untung;

                                     ?>
                                        <tr>
                                            <td><?php echo $i++; ?></td>
                                            <td><?php echo $pembeli; ?></td>
                                            <td><?php echo $payment; ?></td>
                                            <td><?php echo $tanggal; ?></td>
                                            <td><?php echo $nama_barang; ?></td>
                                            <td><?php echo $id ?></td>
                                            <td><?php echo $harga; ?></td>
                                            <td><?php echo $jumlah; ?></td>
                                            <td><?php echo $total_harga; ?></td>
                                            <td><?php echo $untung; ?></td>
                                            <td>
                                                <center>
                                                    <div class="btn-group btn-group-sm" role="group" aria-label="Small button group">
                                                        <a 
                                                            href="javascript:;"
                                                            data-pembeli="<?php echo $pembeli ?>"
                                                            data-payment="<?php echo $payment ?>"
                                                            data-id="<?php echo $id; ?>"
                                                            data-tanggal="<?php echo $tanggal; ?>"
                                                            data-nama="<?php echo $nama_barang; ?>"
                                                            data-harga="<?php echo $harga ?>"
                                                            data-jumlah="<?php echo $jumlah ?>"
                                                            data-total="<?php echo $total_harga; ?>"  
                                                            data-toggle="modal" data-target="#modal2">
                                                            <button type="button" data-toggle="modal" data-target="#modal3" class="btn bg-blue waves-effect">Update</button>
                                                        </a>
                                                       
                                                    </div>
                                                </center>
                                            </td>
                                            <td><center>
                                                 <a href="cdata_penjualan/hapus/<?php echo $id; ?>" class="btn bg-pink waves-effect">Delete</a>
                                                </center>
                                            </td>
                                  <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Exportable Table -->
        </div>
    <div class="modal fade" id="mymodal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">Input Penjualan</h4>
                        </div>
                        <div class="modal-body">

                            <form id="form_advanced_validation" method="POST" action="<?php echo base_url() ?>index.php/cinput_penjualan/input_penjualan">
                                
                                <div class="form-group form-float">
                                <h4 class="card-inside-title">Nama Karyawan</h4>
                                    <div class="form-line">
                                            <select class="form-control show-tick" data-show-subtext="true" id="pembeli" name="pembeli">
                                            <?php 
                                                foreach ($data_karyawan as $row) {
                                                    $id_pembeli         = $row->id;
                                                    $pembeli       = $row->nama_karyawan;
                                             ?>
                                                    <option value="<?php echo $id_pembeli; ?>"><?php echo $pembeli; ?></option>
                                            <?php } ?>
                                            </select>

                                    </div>
                                    <!-- <div class="help-info">Numbers only</div> -->
                                </div> 
                                <div class="form-group form-float">
                                <h4 class="card-inside-title">Metode Pembayaran</h4>
                                    <div class="form-line">
                                            <select class="form-control show-tick" data-show-subtext="true" id="payment" name="payment">
                                                    <option value="Kredit">Kredit</option>
                                                    <option value="Cash">Cash</option>
                                            </select>
                                    </div>
                                    <!-- <div class="help-info">Numbers only</div> -->
                                </div> 
                                <div class="form-group form-float">
                                <h4 class="card-inside-title">Nama Barang</h4>
                                    <div class="form-line">
                                            <select class="form-control show-tick" data-show-subtext="true" id="nama" name="nama">
                                            <?php 
                                                foreach ($data_barang as $row) {
                                                    $nama = $row->nama;
                                                    $id   = $row->id;
                                             ?>
                                                    <option value="<?php echo $nama; ?>"><?php echo $nama; ?></option>
                                            <?php } ?>
                                            </select>

                                    </div>
                                    <!-- <div class="help-info">Numbers only</div> -->
                                </div>  
                                <div class="form-group form-float">
                                <h4 class="card-inside-title">Tanggal</h4>
                                    <div class="form-line">
                                        <input name="tanggal" id="date" type="text" class="form-control" required>
                                    </div>
                                </div>

                                <!-- <div class="form-group form-float">
                                <h4 class="card-inside-title">Tanggal</h4>
                                    <div class="form-line">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="datepicker form-control" placeholder="Please choose a date...">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="help-info">Numbers only</div>
                                </div> -->

                                <div class="form-group form-float">
                                <h4 class="card-inside-title">Jumlah Barang</h4>
                                    <div class="form-line">
                                        <input type="number" class="form-control" name="jumlah" id="jumlah" required>
                                        <label class="form-label">Number</label>
                                    </div>
                                    <div class="help-info">Numbers only</div>
                                </div>

                               <!--  <div class="form-group form-float">
                                <h4 class="card-inside-title">Harga Satuan</h4>
                                    <div class="form-line">
                                        <input type="number" class="form-control" name="harga" id="harga" required>
                                        <label class="form-label">Harga Satuan</label>
                                    </div>
                                    <div class="help-info">Numbers only</div>
                                </div> -->
                            

                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-link waves-effect">SAVE CHANGES</button>
                            <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div> 

            <div class="modal fade" id="modal2" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">Update Data Penjualan</h4>
                        </div>
                        <div class="modal-body">

                            <form id="form_advanced_validation" method="POST" action="<?php echo base_url() ?>index.php/cinput_penjualan/update_barang">
                                <div class="form-group form-float">
                                <h4 class="card-inside-title">ID Penjualan</h4>
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="id" id="id">
                                      <!--   <label class="form-label">Nama Barang</label> -->
                                    </div>
                                   
                                </div>
                                <div class="form-group form-float">
                                <h4 class="card-inside-title">Nama Barang</h4>
                                    <div class="form-line">
                                        <select class="form-control show-tick" data-show-subtext="true" id="nama" name="nama">
                                            <?php 
                                                foreach ($data_barang as $row) {
                                                    $nama = $row->nama;
                                                    $id   = $row->id;
                                             ?>
                                                    <option value="<?php echo $nama; ?>"><?php echo $nama; ?></option>
                                            <?php } ?>
                                        </select>
                                       <!--  <label class="form-label">Nama Barang</label> -->
                                    </div>
                                   
                                </div>
                                <div class="form-group form-float">
                                <h4 class="card-inside-title">Nama Karyawan</h4>
                                    <div class="form-line">
                                            <select class="form-control show-tick" data-show-subtext="true" id="pembeli2" name="pembeli2">
                                            <?php 
                                                foreach ($data_karyawan as $row) {
                                                    $id_pembeli         = $row->id;
                                                    $pembeli       = $row->nama_karyawan;
                                             ?>
                                                    <option value="<?php echo $pembeli; ?>"><?php echo $pembeli; ?></option>
                                            <?php } ?>
                                            </select>

                                    </div>
                                    <!-- <div class="help-info">Numbers only</div> -->
                                </div> 
                                <div class="form-group form-float">
                                <h4 class="card-inside-title">Metode Pembayaran</h4>
                                    <div class="form-line">
                                            <select class="form-control show-tick" data-show-subtext="true" id="payment2" name="payment2">
                                                    <option value="Kredit">Kredit</option>
                                                    <option value="Cash">Cash</option>
                                            </select>
                                    </div>
                                    <!-- <div class="help-info">Numbers only</div> -->
                                </div> 
                                <div class="form-group form-float">
                                <h4 class="card-inside-title">Tanggal</h4>
                                    <div class="form-line">
                                        <input name="tanggal" id="tanggal" type="text" class="form-control" required>
                                    </div>
                                </div>


                                <div class="form-group form-float">
                                <h4 class="card-inside-title">Harga /pc</h4>
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="harga" id="harga" required>
                                   <!--      <label class="form-label">Nama Barang</label> -->
                                    </div>
                                   
                                </div>
                                <div class="form-group form-float">
                                <h4 class="card-inside-title">Jumlah</h4>
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="jumlah" id="jumlah" required>
                                        <!-- <label class="form-label">Nama Barang</label>
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

    </section>


    <script>
        $(document).ready(function() {
            // Untuk sunting
            $('#modal2').on('show.bs.modal', function (event) {
                var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
                var modal          = $(this)

                // Isi nilai pada field
                modal.find('#id').attr("value",div.data('id'));
                modal.find('#tanggal').attr("value",div.data('tanggal'));
                modal.find('#nama').attr("value",div.data('nama'));
                modal.find('#harga').attr("value",div.data('harga'));
                modal.find('#jumlah').attr("value",div.data('jumlah'));
                modal.find('#pembeli').attr("value",div.data('pembeli2'));
                modal.find('#payment').attr("value",div.data('payment2'));
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

     <!-- Bootstrap Colorpicker Js -->
    <script src="<?php echo base_url() ?>adminBSB/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>

    <!-- Dropzone Plugin Js -->
    <script src="<?php echo base_url() ?>adminBSB/plugins/dropzone/dropzone.js"></script>

    <!-- Input Mask Plugin Js -->
    <script src="<?php echo base_url() ?>adminBSB/plugins/jquery-inputmask/jquery.inputmask.bundle.js"></script>

    <!-- Multi Select Plugin Js -->
    <script src="<?php echo base_url() ?>adminBSB/plugins/multi-select/js/jquery.multi-select.js"></script>

    <!-- Jquery Spinner Plugin Js -->
    <script src="<?php echo base_url() ?>adminBSB/plugins/jquery-spinner/js/jquery.spinner.js"></script>

    <!-- Bootstrap Tags Input Plugin Js -->
    <script src="<?php echo base_url() ?>adminBSB/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>

    <!-- noUISlider Plugin Js -->
    <script src="<?php echo base_url() ?>adminBSB/plugins/nouislider/nouislider.js"></script>

    <script src="<?php echo base_url() ?>adminBSB/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>

     <!-- Moment Plugin Js -->
    <script src="<?php echo base_url() ?>adminBSB/plugins/momentjs/moment.js"></script>

    <!-- Bootstrap Material Datetime Picker Plugin Js -->
    <script src="<?php echo base_url() ?>adminBSB/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
    <script type="text/javascript">
        $(document).ready(function()
        {
            $('#date').bootstrapMaterialDatePicker
            ({
                time: false,
                clearButton: true
            });
            $('#tanggal').bootstrapMaterialDatePicker
            ({
                time: false,
                clearButton: true
            });

            $('#time').bootstrapMaterialDatePicker
            ({
                date: false,
                shortTime: false,
                format: 'HH:mm'
            });

            $('#date-format').bootstrapMaterialDatePicker
            ({
                format: 'dddd DD MMMM YYYY - HH:mm'
            });
            $('#date-fr').bootstrapMaterialDatePicker
            ({
                format: 'DD/MM/YYYY HH:mm',
                lang: 'fr',
                weekStart: 1, 
                cancelText : 'ANNULER',
                nowButton : true,
                switchOnClick : true
            });

            $('#date-end').bootstrapMaterialDatePicker
            ({
                weekStart: 0, format: 'DD/MM/YYYY HH:mm'
            });
            $('#date-start').bootstrapMaterialDatePicker
            ({
                weekStart: 0, format: 'DD/MM/YYYY HH:mm', shortTime : true
            }).on('change', function(e, date)
            {
                $('#date-end').bootstrapMaterialDatePicker('setMinDate', date);
            });

            $('#min-date').bootstrapMaterialDatePicker({ format : 'DD/MM/YYYY HH:mm', minDate : new Date() });

            $.material.init()
        });
        </script>
</body>

</html>