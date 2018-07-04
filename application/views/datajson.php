
  <script type="text/javascript">

    showTable(); 
    tampil();
    function showTable(){

        var strJson = "";
        var clas = "btn btn-link waves-effect"
        $.ajax({
            
            url: "http://localhost:8080/ci_adminbsb/index.php/cjson/getData",
            dataType: "text",
            success: function (data){

                obj = null;
                obj = $.parseJSON(data);

                $.each(obj, function() //row1 tu nama array yg ada di json
                {
                    strJson += "<tr><td>" + this['id'] + "</td><td>" 
                    + this['nama'] + "</td>" + "<td>" + this['harga_jual'] + "</td>" + "<td>" + this['harga_beli'] + "</td>" + "<td>" + this['jumlah'] + "</td>" +"<td>" + this['status'] + 
                    "</td><td>" + "<button class='btn bg-blue waves-effect'>Delete</button>" + "</td></tr>";
                });
                $('#divtable').html(strJson);
               
            }
        })

    };

    function tampil(){

        var strJson = "";
        $.ajax({
            
            url: "http://localhost:8080/ci_adminbsb/index.php/cjson/getdatapenjualan",
            dataType: "text",
            success: function (data){

                obj = null;
                obj = $.parseJSON(data);

                $.each(obj, function() //row1 tu nama array yg ada di json
                {pin
                    strJson += "Tampil" + this['nama_barang'];
                });
                $('#tampil').html(strJson);
            }
               
        })

    };

    
    </script>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                    JQUERY DATATABLES
                    <small>Taken from <a href="https://datatables.net/" target="_blank">datatables.net</a></small>
                </h2>
            </div>
            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                EXPORTABLE TABLE
                            </h2>
                            <!-- <button type="button" class="btn btn-default waves-effect">DEFAULT</button> -->
                            <br>
                            <button type="button" class="btn btn-primary waves-effect" data-toggle="modal" data-target="#mymodal" data-id="">Tambah Data</button>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="">Action</a></li>
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
                                          <!--   <th>No</th> -->
                                            <th>Nama Barang</th>
                                            <th>ID barang</th>
                                            <th>Harga Jual</th>
                                            <th>Harga Beli</th>
                                            <th>Jumlah</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                           <!--  <th>No</th> -->
                                            <th>Nama Barang</th>
                                            <th>ID barang</th>
                                            <th>Harga Jual</th>
                                            <th>Harga Beli</th>
                                            <th>Jumlah</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody id="divtable">
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         <!--    <div id="tampil"></div> -->
            <!-- #END# Exportable Table -->
        </div>
    <div class="modal fade" id="mymodal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">Input Barang Masuk</h4>
                        </div>
                        <div class="modal-body">

                            <form id="form_advanced_validation" method="POST" action="<?php echo base_url() ?>index.php/cinput_barang/input_barang">
                                <div class="form-group form-float">
                                <h4 class="card-inside-title">Nama Barang</h4>
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="nama" id="nama" required>
                                        <label class="form-label">Nama Barang</label>
                                    </div>
                                   
                                </div>
                                <div class="form-group form-float">
                                <h4 class="card-inside-title">Jumlah Barang</h4>
                                    <div class="form-line">
                                        <input type="number" class="form-control" name="jumlah" id="jumlah" required>
                                        <label class="form-label">Number</label>
                                    </div>
                                    <div class="help-info">Numbers only</div>
                                </div>
                                <div class="form-group form-float">
                                <h4 class="card-inside-title">Harga Jual /pc</h4>
                                    <div class="form-line">
                                        <input type="number" class="form-control" name="harga_jual" id="harga_jual" required>
                                        <label class="form-label">Harga Jual /pc</label>
                                    </div>
                                    <div class="help-info">Numbers only</div>
                                </div>
                                <div class="form-group form-float">
                                <h4 class="card-inside-title">Harga Beli</h4>
                                    <div class="form-line">
                                        <input type="number" class="form-control" name="harga_beli" id="harga_beli" required>
                                        <label class="form-label">Harga Beli</label>
                                    </div>
                                    <div class="help-info">Numbers only</div>
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

    <div class="modal fade" id="modal2" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">Update Data</h4>
                        </div>
                        <div class="modal-body">

                            <form id="form_advanced_validation" method="POST" action="<?php echo base_url() ?>index.php/cinput_barang/update_barang">
                                <div class="form-group form-float">
                                <h4 class="card-inside-title">ID Barang</h4>
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="id" id="id" required>
                                      <!--   <label class="form-label">Nama Barang</label> -->
                                    </div>
                                   
                                </div>
                                <div class="form-group form-float">
                                <h4 class="card-inside-title">Nama Barang</h4>
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="nama" id="nama" required>
                                       <!--  <label class="form-label">Nama Barang</label> -->
                                    </div>
                                   
                                </div>
                                <div class="form-group form-float">
                                <h4 class="card-inside-title">Harga Beli</h4>
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="hb" id="hb" required>
                                   <!--      <label class="form-label">Nama Barang</label> -->
                                    </div>
                                   
                                </div>
                                <div class="form-group form-float">
                                <h4 class="card-inside-title">Harga Jual</h4>
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="hj" id="hj" required>
                                       <!--  <label class="form-label">Nama Barang</label> -->
                                    </div>
                                   
                                </div>
                                <div class="form-group form-float">
                                <h4 class="card-inside-title">Jumlah</h4>
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="jumlah" id="jumlah" required>
                                        <!-- <label class="form-label">Nama Barang</label> -->
                                    </div>
                                   
                                </div>
                                <div class="form-group form-float">
                                <h4 class="card-inside-title">Status</h4>
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="status" id="status" required>
                                        <!-- <label class="form-label">Nama Barang</label> -->
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
            $('#modal2').on('show.bs.modal', function (event) {
                var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
                var modal          = $(this)

                // Isi nilai pada field
                modal.find('#id').attr("value",div.data('id'));
                modal.find('#nama').attr("value",div.data('nama'));
                modal.find('#hb').attr("value",div.data('hb'));
                modal.find('#hj').attr("value",div.data('hj'));
                modal.find('#jumlah').attr("value",div.data('jumlah'));
                modal.find('#status').attr("value",div.data('status'));
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


</body>

</html>