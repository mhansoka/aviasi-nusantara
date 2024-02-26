<!DOCTYPE html>
<html>
  <head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aviasi Nusantara</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="bootstrap/css/dataTables.bootstrap.min.css" rel="stylesheet">
		<link href="bootstrap/css/styles.css" rel="stylesheet">
		<style>
      body {
        padding-top: 60px;
      }
	  .jumbotron {
            background-image: url('images/takeoff.jpg'); /* Ganti 'path/to/your/image.jpg' dengan path ke gambar Anda */
            background-size: 100% ;
            background-position: center;
            color: #fff; /* Warna teks yang kontras dengan gambar latar belakang */
			text-align: center; /* Membuat teks menjadi berada di tengah */
		}
		.navbar {
            border-bottom: 1px solid #ddd; /* Warna dan lebar garis dapat disesuaikan */
        }
        .underlined {
            border-bottom: 2px solid #000; /* Warna garis bawah dan ketebalan dapat disesuaikan */
            padding-bottom: 5px; /* Ruang di antara teks dan garis bawah */
            display: inline-block; /* Agar garis bawah hanya menutupi lebar teks */
        }
		</style>
  </head>
  <body>
    
	<!-- Awal script Navbar -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary" id="scrollspy">
      <div class="container ">
        <div class="navbar-header fixed-top">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle Nav</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Aviasi Nusantara</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
                        <li class="active">
							<a href="index.php"><span class="glyphicon glyphicon-home"></span> Home <span class="sr-only">(current)</span></a>
		                </li>
                        <li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-camera"></span> Plane Spotter <span class="caret"></span>
							<ul class="dropdown-menu">
								<li><a href="komunitas.php">Komunitas</a></li>
								<li><a href="galeri.php">Galeri</a></li>
							</ul>
						</li>
                        <li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-plane"></span>Flight Sim <span class="caret"></span>
						</a>
							<ul class="dropdown-menu">
								<li><a href="fs2004.php">FS2004</a></li>
								<li><a href="fsx.php">FSX</a></li>
								<li><a href="fs2020.php">FS2020</a></li>
							</ul>
						</li>
                        <li>
							<a href="about.php"><span class="glyphicon glyphicon-font"></span>bout</a>
						</li>
						
					
             <li>
							<a href="berita.php"><span class="glyphicon glyphicon-picture"></span> Berita</a>
						</li>
            <li>
            <li>
							<a href="login.php"><span class="glyphicon glyphicon-lock"></span> Login</a>
						</li>
          </ul>
        </div>
      </div>
    </nav><!-- Akhir script Navbar -->