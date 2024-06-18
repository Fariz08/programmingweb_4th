<!DOCTYPE html>
<html>
<head>
    <title>Konversi Nilai Angka</title>
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
        <h2>Konversi Nilai Mata Kuliah</h2>
        <form method="post">
            Masukkan Nilai Angka <input type="text" name="nilai" required><br>
            <input type="submit" value="Konversi">
        </form>
        <div class="result">
            <?php
            // Fungsi untuk mengkonversi nilai angka menjadi grade
            function konversiNilai($nilai) {
                if ($nilai >= 90 && $nilai <= 100) {
                    return "A";
                } elseif ($nilai >= 80 && $nilai < 90) {
                    return "B";
                } elseif ($nilai >= 70 && $nilai < 80) {
                    return "C";
                } elseif ($nilai >= 60 && $nilai < 70) {
                    return "D";
                } elseif ($nilai >= 0 && $nilai < 60) {
                    return "E";
                } else {
                    return "Nilai tidak valid";
                }
            }

            // Memeriksa apakah ada input nilai dari pengguna
            if(isset($_POST['nilai'])){
                $nilai = $_POST['nilai'];
                
                // Memastikan input adalah angka
                if(is_numeric($nilai)) {
                    $grade = konversiNilai($nilai);
                    
                    echo "Nilai Angka: " . $nilai . "<br>";
                    echo "Nilai Huruf: " . $grade . "<br>";
                } else {
                    echo "Masukkan nilai angka yang valid.";
                }
            }
            ?>
        </div>
    </div>
</body>
</html>