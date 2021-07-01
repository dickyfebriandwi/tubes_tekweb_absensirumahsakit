<!DOCTYPE html>
<html lang="en">
<head>
<title>Home</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<?php   
        $bantu = $this->session->userdata('id');
        $user = $this->session->userdata('username');
        $segments = ['home','update',$bantu];
    ?>
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
.profile-badge img{
    height: 200px;
    width: 100%;
}
.profile-badge h2{
    margin-top: 10px;
    margin-bottom: : 10px;
    font-family: sans-serif;
    color: #FAEBD7;
}
.user-detail{
    background-color: antiquewhite;
    position: relative;
    padding:65px 0px 10px 0px;
    color:#8B8B89;
}
.user-detail h3, h4{
    padding: 10px;
    border: 1px solid black;
    margin: 0px;
    margin:15px 80px 10px 80px;
    background-color: black;
    color: #FAEBD7;
}
.user-detail a{
    background: none;
    border: 1px solid black;
    width: 92.5%;
    padding: 8px;
    color: black;
    font-size: 12px;
    letter-spacing: 3px;
    cursor: pointer;
    
}
.user-detail a:hover{
       background: rgba(12, 30, 15, 0.7);
}
.profile-pic{
    position: absolute;
    height:120px;
    width:120px;
    left: 50%;
    transform: translateX(-50%);
    top: 190px;
    z-index: 1001;
}
.profile-pic img{
    height: 100%;
    width: 100%;
    border-radius: 50%;
    box-shadow: 0px 0px 5px 0px #c1c1c1;
}
.container{
    font-family: sans-serif;
}
.jumbotron{
    background-color: black;
}
.profile-badge{
    border:1px solid #c1c1c1;
    padding:5px;
    position: relative;
}
.btn-absen{
       margin-top: 30px;
       margin-left: 8px;
       background: none;
       border: 1px solid white;
       width: 92.5%;
       padding: 10px;
       color: white;
       font-size: 15px;
       letter-spacing: 3px;
       cursor: pointer;
}
.btn-absen:hover{
       background: rgba(251, 235, 217, 0.7);
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
        <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('home/datapegawai');?>">DATA PEGAWAI</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('home/bukacatatan');?>">CATATAN MASUK</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('home/bukacatatankeluar');?>">CATATAN KELUAR</a>
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
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4 col-sm-6 col-xs-12 profile-badge">
                        <h2>PROFIL</h2>
                        <img src="<?php echo base_url('assets/image/rs.jpg');?>">
                        <div class="profile-pic">
                            <img src="<?php echo base_url('assets/image/foto.png');?>">
                        </div>
                        <div class="user-detail text-center">                            
                            <h3><i class="fa fa-address-card"></i>
                                <?php echo $this->session->userdata('nama'); ?></h3>
                            <h4><i class="fa fa-sitemap"></i>
                                <?php echo $this->session->userdata('jabatan'); ?></h4>
                            <h4><i class="fa fa-map-pin"></i>
                                <?php echo $this->session->userdata('alamat'); ?></h4>
                            <h4><i class="fa fa-mobile"></i>
                                <?php echo $this->session->userdata('no_tlp'); ?></h4>
                            <a href="<?php echo site_url($segments);?>">edit</a>
                        </div>
                        <div class="col-md-6">
                        <!-- absen masuk -->
                        <form action="<?php echo site_url('Absen/prosesMasuk/'.$bantu);?>" method="post">
                            <input type="hidden" name="nama" value="<?php echo $this->session->userdata('username');?>">
                            <input type="hidden" name="masuk" id="" value="<?php echo date("d/m/Y h:i:s");?>">
                            <input type="submit" value="Absen Masuk" class="btn-absen">
                        </form>
                        </div>
                        <div class="col-md-6">
                        <!-- absen keluar -->
                        <form action="<?php echo site_url('Absen/prosesKeluar/'.$bantu);?>" method="post">
                            <input type="hidden" name="nama" value="<?php echo $this->session->userdata('username');?>">
                            <input type="hidden" name="keluar" id="" value="<?php echo date("d/m/Y h:i:s");?>">
                            <input type="submit" value="Absen Keluar" class="btn-absen">
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>