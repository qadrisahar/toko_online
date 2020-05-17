<header class="header1">
		<!-- Header desktop -->
		<div class="container-menu-header">
			<div class="topbar">
				<div class="topbar-social">
					<a href="<?php echo $site->facebook ?>" class="topbar-social-item fa fa-facebook"></a>
					<a href="<?php echo $site->instagram ?>" class="topbar-social-item fa fa-instagram"></a>
				</div>

				<span class="topbar-child1">
					<i class="fa fa-map-marker"></i> <?php echo $site->alamat ?>
				</span>

				<div class="topbar-child2">
					<span class="topbar-email">
						<i class="fa fa-email"></i><?php echo $site->email ?>
					</span>

					<div class="topbar-language rs1-select2">
						<select class="selection-1" name="time">
							<option><i class="fa fa-phone"></i> <?php echo $site->telepon ?></option>
						</select>
					</div>
				</div>
			</div>
