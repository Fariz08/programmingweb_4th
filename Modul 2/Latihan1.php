<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator Balok</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f5f5f5;
        }
        .container {
            background-color: #fff;
            border-radius: 5px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        input[type="text"], input[type="submit"] {
            margin-bottom: 10px;
            padding: 8px;
            border-radius: 3px;
            border: 1px solid #ccc;
            width: 100%;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #4caf50;
            color: white;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        .result {
            font-weight: bold;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Aplikasi Luas Balok</h2>
        <form method="post">
            Panjang Balok <input type="text" name="panjang" required><br>
            Lebar Balok <input type="text" name="lebar" required><br>
            Tinggi Balok <input type="text" name="tinggi" required><br>
            <input type="submit" value="Hitung">
        </form>
        <div class="result">
            <?php
            // Fungsi untuk menghitung luas permukaan balok
            function hitungLuasPermukaan($panjang, $lebar, $tinggi) {
                return 2 * (($panjang * $lebar) + ($panjang * $tinggi) + ($lebar * $tinggi));
            }

            // Fungsi untuk menghitung volume balok
            function hitungVolume($panjang, $lebar, $tinggi) {
                return $panjang * $lebar * $tinggi;
            }

            // Memeriksa apakah ada input dari pengguna
            if(isset($_POST['panjang']) && isset($_POST['lebar']) && isset($_POST['tinggi'])){
                $panjang = $_POST['panjang'];
                $lebar = $_POST['lebar'];
                $tinggi = $_POST['tinggi'];
                
                // Memastikan input adalah angka positif
                if($panjang > 0 && $lebar > 0 && $tinggi > 0) {
                    $luasPermukaan = hitungLuasPermukaan($panjang, $lebar, $tinggi);
                    $volume = hitungVolume($panjang, $lebar, $tinggi);
                    
    
                    echo "Luas Permukaan Balok: " . $luasPermukaan . "<br>";
                    echo "Volume Balok: " . $volume . "<br>";
                } else {
                    echo "Masukkan angka positif untuk panjang, lebar, dan tinggi.";
                }
            }
            ?>
        </div>
    </div>
</body>
</html>