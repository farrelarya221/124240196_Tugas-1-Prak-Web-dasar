<!DOCTYPE html>
<html>
<head>
    <title>Pilih Bulan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <?php
    $pesan = "Selamat datang bro di halaman pilih bulan";
    ?>
    <style>
        body {
            background: linear-gradient(to right, #2c3e50, #3498db);
            color: white;
            font-family: 'Arial', sans-serif;
        }
        
        .header {
            background: #2c3e50;
            color: white;
            padding: 15px;
            text-align: center;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }
        
        .content {
            background: white;
            padding: 20px;
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
        }
        
        .card-body {
            background: white;
            padding: 20px;
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
            color: black;
        }
        body {
            text-align: center;
            font-family: Arial, sans-serif;
            margin-top: 15px;
        }
        .result {
            font-size: 15px;
            font-weight: bold;
            margin-top: 20px;
        }
        .form-container {
            max-width: 400px;
            margin: 0 auto;
        }
        input[type="number"], input[type="submit"] {
            margin: 10px 0;
        }
    </style>
</head>
<body>
      <div class="container mt-4">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.html">Muhammad Farrel Arya Anindya</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">Kontak</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="kubus.php">Volume Kubus</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="luassegitiga.php">Luas Segitiga</a> 
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="bulan.php">Bulan</a>
                        </li>
                </ul>
            </div>
        </div>
      </nav>

    <?php
    if(isset($_POST['nomor_bulan'])) {
        $bulan = [
            1 => 'Januari',
            2 => 'Februari', 
            3 => 'Maret',
            4 => 'April',
            5 => 'Mei',
            6 => 'Juni',
            7 => 'Juli',
            8 => 'Agustus',
            9 => 'September',
            10 => 'Oktober',
            11 => 'November',
            12 => 'Desember'
        ];
        $nomor = intval($_POST['nomor_bulan']);

        if($nomor >= 1 && $nomor <= 12) {
            $nama_bulan = $bulan[$nomor];
        } else {
            $nama_bulan = "Bulan tidak valid";
        }
    }
    ?>
    <br>
    <h1><?php echo $pesan; ?></h1>
    <br>

    <form method="POST">
        Masukkan Nomor Bulan (1-12):
        <input type="number" name="nomor_bulan" min="1" max="12" required>
        <div class="text-center">
        <button type="submit" class="btn btn-primary">Kirim</button>
        <button type="reset" class="btn btn-primary">Reset</button>> <br>
        </div>
    </form>


    <?php if(isset($nama_bulan)): ?>
        <h2>Nama Bulan: <?php echo $nama_bulan; ?></h2>
    <?php endif; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>