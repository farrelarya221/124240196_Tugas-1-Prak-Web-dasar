<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Volume Kubus</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
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
      <br>
    <h1>Volume Kubus</h1>
      <br>
    <form action="kubus.php" method="post">
        Masukkan Sisi: <input type="number" name="sisi" required><br><br>
        <input type="submit" name="submit" value="Hitung">
    <?php
    if (isset($_POST['submit'])) {
        $sisi = $_POST['sisi'];
        $volume = $sisi ** 3; 
        echo "<h2>Hasil Perhitungan:</h2>";
        echo "Volume kubus dengan sisi $sisi adalah <strong>$volume</strong><br>";

    }
    ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>