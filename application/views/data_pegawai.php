<!DOCTYPE html>
<html lang="en">
<head>
<title>DATA PEGAWAI</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
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
    <table class="table" id="example" style="width: 85%" cellpadding="0" cellspacing="0">
        <thead>
        <tr>
            <th scope="col">NO</th>
            <th scope="col">Nama</th>
            <th scope="col">Alamat</th>
            <th scope="col">No Telepon</th>
            <th scope="col">Jabatan</th>
        </tr>
        </thead>
        <tbody>
        <?php
            foreach ($datapegawai->result() as $row) {
            echo "<tr>";
            echo "<td>$row->id</td>";
            echo "<td>$row->nama</td>";
            echo "<td>$row->alamat</td>";
            echo "<td>$row->no_tlp</td>";
            echo "<td>$row->jabatan</td>";
            echo "</tr>";
            }
        ?>
        </tbody>
        </table>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
        <script >
        $(document).ready(function() {
        $('#example').DataTable();
        } );
        </script>
    </div>
    </div>
</body>
</html>