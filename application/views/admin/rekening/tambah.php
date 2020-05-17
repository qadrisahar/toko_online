<?php
  // Notofokasi error
  echo validation_errors('<div class="alert alert-warning">','</div>');
  // Form Open
  echo form_open(base_url('admin/rekening/tambah'),' class="form-horizontal"');
?>

<div class="form-group">
 <label class="col-md-2 control-label">Nama Bank</label>
 <div class="col-md-5">
   <input type="text" name="nama_bank" class="form-control" placeholder="Nama Bank" value="<?php echo set_value('nama_bank') ?>" required>
 </div>
</div>
<div class="form-group">
 <label class="col-md-2 control-label">No. Rekening</label>
 <div class="col-md-5">
   <input type="number" name="nomor_rekening" class="form-control" placeholder="No. Rekening" value="<?php echo set_value('nomor_rekening') ?>" required>
 </div>
</div>
<div class="form-group">
 <label class="col-md-2 control-label">Nama Pemilik</label>
 <div class="col-md-5">
   <input type="text" name="nama_pemilik" class="form-control" placeholder="Nama Pemilik" value="<?php echo set_value('nama_pemilik') ?>" required>
 </div>
</div>
<div class="form-group">
 <label class="col-md-2 control-label"></label>
 <div class="col-md-5">
   <button type="submit" class="btn btn-success btn-xs" name="submit">
     <i class="fa fa-save"></i> Simpan
   </button>
   <button type="reset" class="btn btn-info btn-xs" name="reset">
     <i class="fa fa-times"></i> Reset
   </button>
 </div>
</div>

<?php echo form_close(); ?>
