
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

            <h2><?php echo $title; ?></h2><hr>
            <p>Berikut adalah riwayat belanja anda</p><br>
						<?php if($header_transaksi){ ?>

              <table class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <td width="20%">Kode Transaksi</td>
                    <td>: <?php echo $header_transaksi->kode_transaksi ?></td>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Tanggal</td>
                    <td>: <?php echo date('d-m-y', strtotime($header_transaksi->tanggal_transaksi)); ?></td>
                  </tr>
                  <tr>
                    <td>Jumlah Total</td>
                    <td>: <?php echo number_format($header_transaksi->jumlah_transaksi) ?></td>
                  </tr>
                  <tr>
                    <td>Status Bayar</td>
                    <td>: <?php echo $header_transaksi->status_bayar ?></td>
                  </tr>
                  <tr>
                    <td>Bukti Bayar</td>
                    <td>: <?php if($header_transaksi->bukti_bayar != ""){ ?>
                            <img src="<?php echo base_url('assets/upload/image/'.$header_transaksi->bukti_bayar) ?>" class="img img-thumbnail" width="200" />
                          <?php } else{echo "Belum ada bukti bayar";} ?>
                    </td>
                  </tr>
                </tbody>
              </table><br>

              <?php
                  if(isset($error)){
                    echo "<p class='alert alert-warning'>".$error."</p>";
                  }

                  echo validation_errors("<p class='alert alert-warning'>","</p>");

                  echo form_open_multipart(base_url('dashboard/konfirmasi/'.$header_transaksi->kode_transaksi));
               ?>

               <table class="table">

                 <tbody>
                   <tr>
                     <td width="30%">Pembayaran ke rekening</td>
                     <td>
                       <select class="form-control" name="id_rekening">
                         <?php foreach($rekening as $rekening){ ?>
                         <option value="<?php echo $rekening->id_rekening ?>" <?php if($header_transaksi->id_rekening==$rekening->id_rekening) {echo "selected"; } ?>>
                           <?php echo $rekening->nama_bank ?> (No. Rekening: <?php echo $rekening->nomor_rekening?> - <?php echo $rekening->nama_pemilik ?>)
                         </option>
                         <?php } ?>
                       </select>
                     </td>
                   </tr>
                   <tr>
                     <td>Tanggal Bayar</td>
                     <td>
                       <input style="background: #fff; color: #000;" type="date" name="tanggal_bayar" class="form-control-sm" value="<?php if(isset($_POST['tanggal_bayar'])) {echo set_value('tanggal_bayar');}else if($header_transaksi->tanggal_bayar!=""){echo $header_transaksi->tanggal_bayar;} else{echo date('d-m-Y');} ?>" />
                     </td>
                   </tr>
                   <tr>
                     <td>Jumlah Pembayaran</td>
                     <td>
                       <input style="background: #fff; color: #000;" type="number" name="jumlah_bayar" class="form-control-sm" placeholder="Jumlah Pembayaran" value="<?php if(isset($_POST['jumlah_bayar'])) {echo set_value('jumlah_bayar');} elseif($header_transaksi->jumlah_bayar !=""){echo $header_transaksi->jumlah_bayar;}else{echo $header_transaksi->jumlah_transaksi;} ?>" />
                     </td>
                   </tr>
                   <tr>
                     <td>Dari Bank</td>
                     <td><input style="background: #fff; color: #000;" type="text" name="nama_bank" class="form-control-sm" placeholder="Nama Bank" value="<?php echo $header_transaksi->nama_bank ?>" /></td>
                   </tr>
                   <tr>
                     <td>Dari No. Rekening</td>
                     <td><input style="background: #fff; color: #000;" type="text" name="rekening_pembayaran" class="form-control-sm" placeholder="No. Rekening" value="<?php echo $header_transaksi->rekening_pembayaran ?>" /></td>
                   </tr>
                   <tr>
                     <td>Nama Pemilik Rekening</td>
                     <td><input style="background: #fff; color: #000;" type="text" name="rekening_pelanggan" class="form-control-sm" placeholder="Nama Pemilik Rekening" value="<?php echo $header_transaksi->rekening_pelanggan  ?>" /></td>
                   </tr>
                   <tr>
                     <td>Upload Bukti Bayar</td>
                     <td><input style="background: #fff; color: #000;" type="file" name="bukti_bayar" class="form-control-sm" placeholder="Upload bukti pembayaran" /></td>
                   </tr>
                   <tr>
                     <td></td>
                     <td>
                         <button class="btn btn-success btn-sm" type="submit" name="submit"><i class="fa fa-upload"></i> Submit</button>
                         <button class="btn btn-warning btn-sm" type="reset" name="reset"><i class="fa fa-times"></i> Reset</button>
                     </td>
                   </tr>
                 </tbody>
               </table>

  						<?php
                  echo form_close();
                } else {
              ?>
							<p class="alert alert-success">
								<i class="fa fa-warning"></i> Belum ada data transaksi
							</p>
						<?php } ?>

					<div class="pagination flex-m flex-w p-t-26 text-center">
					</div>
				</div>
			</div>
		</div>
	</section>
