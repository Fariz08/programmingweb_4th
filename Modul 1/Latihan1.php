<?php

// Mendapatkan nilai dari form
$angka1 = $_POST['angka1'] ?? '';
$angka2 = $_POST['angka2'] ?? '';
$operator = $_POST['operator'] ?? '';
$hasil = '';

// Menghitung hasil operasi
if (isset($_POST['hitung'])) {
    switch ($operator) {
        case '+':
            $hasil = $angka1 + $angka2;
            break;
        case '-':
            $hasil = $angka1 - $angka2;
            break;
        case '*':
            $hasil = $angka1 * $angka2;
            break;
        case '/':
            $hasil = $angka1 / $angka2;
            break;
        case '%':
            $hasil = $angka1 % $angka2;
            break;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator PHP</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <style>
        .centered {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        body{
            background-color: grey;
        }
    </style>
</head>
<body>
    <div class="container centered">
        <div class="card" style="width: 30rem;">
            <div class="card-body p-3">
                <h1 class="card-title text-center p-3">Kalkulator</h1>
                <form method="post">
                    <div class="mb-3">
                        <h6 class="text-center">masukkan angka pertama</h6>
                        <input type="number" class="form-control" name="angka1" value="<?php echo $angka1; ?>" placeholder="Masukkan Angka Pertama">
                    </div>
                    <div class="mb-3">
                        <h6 class="text-center">masukkan angka kedua</h6>
                        <input type="number" class="form-control" name="angka2" value="<?php echo $angka2; ?>" placeholder="Masukkan Angka Kedua">
                    </div>
                    <div class="mb-3">
                    <h6 class="text-center">Pilih Operasi</h6>
                        <select class="form-select" name="operator">
                            <option value="+">+</option>
                            <option value="-">-</option>
                            <option value="*">x</option>
                            <option value="/">/</option>
                            <option value="%">%</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <button type="submit" name="hitung" class="btn btn-primary btn-block">Hitung</button>
                    </div>
                    <?php if ($hasil !== ''): ?>
                        <input type="text" class="form-control mb-3" readonly value="Hasil: <?php echo $hasil; ?>">
                    <?php endif; ?>
                </form>
            </div>
        </div>
    </div>
</body>
</html>