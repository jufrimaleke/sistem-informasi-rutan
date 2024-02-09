<?php include_once ('../header.php') ?>

<div class="content-wrapper">
<section class="content-header">
  <h1>Data Ruangan</h1>
  <ol class="breadcrumb">
  <li><a href="../admin/admin.php"><i class="fa fa-dashboard"></i> Home</a></li>
  <li class="active">Data Ruangan</li>
  </ol>
</section>
<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-sm-12">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">List Ruangan</h3> 
          <div class="box-tools pull-left">
          	<a href="" class="btn btn-default"><i class="glyphicon glyphicon-refresh"></i></a>
            <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#tambahruangan"><i class="fa fa-male"></i> Tambah Pegawai</a>
            <a href="" class="btn btn-info"><i class="glyphicon glyphicon-import"></i>Import Data</a>
          </div>
        </div>
        <div class="box-body">

          <div class="table-responsive22">
            <table id="datatable" class="table table-bordered table-striped">
              <thead>
                <tr>
									<th>No</th>
									<th>Nama Ruangan</th>
									<th>Nomor Ruangan</th>
									<th style="text-align: center;">
										Aksi
									</th>
								</tr>
              </thead>
					      <?php
								$no = 1;

								$ambil = mysqli_query($con, "SELECT * FROM tb_ruangan") or die(mysqli_error());
								while($row = mysqli_fetch_array($ambil)) { ?>
								<tbody>
									<tr>
										<td><?= $no++ ?></td>
										<td><?= $row['nama_ruangan']; ?></td>
										<td><?= $row['no_ruangan']; ?></td>
                    <td>
                      <!--<a href="../user/form_edituser.php?id=" class="btn btn-primary btn-flat btn-xs"><i class="fa fa-pencil"></i> Edit</a>-->
                      <a href="#" class="btn btn-warning btn-flat" data-toggle="modal" data-target="#updateruangan<?php echo $no; ?>"><i class="glyphicon glyphicon-edit"></i> </a>
                      <a href="#" class="btn btn-danger btn-flat" data-toggle="modal" data-target="#deleteruangan<?php echo $no; ?>"><i class="glyphicon glyphicon-trash"></i></a> 

                    </td>
                </tr>   
                      <!-- modal delete -->
                      <div class="example-modal">
                        <div id="deletepegawai<?php echo $no; ?>" class="modal fade" role="dialog" style="display:none;">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header" style="background: #2298BE;">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h3 class="modal-title">Konfirmasi Delete Data Pegawai</h3>
                              </div>
                              <div class="modal-body">
                                <h4 align="center" >Apakah anda yakin ingin menghapus  <b> <?php echo $row['nama_pegawai'];?></b><strong><span class="grt"></span></strong> ?</h4>
                              </div>
                              <div class="modal-footer">
                                <button id="nodelete" type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cancel</button>
                                <a href="proses.php?action=delete&id=<?php echo $row['id_pegawai']; ?>" class="btn btn-primary">Delete</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div><!-- modal delete -->


                      <!-- modal update user -->
                      <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="updateruangan<?php echo $no; ?>" class="modal fade">
											     <div class="modal-dialog">
											         <div class="modal-content">
											             <div class="modal-header" style="background: #2298BE;">
											                 <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
											                 <h4 class="modal-title">Edit Data</h4>
											             </div>
											             <form class="form-horizontal" action="proses.php" method="post" role="form">
											             <?php
	                                  $id_ruangan = $row['id_ruangan'];
	                                  $query = "SELECT * FROM tb_ruangan WHERE id_ruangan='$id_ruangan'";
	                                  $result = mysqli_query($con, $query);
	                                  while ($row = mysqli_fetch_assoc($result)) {
	                                  ?>
											              <div class="panel-body">
														              	<div class="form-group">
				                                    <div class="row">        
				                                      <div class="col-sm-8"><input type="hidden" class="form-control" name="id_ruangan" value="<?php echo $row['id_ruangan']; ?>"></div>
				                                    </div>
											                      <div class="form-group">
											                          <label class="col-md-4 control-label">Nama Ruangan</label>
											                          <div class="col-md-8">
											                              <input type="text" class="form-control" value="<?=$row['nama_ruangan'] ?>" name="namaRuangan" placeholder="Tuliskan Nama">
											                          </div>
											                      </div>
											                      <div class="form-group">
											                          <label class="col-md-4 control-label">No.Ruangan</label>
											                          <div class="col-md-8">
											                              <input type="text" value="<?=$row['no_ruangan'] ?>" class="form-control" name="nomorRuangan" placeholder="Tuliskan Pekerjaan">
											                          </div>
											                      </div>
											                  </div><br>
											                  <div class="modal-footer">
											                      	<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
																			        <button type="reset" class="btn btn-success">Reset</button>
																			        <button type="submit" name="update" class="btn btn-primary">Update</button>
											                  </div>
											                  <?php } ?>

											                 </form>
											             </div>
											         </div>
											     </div>
											 </div><!-- modal update user -->
                 
                  <?php } ?>
              </tbody>
            </table>
          </div> 
        </div>

        <!-- modal insert -->
        <div aria-hidden="true" role="dialog" id="tambahruangan" class="modal fade">
        	<div class="modal-dialog">
        		<div class="modal-content">
        			<div class="modal-header" style="background: #2298BE;">
        				<button aria-hidden="true" data-dismiss="modal" class="close" type="button">x</button>
        				<h4 class="modal-title">Tambah Data Ruangan</h4>
        			</div>
        			<form class="form-horizontal" action="proses.php" method="post" role="form">
        				<div class="modal-body">
	        					<div class="form-group">
	        						<label class="col-lg-2 col-sm-2 control-label">Nama Ruangan</label>
	        						<div class="col-lg-10">
	        							<input type="text" name="namaRuangan" class="form-control" placeholder="nama ruangan">
	        						</div>
	        					</div>
	        					<div class="form-group">
	        						<label class="col-lg-2 col-sm-2 control-label">Nomor Ruangan</label>
	        						<div class="col-lg-10">
	        							<input type="text" name="nomorRuangan" class="form-control" placeholder="nomor ruangan">
	        						</div>
	        					</div>
		        				<div class="modal-footer">
										 	<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
							        <button type="reset" class="btn btn-success">Reset</button>
							        <button type="submit" name="add" class="btn btn-primary">Tambah</button>
							      </div>		
	        				</div>	
        			</form>
        		</div>
        	</div>	
        </div><!-- modal insert close -->   
      </div>
    </div>
  </div>
</section><!-- /.content -->
</div>

<?php include_once ('../footer.php') ?>

