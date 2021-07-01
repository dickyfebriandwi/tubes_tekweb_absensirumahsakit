<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Update Akun</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
<style>
    body {
       background: #FAEBD7 ;
       background-size: cover;
       background-position: center;
       background-repeat: no-repeat;
       background-attachment: fixed;
       font-family: sans-serif;
     } 
     .login-page h2 {
       text-align: center;
       color: white;
       font-size: 25px;
       font-family: sans-serif;
       letter-spacing: 3px;
       padding-top: 0;
     }
    .box-login label {
        margin-top: -60px;
       font-size: 15px;
       color: white;
    }
    .btn-login {
       margin-top: 5px;
       margin-left: 0px;
       background: none;
       border: 1px solid white;
       width: 100%;
       padding: 10px;
       color: white;
       font-size: 15px;
       letter-spacing: 3px;
       cursor: pointer;
    }
     .btn-login:hover{
       background: rgba(12, 30, 15, 0.5);
     }
    .login-page {
        position: fixed;
        top: 40%;
        left: 43%;
        transform: translate(-30%, -40%);
        background: rgba(4, 29, 23, 0.5);
        padding: 35px;
        width: 600px;
        box-shadow: 0px 0px 25px 10px black;
        border-radius: 15px;
    }
    .form-control{
        font-size: 18px;
        font-family: sans-serif;
        margin-bottom: -20px;
    }
</style>
    </head>
<body>
    <div class="login-page">
    <h2>Update Akun</h2>
    <form action="<?php echo site_url('Home/prosesUpdateAdmin/'.$akun->id);?>" method="post">
        <div class="box-login">
        <label>Username</label>
        <input type="text" name="user" class="form-control" value="<?php echo $akun->username; ?>"><br>
        <label>Password</label>
        <input type="text" name="pass" class="form-control" value="<?php echo $akun->password; ?>"><br>
        <label>Nama</label>
        <input type="text" name="nama" class="form-control" value="<?php echo $akun->nama; ?>"><br>
        <label>Alamat</label>
        <input type="text" name="alamat" class="form-control" value="<?php echo $akun->alamat; ?>"><br>
        <label>Nomor Telepon</label>
        <input type="text" name="no_tlp" class="form-control" value="<?php echo $akun->no_tlp; ?>"><br>
        <label>Jabatan</label>
        <input type="text" name="jabatan" class="form-control" value="<?php echo $akun->jabatan; ?>"><br>
        <label>Tipe Akun</label>
        <select name="tipe_akun">
            <?php
            if($akun->tipe_akun=="admin"){
                echo "<option selected value='admin'>Admin</option>";
                echo "<option value='pegawai'>Pegawai</option>";
            }else{
                echo "<option value='admin'>Admin</option>";
                echo "<option  selected value='pegawai'>Pegawai</option>";
            }
            ?>
        </select>
        </div>
        <input type="submit" value="Ubah" class="btn-login">
    </form>
</body>
</html>