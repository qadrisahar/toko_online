
	<!-- Content page -->
	<section class="bgwhite p-t-55 p-b-65">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-3 col-lg-3 p-b-50">
					<div class="leftbar p-r-20 p-r-0-sm">
						<?php include('menu.php'); ?>
					</div>
				</div>

				<div class="col-sm-6 col-md-9 col-lg-9 p-b-50">

            <h2><b><?php echo $title; ?></b></h2><hr>
            <?php

              if($this->session->flashdata('sukses')){
                echo "<div class='alert alert-success'>";
                echo $this->session->flashdata('sukses');
                echo "</div>";
              }

              echo validation_errors('<div class="alert alert-warning">','</div>');
              echo form_open(base_url('dashboard/profil'), 'class="leave-comment"');
             ?>
              <table class="table table-hover">
                <thead>
                  <tr>
                    <td width="25%">Nama</td>
                    <td><input type="text" name="nama_pelanggan" class="form-control" placeholder="Nama Lengkap" value="<?php echo $pelanggan->nama_pelanggan ?>" required /></td>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Email</td>
                    <td><input type="email" name="email" class="form-control" placeholder="Email" value="<?php echo $pelanggan->email ?>" readonly /></td>
                  </tr>

                  <tr>
                    <td>Password</td>
                    <td><input type="password" name="password" class="form-control" placeholder="Password" value="<?php echo set_value('password') ?>"/>
                      <span class="text-danger"> *Ketik minimal 6 karakter untuk mengganti password baru atau biarkan kosong!</span>
                    </td>
                  </tr>

                  <tr>
                    <td>Telepon</td>
                    <td><input type="text" name="telepon" class="form-control" placeholder="Telepon" value="<?php echo $pelanggan->telepon ?>" required /></td>
                  </tr>

                  <tr>
                    <td>Alamat</td>
                    <td><textarea name="alamat" class="form-control" placeholder="Alamat"><?php echo $pelanggan->alamat ?></textarea></td>
                  </tr>

                  <tr>
                    <td></td>
                    <td>
                      <button class="btn btn-success btn-sm" type="submit"><i class="fa fa-user"></i> Update Profil</button>
                      <button class="btn btn-warning btn-sm" type="reset"><i class="fa fa-times"></i> Reset</button>
                    </td>
                  </tr>
                </tbody>
              </table>
            <?php echo form_close(); ?>
					<div class="pagination flex-m flex-w p-t-26 text-center">
					</div>
				</div>
			</div>
		</div>
	</section>
