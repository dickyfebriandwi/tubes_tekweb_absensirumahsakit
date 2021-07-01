<!DOCTYPE html>
<html lang="en">
<head>
<title>About Us</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    body {
       margin: 0;
       padding: 0;
       background: #FAEBD7 ;
       background-size: cover;
       background-position: center;
       background-repeat: no-repeat;
       background-attachment: fixed;
       font-family: sans-serif;
     } 
     .jumbotron{
    background-color: black;
}
.user-detail h4{
    padding: 10px;
    border: 1px solid black;
    margin: 0px;
    margin:15px 0px 10px 0px;
    background-color: black;
    color: #FAEBD7;
}
.profile-badge h2, h3{
    margin-top: 10px;
    margin-bottom: : 10px;
    font-family: sans-serif;
    color: #FAEBD7;
}
</style>
</head>
<body>
    <div class="navbar navbar-expand bg-dark navbar-dark">
    <a class="navbar-brand" href="#">RS MITRA CINTA</a>
    <ul class="navbar-nav">
    <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('home/');?>">HOME</a>
        </li>
    </ul>
    </div>
    <br>
        <div class="container-fluid">
        <div class="jumbotron text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4 col-sm-6 col-xs-12 profile-badge">
                        <h2>About Us</h2>
                        <h3>Nama Anggota Kelompok</h3>
                        <div class="user-detail text-center">                            
                            <h4><i class="fa fa-user"></i>
                                Rahmat Muhamad Ramdani</h4>
                            <h4><i class="fa fa-user"></i>
                                Dicky Febrian Dwiputra</h4>
                            <h4><i class="fa fa-user"></i>
                                M. Dani Syaputra</h4>
                            <h4><i class="fa fa-user"></i>
                                Anissa Azhari</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>