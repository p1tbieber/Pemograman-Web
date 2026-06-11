<style>
    body {
        font-family: Arial, sans-serif;
        margin: 20px;
    }

    h2 {
        color: #333;
    }

    form {
        margin-top: 20px;
    }

    label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
    }

    input[type="text"],
    input[type="number"] {
        width: 100%;
        padding: 8px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    button {
        background-color: #4CAF50;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    button:hover {
        background-color: #45a049;
    }

    p {
        font-size: 16px;
        color: #555;
    }
</style>

<h2>Cek Kategori Usia Mahasiswa</h2>

<hr>
<form method="POST">
    <label for="nama">Nama:</label>
    <input type="text" placeholder="Masukkan Nama" name="nama">

    <label for="umur">Umur:</label>
    <input type="number" placeholder="Masukkan Umur" name="umur">

    <button type="submit" name="submit">Cek Kategori</button>
</form>

<?php
    if (isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $umur = (int) $_POST['umur'];

        if ($umur < 13) {
            echo "<p>Umur $nama $umur tahun. <br> Kategori: Anak-anak.</p>";
        } elseif ($umur >= 13 && $umur <= 17) {
            echo "<p>Umur $nama $umur tahun. <br> Kategori: Remaja.</p>";
        } elseif ($umur >= 18 && $umur <= 59) {
            echo "<p>Umur $nama $umur tahun. <br> Kategori: Dewasa.</p>";
        } else {
            echo "<p>Umur $nama $umur tahun. <br> Kategori: Lansia.</p>";
        }
    }
?>