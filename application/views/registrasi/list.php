<!-- Title Page -->
	<!-- Cart -->
	<section class="bgwhite p-t-70 p-b-100">
		<div class="container">
			<!-- Cart item -->
			<div class="pos-relative">
				<div class="bgwhite">
          <h1><b><?php echo $title ?></b></h1><hr>
          <div class="clearfix"></div><br><br>

					<?php if($this->session->flashdata('sukses')){
						echo "<div class='alert alert-success'>";
						echo $this->session->flashdata('sukses');
						echo "</div>";
					} ?>
          <p class="alert alert-warning">
            Sudah Memiliki Akun? Silahkan login 
            <a href="<?php echo base_url('masuk') ?>" class="btn btn-info btn-sm"> disini</a>
          </p>
          <div class="col-md-12">
            <?php
              echo validation_errors('<div class="alert alert-warning">','</div>');
              echo form_open(base_url('registrasi'), 'class="leave-comment"');
             ?>
              <table class="table">
                <thead>
                  <tr>
                    <th width="25%">Nama</th>
                    <th><input type="text" name="nama_pelanggan" class="form-control" placeholder="Nama Lengkap" value="<?php echo set_value('nama_pelanggan') ?>" required /></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Email</td>
                    <td><input type="email" name="email" class="form-control" placeholder="Email" value="<?php echo set_value('email') ?>" required /></td>
                  </tr>

                  <tr>
                    <td>Password</td>
                    <td><input type="password" name="password" class="form-control" placeholder="Password" value="<?php echo set_value('password') ?>" required /></td>
                  </tr>

                  <tr>
                    <td>Telepon</td>
                    <td><input type="text" name="telepon" class="form-control" placeholder="Telepon" value="<?php echo set_value('telepon') ?>" required /></td>
                  </tr>

                  <tr>
                    <td>Alamat</td>
                    <td><textarea name="alamat" class="form-control" placeholder="Alamat"><?php echo set_value('alamat') ?></textarea></td>
                  </tr>

                  <tr>
                    <td></td>
                    <td>
                      <button class="btn btn-success btn-sm" type="submit"><i class="fa fa-save"></i> Submit</button>
                      <button class="btn btn-warning btn-sm" type="reset"><i class="fa fa-times"></i> Reset</button>
                    </td>
                  </tr>
                </tbody>
              </table>
            <?php echo form_close(); ?>
          </div>
				</div>
			</div>

			<div class="flex-w flex-sb-m p-t-25 p-b-25 bo8 p-l-35 p-r-60 p-lr-15-sm">
				<div class="flex-w flex-m w-full-sm">
					<div class="size12 trans-0-4 m-t-10 m-b-10 m-r-10">
					</div>
				</div>
				<div class="size10 trans-0-4 m-t-10 m-b-10">
				</div>
			</div>
		</div>
	</section>
