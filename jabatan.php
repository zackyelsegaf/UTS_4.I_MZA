<?php
include('header.php');
include('navbar.php');
?>

<style>
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
</style>
<div class="container">
    <h2>Form Input Jabatan</h2>
    <form method="post" action="">
        <label for="nama_jabatan">Nama Jabatan:</label>
        <input type="text" name="nama_jabatan_txt" id="nama_jabatan" required>

        <label for="gaji_pokok">Gaji Pokok:</label>
        <input type="text" name="gaji_pokok_txt" id="gaji_pokok" required>

        <label for="tunjangan">Tunjangan:</label>
        <input type="text" name="tunjangan_txt" id="tunjangan" required>

        <input type="submit" value="Kirim Data">
    </form>

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
            echo "<div class='result'>";
            echo "<h3>Data Jabatan:</h3>";
            echo "Jabatan: <strong>$this->nama_jabatan</strong><br>";
            echo "Gaji Pokok: <strong>Rp. $this->gaji_pokok</strong><br>";
            echo "Tunjangan: <strong>Rp. $this->tunjangan</strong><br>";
            echo "</div>";
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

<?php
include('footer.php');
?>