<?php
include('header.php');
include('navbar.php')
?>

<style>
  /*Reset & base*/
  * {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    font-family: 'Segoe UI', Tahoma, Verdana, Geneva, Tahoma, sans-serif;
  }

  body {
    background: linier-gradient(135deg, #6B73FF 0%, #000DFF 100%);
    color: #222;
    min-height: 100hv;
    align-items: center;
    justify-content: center;
    padding: 10px;
  }

  .contrainer {
    background: #fff;
    border-radius: 12px;
    padding: 15px 20px 20px 20px;
    max-width: 280px;
    width: 100%;
    box-shadow: 0 12px 18px rgb(0, 0, 0, 0.15);
  }

  h3 {
    text-align: center;
    margin-bottom: 15px;
    color: #0033cc;
    font-weight: bold;
    font-size: 20px;
  }

  label {
    display: block;
    margin-bottom: 4px;
    font-weight: 600;
    color: #222;
    font-size: 14px;
  }

  input[type="text"],
  input[type="date"],
  input[type="time"],
  select {
    width: 100%;
    /* smaller width fixed */
    padding: 6px 8px;
    margin-bottom: 18px;
    border: 2px solid #ccc;
    border-radius: 8px;
    font-size: 13px;
    transition: border-color 0.3s ease;
    display: block;
    margin-left: auto;
    margin-right: auto;
  }

  input[type="text"]:focus,
  input[type="date"]:focus,
  input[type="time"]:focus,
  select:focus {
    border-color: #0033cc;
    outline: none;
  }

  input[type="submit"] {
    background-color: #0033cc;
    color: white;
    border: none;
    padding: 12px;
    font-size: 16px;
    font-weight: bold;
    border-radius: 10px;
    cursor: pointer;
    width: 100%;
    box-shadow: 0 5px 10px rgba(0, 51, 204, 0.4);
    transition: background-color 0.3s ease;
  }

  input [type="submit"]:hover {
    background-color: #001a80;
  }

  /* Display output */
  .output {
    margin-top: 15px;
    background-color: #e6f0ff;
    border-radius: 12px;
    padding: 15px 15px;
    color: #000DFF;
    box-shadow: inset 0 0 8px #99bbff;
    word-wrap: break-word;
    font-size: 13px;
  }

  .output h4 {
    margin-bottom: 8px;
    font-weight: 700;
    font-size: 16px;
  }

  .eror-message {
    margin-top: 15px;
    padding: 10px 12px;
    background: #ffcccc;
    border: 1.5px solid #ff9999;
    color: #b30000;
    border-radius: 10px;
    font-weight: 600;
    font-size: 13px;
    text-align: center;
  }

  /* Responsive for mobile */
  @media (max-width: 380px) {
    body {
      padding: 10px;
    }

    .contrainer {
      padding: 15px 20px 25px 20px;
      max-width: 100%;
    }
  }
</style>
</head>

<form method="post">

  <h3>Input Absensi</h3>
  Nip : <input type="text" name="nip_txt"><br>
  Nama Karyawan: <input type="text" name="nama_karyawan"><br>
  Tanggal: <input type="date" name="tanggal_absen"><br>
  Jam Masuk: <input type="time" name="jam_masuk"><br>
  Jam Keluar: <input type="time" name="jam_keluar"><br>
  Status:
  <select name="status_absen">
    <option value="Hadir">Hadir</option>
    <option value="Izin">Izin</option>
    <option value="Sakit">Sakit</option>
    <option value="Alpha">Alpha</option>
  </select><br><br>

  <input type="submit" value="Kirim">
</form>

<?php
class Absensi
{
  var $nip;
  var $nama;
  var $tanggal;
  var $jamMasuk;
  var $jamKeluar;
  var $status;


  public function __construct($nip, $nama, $tanggal, $jam_masuk, $jam_keluar, $status)
  {
    $this->setNip($nip);
    $this->nama = $nama;
    $this->tanggal = $tanggal;
    $this->jamMasuk = $jam_masuk;
    $this->jamKeluar = $jam_keluar;
    $this->status = $status;
  }

  public function setNip($nip)
  {
    if (empty($nip)) {
      throw new Exception("Nip tidak boleh kosong.");
    }
    $this->nip = $nip;
  }

  public function tampil()
  {
    echo "<h4>Data Absensi:</h4>";
    echo "Nip : " . htmlspecialchars($this->nip) . "<br>";
    echo "Nama Karyawan : " . htmlspecialchars($this->nama) . "<br>";
    echo "Tanggal: " . htmlspecialchars($this->tanggal) . "<br>";
    echo "Jam Masuk: " . htmlspecialchars($this->jamMasuk) . "<br>";
    echo "Jam Keluar: " . htmlspecialchars($this->jamKeluar) . "<br>";
    echo "Status: " . htmlspecialchars($this->status) . "<br><br>";
  }
}


if ($_POST) {

  // Data Absensi
  $nip = $_POST["nip_txt"];
  $nama = $_POST["nama_karyawan"];
  $tanggal_absen = $_POST["tanggal_absen"];
  $jamMasuk = $_POST["jam_masuk"];
  $jamKeluar = $_POST["jam_keluar"];
  $status_absen = $_POST["status_absen"];


  $absensi = new Absensi($nip, $nama, $tanggal_absen, $jamMasuk, $jamKeluar, $status_absen);
  $absensi->tampil();
}


?>

<?php
include('footer.php');
?>