<!DOCTYPE html>
<html lang="en">
<head>
<title>Catatan Masuk</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="http://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<style >
    .jumbotron{
    background-color: #FAEBD7;
}
    body {
       background: black ;
       background-size: cover;
       background-position: center;
       background-repeat: no-repeat;
       background-attachment: fixed;
       font-family: sans-serif;
     } 
     .table-striped>tbody>tr:nth-child(odd)>td, .table-striped>tbody>tr:nth-child(odd)>th {
        background-color:black;
        color: white;
    }
    .table-striped>thead>tr:nth-child(odd)>th {
        background-color: azure;
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
    <h1>Catatan Masuk</h1>
    <table id="example" class="table table-striped table-bordered"> 
        <thead>
        <tr>
            <th scope="col">NO</th>
            <th scope="col">Username</th>
            <th scope="col">Waktu Masuk</th>
        </tr>
        </thead>
        <tbody>
        <?php
            $i=1;
            foreach ($catatanmasuk->result() as $data) {
            echo "<tr>";
            echo "<td>$i</td>";
            echo "<td>$data->username</td>";
            echo "<td>$data->waktu_masuk</td>";
            echo "</tr>";
            $i=$i+1;
            }
        ?>
        </tbody>
        </table>
        <script >
        $(document).ready(function() {
            $('#example').DataTable();
        } );
        </script>
    </div>
    </div>
</body>
</html>