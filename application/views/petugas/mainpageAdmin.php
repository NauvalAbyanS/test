<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/navbar.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/button.css">

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title>Halaman utama admin</title>

</head>
<body>
<?php include 'application/views/include/navbar.php'; ?>
    <div class="centext"> 
      <h1> Anda login sebagai admin </h1>
      <h3> Apa yang ingin anda lakukan </h3>
    </div>

<div class="btn">
    <button type="button" class="button1"> Transaksi pembayaran</button>
    <button type="button" class="button2"> History pembayaran</button>
    <button type="button" class="button3"> Edit Data</button>
    <button type="button" class="button4"> Laporan</button>
</div>
</body>
</html>