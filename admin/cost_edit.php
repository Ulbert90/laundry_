<?php
include_once "header.php";
?>

<style>
    body {
        background: url('https://img.freepik.com/free-photo/3d-background-with-white-cubes_23-2150472998.jpg?w=900&t=st=1699410796~exp=1699411396~hmac=c31decb44cc4364a1222c2517b466b0f17436eb782f59a9fcece47ca0c06890d') no-repeat center center fixed;
        background-size: cover;
        flex-direction: column;
        min-height: 100vh;
    }

    .container {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .panel {
        border: 1px solid #ccc;
        padding: 15px;
        width: 100%;
        border-radius: 5px;
    }
</style>

<div class="container">
    <div class="col-md-5 col-md-offset-3">
    <?php
        if (isset($_GET["pesan"])) {
            if ($_GET['pesan'] == "ok") {
                echo "<div class='alert alert-success'>Data Berhasil di Update</div>";
            }
        }
        ?>
        <div class="panel mb-5">
            <div class="panel-heading">
                <h4>Edit Your Account</h4>
            </div>
            <div class="panel-body">
                <?php
                include_once "../koneksi.php";
                $id = $_GET['id'];
                $data = mysqli_query($koneksi,"SELECT * from costumer where costumer_id='$id'");
                while ($d=mysqli_fetch_array($data)) {
                    ?>
                    <form method="post" action="cost_update.php">
                    <div class="form-group">
                        <label>Insert Your Name</label>
                        <input type="hidden" name="id" value="<?php echo $d['costumer_id']; ?>">
                        <input type="text" class="form-control" name="costumer_name" placeholder="" value="<?php echo $d['costumer_name']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Insert Your Phone Number</label>
                        <input type="number" class="form-control" name="costumer_phone" placeholder="" value="<?php echo $d['costumer_phone']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Insert Your Name</label>
                        <input type="text" class="form-control" name="costumer_location" placeholder="" value="<?php echo $d['costumer_location']; ?>">
                </div>                   
                    <br />
                    <input type="submit" class="btn btn-primary" value="Update">
                    </form> 
                <?php
                }
                ?>
            </div>
        </div>
    </div>
</div>

<?php
include_once "footer.php";
?>