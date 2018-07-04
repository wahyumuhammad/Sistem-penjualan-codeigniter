        <script>    var baseurl = "<?php echo base_url("index.php/"); ?>"; // Buat variabel baseurl untuk nanti di akses pada file config.js    </script>
 <section class="content">
        <div class="container-fluid">
          <!--   <div class="block-header">
                <h2>Input Penjualan</h2>
            </div> -->
            <!-- Body Copy -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Input Penjualan</h2>
                            
                        </div>
                        <div class="body">
                            <form id="form_advanced_validation" method="POST">
                                <div class="form-group form-float">
                                <h2 class="card-inside-title">Kode Barang</h2>
                                    <div class="form-line">
                                        <input type="text" class="form-control pencarian" name="minmaxlength" maxlength="10" minlength="3" id="minmaxlength">
                                        <label class="form-label">Min/Max Length</label>
                                    </div>
                                    <div class="help-info">Min. 3, Max. 10 characters</div> <button type="button" id="btn-search">Cari</button> <span id="loading">LOADING...</span></td>
                                </div>
                                <div class="form-group form-float">
                                <h2 class="card-inside-title">Nama Barang</h2>
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="nama" id="nama" required>
                                        <label class="form-label">Nama Barang</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                <h2 class="card-inside-title">HArga</h2>
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="harga" id="harga" required>
                                        <label class="form-label">Harga</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                <h2 class="card-inside-title">jumlah</h2>
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="jumlah" id="jumlah" required>
                                        <label class="form-label">Jumlah</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                <h2 class="card-inside-title">Status</h2>
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="sts" id="sts" required>
                                        <label class="form-label">Status</label>
                                    </div>
                                </div>
                                <!-- <div class="form-group form-float">
                                <h2 class="card-inside-title">Tanggal</h2>
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="date" required>
                                        <label class="form-label">Date</label>
                                    </div>
                                    <div class="help-info">YYYY-MM-DD format</div>
                                </div>
                                <div class="form-group form-float">
                                <h2 class="card-inside-title">Jumlah Barang</h2>
                                    <div class="form-line">
                                        <input type="number" class="form-control" name="number" required>
                                        <label class="form-label">Number</label>
                                    </div>
                                    <div class="help-info">Numbers only</div>
                                </div> -->
                                <!-- <button type="button" class="btn btn-primary waves-effect" data-toggle="modal" data-target="#mymodal" data-id="">Check</button>
                             --></form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Body Copy -->
        </div>
          <!-- <div class="modal fade" id="mymodal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">Nama Barang</h4>
                        </div>
                        <div class="modal-body">
                            Deskripsi Barang
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-link waves-effect">SAVE CHANGES</button>
                            <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                        </div>
                    </div>
                </div>
            </div> -->
    </section>

