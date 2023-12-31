<?php
  
require_once('allFunctions.php');


$data = $_GET['data'];
$search = searchMembers($data);

// echo json_encode($search);

?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Invitation &mdash; TuK INDONESIA</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="TuK INDONESIA Invitation" />
	<meta name="keywords" content="TuK INDONESIA Invitation" />
	<meta name="author" content="Suryo Galih Kencana Harianja" />
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

  <link href="https://fonts.cdnfonts.com/css/honresd" rel="stylesheet">
  
	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">
  
	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
  
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

  <link rel="stylesheet" type="text/css" href="https://fonts.cdnfonts.com/css/roboto-condensed" />

	</head>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
	<nav class="fh5co-nav" role="navigation">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 text-center mb-5">
					<div id="fh5co-logo"><a href="index.html"><img src="images/logo.png" width="240px"></a></div>
				</div>
			</div>
			
		</div>
	</nav>
	<header id="fh5co-header" class="fh5co-cover" role="banner" style="background-image:url(images/bg-home.gif);" data-stellar-background-ratio="0.8">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box fadeIn animated-slow">
							<h2 class="animate-box" style="margin-bottom:0px;">Yth.</h2>
							<h1 id="nama" class="animate-box">Bapak / Ibu</h1>
							<h2 id="institusi" class="animate-box"><span id="jabatan"><span> <span id="institusi">Komunitas / Institusi<span></h2>
							<div class="simply-countdown simply-countdown-one"></div>
							<p class="animate-box"><a href="#fh5co-couple" class="btn btn-default btn-sm" id="startPage">Buka Undangan</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<div id="fh5co-couple" class="fh5co-cover" role="banner" style="background-image:url(images/white.jpg);height: 100vh;" data-stellar-background-ratio="0.8">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center fh5co-heading animate-box">
					<p id="panggilan" class="animate-box ">Dengan berbahagia kami mengundang Bapak / Ibu untuk hadir dalam :</p>
					<h3 class="animate-box">Diseminasi hasil penelitian dalam bentuk seni dan budaya</h3>
          <img src="images/poster.png" alt="" style="width: 40vh; height: auto;"><br/><br/>
					<h2 class="animate-box special-h2">“Melihat yang tak terlihat mendengar yang tak terdengar”</h2>
					<h2 class="animate-box special-h2">Dua puluh lima taipan<br/>Keserakahan atas penguasaan sawit dan hutan Indonesia</h2>
				</div>
			</div>
		</div>
	</div>

	<div id="fh5co-event" class="fh5co-cover" style="background-image:url(images/bg-home.gif); height: 100vh;" data-stellar-background-ratio="0.8">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
					<h2>Catat Ketentuan</h2>
				</div>
			</div>
			<div class="row">
				<div class="display-t">
					<div class="display-tc">
						<div class="col-md-12">
							<div class="col-md-4 col-sm-12 text-center">
								<div class="event-wrap animate-box border-danger">
									<h3>Tanggal</h3>
									<div class="event-col">
										<i class="icon-clock"></i>
										<span>13.30 WIB</span>
										<span>17.00 WIB</span>
									</div>
									<div class="event-col">
										<i class="icon-calendar"></i>
										<span>Jumat</span>
										<span>13 Oktober 2023</span>
									</div>
									<p>Diharapkan peserta datang 30 menit sebelum acara dilaksanakan untuk menghindari antrian dan pengisian data kehadiran</p>
								</div>
							</div>
							<div class="col-md-4 col-sm-12 text-center">
								<div class="event-wrap animate-box">
									<h3>Tempat</h3>
									<div class="event-col">
										<i class="icon-location2"></i>
										<span>Teater</span>
										<span>Salihara</span>
									</div>
									<div class="event-col">
										<i class="icon-map"></i>
										<span>Indoor</span>
										<span>Room</span>
									</div>
									<p>Jl. Salihara No.16, RT.11/RW.3, Ps. Minggu, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12520</p><br/>
								</div>
							</div>
							<div class="col-md-4 col-sm-12 text-center">
								<div class="event-wrap animate-box">
									<h3>Dresscode</h3>
									<div class="event-col">
										<i class="icon-user"></i>
										<span>Busana</span>
										<span>Hitam</span>
									</div>
									<div class="event-col">
										<i class="icon-users"></i>
										<span>Formal</span>
										<span>Rapi</span>
									</div>
									<p>Mohon untuk menggunakan pakaian formal berwarna hitam saat datang dan mengikuti acara / event</p><br/>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="fh5co-couple-story">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
					<h2>Rundown Acara</h2>
          <p>Pameran foto, pembacaan puisi, berdongeng, bermusik, penuturan hasil studi dan pantomim.
            Kegiatan ini diselenggarakan oleh TuK INDONESIA. Menghadirkan sejumlah seniman yang memiliki cita-cita sama yaitu mendorong terwujudnya hak konstitusional rakyat menuju keadilan, kesejahteraan, dan jatidiri bangsa Indonesia.
            </p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 col-md-offset-0">
					<ul class="timeline animate-box">
						<li class="animate-box">
							<div class="timeline-badge" style="background-image:url(images/tuk-icon.png);"></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h3 class="timeline-title">Registrasi</h3>
									<span class="date">13.00 WIB - 13.30 WIB</span>
								</div>
								<div class="timeline-body">
									<p>Semua Peserta dan Undangan dipersilakan melakukan registrasi terlebih dahulu</p>
								</div>
							</div>
						</li>
						<li class="timeline-inverted animate-box">
							<div class="timeline-badge" style="background-image:url(images/tuk-icon.png);"></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h3 class="timeline-title">Pembukaan</h3>
									<span class="date">13.30 WIB - 14.00 WIB</span>
								</div>
								<div class="timeline-body">
									<p>Peserta dan Undangan dipersilakan memasuki ruangan. Dibuka dengan Indonesia Raya 3 Stanza</p>
								</div>
							</div>
						</li>
						<li class="animate-box">
							<div class="timeline-badge" style="background-image:url(images/bagus-dwi-danto.jpg);"></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h3 class="timeline-title">Pertunjukan musik</h3>
									<span class="date">14.00 WIB - 14.15 WIB</span>
								</div>
								<div class="timeline-body">
									<p>Pertunjukan musik oleh Bagus Dwi Danto : </p>
								</div>
							</div>
						</li>
            <li class="animate-box timeline-inverted">
							<div class="timeline-badge" style="background-image:url(images/peri-sandi.jpg);"></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h3 class="timeline-title">Puisi</h3>
									<span class="date">14.15 WIB - 14.30 WIB</span>
								</div>
								<div class="timeline-body">
									<p>Indahnya puisi bersama Peri Sandi</p>
								</div>
							</div>
						</li>
						<li class="animate-box">
							<div class="timeline-badge" style="background-image:url(images/pmtoh.png);"></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h3 class="timeline-title">Dongeng</h3>
									<span class="date">14.30 WIB - 15.00 WIB</span>
								</div>
								<div class="timeline-body">
									<p>Dongeng bersama PM Toh</p>
								</div>
							</div>
						</li>
						<li class="animate-box timeline-inverted">
							<div class="timeline-badge" style="background-image:url(images/peri-sandi.jpg);"></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h3 class="timeline-title">Puisi</h3>
									<span class="date">15.00 WIB - 15.15 WIB</span>
								</div>
								<div class="timeline-body">
									<p>Indahnya puisi bersama Peri Sandi</p>
								</div>
							</div>
						</li>
						<li class="animate-box">
							<div class="timeline-badge" style="background-image:url(images/linda-rosalina.jpeg);"></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h3 class="timeline-title">Penuturan hasil studi & Pantomime</h3>
									<span class="date">15.15 WIB - 15.45 WIB</span>
								</div>
								<div class="timeline-body">
									<p>Penuturan hasil studi 25 Taipan oleh Direktur Eksekutif Tuk INDONESIA Linda Rosalina dan Pantomime bersama Jempling Mime Studio</p>
								</div>
							</div>
						</li>
            <li class="animate-box timeline-inverted">
							<div class="timeline-badge" style="background-image:url(images/bagus-dwi-danto.jpg);"></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h3 class="timeline-title">Pertunjukan musik</h3>
									<span class="date">15.45 WIB - 16.00 WIB</span>
								</div>
								<div class="timeline-body">
									<p>Pertunjukan musik oleh Bagus Dwi Danto : </p>
								</div>
							</div>
						</li>
			    </ul>
				</div>
			</div>
		</div>
	</div>

	<div id="fh5co-gallery" class="fh5co-section-gray">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
					<span>Media</span>
					<h2 style="padding-top: 10px;">Galeri Foto</h2>
				</div>
			</div>
			<div class="row row-bottom-padded-md">
				<div class="col-md-12">
					<ul id="fh5co-gallery-list">
						
					<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(); "> 
						<a href="#g">
							<div class="case-studies-summary">
								<span>Photos</span>
								<h2>Galeri Satu</h2>
							</div>
						</a>
					</li>
					<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(); ">
						<a href="#" class="color-2">
							<div class="case-studies-summary">
								<span>Photos</span>
								<h2>Galeri Dua</h2>
							</div>
						</a>
					</li>


					<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(); ">
						<a href="#" class="color-3">
							<div class="case-studies-summary">
								<span>Photos</span>
								<h2>Galeri Tiga</h2>
							</div>
						</a>
					</li>
					</ul>		
				</div>
			</div>
		</div>
	</div>
	<div id="fh5co-started" class="fh5co-bg" style="background-image:url(images/bg-home.gif);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Apakah Anda hadir ?</h2>
					<p>Silakan isi nama, email dan nomor telepon pada form</p>
				</div>
			</div>
			<div class="row animate-box">
				<div class="col-md-12">
					<form class="form-inline" action="https://tuk.us14.list-manage.com/subscribe/post" method="POST">
						<div class="col-md-6">
							<div class="form-group">
                <input type="hidden" name="u" value="c29f5a15dfcb0f8b0923c7434">
                <input type="hidden" name="id" value="af3a89140e">
								<select class="form-control" id="panggilan_form" name="MERGE5">
                  <option value="Bapak">Bapak</option>
                  <option value="Ibu">Ibu</option>
                </select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="nama" class="sr-only">Nama Lengkap</label>
								<input type="string" class="form-control" id="nama_form" name="MERGE1" placeholder="Nama">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="email_form" class="sr-only">Email</label>
								<input type="email" class="form-control" id="email_form" name="MERGE0" placeholder="Email">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="telepon_form" class="sr-only">Nomor Telepon</label>
								<input type="phone" class="form-control" id="telepon_form" name="MERGE2" placeholder="Nomor Telepon">
							</div>
						</div>
            <div class="col-md-6">
							<div class="form-group">
								<label for="jabatan_form" class="sr-only">Jabatan</label>
								<input type="string" class="form-control" id="jabatan_form" name="MERGE6" placeholder=" Jabatan Di Institusi / Komunitas">
							</div>
						</div>
            <div class="col-md-6">
							<div class="form-group">
								<label for="institusi_form" class="sr-only">Institusi</label>
								<input type="string" class="form-control" id="institusi_form" name="MERGE3" placeholder="Nama Institusi / Komunitas">
							</div>
						</div>
            <div class="col-md-12">
            <div class="form-group">
              <select class="form-control" id="hadir_form" name="MERGE4">
                <option value="Hadir">Hadir</option>
                <option value="Tidak Hadir">Tidak Hadir</option>
              </select>
            </div>
						</div>
						<div class="col-md-12">
              <br/>
							<button type="submit" class="btn btn-default btn-block">SIMPAN</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

  <div id="fh5co-couple-02" class="fh5co-bg animate-box">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center fh5co-heading animate-box"><br/><br/>
					<h2 class="animate-box special-h2">“Melihat yang tak terlihat mendengar yang tak terdengar”</h2>
					<h2 class="animate-box special-h2">Dua puluh lima taipan<br/>Keserakahan atas penguasaan sawit dan hutan Indonesia</h2><br/><br/>
					<div class="text-wrapper">
						<img src="images/poster.png" alt="" class="img-wrapper">
						<p>Sebuah negara yang penuh dengan sejumlah potensi sumber daya alam (SDA) adalah Indonesia. Sejak memilih untuk merdeka dan mandiri, negara Republik Indonesia memiliki janji dan tujuan besar bersama yaitu menghadirkan keadilan bagi seluruh rakyat Indonesia. Oleh karena itu, semestinya dan selayaknya akses atas sumber daya alam bisa diperoleh, dan hasilnya bisa dinikmati oleh seluruh rakyat tanpa terkecuali. </p>
						<p>Namun apa yang terjadi? ketimpangan dan ekspansi penguasaan lahan terjadi dan terus berlanjut hingga kini. Ketimpangan dan ekspansi ini banyak menghadirkan masalah, utamanya di tingkat tapak (pedesaan). Masalah teritorialisasi ruang hidup masyarakat yang berujung pada masalah konflik agraria antara masyarakat dengan perusahaan besar. Masalah dari konsekuensi monokulturisasi sawit dan hutan tanaman industri terkait isu hilangnya keanekaragaman hayati yang berujung pada deforestasi dan degradasi hutan.</p>
						<p>Masalah-masalah sosial dan lingkungan yang terjadi secara berulang merupakan “air mata (masalah hilir)” sebagai akibat dari bekerjanya “mata air (modal kapital)” di hulu. Oleh karena itu, jika masalah sosial-lingkungan adalah akibat, maka modal (kapital) adalah sebab. Jika mata air yang “tercemar” tidak dihentikan, maka rakyat dan lingkungan akan terus tergenang dengan air mata.</p>
						<p>Dalam laporan terbaru TuK INDONESIA 2023, sebanyak 25 taipan mengendalikan lahan perkebunan sawit dan pulp dan kertas di Indonesia. Para taipan ini menguasai lebih dari 3,9 juta hektare lahan sawit di Indonesia atau setara dengan dua kali luas provinsi Bengkulu di Sumatera. Luas lahan yang dikendalikan oleh taipan ini kemungkinan lebih tinggi dari yang berhasil diidentifikasi. Sebab, tidak semua luas lahannya mereka ungkap secara terbuka. Para taipan juga sangat mungkin menyembunyikan kepemilikan perusahaan melalui struktur bayangan untuk menghindari pajak, menyembunyikan kekayaan mereka, menghindari persyaratan sertifikasi, maupun alasan-alasan lainnya.</p>
						<p>Para taipan ini bekerja dengan modal (kapital) yang difasilitasi oleh bank dan investor sebagai salah satu faktor produksi. Sementara para taipan mengendalikan proses ekspansi, suntikan dana dari bank dan investor institusional memberikan dorongan tambahan untuk mempercepat ekspansi mereka. Sinar Mas, Royal Golden Eagle, dan Salim adalah para taipan yang menerima kredit berupa pinjaman dan penjaminan dengan nilai tertinggi selama periode 2017 hingga September 2022 untuk perkebunan sawit dan pulp dan kertas. Secara berurutan besaran kredit yang disalurkan kepada Sinar Mas Group 25,5 miliar USD, disusul oleh Royal Golden Eagle Group 7,3 miliar USD, dan Salim Group 3,4 miliar USD.</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<footer id="fh5co-footer" role="contentinfo" style="background-color: black;">
		<div class="container">

			<div class="row copyright">
				<div class="col-md-12 text-center">
					<p>
						<small class="block">&copy; 2023. All Rights Reserved.</small> 
						<small class="block">Designed by <a href="https://www.tuk.or.id/" target="_blank">TuK INDONESIA</a> Author oleh: <a href="office@tuk.or.id" target="_blank">office@tuk.or.id</a></small>
					</p>
					<p>
						<ul class="fh5co-social-icons">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-linkedin"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
						</ul>
					</p>
				</div>
			</div>

		</div>
	</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>

  <audio id="audioID" autoplay="autoplay" loop="loop"> <source src="images/bebal.mp3"  type="audio/mp3"></audio>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>

	<!-- Stellar -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>

	<!-- // <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/0.0.1/prism.min.js"></script> -->
	<script src="js/simplyCountdown.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	<script>
    var d = new Date(new Date().getTime() + 200 * 120 * 120 * 2000);

    // default example
    simplyCountdown('.simply-countdown-one', {
        year: 2023,
        month: 10,
        day: 13
    });

    //jQuery example
    $('#simply-countdown-losange').simplyCountdown({
        year: d.getFullYear(),
        month: d.getMonth() + 1,
        day: d.getDate(),
        enableUtc: false
    });
  </script>
  <script>
    var myaudio = document.getElementById("audioID");
    
    function play() { 
    return myaudio.play(); 
    };
    
    function stop() {
    return myaudio.pause(); 
    };

    $("#startPage").on('click', function () {
      play();
    });
    
    var dataUser = <?php echo json_encode($search); ?>;
    if(dataUser) {
      document.getElementById("nama").innerHTML = dataUser.merge_fields.NAMA;
      document.getElementById("jabatan").innerHTML = dataUser.merge_fields.JABATAN;
      document.getElementById("institusi").innerHTML = dataUser.merge_fields.INSTITUSI;
      document.getElementById("panggilan").innerHTML = "Dengan berbahagia kami mengundang " + dataUser.merge_fields.PANGGILAN + " untuk hadir dalam :";

      /** Form insert */
      document.getElementById("nama_form").value = dataUser.merge_fields.NAMA;
      document.getElementById("email_form").value = dataUser.email_address;
      document.getElementById("institusi_form").value = dataUser.merge_fields.INSTITUSI;
      document.getElementById("telepon_form").value = dataUser.merge_fields.TELEPON;
      document.querySelector("#hadir_form").value = dataUser.merge_fields.STATUS;
      document.querySelector("#panggilan_form").value = dataUser.merge_fields.PANGGILAN;
    }
  </script>


	</body>
</html>

