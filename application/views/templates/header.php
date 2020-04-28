<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <!-- MY CSS -->

    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/style.css">

    <title><?php echo $judul ?></title>
</head>

<body>

   <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="<?= base_url(''); ?>"><img src="<?= base_url('/assets/img/logo.png'); ?>" height="50" width="30"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?= base_url()?>">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url()?>pendonor">Daftar Pendonor</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url()?>stock">Stock Darah</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url()?>auth">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url()?>about">About Us</a>
      </li>
    </ul>
  </div>
</nav>

   
                   
                    
                   