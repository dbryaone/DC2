<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harga - Laundry Bersih Cepat</title>
    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', sans-serif;
            background: #f9f9f9;
            color: #333;
        }

        header {
            background-color: #3498db;
            padding: 20px;
            color: white;
            text-align: center;
        }

        nav {
            background-color: #2980b9;
            padding: 10px;
            text-align: center;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
            font-weight: bold;
        }

        .container {
            padding: 40px 20px;
            max-width: 800px;
            margin: auto;
        }

        h2 {
            text-align: center;
            margin-bottom: 30px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }

        th, td {
            padding: 15px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }

        th {
            background-color: #3498db;
            color: white;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        footer {
            background: #2c3e50;
            color: white;
            padding: 20px;
            text-align: center;
            margin-top: 40px;
        }
    </style>
</head>
<body>

    <header>
        <h1>Laundry Bersih Cepat</h1>
        <p>Daftar Harga</p>
    </header>

    <nav>
        <a href="index.php">Beranda</a>
        <a href="harga.php">Harga</a>
        <a href="pelanggan.php">Pelanggan</a>
    </nav>

    <div class="container">
        <h2>Harga Layanan Kami</h2>
        <table>
            <thead>
                <tr>
                    <th>Layanan</th>
                    <th>Harga per Kg</th>
                    <th>Estimasi Waktu</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Cuci aja</td>
                    <td>Rp 7.000 / kg</td>
                    <td>1 Hari</td>
                </td> 
                <tr>
                    <td>Gosok aja</td>
                    <td>Rp 8.000 / kg</td>
                    <td>1 Hari</td>
                </td>
                <tr>
                    <td>Cuci Gosok</td>
                    <td>Rp 15.000 / kg</td>
                    <td>2 Hari</td>
                </tr>
                <tr>
                    <td>Laundry Express</td>
                    <td>Rp 20.000 / kg</td>
                    <td>6-8 Jam</td>
                </tr>
                <tr>
                    <td>Boneka</td>
                    <td>Rp 10.000 / kg</td>
                    <td>2 Hari</td>
                </tr>
                <tr>
                    <td>Jas/Jaket/Blazer</td>
                    <td>Rp 15.000 / pcs</td>
                    <td>2 Hari</td>
                </tr>
                <tr>
                    <td>Selimut / Bedcover</td>
                    <td>Rp 20.000 / pcs</td>
                    <td>3 Hari</td>
                </tr>
                <tr>
                    <td>Gorden</td>
                    <td>Rp 10.000 / m</td>
                    <td>4 Hari</td>
                </tr>
                <tr>
                    <td>Karpet</td>
                    <td>Rp 15.000 / m</td>
                    <td>5 Hari</td>
                </tr>
            </tbody>
        </table>
    </div>

    <footer>
        &copy; <?= date("Y") ?> Laundry Bersih Cepat. All rights reserved.
    </footer>

</body>
</html>
