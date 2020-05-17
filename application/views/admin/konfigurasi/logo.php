<?php
  // Notifikasi

  if ($this->session->flashdata('sukses')) {
    echo "<div class='alert alert-success'>";
    echo $this->session->flashdata('sukses');
    echo "</div>";
  }
 ?>

<?php

  if (isset($error)) {
    echo "<p class='alert alert-warning'>";
    echo $error;
    echo "</p>";
  }
  // Notofokasi error
  echo validation_errors('<div class="alert alert-warning">','</div>');
  // Form Open
  echo form_open_multipart(base_url('admin/konfigurasi/logo'),' class="form-horizontal"');
?>

<div class="form-group">
 <label class="col-md-2 control-label">Nama Website</label>
 <div class="col-md-9">
   <input type="text" name="namaweb" class="form-control" placeholder="Nama Website" value="<?php echo $konfigurasi->namaweb ?>" required>
 </div>
</div>

<div class="form-group">
 <label class="col-md-2 control-label">Upload Logo Baru</label>
 <div class="col-md-9">
   <input type="file" name="logo" class="form-control" placeholder="Upload Logo Baru" value="<?php echo $konfigurasi->logo ?>" required>
   Logo lama : <br /><img src="<?php echo base_url('assets/upload/image/'.$konfigurasi->logo) ?>" class="img img-responsive img-thumbnail" width="200">
 </div>
</div>

<div class="form-group">
 <label class="col-md-2 control-label"></label>
 <div class="col-md-9">
   <button type="submit" class="btn btn-success btn-sm" name="submit">
     <i class="fa fa-edit"></i> Update
   </button>
   <button type="reset" class="btn btn-info btn-sm" name="reset">
     <i class="fa fa-times"></i> Reset
   </button>
 </div>
</div>

<?php echo form_close(); ?>
