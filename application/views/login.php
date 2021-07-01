<!DOCTYPE html>
<html lang="en">
<head>
<title>Login</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<style>
    .login-page {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
    }
</style>
</head>
<body class="login-page">
    <div class="card" style="width:300px">
    <div class="card-header text-center">Login</div>
    <div class="card-body">
    <form action="<?php echo site_url('home/login');?>" method="post">

    <label class="label">Username</label>
    <input type="text" class="form-control" name="username" required>

    <label class="label">Password</label>
    <input type="password" class="form-control" name="password" required>

    <br><br>
    <?php echo $this->session->userdata("error"); ?>
    <br>

    <input type="submit" class="btn btn-primary float-right" value="Login">
    </div>
    </div>
</body>
</html>