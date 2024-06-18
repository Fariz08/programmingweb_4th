<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Konversi nilai PHP</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    body {
      background-color: darkseagreen;
    }
    .card {
      margin-top: 150px;
      padding: 30px;
    }
  </style>
</head>
<body>

<div class="container mt-5">
  <div class="card mx-auto" style="width: 30rem;">
    <div class="card-body p-4">
      <h2 class="card-title text-center font-weight-bold">Konversi Nilai</h2>
      <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <div class="form-group">
          <label for="numeric_grade" class="font-weight-bold">Nilai Angka:</label>
          <input type="number" class="form-control" id="numeric_grade" name="numeric_grade" min="0" max="100" required>
        </div>
        <div class="form-group">
          <label for="letter_grade" class="font-weight-bold">Nilai Huruf:</label>
          <input type="text" class="form-control" id="letter_grade" name="letter_grade" readonly>
        </div>
        <button type="submit" class="btn btn-primary btn-block rounded-lg">Konversi</button>
      </form>
    </div>
  </div>
</div>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numeric_grade = $_POST["numeric_grade"];
    $letter_grade = '';

    if ($numeric_grade >= 86 && $numeric_grade <= 100) {
        $letter_grade = 'A';
    } elseif ($numeric_grade >= 80 && $numeric_grade <= 85) {
        $letter_grade = 'A-';
    } elseif ($numeric_grade >= 75 && $numeric_grade <= 79) {
        $letter_grade = 'B+';
    } elseif ($numeric_grade >= 70 && $numeric_grade <= 74) {
        $letter_grade = 'B';
    } elseif ($numeric_grade >= 66 && $numeric_grade <= 69) {
        $letter_grade = 'B-';
    } elseif ($numeric_grade >= 61 && $numeric_grade <= 65) {
        $letter_grade = 'C+';
    } elseif ($numeric_grade >= 56 && $numeric_grade <= 60) {
        $letter_grade = 'C';
    } elseif ($numeric_grade >= 41 && $numeric_grade <= 55) {
        $letter_grade = 'D';
    } elseif ($numeric_grade >= 0 && $numeric_grade <= 40) {
        $letter_grade = 'E';
    }

    echo '<script>document.getElementById("letter_grade").value = "'.$letter_grade.'";</script>';
}
?>

</body>
</html>