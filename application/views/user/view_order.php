<div class="container col-8">
    <!-- Page Heading -->
    <div class="card-body">
        <div class="card shadow mb-4">
            <div class="card-header">
                <div class="card-header">
                    <a href="<?= base_url('user/') ?>"><i class="fas fa-arrow-circle-left"> Kembali</i></a>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-auto">
                                    <?php
                                    if ($data == false) {
                                        echo "<h1>Data Tidak Ditemukan</h1>";
                                    } else { ?>
                                        <form action="<?= base_url('user/ProsesOrder/' . $data->id_barang); ?>" method="post">
                                            <table width="600px">
                                                <tr>
                                                    <td>
                                                        <h3>Nama item </h3>
                                                    </td>
                                                    <td>
                                                        <h3>:</h3>
                                                    </td>
                                                    <td>
                                                        <h3><?= $data->nama_barang; ?></h3>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <h3>Jumlah stok</h3>
                                                    </td>
                                                    <td>
                                                        <h3>:</h3>
                                                    </td>
                                                    <td>
                                                        <h3><?= $data->jumlah_stok; ?></h3>
                                                    </td>
                                                </tr>

                                                <tr>


                                                <tr>
                                                    <td>
                                                        <H4>Order</H4>
                                                    </td>
                                                    <td>
                                                        <h3>:</h3>
                                                    </td>
                                                    <td>

                                                        <?php if ($data->jumlah_stok < 1) {
                                                            echo "<h3>Stok Kosong</h3>";
                                                        ?>

                                                        <?php } else { ?>
                                                            <div class="col-sm-6">
                                                                <div class="input-group">
                                                                    <span class="input-group-btn lm-2 input-group-prepend">
                                                                        <button type="button" class="quantity-left-minus btn btn-danger btn-number" data-type="minus" data-field="">
                                                                            <i class="fas fa-minus-circle"></i>
                                                                        </button>
                                                                    </span>
                                                                    <input type="hidden" name="nama_barang" value="<?= $data->nama_barang; ?>">
                                                                    <input type="hidden" name="harga" value="<?= $data->harga; ?>">

                                                                    <input type="number" id="quantity" name="jumlah_stok" class="form-control input-number" value="1" min="1" max="<?= $data->jumlah_stok; ?>">
                                                                    <span class="input-group-btn lm-2 input-group-append">
                                                                        <button type="button" class="quantity-right-plus btn btn-primary btn-number" data-type="plus" data-field="">
                                                                            <i class="fas fa-plus-circle"></i>
                                                                        </button>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        <?php } ?>
                                                    </td>
                                                </tr>
                                                <div>

                                                </div>
                                            </table>
                                            <hr>
                                            <td align="center">
                                                <?php if ($data->jumlah_stok < 1) {
                                                    echo '<button type="submit" class="btn btn-primary" disabled>Order</button>';
                                                } else { ?>
                                                    <button type="submit" class="btn btn-primary">Order</button>
                                                <?php } ?>
                                            </td>
                                        </form>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>