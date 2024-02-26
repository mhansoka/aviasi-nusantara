<!-- Awal script Slider/ Carousel -->
<div id="contoh-carousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#contoh-carousel" data-slide-to="0" class="active"></li>
        <li data-target="#contoh-carousel" data-slide-to="1"></li>
        <li data-target="#contoh-carousel" data-slide-to="2"></li>
      </ol>

      <div class="carousel-inner" role="listbox">
			<!-- Awal script Slider pertama -->
        <div class="item active">
          <img src="images/wrightbrother.jpg"  center alt="Berisi keterangan gambar">
          <div class="carousel-caption">
            <h1>Sejarah Pesawat</h1>
            <h4>Wright Brothers</h4>
            <p>Sejarah pesawat udara adalah kisah evolusi teknologi penerbangan, dari konsep awal hingga pengembangan pesawat modern</p>
            <a href="about.php" class="btn btn-danger">Read more</a>
          </div>
        </div><!-- Akhir script Slider pertama -->
				<!-- Awal script Slider kedua -->
        <div class="item">
          <img src="images/Planespotterhd.png" class="img-fluid" width=130%  alt="Berisi keterangan gambar">
          <div class="carousel-caption">
            <h1>Plane Spotter</h1>
            <h4>Komunitas Fotografer Aviasi Indonesia</h4>
            <p>Komunitas Fotografer Aviasi Indonesia(KFAI),Fotografer aviasi yang berburu objek pesawat terbang (plane spotting) atau plane-spotter. </p>
            <a href="komunitas.php" class="btn btn-danger">Baca Lebih Lanjut</a>
          </div>
        </div><!-- Akhir script Slider kedua -->
				<!-- Awal script Slider ketiga -->
        <div class="item">
          <img src="images/A380.jpg" width=100% alt="A380 british">
          <div class="carousel-caption">
            <h1>Flight Sim</h1>
            <h4>Ingin merasakan sensasi menjadi penerbangan? </h4>
            <p>Kamu bisa memainkan simulasi nya di PC dan Handphone</p>
            <a href="about.php" class="btn btn-danger">Baca Lebih Lanjut</a>
          </div>
        </div><!-- Akhir script Slider ketiga -->
    </div>
		<!-- Awal script Button Geser Kiri dan Kanan -->
    <a class="left carousel-control" href="#contoh-carousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
    </a>
		
    <a class="right carousel-control" href="#contoh-carousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
    </a><!-- Akhir script Button Geser Kiri dan Kanan -->
		
    </div><!-- Akhir script Slider/Carousel -->
		
		<!-- Awal Jumbotron -->
		<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
					<div class="jumbotron">
						<h2 class="text-primary">Aviasi Nusantara</h2>
						<p>Aviasi Nusantara adalah situs yang berkaitan dengan penerbangan khusus Indonesia. Di dalamnya, kami menyajikan seluruh informasi seputar penerbangan. </p>
						<p><a class="btn btn-info btn-lg" href="about.php"role="button"> Read More </a></p>
				</div>
      </div>
		</div>
		</div><!-- Akhir Jumbotron -->
		
		<!-- Awal Page -->
		<div class="container-fluid"->
		<!-- Awal Panel -->
		<div class="row">
			<div class="panel panel-default">
				<div class="panel-body">
				<h2 class="text-muted"><span class="glyphicon glyphicon-list"></span> Berita</h2>
			<?php
      include("koneksi.php");
      
      ?>
				<div class="row">
					<div class="col-md-3">
					<h3>A380 Mendarat di Bali Ngurah Rai</h3>
						<img src="images/A380E.jpeg" class="img-thumbnail img-responsive">
						<p>Pesawat Airbus A380-800 milik maskapai Emirates mendarat di Bandara Internasional I Gusti Ngurah Rai, Bali, pada Hari Kamis 1 juni 2023 pukul 16.35 WITA. Pesawat penumpang super jumbo itu berangkat dari Dubai, Uni Emirat Arab, dan baru pertama kali melakukan penerbangan ke Tanah Air.<br/><a class="btn btn-danger btn-xs" href="ruang-kelas.html"role="button">Selengkapnya</a></p>
					</div>
					<div class="col-md-3">
					<h3>787 Dreamliner QATAR Airways</h3>
						<img src="images/787.jpeg" class="img-thumbnail img-responsive">
						<p>Pada 15 Januari 2024, Qatar Airways membuka rute baru dari Doha ke Medan, dan sebaliknya. Keputusan ini memperluas jaringan penerbangan, memberikan peluang konektivitas antar kedua kota, dan memudahkan penumpang untuk terhubung ke destinasi internasional melalui Doha.<br/><a class="btn btn-info btn-xs" href="perpustakaan.php"role="button">Selengkapnya</a></p>
					</div>
					<div class="col-md-3">
					<h3>Insiden di Bandara Haneda </h3>
						<img src="images/Japan.jpeg" class="img-thumbnail img-responsive">
						<p>Pada suatu hari Selasa pukul 17:46 waktu setempat, sebuah pesawat Japan Airlines tipe Airbus A350-900 yang datang dari Sapporo bertabrakan dengan pesawat De Havilland Canada DHC-8 milik Japan Coast Guard.<br/><a class="btn btn-success btn-xs" href="laboratorium.php"role="button">Selengkapnya</a></p>
					</div>

				</div>
			
				</div>
      </div>
		</div><!-- Akhir Panel -->
		
      </div>
		</div><!-- Akhir Panel -->
		</div><!--  Akhir Page -->