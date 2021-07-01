<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Update Akun</title>
        <style>
            label {
                display: inline-block;
                width: 100px;
            }
        </style>
    </head>
<body>
    <h1>Update Akun</h1>
    <form action="<?php echo site_url('Home/prosesUpdate/'.$akun->id);?>" method="post">
        <label>Username</label><input type="text" name="user" value="<?php echo $akun->username; ?>"><br>
        <label>Password</label><input type="text" name="pass" value="<?php echo $akun->password; ?>"><br>
        <label>Nama</label><input type="text" name="nama" value="<?php echo $akun->nama; ?>"><br>
        <label>Alamat</label><input type="text" name="alamat" value="<?php echo $akun->alamat; ?>"><br>
        <label>Nomor Telepon</label><input type="text" name="no_tlp" value="<?php echo $akun->no_tlp; ?>"><br>
        <label>Jabatan</label><input type="text" name="jabatan" value="<?php echo $akun->jabatan; ?>"><br>
        <input type="submit" value="Ubah">
    </form>
</body>
</html>