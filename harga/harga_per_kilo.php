<?php
include_once "../admin/header.php";
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
            if ($_GET['pesan'] == "berhasil") {
                echo "<div class='alert alert-success'>Berhasil Input Harga Perkilo</div>";
            }
        }
        ?>

        <div class="panel mb-5">
            <div class="panel-heading">
                <h4>Mon€y laun</h4>
            </div>
            <div class="panel-body">
                <form method="post" action="../harga/harga_update.php">
                    <div class="form-group">
                        <label>Harga Per Kilogram</label>
                        <input type="text" class="form-control" name="harga_per_kilo" placeholder="1k %kg">
                    </div>
                    <br />
                    <input type="submit" class="btn btn-primary" value="Calculate">
                </form>
            </div>
        </div>
    </div>
</div>


<?php
include_once "../admin/footer.php";
?>