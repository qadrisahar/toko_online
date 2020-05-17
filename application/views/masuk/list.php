<!-- Title Page -->
	<!-- Cart -->
	<section class="bgwhite p-t-70 p-b-100">
		<div class="container">
			<!-- Cart item -->
			<div class="pos-relative">
				<div class="bgwhite">
          <h1><b><?php echo $title ?></b></h1><hr>
          <div class="clearfix"></div><br><br>

          <p class="alert alert-info">
            Belum Memiliki Akun? Silahkan registrasi
            <a href="<?php echo base_url('registrasi') ?>" class="btn btn-info btn-sm"> disini</a>
          </p>
          <div class="col-md-12">
            <?php
              echo validation_errors('<div class="alert alert-warning">','</div>');
              if ($this->session->flashdata('warning')) {
                echo "<div class='alert alert-warning'>";
                echo $this->session->flashdata('warning');
                echo "</div>";
              }

              if ($this->session->flashdata('sukses')) {
                echo "<div class='alert alert-success'>";
                echo $this->session->flashdata('sukses');
                echo "</div>";
              }
              echo form_open(base_url('masuk'), 'class="leave-comment"');
             ?>
              <table class="table">
                <tbody>
                  <tr>
                    <td width="20%">Email</td>
                    <td><input type="email" name="email" class="form-control" placeholder="Email" value="<?php echo set_value('email') ?>" required /></td>
                  </tr>

                  <tr>
                    <td>Password</td>
                    <td><input type="password" name="password" class="form-control" placeholder="Password" value="<?php echo set_value('password') ?>" required /></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td>
                      <button class="btn btn-success btn-sm" type="submit"><i class="fa fa-share-square-o"></i> Login</button>
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
