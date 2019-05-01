<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Profile</title>

    <link rel="stylesheet" href="<?php echo base_url('assets/')?>css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<header>
<!-- Blue with white text -->
<div class="container mt-5">
<nav class="navbar-light" style="background-color: #e3f2fd;">
<!--<ul class="nav justify-content-end">-->
<ul class="nav">
<li class="nav-item">
      <h4 class="nav-link">Pesbuk</h4>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url('index.php/pesbuk/timeline')?>">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url('index.php/pesbuk/profile')?>">My Profile</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Chatting</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Friends</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url('index.php/login/logout')?>">Logout</a>
    </li>
  </ul>
</nav>
</div>
</header>