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
    <h1>Daftar Akun</h1>
    <form action="<?php echo site_url('Home/prosesDaftar/');?>" method="post">
        <label>Username</label><input type="text" name="user" value=""><br>
        <label>Password</label><input type="text" name="pass" value=""><br>
        <label>Nama</label><input type="text" name="nama" value=""><br>
        <label>Alamat</label><input type="text" name="alamat" value=""><br>
        <label>Nomor Telepon</label><input type="text" name="no_tlp" value=""><br>
        <label>Jabatan</label><input type="text" name="jabatan" value=""><br>
        <label>Tipe Akun</label>
        <select name="tipe_akun">
            <option value="admin">Admin</option>
            <option selected value="pegawai">Pegawai</option>
        </select>
        <input type="submit" value="Daftar">
    </form>
</body>
</html>