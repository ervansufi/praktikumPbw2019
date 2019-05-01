<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Pesbuk</title>

    <link rel="stylesheet" href="<?php echo base_url('assets/')?>css/bootstrap.min.css" />
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">

        <p>&larr; <a href="<?php echo base_url();?>">Home</a>

        <h4>Masuk ke Pesbuk</h4>
        <p>Belum punya akun? <a href="<?php echo base_url('index.php/register')?>">Daftar di sini</a></p>
        <form action="<?php echo base_url('index.php/login/doLogin')?>" method="POST">

            <div class="form-group">
                <label for="username">Username</label>
                <input class="form-control" type="text" name="username" placeholder="Username atau email" />
            </div>


            <div class="form-group">
                <label for="password">Password</label>
                <input class="form-control" type="password" name="password" placeholder="Password" />
            </div>

            <input type="submit" class="btn btn-success btn-block" name="login" value="Masuk" />

        </form>
            
        </div>

    </div>
    <?php if (isset($error)){
                echo "<div style='color:red;'>$error</div>";
            } ?>
</div>
    
</body>
</html>