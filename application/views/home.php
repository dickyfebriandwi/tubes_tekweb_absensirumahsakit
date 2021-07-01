<!DOCTYPE html>
<html lang="en">
<head>
<title>Home</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
    <div class="navbar navbar-expand bg-dark navbar-dark">
    <a class="navbar-brand" href="#">RS MITRA CINTA</a>
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="#">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">DATA PEGAWAI</a>
        </li>
        <li>
            <a class="nav-link" href="<?php echo site_url('home/logout');?>">Log Out</a>
        </li>
    </ul>
    </div>
    <br>
    <div class="container-fluid">
    <div class="jumbotron text-center">
        Welcome <?php echo $this->session->userdata('username'); ?>!
    <br>
    </div>
    </div>
</body>
</html>