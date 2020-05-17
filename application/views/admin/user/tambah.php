<?php
  // Notofokasi error
  echo validation_errors('<div class="alert alert-warning">','</div>');
  // Form Open
  echo form_open(base_url('admin/user/tambah'),' class="form-horizontal"');
?>

<div class="form-group">
 <label class="col-md-2 control-label">Nama Pengguna</label>
 <div class="col-md-9">
   <input type="text" name="nama" class="form-control" placeholder="Nama Pengguna" value="<?php echo set_value('nama') ?>" required>
 </div>
</div>
<div class="form-group">
 <label class="col-md-2 control-label">Email</label>
 <div class="col-md-9">
   <input type="text" name="email" class="form-control" placeholder="Email Pengguna" value="<?php echo set_value('email') ?>" required>
 </div>
</div>
<div class="form-group">
 <label class="col-md-2 control-label">Username</label>
 <div class="col-md-9">
   <input type="text" name="username" class="form-control" placeholder="Username" value="<?php echo set_value('username') ?>" required>
 </div>
</div>
<div class="form-group">
 <label class="col-md-2 control-label">Password</label>
 <div class="col-md-9">
   <input type="password" name="password" class="form-control" placeholder="Password" value="<?php echo set_value('password') ?>" required>
 </div>
</div>
<div class="form-group">
 <label class="col-md-2 control-label">Level Hak Akses</label>
 <div class="col-md-9">
   <select name="akses_level" class="form-control">
     <option value="">Pilih Level</option>
     <option value="admin">Admin</option>
     <option value="user">User</option>
   </select>
 </div>
</div>
<div class="form-group">
 <label class="col-md-2 control-label"></label>
 <div class="col-md-9">
   <button type="submit" class="btn btn-success btn-sm" name="submit">
     <i class="fa fa-save"></i> Simpan
   </button>
   <button type="reset" class="btn btn-info btn-sm" name="reset">
     <i class="fa fa-times"></i> Reset
   </button>
 </div>
</div>

<?php echo form_close(); ?>
