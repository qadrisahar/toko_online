<p><a href="<?php echo base_url('admin/user/tambah') ?>" class="btn btn-success"><i class="fa fa-plus"></i> Tambah Baru</a></p>

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
       <th>Nama</th>
       <th>Email</th>
       <th>Username</th>
       <th>Level</th>
       <th>Action</th>
     </tr>
   </thead>
   <tbody>
     <?php $no = 1; foreach ($user as $user) { ?>
     <tr>
       <td><?php echo $no++; ?></td>
       <td><?php echo $user->nama; ?></td>
       <td><?php echo $user->email; ?></td>
       <td><?php echo $user->username; ?></td>
       <td><?php echo $user->akses_level; ?></td>
       <td>
         <a href="<?php echo base_url('admin/user/edit/'.$user->id_user) ?>" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i> Edit</a>
         <a href="<?php echo base_url('admin/user/delete/'.$user->id_user) ?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin ingin menghapus data ini?')"><i class="fa fa-trash-o"></i> Hapus</a>
       </td>
     </tr>
    <?php } ?>
   </tbody>
 </table>
