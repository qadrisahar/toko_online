<button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#delete-<?php echo $produk->id_produk ?>"><i class="fa fa-trash-o"></i> Hapus</button>

<div class="modal fade" id="delete-<?php echo $produk->id_produk ?>">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Hapus Data Produk</h4>
      </div>
      <div class="modal-body">
        <div class="callout callout-warning">
        <h4>Peringatan!</h4>
        Yakin ingin menghapus data ini? Data yang dihapus tidak dapat dikembalikan lagi :)
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal"><i class="fa fa-times"></i></button>
        <a href="<?php echo base_url('admin/produk/delete/'.$produk->id_produk) ?>" class="btn btn-warning"><i class="fa fa-trash-o"></i></a>
      </div>
    </div>
  </div>
</div>
