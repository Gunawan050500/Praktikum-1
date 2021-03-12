<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pengisian Nilai</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <style>
        .form{
            padding-top: 50px;
        }
    </style>
</head>
<body>
<form class="form" method="GET" action="array_siswa.php">
  <div class="container">
  <div class="mb-3">
  <div class="form-group">
        <label>Nama</label>
        <input type="text" class="form-control" name="nama" required>
  </div>
  <div class="form-group">
        <label>NIM</label>
        <input type="text" class="form-control" name="nim" required>
  </div>
  <div class="form-group">
        <label>Nilai UTS</label>
        <input type="text" class="form-control" name="uts" required>
  </div>
  <div class="form-group">
        <label>Nilai UAS</label>
        <input type="text" class="form-control" name="uas" required>
  </div>
  <div class="form-group">
        <label>Nilai Tugas</label>
        <input type="text" class="form-control" name="tugas" required>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>
</body>
</html>
