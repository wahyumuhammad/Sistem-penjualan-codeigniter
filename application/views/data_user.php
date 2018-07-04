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
 <!-- Hover Rows -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                        <div class="body table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>ID</th>
                                        <th>FIRST NAME</th>
                                        <th>LAST NAME</th>
                                        <th>USERNAME</th>
                                        <th>PASSWORD</th>
                                        <th>STATUS</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <?php 
                                         $i = 1;  
                                            foreach ($data_user as $row) {
                                            $id         = $row->id_user;
                                            $first      = $row->first_name;
                                            $last       = $row->last_name;
                                            $username   = $row->username;
                                            $password   = $row->password;
                                            $status     = $row->status;
                                     ?> 
                                        <th><?php echo $i++ ?></th>
                                        <th><?php echo $id ?></th>
                                        <td><?php echo $first ?></td>
                                        <td><?php echo $last ?></td>
                                        <td><?php echo $username ?></td>
                                        <td><?php echo $password ?></td>
                                        <td><?php echo $status ?></td>
                                        <td><center>
                                                 <a href="cuser/hapus_user/<?php echo $id; ?>" class="btn bg-pink waves-effect">Delete</a>
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
            <!-- #END# Hover Rows -->
            <div class="modal fade" id="mymodal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">Tambah User</h4>
                        </div>
                        <div class="modal-body">

                            <form id="form_advanced_validation" method="POST" action="<?php echo base_url() ?>index.php/cuser/input_user">
                                <div class="form-group form-float">
                                <h4 class="card-inside-title">First Name</h4>
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="first" id="first">
                                      <!--   <label class="form-label">Nama Barang</label> -->
                                    </div>
                                   
                                </div>
                                <div class="form-group form-float">
                                <h4 class="card-inside-title">Last Name</h4>
                                    <div class="form-line">
                                        <input type="text" name="last" id="last" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                <h4 class="card-inside-title">Username</h4>
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="username" id="username" required>
                                       <!--  <label class="form-label">Nama Barang</label> -->
                                    </div>
                                   
                                </div>
                                <div class="form-group form-float">
                                <h4 class="card-inside-title">Password</h4>
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="password" id="password" required>
                                   <!--      <label class="form-label">Nama Barang</label> -->
                                    </div>
                                   
                                </div>
                                <div class="form-group form-float">
                                <h4 class="card-inside-title">Status</h4>
                                    <div class="form-line">
                                         <select class="form-control show-tick" data-show-subtext="true" id="status" name="status">

                                            <option value="Admin">Admin</option>
                                            <option value="Penjualan">Penjualan</option>
                                            
                                            </select>
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