<?php
include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Griya Intan Permai</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="js/jquery-1.11.3.min.js"></script>
  <script src="js/bootstrap.js"></script>

  <link rel="stylesheet" href="css/camera.css">
  <link rel="stylesheet" href="css/owl.carousel.css">
  <link rel="stylesheet" href="css/style.css">

  <script src="js/jquery-migrate-1.2.1.js"></script>

  <script src="js/superfish.js"></script>
  <script src="js/jquery.ui.totop.js"></script>


  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/owl.carousel.js"></script>
  <script src="js/camera.js"></script>
  <!--[if (gt IE 9)|!(IE)]><!-->

  <!--<![endif]-->

  <script>
   $(document).ready(function(){
     jQuery('#camera_wrap').camera({
      loader: false,
      pagination: false ,
      minHeight: '450',
      thumbnails: false,
      height: '48.375%',
      caption: true,
      navigation: true,
      fx: 'mosaic'
    });
     /*carousel*/
     var owl=$("#owl");
     owl.owlCarousel({
				items : 2, //10 items above 1000px browser width
				itemsDesktop : [995,2], //5 items between 1000px and 901px
				itemsDesktopSmall : [767, 2], // betweem 900px and 601px
				itemsTablet: [700, 2], //2 items between 600 and 0
				itemsMobile : [479, 1], // itemsMobile disabled - inherit from itemsTablet option
				navigation : true,
				pagination : false
      });
     $().UItoTop({ easingType: 'easeOutQuart' });
   });
 </script>



























 <style>
  body {
    font: 400 15px Lato, sans-serif;
    line-height: 1.8;
    color: #818181;
  }
  h2 {
    font-size: 24px;
    text-transform: uppercase;
    color: #303030;
    font-weight: 600;
    margin-bottom: 30px;
  }
  h4 {
    font-size: 19px;
    line-height: 1.375em;
    color: #303030;
    font-weight: 400;
    margin-bottom: 30px;
  }  
  .jumbotron {
    background-color: #f4511e;
    color: #fff;
    padding: 100px 25px;
    font-family: Montserrat, sans-serif;
  }
  .container-fluid {
    padding: 60px 50px;
  }
  .bg-grey {
    background-color: #f6f6f6;
  }
  .logo-small {
    color: #fff;
    font-size: 70px;
  }

  .thumbnail {
    padding: 0 0 15px 0;
    border: none;
    border-radius: 0;
  }
  .thumbnail img {
    width: 100%;
    height: 100%;
    margin-bottom: 10px;
  }

  .panel {
    border: 1px solid #002141; 
    border-radius:0 !important;
    transition: box-shadow 0.5s;
  }

  .panel-footer .btn:hover {
    border: 1px solid #002141;
    background-color: #fff !important;
    color: #002141;
  }
  .panel-heading {
    color: #fff !important;
    background-color: rgba(0,33,65, .5) !important;
    padding: 25px;
    border-bottom: 1px solid transparent;
    border-top-left-radius: 0px;
    border-top-right-radius: 0px;
    border-bottom-left-radius: 0px;
    border-bottom-right-radius: 0px;
  }
  .panel-footer {
    background-color: white !important;
  }
  .panel-footer h3 {
    font-size: 32px;
  }
  .panel-footer h4 {
    color: #aaa;
    font-size: 14px;
  }
  .panel-footer .btn {
    margin: 15px 0;
    background-color: #002141;
    color: #fff;
  }
  .navbar {
    margin-bottom: 0;
    background-color: #002141;
    z-index: 9999;
    border: 0;
    font-size: 12px !important;
    line-height: 1.42857143 !important;
    letter-spacing: 4px;
    border-radius: 0;

    font-family: Montserrat, sans-serif;
  }

  .navbar-nav li a:hover, .navbar-nav li.active a {
    color: #002141 !important;
    background-color: #fff !important;
  }
  .navbar-default .navbar-toggle {
    border-color: transparent;
    color: #fff !important;
  }
  footer .glyphicon {
    font-size: 20px;
    margin-bottom: 20px;
    color: #f4511e;
  }
  .slideanim {visibility:hidden;}
  .slide {
    animation-name: slide;
    -webkit-animation-name: slide;	
    animation-duration: 1s;	
    -webkit-animation-duration: 1s;
    visibility: visible;			
  }
  @keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }	
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
    .btn-lg {
      width: 100%;
      margin-bottom: 35px;
    }
  }
  @media screen and (max-width: 480px) {
    .logo {
      font-size: 150px;
    }
  }
</style>
</head>
<body id="myPage" class="page1" data-spy="scroll" data-target=".navbar" data-offset="60">-


 <!--<body class="page1" id="top">-->
 <!--==============================header=================================-->











 <header>
   <div class="container_12">
    <div class="grid_12">
     <div class="menu_block">

      <div class="clear"></div>
    </div>
  </div>
  <div class="grid_12">

  </div>
</div>
</header>
<div class="slider_wrapper">
 <div id="camera_wrap" class="">
  <div data-src="images/1.jpg">

  </div>
  <div data-src="images/2.jpg">

  </div>
  <div data-src="images/3.jpg">

  </div>
</div>
</div>



































<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <!-- Logo -->
      <a class="navbar-brand" href="#" style="color:white">Griya Intan Permai</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#site_plan">Site Plan</a></li>
        <li><a href="#testimoni">Testimoni</a></li>
        <li><a href="#foto_rumah">Foto Rumah</a></li>
        <li><a href="#pemesanan">Pemesanan</a></li>
      </ul>
    </div>
  </div>
</nav>



<!-- Container (About Section) -->
<div id="site_plan" class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
      <h2 style="text-align: center;color:white;">Site Plan</h2><br>
      
      <p style="font-size:16px; line-height:40px; color: white;"> Merupakan site plan dari Griya Intan Permai yang ekslusif<br>
        Kompleks A yang berukuran 33m x 13m sangat besar untuk Anda yang menginginkan rumah luas<br>
        Kompleks B dan C yang berukuran 13m x 8m cocok untuk rumah tangga sederhana<br>
        Semua nya sangat cocok untuk dibeli oleh Anda
      </p>
    </div>
    <div class="col-sm-4">
      <img src="images/siteplan.jpg" style="width:200px;">
    </div>
  </div>
</div>

<div class="container-fluid bg-grey">
  <div class="row">
    <div class="col-sm-4">
     <img src="images/denah.jpg" style="width: 80%;">
   </div>
   <div class="col-sm-8">
    <h2> Denah Rumah</h2>
    <p> 
      Rumah dengan denah seperti ini merupakan rumah yang ideal<br>
      Karena rumah yang luas juga sangat memungkinkan untuk kegiatan lain<br>
      Sangat ideal jika denah seperti ini
    </p> 
    
  </div>
</div>
</div>

<!-- Container (Services Section) -->
<div id="testimoni" class="container-fluid text-center">
  <h2 style="color:white;">Testimoni</h2>
  
  <br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <img src="images/camera/1.png" style="width: 40%;">
      <p style="color:white;"><br>Ini merupakan perumahan yang saya beri kucuran dana, karena memang prospek nya sangat baik di bidang perumahan</p>
      <h4 style="color:white;">Mark Zuckerberg</h4>
      <small style="color:white;">CEO Google</small>
    </div>
    <div class="col-sm-4">
      <img src="images/camera/2.png" style="width: 40%;">
      <p style="color:white;"><br>Satu satu nya perumahan yang sangat ekslusif dan cocok untuk Anda yang mencari kenyamanan</p>
      <h4 style="color:white;">Bill Gates</h4>
      <small style="color:white;">CEO Microsoft</small>
    </div>
    <div class="col-sm-4">
      <img src="images/camera/3.png" style="width: 40%;">
      <p style="color:white;"><br>Desain yang kami buat di perumahan ini 100 persen kami menggunakan dengan cinta jadi tidak ada yang namanya tampilan yang biasa</p>
      <h4 style="color:white;">Ronald Fajar</h4>
      <small style="color:white;">CEO Mitra Warna</small>
    </div>
  </div>
  <br><br>

</div>
</div>

<!-- Container (Portfolio Section) -->
<div id="foto_rumah" class="container-fluid text-center bg-grey">
  <h2>Foto Rumah</h2>
  <div class="row text-center slideanim">
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="images/1-1.png" alt="Paris" width="400" height="300">
        <p><strong>Kompleks A</strong></p>
        <p>Ekslusif</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="images/1-2.png" alt="New York" width="400" height="300">
        <p><strong>Kompleks B</strong></p>
        <p>Nyaman</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="images/1-3.png" alt="San Francisco" width="400" height="300">
        <p><strong>Kompleks C</strong></p>
        <p>Prospek</p>
      </div>
    </div>
  </div><br>
  
  



</div>

<!-- Left and right controls -->

</div>
</div>

<!-- Container (Contact Section) -->
<div id="pemesanan" style="background-color:  rgba(0,33,65);" class="container-fluid">
  <h2 class="text-center" style="color:white;">Pemesanan</h2>
  <div class="row">
    <h3 style="color:white;">Site Plan</h3>
    <div class="col-sm-2">
      <?php  
      $rumahA = mysqli_query($koneksi, "SELECT * FROM tbl_rumah");
      $x = 1;
      while($data = mysqli_fetch_array($rumahA)) {
        if($data['kode_rumah'] == "A0$x"){
          ?>
          <img class="img-responsive" style="width:200px;"  src="images/perumahan/<?php echo $data['foto'];?>"/>
          <?php
        }
        $x++;
      }
      ?>
      <h2 style="color:white;">Kompleks A (20m x 8m)</h2>
    </div>
    <div class="col-sm-2 col-sm-offset-1">
      <div style="margin-bottom:130px;"></div>
      <?php  
      $rumahB = mysqli_query($koneksi, "SELECT * FROM tbl_rumah");
      $x = 1;
      while($data = mysqli_fetch_array($rumahB)) {
        if($data['kode_rumah'] == "B0$x"){
          ?>
          <img class="img-responsive" style="width:150px;"  src="images/perumahan/<?php echo $data['foto'];?>"/>
          <?php
          $x++;
        }
      }
      ?>
      <h4 style="margin-top:-45px;color:white;">Kompleks B <br>(12m x 6m)</h4>
    </div>
    <div class="col-sm-2">
      <div style="margin-bottom:130px;"></div>
      <?php  
      $rumahC = mysqli_query($koneksi, "SELECT * FROM tbl_rumah");
      $x = 1;
      while($data = mysqli_fetch_array($rumahC)) {
        if($data['kode_rumah'] == "C0$x"){
          ?>
          <img class="img-responsive" style="width:150px;margin-left:-62px;" src="images/perumahan/<?php echo $data['foto'];?>"/>
          <?php
          $x++;
        }
      }
      ?>
      <h4 style="margin-top:-45px;margin-left:-55px;color:white;">Kompleks C<br>(12m x 6m)</h4>
    </div>
    <form class="form-data" method="POST">
      <div class="col-sm-5 slideanim">
      <div id="tampil">
      </div>
      <div class="dihapus">
        <div class="row">
          <div class="col-sm-6 form-group">
            <input class="form-control inputan" name="nama" placeholder="Masukkan Nama" type="text">
          </div>
          <div class="col-sm-6 form-group">
            <input class="form-control inputan" name="no_ktp" placeholder="Masukkan No KTP" type="text">
          </div>
          <div class="col-sm-12 form-group">
            <input class="form-control inputan" name="no_hp" placeholder="Masukkan No Handphone" type="text">
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <select name="kode_rumah" class="form-control">
              <?php  
              $kode_rumah = mysqli_query($koneksi, "SELECT * FROM tbl_rumah");
              while ($kode = mysqli_fetch_array($kode_rumah)) {
                if($kode['terjual'] == 0){
                  echo '<option value="'.$kode['kode_rumah'].'">'.$kode['kode_rumah'].'</option>';
                }
              }
              ?>
            </select>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-sm-12 form-group">
            <a class="btn btn-default pull-right" id="tombol-book">Book</a>
          </div>
        </div>
        </div>
      </div>
    </form>
  </div>
</div>


<footer style="text-align:center; color: white; background-color:  rgba(0,33,65);"> 
  <h2 style="color:white;">Griya Intan Permai</h2>
</footer>

<script>
  $(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

    // Prevent default anchor click behavior
    event.preventDefault();

    // Store hash
    var hash = this.hash;

    // Using jQuery's animate() method to add smooth page scroll
    // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
    $('html, body').animate({
      scrollTop: $(hash).offset().top
    }, 900, function(){

      // Add hash (#) to URL when done scrolling (default click behavior)
      window.location.hash = hash;
    });
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
      if (pos < winTop + 600) {
        $(this).addClass("slide");
      }
    });
  });
})
</script>
<!-- Pemrosesan Form -->
<script type="text/javascript">
  $(document).ready(function(){
    if($("#tombol-book").attr('disabled')){
      
    }else{
    $("#tombol-book").click(function(){
      var data = $('.form-data').serialize();
      $.ajax({
        type: 'POST',
        url: 'pages/process/insert_booking.php',
        data: data,
        success: function(data){
          $('.inputan').val(''),
          $('.dihapus').remove(),
          $('#tampil').load('pages/process/tampil.php')
        }
      });
    });
  }
  });
</script>
</body>

<!-- Mirrored from www.w3schools.com/bootstrap/tryit.asp?filename=trybs_theme_company_complete_animation by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Nov 2015 15:50:39 GMT -->
</html>
