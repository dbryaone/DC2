<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DC2 Laundry</title>
    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', sans-serif;
            background:rgb(255, 255, 255);
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
            color: White;
            text-decoration: none;
            margin: 0 15px;
            font-weight: bold;
        }

        section.hero {
            background: url('https://png.pngtree.com/thumb_back/fh260/background/20240712/pngtree-washing-machines-in-the-self-service-laundry-image_15872274.jpg') center/cover no-repeat;
            color: white;
            padding: 120px 60px;
            text-align: center;
        }

        section.hero h1 {
            font-size: 3em;
            margin-bottom: 10px;
        }

        section.hero p {
            font-size: 1.2em;
        }

        section.services {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin: 40px 20px;
        }

        .service-card {
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            margin: 10px;
            padding: 20px;
            width: 300px;
            text-align: center;
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
        <h1>DC2 LAUNDRY</h1>
        <p>Mager Nyuci Gosok? DC2 (Di Situ) Laundry Solusinya</p>
    </header>

    <nav>
        <a href="index.php">Beranda</a>
        <a href="harga.php">Harga</a>
        <a href="pelanggan.php">Pelanggan</a>
    </nav>

    <section class="hero">
        <h1>Budayakan Malas Mencuci</h1>
        <p>Karena Mencuci Adalah Tugas Kami</p>
    </section>

    <section class="services">
        <div class="service-card">
            <h3>Laundry Kiloan</h3>
            <p>Mulai dari Rp5.000/kg, selesai dalam 1 hari.</p>
        </div>
        <div class="service-card">
            <h3>Cuci Satuan</h3>
            <p>Cocok untuk jaket, selimut, atau pakaian khusus.</p>
        </div>
        <div class="service-card">
            <h3>Antar Jemput</h3>
            <p>Gratis untuk jarak 5 km dari outlet kami.</p>
        </div>
    </section>

    <footer>
        &copy; <?= date("Y") ?> Laundry Bersih Cepat. All rights reserved.
    </footer>

</body>
</html>