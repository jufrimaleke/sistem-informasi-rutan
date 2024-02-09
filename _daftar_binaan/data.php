<?php include_once ('../header.php') ?>

<div class="content-wrapper">
<section class="content-header">
  <h1>Data Binaan
    <small>Semua Data Binaan</small>
  </h1>
  <ol class="breadcrumb">
  <li><a href="../admin/admin.php"><i class="fa fa-dashboard"></i> Home</a></li>
  <li class="active">Data Binaan</li>
  </ol>
</section>
<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-sm-12">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">List Data Binaan</h3> 
          <div class="box-tools pull-left">
          	<a href="" class="btn btn-default"><i class="glyphicon glyphicon-refresh"></i></a>
            <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#tambahdata"><i class="fa fa-male"></i> Tambah Narapidana</a>
            <a href="" class="btn btn-info"><i class="glyphicon glyphicon-import"></i>Import Data</a>
          </div>
        </div>
        <div class="box-body">

          <div class="table-responsive22">
            <table id="datatable" class="table table-bordered table-striped">
              <thead>
                <tr>
									<th>No</th>
									<th>NIN</th>
									<th>Nama</th>
									<th>Tempat Lahir</th>
									<th>Tanggal Lahir</th>
									<th>Jenis Kelamin</th>
									<th>Alamat</th>
									<th>Masa Tahanan/Tahun</th>
									<th>Kasus</th>
									<th>Ruangan</th>
									<th>No.Ruangan</th>
									<th>Foto</th>
									
									<th style="text-align: center;">
										Aksi
									</th>
								</tr>
              </thead>
					      <?php
								$no = 1;

								$ambil = mysqli_query($con, "SELECT * FROM tb_narapidana") or die(mysqli_error());
								while($row = mysqli_fetch_array($ambil)) { ?>
								<tbody>
									<tr>
										<td align="center"><?= $no++ ?></td>
										<td><?= $row['nin']; ?></td>
										<td><?= $row['nama_lengkap']; ?></td>
										<td><?= $row['tmp_lahir']; ?></td>
										<td><?= $row['tgl_lahir']; ?></td>
										<td><?= $row['jk']; ?></td>
										<td><?= $row['alamat']; ?></td>
										<td><?= $row['lama_tahanan']; ?></td>
										<td><?= $row['kasus']; ?></td>
										<td><?= $row['ruangan']; ?></td>
										<td><?= $row['no_ruangan']; ?></td>
										<td>
											<img src="../img/<?= $row['foto'] ?>" style="width: 50px;">
										</td>
                    <td>
                      <!--<a href="../user/form_edituser.php?id=" class="btn btn-primary btn-flat btn-xs"><i class="fa fa-pencil"></i> Edit</a>-->
                      <a href="#" class="btn btn-warning btn-flat" data-toggle="modal" data-target="#updateuser<?php echo $no; ?>"><i class="glyphicon glyphicon-edit"></i> </a>
                      <a href="#" class="btn btn-danger btn-flat" data-toggle="modal" data-target="#deletepegawai<?php echo $no; ?>"><i class="glyphicon glyphicon-trash"></i></a> 

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
                      <div class="example-modal">
                        <div id="updateuser<?php echo $no; ?>" class="modal fade" role="dialog" style="display:none;">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header" style="background: #2298BE;">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h3 class="modal-title">Edit Data </h3>
                              </div>
                              <div class="modal-body">
                                <form action="proses.php" method="post" role="form" enctype="multipart/form-data">
                                  <?php
                                  $id_narapidana = $row['id_narapidana'];
                                  $query = "SELECT * FROM tb_narapidana WHERE id_narapidana='$id_narapidana'";
                                  $result = mysqli_query($con, $query);
                                  while ($row = mysqli_fetch_assoc($result)) {
                                  ?>
                                  <div class="form-group">
                                    <div class="row">        
                                      <div class="col-sm-8"><input type="hidden" class="form-control" name="id_narapidana" value="<?php echo $row['id_narapidana']; ?>"></div>
                                    </div>
                                  </div>
                                  <div class="form-group">
																	  	<label for="nip">NIP</label>
																	    <input type="text" class="form-control" id="nip" name="nip" value="<?=$row['nin'] ?>" required>
																	 </div>
																	 <div class="form-group">
																	    <label for="nama">Nama</label>
																	    <input type="text" class="form-control" id="nama" name="nama" value="<?=$row['nama_lengkap'] ?>" required>
																	 </div>
																	 <div class="form-group">
																	    <label for="tempatLahir">Tempat Lahir</label>
																	    <input type="text" class="form-control" id="tempatLahir" name="tempatLahir" value="<?=$row['tmp_lahir'] ?>" required>
																	 </div>
																	 <div class="form-group">
																	    <label for="tglLahir">Tanggal Lahir</label>
																	    <input type="date" class="form-control" id="tglLahir" name="tglLahir" value="<?=$row['tgl_lahir'] ?>" required>
																	 </div>
																	 <div class="form-group">
																		<label for="jk">Jenis Kelamin</label>
																		<div>
																			<label class="radio-inline">
																				<input type="radio" name="jk" id="jk" value="Laki-laki" <?php if($row['jk'] == 'Laki-laki') {echo "checked";} ?> required> Laki-laki
																			</label>	
																			<label class="radio-inline">
																				<input type="radio" name="jk" value="Perempuan" <?php if($row['jk'] == 'Perempuan') {echo "checked";} ?> required> Perempuan
																			</label>							
																		</div>
																	 </div>
																	 <div class="form-group">
																	    <label for="alamat">Alamat</label>
																	    <textarea name="alamat" class="form-control" required><?=$row['alamat']; ?></textarea>
																	 </div>
																	 <div class="form-group">
																	    <label for="pangkat">Masa Tahanan</label>
																	    <input type="text" class="form-control" id="pangkat" name="pangkat" value="<?=$row['lama_tahanan'] ?>" required>
																	 </div>
																	 <div class="form-group">
																	    <label for="kasus">Kasus</label>
																	    <input type="text" class="form-control" id="kasus" name="kasus" value="<?=$row['kasus'] ?>" required>
																	 </div>
																	 <div class="form-group">
																	    <label for="noTelpon">Ruangan</label>
																	    <select name="ruangan" class="form-control">
																	    	<option></option>
																	    	<?php 
																	    		$sql_ruangan = mysqli_query ($con, "SELECT * FROM tb_ruangan");
																	    		while($data = mysqli_fetch_array($sql_ruangan)) {
																	    					echo '<option
																	    													value="'.$data['id_ruangan'].'">
																	    																 '.$data['nama_ruangan'].'



																	    								</option>';

																	    	}?>
																	    </select>
																	 </div>
																	 <div class="form-group">
																	    <label for="noTelpon">No.Ruangan</label>
																	    <select name="noRuangan" class="form-control">
																	    	<option></option>
																	    	<?php
																	    	$sql_noruangan = mysqli_query($con, "SELECT * FROM tb_ruangan");
																	    	while($data = mysqli_fetch_array($sql_noruangan)) {
																	    		echo '<option

																	    									value="'.$data['id_ruangan'].'">
																	    												 '.$data['no_ruangan'].'

																	    				</option>';

																	    	}?>
																	    </select>
																	 </div>
																	 <div class="form-group">
																	    <label>Foto</label><br>
																	    <img src="../img/<?=$row['foto'] ?>" style="width: 50px;">
																	 </div>
																	  <div class="form-group">
																	    <label for="foto">Ganti Foto</label>
																	    <input type="file" class="form-control" id="foto" name="foto" >
																	 </div>
																	 <div class="modal-footer">
																	 	<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
																        <button type="reset" class="btn btn-success">Reset</button>
																        <button type="submit" name="update" class="btn btn-primary">Update</button>
																     </div>
                                  <?php
                                  }
                                  ?>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div><!-- modal update user -->
                 
                  <?php
                    }
                  ?>
              </tbody>
            </table>
          </div> 
        </div>

        <!-- modal insert -->
        <div class="modal fade" id="tambahdata">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header" style="background: #2298BE;">
		        <h3 class="modal-title" id="tambahModalLabel">Tambah Data</h3>
		      </div>
		      <div class="modal-body">
			       <form action="proses.php" method="POST" rol="form" enctype="multipart/form-data">
			       		 <div class="form-group">
						    <label for="nip">NIN</label>
						    <input type="text" class="form-control" id="nin" name="nin" required>
						 </div>
						 <div class="form-group">
						    <label for="nama">Nama</label>
						    <input type="text" class="form-control" id="nama" name="nama" required>
						 </div>
						 <div class="form-group">
						    <label for="tempatLahir">Tempat Lahir</label>
						    <input type="text" class="form-control" id="tempatLahir" name="tempatLahir" required>
						 </div>
						 <div class="form-group">
						    <label for="tglLahir">Tanggal Lahir</label>
						    <input type="date" class="form-control" id="tglLahir" name="tgl_Lahir" required>
						 </div>
						 <div class="form-group">
							<label for="jk">Jenis Kelamin</label>
							<div>
								<label class="radio-inline">
									<input type="radio" name="jk" id="jk" value="Laki-laki" required> Laki-laki
								</label>	
								<label class="radio-inline">
									<input type="radio" name="jk" value="Perempuan" required> Perempuan
								</label>							
							</div>
						 </div>
						 <div class="form-group">
						    <label for="alamat">Alamat</label>
						    <textarea name="alamat" id="alamat" class="form-control" name="alamat" required></textarea>
						 </div>
						 <div class="form-group">
						    <label for="pangkat">Kasus</label>
						    <input type="text" class="form-control" id="pangkat" name="pangkat" required>
						 </div>
						 <div class="form-group">
						    <label for="email">Ruangan</label>
						    <select name="namaRuangan" class="form-control" required>
						    	<option value="">- Pilih - </option>
						    			<?php
						    				$sql_ruangan = mysqli_query ($con, "SELECT * FROM tb_ruangan");
						    				while ($data = mysqli_fetch_array($sql_ruangan)) {
						    					echo '<option
						    									value="'.$data['id_ruangan'].'">
						    												 '.$data['nama_ruangan'].'
						    								</option>';

						    			}?>
						    </select>
						 </div>

						 <div class="form-group">
						    <label for="noTelpon">No.Ruangan</label>
						    <select name="noRuangan" class="form-control" required>
						    	<option value="">- Pilih -</option>
						    	<?php 
										$noruangan = mysqli_query($con, "SELECT * FROM tb_ruangan ORDER BY no_ruangan") or die(mysqli_error($con));
										while($data_ruangan = mysqli_fetch_array($noruangan)) {
											echo '<option
															value="'.$data_ruangan['id_ruangan'].'">
																   '.$data_ruangan['no_ruangan'].'
												  </option>';
										} ?>
						    	
						    </select>
						 </div>
						 <div class="form-group">
						    <label for="foto">Foto</label>
						    <input type="file" class="form-control" id="foto" name="foto" >
						 </div>
						 <div class="modal-footer">
					        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
					        <button type="reset" name="tambah" class="btn btn-success">Reset</button>
					        <button type="submit" name="add" class="btn btn-primary">Tambah</button>
					     </div>
			       </form>
		      </div>  
		    </div>
		  </div>
		</div><!-- modal insert close -->
      </div>
    </div>
  </div>
</section><!-- /.content -->
</div>

<?php include_once ('../footer.php') ?>

