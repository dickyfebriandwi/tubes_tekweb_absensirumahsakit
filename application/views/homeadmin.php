<!DOCTYPE html>
<html lang="en">
<head>
<title>Home ADMIN</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<?php   
        $bantu = $this->session->userdata('id');
        $user = $this->session->userdata('username');
        $segments = ['home','updateadmin',$bantu];
    ?>
</head>
<body>
    <div class="navbar navbar-expand bg-dark navbar-dark">
    <a class="navbar-brand" href="#">RS MITRA CINTA</a>
    <ul class="navbar-nav">
    <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('home/');?>">HOME</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('home/datapegawaiadmin');?>">DATA PEGAWAI</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('home/bukacatatanadmin');?>">CATATAN MASUK</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('home/bukacatatankeluaradmin');?>">CATATAN KELUAR</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('home/daftar');?>">DAFTAR BARU</a>
        </li>
        <li>
            <a class="nav-link" href="<?php echo site_url('home/logout');?>">LOG OUT</a>
        </li>
        <li>
            <a class="nav-link" href="<?php echo site_url('home/about');?>">ABOUT US</a>
        </li>
    </ul>
    </div>
    <br>
    <div class="container-fluid">
    <div class="jumbotron text-center">
    <br>
    <h2>Profil</h2>
    Nama : <?php echo $this->session->userdata('nama'); ?>
    <br>
    Alamat : <?php echo $this->session->userdata('alamat'); ?>
    <br>
    Nomor Telepon : <?php echo $this->session->userdata('no_tlp'); ?>
    <br>
    Jabatan : <?php echo $this->session->userdata('jabatan'); ?>
    <br>

    <a href="<?php echo site_url($segments);?>">edit</a>
    <!-- absen masuk -->
    <form action="<?php echo site_url('Absen/prosesMasuk/'.$bantu);?>" method="post">
        <input type="hidden" name="nama" value="<?php echo $this->session->userdata('username');?>">
        <input type="hidden" name="masuk" id="" value="<?php echo date("d/m/Y h:i:s");?>">
        <input type="submit" value="Absen Masuk">
    </form>
    <!-- absen keluar -->
    <form action="<?php echo site_url('Absen/prosesKeluar/'.$bantu);?>" method="post">
        <input type="hidden" name="nama" value="<?php echo $this->session->userdata('username');?>">
        <input type="hidden" name="keluar" id="" value="<?php echo date("d/m/Y h:i:s");?>">
        <input type="submit" value="Absen Keluar">
    </form>

    </div>
    </div>
</body>
</html>