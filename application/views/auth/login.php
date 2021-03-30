<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/login.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" 
      integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  <title>WEB SPP Login</title>
</head>
<body>

<div class="form"  action="<?php echo base_url('main/auth')?>" method="post" >
  <center> <h2> LOGIN PETUGAS</h2></center>
  <?php echo $this->session->flashdata('msg');?>
    <div class="left">
      <label> username </label>
    <input type="text"  class="inp" id="username" name="username" placeholder="username" >  
    <p></p>
  <label> Password </label>
<input type="password"  class="inp" id="password" name="password" placeholder="password"> 
  <p><center><button type="submit"class="btn btn-primary">Login</button></center></p>
    <p><a href="<?php echo base_url('main/index2')?>">Login Siswa!!! </a></p>
      </div>
    </div> 

</body>
</html>