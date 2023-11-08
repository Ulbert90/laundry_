<?php
include_once "../koneksi.php";
include_once "../admin/header.php";
?>

<div class="container">
    <div class="panel">
        <div class="panel-heading">
            <h4>Transaksi Baru</h4>
        </div>
        <div class="panel-body">
            <div class="col-md-8 col-md-offset-2">
                <a href="transaksi.php" class="btn btn-sm btn-info pull-right">BACK</a>

                <form method="post" action="transaksi_section.php">
                    <div class="form-group">
                        <label>Customer</label>
                        <select class="form-control" name="customer" required>
                            <option value=""> -- Select Customer -- </option>
                            <?php
                            $data = mysqli_query($koneksi, "SELECT * from costumer");
                            while ($row = mysqli_fetch_array($data)) {
                                ?>
                                <option value="<?php echo $row['costumer_id']; ?>">
                                    <?php echo $row['costumer_name']; ?>
                                </option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Berat</label>
                        <input type="number" class="form-control" name="berat" placeholder="Masukkan berat cucian.." required>
                    </div>

                    <div class="form-group">
                        <label>Tgl. Selesai</label>
                        <input type="date" class="form-control" name="tgl_selesai" required>
                    </div>

                    <br />

                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>Jenis Pakaian</th>
                            <th>Jumlah Pakaian</th>
                        </tr>

                        <tr>
                            <td><input type="text" class="form-control" name="jenis_pakaian[]"></td>
                            <td><input type="number" class="form-control" name="jumlah_pakaian[]"></td>
                        </tr>

                        <!-- Add more rows for additional input fields as needed -->

                    </table>

                    <br />

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
include_once "../admin/footer.php";
?>
