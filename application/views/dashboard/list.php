
	<!-- Content page -->
	<section class="bgwhite p-t-55 p-b-65">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-12 p-b-50">
					<div class="leftbar p-r-20 p-r-0-sm">
						<div class="col-sm-6 col-md-8 col-lg-12 p-b-50">
							<h4 class="m-text14 p-b-7">
							  Menu Pelanggan
							</h4>
							<ul class="p-b-54">
							  <li class="p-t-4">
							    <a href="<?php echo base_url('dashboard') ?>" class="s-text13 active1">
							      <i class="fa fa-dashboard"> </i> Dashboard
							    </a>&nbsp;
									<a href="<?php echo base_url('belanja') ?>" class="s-text13 active1">
							      <i class="fa fa-shopping-cart"></i> Keranjang Belanja
							    </a>&nbsp;
									<a href="<?php echo base_url('dashboard/belanja') ?>" class="s-text13 active1">
							      <i class="fa fa-check"></i> Riwayat Belanja
							    </a>&nbsp;
									<a href="<?php echo base_url('dashboard/profil') ?>" class="s-text13 active1">
							      <i class="fa fa-street-view"></i> Profile Saya
							    </a>&nbsp;
									<a href="<?php echo base_url('masuk/logout') ?>" class="s-text13 active1">
							      <i class="fa fa-sign-out"></i> Logout
							    </a>
							  </li>
							</ul>

		            <div class="alert alert-success">
		              <h3>Selamat Datang <strong><?php echo $this->session->userdata('nama_pelanggan'); ?></strong></h3>
		            </div>

								<?php if($header_transaksi){ ?>
									<table class="table table-bordered" width="100%">
										<thead style="color: #fff;">
											<tr class="bg-success">
												<th>NO</th>
												<th>KODE</th>
												<th>TANGGAL</th>
												<th>JUMLAH TOTAL</th>
												<th>JUMLAH ITEM</th>
												<th>STATUS BAYAR</th>
												<th>ACTION</th>
											</tr>
										</thead>
										<tbody>
											<?php $i = 1; foreach($header_transaksi as $header_transaksi){ ?>
											<tr>
												<td><?php echo $i++; ?></td>
												<td><?php echo $header_transaksi->kode_transaksi ?></td>
												<td><?php echo date('d-m-y', strtotime($header_transaksi->tanggal_transaksi)) ?></td>
												<td><?php echo number_format($header_transaksi->jumlah_transaksi) ?></td>
												<td><?php echo $header_transaksi->total_item ?></td>
												<td><?php echo $header_transaksi->status_bayar ?></td>
												<td>
														<a href="<?php echo base_url('dashboard/detail/'.$header_transaksi->kode_transaksi); ?>" class="btn btn-success btn-sm"><i class="fa fa-eye"></i> Detail</a>
														<a href="<?php echo base_url('dashboard/konfirmasi/'.$header_transaksi->kode_transaksi); ?>" class="btn btn-info btn-sm"><i class="fa fa-upload"></i> Konfirmasi Bayar</a>
												</td>
											</tr>
											<?php } ?>
										</tbody>
									</table>
								<?php } else { ?>
									<p class="alert alert-success">
										<i class="fa fa-warning"></i> Belum ada data transaksi
									</p>
								<?php } ?>

							<div class="pagination flex-m flex-w p-t-26 text-center">
							</div>
						</div>
					</div>
				</div>


			</div>
		</div>
	</section>
