<!DOCTYPE html>
<html lang="en">
<head>
<title>Login</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
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
     .avatar {
       font-size: 30px ;
       background: #FAEBD7;
       width: 50px;
       height: 50px;
       line-height: 50px;
       position: fixed;
       left: 50%;
       top: 0;
       transform: translate(-50%, -50%);
       text-align: center;
       border-radius: 50%;
     }
     .login-page h2 {
       text-align: center;
       color: white;
       font-size: 30px;
       font-family: sans-serif;
       letter-spacing: 3px;
       padding-top: 0;
     }
     .box-login i {
       font-size: 23px;
       color: white;
       padding: 5px 0;
     }
    .box-login label {
       font-size: 20px;
       color: white;
       padding: 5px 0;
     }
     .btn-login {
       margin-top: 30px;
       margin-left: 8px;
       background: none;
       border: 1px solid white;
       width: 92.5%;
       padding: 10px;
       color: white;
       font-size: 18px;
       letter-spacing: 3px;
       cursor: pointer;
       }
     .btn-login:hover{
       background: rgba(12, 30, 15, 0.5);
     }
    .login-page {
        position: fixed;
        top: 50%;
        left: 48%;
        transform: translate(-30%, -50%);
        background: rgba(4, 29, 23, 0.5);
        padding: 35px;
        width: 270px;
        box-shadow: 0px 0px 25px 10px black;
        border-radius: 15px;
    }
    .form-control{
        font-size: 18px;
        font-family: sans-serif;
    }
</style>
</head>
<body>
    <div class="login-page">
        <h2>Login</h2>
        <form action="<?php echo site_url('home/login');?>" method="post">
        <div class="avatar">
            <i class="fa fa-user"></i>
        </div>
        <div class="box-login">
            <i class="fas fa-envelope-open-text"></i>
            <label class="label">Username</label>
            <input type="text" class="form-control" name="username" Username placeholder="" required>
        </div>
        <div class="box-login">
            <i class="fas fa-lock"></i>
            <label class="label">Password</label>
            <input type="password" class="form-control" name="password" required>        
        </div>
        <?php echo $this->session->userdata("error"); ?>
        <input type="submit" class="btn-login" value="Login">
    </div>
</body>
</html>