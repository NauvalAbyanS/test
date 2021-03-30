<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if($this->session->userdata('akses')=='1'):?>
        <?php include 'views/petugas/mainpageAdmin.php'; ?>
    <?php elseif($this->session->userdata('akses')=='2'):?>
        <?php include 'views/petugas/mainpagePetugas.php'; ?>
    <?php else:?>
        <?php include 'views/siswa/mainpagesiswa.php'?>
  <?php endif;?>
</div><!-- /.navbar-collapse -->
</div><!-- /.container-fluid -->
</nav> 
</body>
</html>