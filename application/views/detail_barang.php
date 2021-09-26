<div class="container-fluid">
    <div class="card">
        <h5 class="card-header">Detail Produk</h5>
        <div class="card-body">
            <?php foreach ($barang as $item) : ?>
                <div class="row">
                    <div class="col-md-4">
                        <img src="<?php echo base_url() . '/uploads/' . $item->gambar ?>" class="card-img-top">
                    </div>

                    <div class="col-md-8">
                        <table class="table">
                            <tr>
                                <td>Nama Produk</td>
                                <td><strong>
                                        <?php echo $item->nama_barang ?>
                                    </strong></td>
                            </tr>

                            <tr>
                                <td>Keterangan</td>
                                <td><strong>
                                        <?php echo $item->deskripsi ?>
                                    </strong></td>
                            </tr>

                            <tr>
                                <td>Kategori</td>
                                <td><strong>
                                        <?php echo $item->kategori ?>
                                    </strong></td>
                            </tr>

                            <tr>
                                <td>Stok</td>
                                <td><strong>
                                        <?php echo $item->stok ?>
                                    </strong></td>
                            </tr>

                            <tr>
                                <td>Harga</td>
                                <td><strong>
                                        <div class="btn btn-sm btn-success">
                                            Rp. <?php echo number_format($item->harga, 0, ',', '.') ?>
                                        </div>
                                    </strong></td>
                            </tr>
                        </table>

                        <?php echo anchor(
                            'dashboard/add_to_cart/' . $item->id_barang,
                            '<div class = "btn btn-sm btn-primary" >add to cart</div>'
                        ) ?>

                        <?php echo anchor(
                            'dashboard/index/',
                            '<div class = "btn btn-sm btn-danger" >kembali</div>'
                        ) ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>