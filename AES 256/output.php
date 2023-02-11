
<?php 
   function dec($plaintext) {
    $iv="1234567890111213";
    $algo="aes-256-cbc";
      $kunci="#Aplikasi SIAK";
    $chipertext=openssl_decrypt($plaintext,$algo,$kunci,$option=0,$iv);
    return $chipertext;
  } 
function enc($plaintext) {
      $iv="1234567890111213";
      $algo="aes-256-cbc";
      $kunci="#Aplikasi SIAK";
      $chipertext=openssl_encrypt($plaintext,$algo,$kunci,$option=0,$iv);
      return $chipertext;
  }
// menangkap data nama dengan method GET
$nama = enc($_GET['nama']);
// menangkap data usia dengan method GET
$alamat =enc($_GET['alamat']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Aplikasi Enkripsi </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <center>  <h2>Aplikasi Enkripsi AES 256 Mode CBC</h2></center>

  
  <div class="table-responsive">
    <table class="table table-bordered" style="text-align: center;">
      <thead>
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>Alamat</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><?php @$nmr++;echo $nmr;?>.</td>
          <td><?php echo dec($nama);?></td>
          <td><?php echo dec($alamat);?></td>
        </tr>
        <tr>
          <td>Hasil Enkripsi</td>
          <td><?php echo enc($nama);?></td>
          <td><?php echo enc($alamat);?></td>
        </tr>
      </thead>
      <tbody>
        
      </tbody>
    </table>
  </div>
</div>

</body>
</html>
