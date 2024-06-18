<!DOCTYPE html>
<html>
<head>
    <title>Aplikasi Hitung Luas & Volume Bola</title>
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
        <h2>Aplikasi Hitung Luas & Volume Bola</h2>
        <form method="post">
            Masukkan Jari-Jari Bola <input type="text" name="jari_jari" required>
            <input type="submit" value="Hitung">
        </form>
        <div class="result">
            <?php
            // Fungsi untuk menghitung luas permukaan bola
            function hitungLuasPermukaan($jariJari) {
                return 4 * M_PI * pow($jariJari, 2);
            }

            // Fungsi untuk menghitung volume bola
            function hitungVolume($jariJari) {
                return (4/3) * M_PI * pow($jariJari, 3);
            }

            // Memeriksa apakah ada input jari-jari dari pengguna
            if(isset($_POST['jari_jari'])){
                $jariJari = $_POST['jari_jari'];
                
                // Memastikan input adalah angka positif
                if($jariJari > 0) {
                    $luasPermukaan = hitungLuasPermukaan($jariJari);
                    $volume = hitungVolume($jariJari);
                    
                    
                    echo "Luas Permukaan Bola: " . $luasPermukaan . "<br>";
                    echo "Volume Bola: " . $volume . "<br>";
                } else {
                    echo "Masukkan angka positif untuk jari-jari.";
                }
            }
            ?>
        </div>
    </div>
</body>
</html>