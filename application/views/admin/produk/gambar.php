<?php
  if (isset($error)) {
    echo "<p class='alert alert-warning'>";
    echo $error;
    echo "</p>";
  }
  echo validation_errors('<div class="alert alert-warning">','</div>');
  echo form_open_multipart(base_url('admin/produk/gambar/'.$produk->id_produk),' class="form-horizontal"');
?>

    <div class="form-group">
     <label class="col-md-2 control-label">Nama Gambar</label>
     <div class="col-md-9">
       <input type="text" name="judul_gambar" class="form-control" placeholder="Nama Gambar Produk" value="<?php echo set_value('judul_gambar') ?>" required>
     </div>
    </div>

    <div class="form-group">
     <label class="col-md-2 control-label">Unggah Gambar</label>
     <div class="col-md-7">
       <input type="file" name="gambar" class="form-control" placeholder="Gambar Produk" value="<?php echo set_value('gambar') ?>" required>
     </div>
     <div class="col-md-3">
       <button type="submit" class="btn btn-success btn-sm" name="submit">
         <i class="fa fa-download"></i> Upload
       </button>
       <button type="reset" class="btn btn-info btn-sm" name="reset">
         <i class="fa fa-times"></i> Reset
       </button>
     </div>
    </div>
    <br />

<?php echo form_close(); ?>

<?php
  // Notifikasi

  if ($this->session->flashdata('sukses')) {
    echo "<div class='alert alert-success'>";
    echo $this->session->flashdata('sukses');
    echo "</div>";
  }
 ?>

 <table class="table table-bordered" id="example1">
   <thead style="text-align: center;">
     <tr>
       <th>No</th>
       <th>Gambar</th>
       <th>Judul</th>
       <th>Action</th>
     </tr>
   </thead>
   <tbody>
     <tr>
       <td>1</td>
       <td>
        <img src="<?php echo base_url('assets/upload/image/thumbs/'.$produk->gambar) ?>" alt="" class="img img-responsive img-thumbnail" width="60">
       </td>
       <td><?php echo $produk->nama_produk ?></td>
       <td></td>
     </tr>
     <?php $no = 2; foreach ($gambar as $gambar) { ?>
     <tr>
       <td><?php echo $no++; ?></td>
       <td>
        <img src="<?php echo base_url('assets/upload/image/thumbs/'.$gambar->gambar) ?>" alt="" class="img img-responsive img-thumbnail" width="60">
       </td>
       <td><?php echo $gambar->judul_gambar ?></td>
       <td>
         <a href="<?php echo base_url('admin/produk/delete_gambar/'.$produk->id_produk.'/'.$gambar->id_gambar) ?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin ingin menghapus gambar ini?')"><i class="fa fa-trash-o"></i> Hapus</a>
       </td>
     </tr>
    <?php } ?>
   </tbody>
 </table>
