<?php
include_once "header.php";
include_once "../koneksi.php";
?>
<style>
body {
    background: url('https://img.freepik.com/free-photo/3d-background-with-white-cubes_23-2150472998.jpg?w=900&t=st=1699410796~exp=1699411396~hmac=c31decb44cc4364a1222c2517b466b0f17436eb782f59a9fcece47ca0c06890d') no-repeat center center fixed;
    background-size: cover;
    flex-direction: column;
    min-height: 100vh;
}
</style>

<div class="container">
    <div class="panel">
        <div class="panel-heading">
            <h4>Data Pelanggan</h4>
        </div>
        <div class="panel-body">
            <a href="costumer_add.php" class="btn btn-sm btn-info pull-right"><i class="fa-solid fa-plus"></i>Add Costumer</a>
            <br/>
            <br/>
            <table class="table table-bordered table-striped">
                <tr>
                    <th width="1%">NO</th>
                    <th>Nama</th>
                    <th>Cell Phone</th>
                    <th>Location</th>
                    <th>Actions</th>
                </tr>
                <?php
                $data = mysqli_query($koneksi, "SELECT * from costumer;");
                $no = 1;
                while ($d = mysqli_fetch_array($data)) {
                ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $d['costumer_name']; ?></td>
                    <td><?php echo $d['costumer_phone']; ?></td>
                    <td><?php echo $d['costumer_location']; ?></td>
                    <td>
                        <a href="cost_edit.php?id=<?php echo $d['costumer_id']; ?>" class="btn btn-sm btn-warning"> <i class="fa-solid fa-pencil"></i>  Edit</a>
                        <a href="cost_delet.php?id=<?php echo $d['costumer_id']; ?>" class="btn btn-sm btn-danger"><i class="fa-solid fa-trash-can"></i>  Delete</a>
                    </td>
                </tr>
                <?php
                }
                ?>
                <!-- Add more rows as needed -->
            </table>
        </div>
    </div>
</div>

<?php
include_once "footer.php";
?>
