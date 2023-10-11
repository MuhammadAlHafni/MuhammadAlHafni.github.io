<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pesanan Coklat</title>
    <style>
        body {
            color: white;
        }

        body.dark-mode {
            background-color:  white;
            color: #fff;
        }

        body.dark-mode a {
            color: white;
        }

        body.dark-mode .header{
            color: white;
        }

        body.light-mode {
            background-color: white;
            color: black;
        }

        body.light-mode .navbar a {
            color: black;
        }

        body.light-mode .navbar a:hover {
            color: orangered;
        }

        body.light-mode header {
            background-color: white;
        }

        body.light-mode header .navbar {
            background-color: white;
        }

        body.light-mode .container{
            background-color: orangered;
            color: white;
        }

        body.light-mode .container a{
            color: white;
        }
        
        body.light-mode a:hover {
            color: black;
        }

        header {
            position: fixed;
            top: 0;
            right: 0;
            width: 100%;
            z-index: 1000;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 30px 170px;
            background-color: #1e1c2a;
            color: white;
        }

        .navbar {
            display: flex;
        }

        .navbar a {
            color: white;
            font-size: 1.1rem;
            padding: 10px 20px;
            font-weight: 500;
        }

        .navbar a:hover {
            color: orangered;
            transition: .4s;
        }

        body {
            background: #1e1c2a;
            font-family: 'Poppins', sans-serif;
            color: var(--text-color);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .container {
            max-width: 500px;
            width: 100%;
            background: #2b2640;
            border: none;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
            text-align: center;
        }
        .container a{
            color: white;
        }

        .container h2{
            color: white;
        }

        .field {
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
            padding-bottom: 2px;
            margin-bottom: 20px;
            display: flex;
            justify-content: space-between;
            color: white;
        }

        .field:last-child {
            border-bottom: none;
        }

        .label {
            font-weight: 500;
            font-size: 1rem;
            color: var(--main-color);
        }

        .value {
            margin-left: 10px;
        }

        a {
            color: black;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            background: var(--text-color);
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        a:hover {
            color: orangered;
        }
        
    </style>
</head>

<body>
    <header>
        <div class="fas fa-bars" id="menu-icon"></div>

        <ul class="navbar">
            <a id="toggle-mode">Mode Tema</a>
            <a href="index.html">Home</a>
            <a href="index.html">Service</a>
            <a href="index.html">Contact</a>
        </ul>
    </header>
    <div class="container">

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nama = $_POST['nama'] ?? '';
            $alamat = $_POST['alamat'] ?? '';
            $jenisCoklat = $_POST['jenisCoklat'] ?? '';
            $jumlah = $_POST['jumlah'] ?? '';
            $nohp = $_POST['nohp'] ?? '';

            $tanggalOrder = date("Y-m-d H:i:s");
            $nomerTransaksi = "TX" . time();

            // Other details
            $statusPembayaran = "Cash on Delivery";
            $statusTransaksi = "Pending";
            $totalPembayaran = 20000 * intval($jumlah);

            echo "<h2>Detail Pesanan</h2>";
            echo "<div class='field'><span class='label'>Tanggal Order:</span><span class='value'>{$tanggalOrder}</span></div>";
            echo "<div class='field'><span class='label'>Nomer Transaksi:</span><span class='value'>{$nomerTransaksi}</span></div>";
            echo "<div class='field'><span class='label'>Nama:</span><span class='value'>" . htmlspecialchars($nama) . "</span></div>";
            echo "<div class='field'><span class='label'>Alamat:</span><span class='value'>" . htmlspecialchars($alamat) . "</span></div>";
            echo "<div class='field'><span class='label'>Jenis Coklat:</span><span class='value'>" . htmlspecialchars($jenisCoklat) . "</span></div>";
            echo "<div class='field'><span class='label'>Jumlah Coklat:</span><span class='value'>" . htmlspecialchars($jumlah) . "</span></div>";
            echo "<div class='field'><span class='label'>Nomor Whatsapp:</span><span class='value'>" . htmlspecialchars($nohp) . "</span></div>";
            echo "<div class='field'><span class='label'>Metode Pembayaran:</span><span class='value'>{$statusPembayaran}</span></div>";
            echo "<div class='field'><span class='label'>Status Pembayaran:</span><span class='value'>{$statusTransaksi}</span></div>";
            echo "<div class='field'><span class='label'>Total Pembayaran:</span><span class='value'>Rp. {$totalPembayaran}</span></div>";
            echo "<a href='index.html'>Kembali ke Menu Order</a>";
        } else {
            echo "Data tidak ditemukan!";
        }
        ?>

    </div>
    <script type="text/javascript" src="php.js"></script>
</body>

</html>