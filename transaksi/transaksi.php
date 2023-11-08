<?php
include_once "../admin/header.php";
include_once "../koneksi.php";

$data = mysqli_query($koneksi, "SELECT * FROM costumer, transaksi WHERE transaksi_costumer = costumer_id ORDER BY transaksi_id DESC;");
?>

<div class="container">
    <div class="panel">
        <div class="panel-heading">
            <h4>Data Transaksi</h4>
        </div>
        <div class="panel-body">
            <a href="transaksi_tambah.php" class="btn btn-sm btn-info pull-right"><i class="fa-solid fa-plus"></i>Transaksi Baru</a>
            <br />
            <br />
            <table class="table table-bordered table-striped">
                <tr>
                    <th width="1%">NO</th>
                    <th>Invoice</th>
                    <th>Date</th>
                    <th>User</th>
                    <th>
                        heavy(Kg)</th>
                    <th>Clear Date</th>
                    <th>Price</th>
                    <th>Status</th>
                    <th width="20%">Action</th>
                </tr>
                <?php
                $no = 1;
                while ($d = mysqli_fetch_array($data)) {
                    ?>
                    <tr>
                        <td>
                            <?php echo $no++; ?>
                        </td>
                        <td>INVOICE
                            <?php echo $d['transaksi_id']; ?>
                        </td>
                        <td>
                            <?php echo $d['transaksi_tgl']; ?>
                        </td>
                        <td>
                            <?php echo $d['transaksi_costumer']; ?>
                        </td>
                        <td>
                            <?php echo $d['transaksi_berat']; ?>
                        </td>
                        <td>
                            <?php echo $d['transaksi_tgl_selesai']; ?>
                        </td>
                        <td>
                            <?php echo "Rp. " . number_format($d['transaksi_harga']) . ","; ?>
                        </td>
                        <td>
                            <?php
                            if ($d['transaksi_setatus'] == "0") {
                                echo "<div class='label label-warning'>PROSES</div>";
                            } elseif ($d['transaksi_setatus'] == "1") {
                                echo "<div class='label label-info'>DICUCI</div>";
                            } elseif ($d['transaksi_setatus'] == "2") {
                                echo "<div class='label label-success'>SELESAI</div>";
                            }
                            ?>
                        </td>
                        <td>
                            <a href="transaksi_invoice.php?id=<?php echo $d['transaksi_id']; ?>" target="_blank"
                                class="btn btn-sm btn-warning">INVOICE</a>

                            <a href="transaksi_edit.php?id=<?php echo $d['transaksi_id']; ?>"
                                class="btn btn-sm btn-warning"> <i class="fa-solid fa-pencil"></i> Edit</a>

                            <a href="transaksi_hapus.php?id=<?php echo $d['transaksi_id']; ?>"
                                class="btn btn-sm btn-danger"><i class="fa-solid fa-trash-can"></i> Cancel</a>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </table>
        </div>
    </div>
</div>

<?php
include_once "../admin/footer.php";
?>