<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register Pesbuk</title>

    <link rel="stylesheet" href="<?php echo base_url('assets/')?>css/bootstrap.min.css" />
</head>
<body class="bg-light">

<div class="container">
    <div class="row">
        <div class="col-md-6">

        <p>&larr; <a href="<?php echo base_url('');?>">Home</a>

        <h4>Bergabunglah bersama ribuan orang lainnya...</h4>
        <p>Sudah punya akun? <a href="<?php echo base_url('index.php/login')?>">Login di sini</a></p>

        <form action="<?php echo base_url('index.php/register/addUser')?>" method="POST">

            <div class="form-group">
                <label for="name">Nama Lengkap</label>
                <input class="form-control" type="text" name="name" placeholder="Nama kamu" />
            </div>

            <div class="form-group">
                <label for="username">Username</label>
                <input class="form-control" type="text" name="username" placeholder="Username" />
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input class="form-control" type="email" name="email" placeholder="Alamat Email" />
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input class="form-control" type="password" name="password" placeholder="Password" />
            </div>

            <input type="submit" class="btn btn-success btn-block" name="register" value="Daftar" />

        </form>
            
        </div>

        <div class="col-md-6">
            <img class="img img-responsive" src="<?php echo base_url('assets/')?>img/connect.png" />
        </div>

    </div>
</div>

</body>
</html>