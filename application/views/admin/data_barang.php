<div class="container-fluid">
    <button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambahBarang">
        <i class="fa fa-plus fa-sm"></i> Tambah Barang
    </button>
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nama Barang</th>
            <th>Deskripsi</th>
            <th>Kategori</th>
            <th>Harga</th>
            <th>Stock</th>
            <th colspan="3">Aksi</th>
        </tr>
        <?php
        $no = 1;
        foreach ($barang as $item) : ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $item->nama_barang ?></td>
                <td><?php echo $item->deskripsi ?></td>
                <td><?php echo $item->kategori ?></td>
                <td><?php echo $item->harga ?></td>
                <td><?php echo $item->stok ?></td>
                <td>
                    <div class="btn btn-success btn-sm">
                        <i class="fas fa-search-plus"></i>
                    </div>
                </td>
                <td>
                    <?php echo anchor('admin/data_barang/edit/' . $item->id_barang, 
                    '<div class="btn btn-primary btn-sm">
                        <i class="fa fa-edit"></i>
                    </div>') ?>

                </td>
                <td>
                    <?php echo anchor('admin/data_barang/hapus/' . $item->id_barang, 
                    '<div class="btn btn-danger btn-sm">
                        <i class="fa fa-trash"></i>
                    </div>') ?>

                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>

<!-- Modal -->
<div class="modal fade" id="tambahBarang" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Form Input Product</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url() . 'admin/data_barang/tambah_aksi'; ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Nama Barang</label>
                        <input type="text" name="nama_barang" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Deskripsi</label>
                        <input type="text" name="deskripsi" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Kategori</label>
                        <select class = "form-control" name = "kategori">
                            <option>HP</option>
                            <option>Laptop</option>
                            <option>Audio</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Harga</label>
                        <input type="text" name="harga" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Stok</label>
                        <input type="text" name="stok" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Gambar Produk</label><br>
                        <input type="file" name="gambar" class="form-control">
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
            </form>
        </div>
    </div>
</div>