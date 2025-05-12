<?php
include('header.php');
include('navbar.php');
?>

<!-- <style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background: #f9f9f9;
        margin: 0;
        padding: 20px;
    }

    .container {
        max-width: 500px;
        margin: 50px auto;
        background: white;
        padding: 30px;
        border-radius: 12px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    h2 {
        text-align: center;
        color: #444;
    }

    label {
        display: block;
        margin-bottom: 8px;
        color: #333;
        font-weight: bold;
    }

    input[type="text"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 8px;
        font-size: 14px;
    }

    input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 8px;
        font-size: 16px;
        cursor: pointer;
        width: 100%;
    }

    input[type="submit"]:hover {
        background-color: #45a049;
    }

    .result {
        background: #eafbea;
        padding: 20px;
        margin-top: 30px;
        border-left: 6px solid #4CAF50;
        border-radius: 8px;
    }
</style> -->
<div class="container">
    <div class="row py-3 px-3 justify-content-center">
        <div class="col-md-6 mb-5">
            <div class="card border-radius-default p-0">
                <div class="card-header bg-green p-3 text-green">
                    <h5 class="mb-0"><strong>Input Data Jabatan</strong></h5>
                </div>
                <form action="jabatan.php" method="POST">
                    <div class="row p-4">
                        <div class="col-md-12 mb-3">
                            <label for="nama_jabatan_txt" class="form-label">Nama Jabatan</label>
                            <input type="text" class="form-control" name="nama_jabatan_txt" required autofocus>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="gaji_pokok_txt" class="form-label">Gaji Pokok</label>
                            <input type="text" class="form-control" name="gaji_pokok_txt" required autofocus>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="tunjangan_txt" class="form-label">Tunjangan</label>
                            <input type="text" class="form-control" name="tunjangan_txt" required autofocus>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-success border-radius-default" name="submit">Kirim Data</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <?php
        class Jabatan
        {
            var $nama_jabatan;
            var $gaji_pokok;
            var $tunjangan;

            public function __construct($nama, $gaji, $tunjangan)
            {
                $this->nama_jabatan = $nama;
                $this->gaji_pokok = $gaji;
                $this->tunjangan = $tunjangan;
            }

            public function tampil()
            {
                echo '
                <div class="col-md-6">
                    <div class="card border-radius-default p-0">
                        <div class="card-header bg-green p-3 text-green">
                            <h5 class="mb-0"><strong>Total Slip Gaji</strong></h5>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item p-3"><strong>Nama Jabatan:</strong> ' . $this->nama_jabatan . '</li>
                            <li class="list-group-item p-3"><strong>Gaji Pokok:</strong> ' . $this->gaji_pokok . '</li>
                            <li class="list-group-item border-radius-default p-3"><strong>Gaji Pokok:</strong> ' . $this->tunjangan . '</li>
                        </ul>
                    </div>
                </div>';
            }
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nama_jabatan = $_POST["nama_jabatan_txt"];
            $gaji_pokok = $_POST["gaji_pokok_txt"];
            $tunjangan = $_POST["tunjangan_txt"];
            $jabatanObj = new Jabatan($nama_jabatan, $gaji_pokok, $tunjangan);
            $jabatanObj->tampil();
        }
        ?>
    </div>
</div>

<?php
include('footer.php');
?>