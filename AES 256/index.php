
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Aplikasi Enkripsi</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <center><h2>Aplikasi Enkripsi AES 256 Mode CBC</h2></center>
  <form action="output.php" method="get">
    <div class="mb-3 mt-3">
      <label for="nama">Nama:</label>
      <input type="nama" class="form-control" id="nama" placeholder="Enter nama" name="nama">
    </div>
    <div class="mb-3">
      <label for="alamat">Alamat:</label>
      <input type="text" class="form-control" id="alamat" placeholder="Enter Alamat" name="alamat">
    </div>
    <button type="submit">Kirim</button>
    
  </form>
</div>
</body>
</html>