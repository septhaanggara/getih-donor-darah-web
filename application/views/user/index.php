<style>
  /* Make the image fully responsive */
  *{
  margin: 0;
  padding: 0;
}
#home{
  height : 1800px;
  width : 100%;
  float: center;
  background: white;
  overflow: hidden;
  padding-top: 0px;
}
img.buletan0{
  position: relative;
  top: 40px;
  left: 655px;
}
#home h1{
  text-align: center;
  padding-top: 50px;
}
#home h3{
  position: relative;
  padding-left: 30px;
  padding-top: 10px;
}
#home p{
  position: relative;
  padding-left: 30px;
  padding-top: 10px;
}
/*-- Testimonials --*/
.testi {
  
    background-image: url("./assets/img/testi3.png")!important;
    background-attachment: fixed;
    background-repeat: no-repeat;
    background-size: cover;
    height: 500px;

}
.testimonials blockquote {
    background: #fff none repeat scroll 0 0;
    border: medium none;
    color: black;
    display: block;
    font-size: 14px;
    padding: 30px 30px;
    position: relative;
}
blockquote span.fa {
    color: black;
}
.testimonials .carousel-info img {
    border-radius: 150px !important;
    height: 80px;
    width: 80px;
}
.testimonials .carousel-info {
    overflow: hidden;
}
.testimonials .carousel-info img {
    margin-right: 15px;
}
.testimonials .carousel-info span {
    display: block;
}
.testimonials span.testimonials-name {
    color: black;
    letter-spacing: 1px;
    font-size: 20px;
    font-weight: 500;
    margin: 15px 0 0px;
}
.testimonials span.testimonials-post {
    color: red;
    font-size: 14px;
    letter-spacing: 1px;
}
/*-- //testimonials --*/

  .carousel-inner img {
      margin-bottom: 10px;
      margin-top:10px;
  }
  </style>
</head>
<body>
<div id="home">
		<h1>Selamat Datang, User!</h1>
<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?= base_url ("./assets/img/userh/syarat donor darah.png")  ?>" alt="gabolehdonor" width="1400" height="600">
    </div>
    <div class="carousel-item">
      <img src="<?= base_url ("./assets/img/userh/homepage imam.png")  ?>" alt="syaratdonor" width="1400" height="600">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<div class="row">
    <div class="col-md-12">
      <div class="about-tab">
        <ul class="nav nav-pills nav-justified" id="myTab" role="tablist">
          <li class="nav-item"><a class="nav-link active" href="#tab_a" data-toggle="tab">Our Mission</a></li>
          <li class="nav-item"><a class="nav-link" href="#tab_b" data-toggle="tab">Why Us?</a></li>
          <li class="nav-item"><a class="nav-link" href="#tab_c" data-toggle="tab">About Us</a></li>                
        </ul>
        <div class="tab-content">
          <div class="tab-pane fade show active" id="tab_a">
            <p>Misi kami adalah mengajak semua masyarakat Indonesia, terutama di daerah Bandung untuk melakukan donor darah. Mengedukasi bahwa dengan mendonor darah, kita akan mendapatkan keuntungan. Keuntungan terbesarnya adalah menolong orang yang membutuhkan.</p>
            <p>Dengan meningkatnya kesadaran masyarakat akan donor darah, maka stok darah akan terus meningkat. Dan, orang yang membutuhkan akan segera tertolong. Dengan begitu akan adanya sistem saling menguntungkan antara keduanya. </p>
          </div>
          <div class="tab-pane fade" id="tab_b">
            <p>Masih belum banyaknya informasi mengenai donor darah, menjadikan website kami sebagai sarana menyuarakan informasi mengenai cara dan pentingnya melakukan donor darah. Informasi yang diberikan akurat dan lengkap. Kerjasama dengan pihak lain, seperti PMI dan Rumah Sakit ternama di Bandung membuat website kami banyak digunakan.</p>
          </div>
          <div class="tab-pane fade" id="tab_c">
            <p>Getih adalah sebuah website yang menyediakan informasi mengenasi donor darah. Arti getih dalam Bahasa Indonesia adalah darah. Kata ini diambil karena kami, sebagai constructor web merupakan mahasiswa yang berasal dari Suku Sunda. Web kami melayani proses donor darah dan juga ikut serta menyuarakan pentingnya melakukan donor darah bagi kesehatan kita dan orang yang membutuhkan.</p>
          </div>
        </div><!-- tab content -->
      </div>
    </div><!-- end col -->
  </div><!-- end row -->
  <!-- Testimonials -->
  <section class="testi py-5">
    <div class="container py-md-3">
      <h3 class="heading text-light mb-5" style="color: black"> <B>Testimonials</B></h3>
      <div class="row">
        <div class="col-lg-4 col-md-6">
          <div class="testimonials">
            <div class="active item">
              <blockquote><p><span class="fa mr-2 fa-quote-left"></span>Saya merekomendasikan website ini untuk Anda yang ingin mendonorkan darah!</p></blockquote>
              <div class="carousel-info">
                <img alt="" src="<?= base_url ("./assets/img/testi/d1.jpg")  ?>" class="pull-left">
                <div class="pull-left">
                  <span class="testimonials-name">Dr. Tirta</span>
                  <span class="testimonials-post">Dokter Umum</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-md-0 mt-4">
          <div class="testimonials">
            <div class="active item">
            <blockquote><p><span class="fa mr-2 fa-quote-left"></span>Donor darah dari anda akan banyak menyelamatkan nyawa anak-anak yang membutuhkan</p></blockquote>
            <div class="carousel-info">
              <img alt="" src="<?= base_url ("./assets/img/testi/d2.jpg")  ?>" class="pull-left">
              <div class="pull-left">
                <span class="testimonials-name">Dr. Sins</span>
                <span class="testimonials-post">Dokter Spesialis Anak</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mt-lg-0 mt-4">
        <div class="testimonials">
          <div class="active item">
            <blockquote><p><span class="fa mr-2 fa-quote-left"></span> Sangat membantu saya dan orang yang membutuhkan</p></blockquote>
            <div class="carousel-info">
              <img alt="" src="<?= base_url ("./assets/img/testi/d3.jpg")  ?>" class="pull-left">
              <div class="pull-left">
                <span class="testimonials-name">Asha</span>
                <span class="testimonials-post">Suster lulusan Harvard Univeristy</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<div style="margin-bottom: 50px;"></div>
<!-- //Testimonials -->
