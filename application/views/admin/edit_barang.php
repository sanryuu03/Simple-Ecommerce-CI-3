<div class="contaier-fluid ml-3">
    <h3><i class='fas fa-edit'></i> Data</h3>

    <?php foreach ($barang as $item) : ?>
        <form method="post" action="<?php echo base_url() . 'admin/data_barang/update' ?>">
            <div class="for-group">
                <label>Nama Barang</label>
                <input type="text" name="nama_barang" 
                class="form-control" value="<?php echo $item->nama_barang ?>">
            </div>

            <div class="for-group">
                <label>Deskripsi</label>
                <input type="text" name="deskripsi" 
                class="form-control" value="<?php echo $item->deskripsi ?>">
            </div>

            <div class="for-group">
                <label>Kategori</label>
                <input type="hidden" name="id" 
                class="form-control" value="<?php echo $item->id ?>">
                <input type="text" name="kategori" 
                class="form-control" value="<?php echo $item->kategori ?>">
            </div>

            <div class="for-group">
                <label>Harga</label>
                <input type="text" name="harga" 
                class="form-control" value="<?php echo $item->harga ?>">
            </div>

            <div class="for-group">
                <label>Stok</label>
                <input type="text" name="stok" 
                class="form-control" value="<?php echo $item->stok ?>">
            </div>

            <button type = "submit" class = "btn btn-primary btn-sm mt-3">Save
            </button>
        </form>
    <?php endforeach; ?>
</div>