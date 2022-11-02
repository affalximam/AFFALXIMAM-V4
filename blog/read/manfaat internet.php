<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <script>
    var rev = "fwd";
	  function titlebar(val)
	  {
	  var msg = "AFFALXIMAM - Pengertian, Jenis, Serta Manfaat Website ";
	  var res = " ";
	  var speed = 100;
	  var pos = val;   
	  msg = " " +msg+" ";
	  var le = msg.length;
	  if(rev == "fwd"){
	  if(pos < le){
	  pos = pos+1;
	  scroll = msg.substr(0,pos);
	  document.title = scroll;
	  timer = window.setTimeout("titlebar("+pos+")",speed);
	  }
	  else{
	  rev = "bwd";
	  timer = window.setTimeout("titlebar("+pos+")",speed);
	  }
	  }
	  else{
	  if(pos > 0){
	  pos = pos-1;
	  var ale = le-pos;
	  scrol = msg.substr(ale,le);
	  document.title = scrol;
	  timer = window.setTimeout("titlebar("+pos+")",speed);
	  }
	  else{
	  rev = "fwd";
	  timer = window.setTimeout("titlebar("+pos+")",speed);
	  } 
	  }
	  }       
	  titlebar(0);
  </script>

  <!-- more info -->
  <meta name="keywords" content=" affalximam, affal, AFFAL">
  <meta name="author" content="Affalximam">
  <meta name="description" content="I Just A Country Person But Im Happy.">
  <meta name="og:image" href="../../assens/image/icon-2.png">
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:description" content="I Just A Country Person But Im Happy." />
  <meta name="twitter:title" content="HOME - AFFALXIMAM" />
  <meta name="twitter:site" content="@affalximam" />
  <meta name="twitter:image" content="../../assens/image/icon-2.png" />
  <meta name="twitter:creator" content="@affalximam" />
  <meta property="og:site_name" content="affalximam" />
  <meta property="og:locale" content="in_ID" />
  <meta property="og:title" content="affalximam">
  <meta property="og:type" content="article">
  <meta property="og:description" content="I Just A Country Person But Im Happy.">
  <meta property="og:image" content="../../assens/image/icon-2.png" />
  <meta property="og:image:secure_url" content="../../assens/image/icon-2.png" />
  <meta property="og:image:width" content="851" />
  <meta property="og:image:height" content="851" />
  <meta property="og:image:alt" content="affalximam">
  <meta property="og:url" content="affalximam">

  
  <!-- css -->

  <link rel="stylesheet" href="../../assens/css/bootstrap.css">
  <link rel="stylesheet" href="../../assens/css/aos.css">
  <link rel="stylesheet" href="../../assens/css/style.css">
  <link rel="stylesheet" href="../../assens/css/style-2.css">
  <link rel="stylesheet" href="../../assens/css/darkmode.css">
  <link rel="stylesheet" href="../../assens/css/animasi.css">
  <link rel="stylesheet" href="../../assens/css/responsive.css">

  <!-- end css -->

  <!-- icon -->
  <link rel="icon" href="../../assens/image/icon-2.png" type="image/png">

</head>
<body id="?id=1">

     <!-- navbar -->
     <nav class="navbar navbar-expand-lg fixed-top navbar-custom navbar-dark float-right" aria-label="navigation">
      <div class="container-fluid">
        <a class="navbar-brand" href="#?id=1" rel="noopener">
          <img src="../../assens/image/icon.png" alt="" class="logo">
        </a>
        <button class="navbar-toggler text-center" type="button" data-bs-toggle="collapse" data-bs-target="#navbar1" aria-controls="navbarsExample05" aria-expanded="true" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse text-center justify-content-end" id="navbar1">
          <ul class="navbar-nav ml-auto mb-2 mb-lg-0 text-center justify-content-center">
            <li class="nav-item">
              <a class="nav-link active page-scroll" target="_blank" href="../home/index.php?id=1">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="../index.php?id=1" target="_blank">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active page-scroll" href="../../tools/index.php?id=1">Tools</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active page-scroll" href="#?id=9">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- end navbar -->

        <!-- option -->
        <div class="option">
          <ul>
            <li>
              <a id="full-screen">
                <div class="option-img option-1"></div>
              </a>
            </li>
            <li>
              <a >
                <div class="theme-switch-wrapper">
                  <label class="theme-switch" for="checkbox">
                    <input type="checkbox" id="checkbox" />
                    <div class="option-img option-2"></div>
                  </label>
                </div>
              </a>
            </li>
            <li>
              <a class="lagu" onclick="play();liat();">
                <div class="option-img option-3"></div>
              </a>
            </li>
              <li>
              <a class="lagu" onclick="pause();liat();">
                <div class="option-img option-4"></div>
              </a>
              <audio id="lagu" src="../../assens/music/Pamungkas - To The Bone.mp3"></audio>
            </li>
          </ul>
        </div>
        <!-- option -->

              <!-- Jumbotron -->
      <section id="?id=2">
        <div class="jumbotron">
          <div class="container text-center justify-content-center isi">
            <div class="row">
              <div class="col-sm-12">
              <h1 data-aos="fade-in"
                  data-aos-duration="1500"
                  data-aos-delay="500">
                <script src="../../assens/js/h1.js"></script>
              </h1>
              <p  data-aos="fade-in"
                  data-aos-duration="1500"
                  data-aos-delay="500">Blog</p>
              <p  data-aos="fade-in"
                  data-aos-duration="1500"
                  data-aos-delay="500">Manfaat Internet</p>
            </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Jumbotron -->

        <!-- artikel -->
        <article id="?id=1">

          <!-- title atas -->
          <div class="row pt-5 pb-5 satu text-center">
            <h1>Manfaat Internet</h1>
          </div>
          <div class="container">
            <div class="row ident pt-3 pb-3">
              <p>
                <img src="../../assens/image/icon-2.png" alt="">
                <a href="">Affalximam</a>  20 June 2020
              </p>
            </div>

            <!-- start -->
            <div class="row">
              <div class="col-sm-12 text-center">
                <img src="../../assens/image/blog/Picture2.png" alt="sisi gelap internet" class="m-auto w-50 mb-3" load='lazy'>
              </div>
            </div>
            <div class="row pl-5">
              <div class="col-sm-12 ml-5">
                <p>
                  Banyak sekali manfaat internet dalam kehidupan sehari – hari. Berikut ini merupakan beberapa manfaat yang dapat diperoleh dari penggunaan internet bagi manusia:
                </p>
                <h3>1.	Bidang Bisnis</h3>
                <p>
                  Terkait dengan bidang bisnis sendiri, banyak sekali manfaat internet dan keuntungan yang dapat digunakan, seperti pembuatan website usaha, e – commerce, bisnis startup, dan industri kreatif yang lainnya. Faktor penting yang perlu diperhatikan disini adalah ketika anda telah berinteraksi dengan internet, maka secara otomatis anda akan terhubung dengan seluruh pengguna di seluruh dunia, sehingga jangkauan bisnis menjadi lebih luas.                </p>
                <h3>2. Bidang Pendidikan</h3>
                <p>
                  Di dalam bidang pendidikan sendiri, penggunaan internet adalah salah satu faktor penting yang membantu dalam proses belajar dan pembelajaran. Pengguna dapat mengakses dan mendapatkan berbagai informasi terkait dengan modul, artikel, jurnal, pengetahuan umum, dan lain sebagainya. Sehingga, setiap individu dapat menemukan berbagai hal melalui mesin pencari yang terhubung dengan jaringan internet yang stabil dan baik.
                </p>
                <h3>3. Bidang Informasi</h3>
                <p>
                  Saat ini banyak sekali informasi yang bermunculan melalui berbagai perangkat yang ada. Hal tersebut karena, internet adalah penyedia sumber informasi yang dirasa lebih efektif daripada kita harus menonton atau memakai media elektronik seperti radio, televisi, dan koran untuk mendapatkan informasi, dan berita aktual secara cepat.
                </p>
                <p> 
                  Seusai dengan pengertian internet sendiri, media elektronik di abad ke - 21 banyak yang telah memanfaatkan media internet untuk memberikan informasi secara cepat, dengan jangkauan yang lebih luas. Misalnya saja, perusahaan media cetak selain memberikan berita melalui surat kabar, juga membuka media channel di internet untuk mendapatkan berita tidak hanya dari lingkup dalam negeri saja, tetapi sudah mencakup internasional.
                </p>
                <h3>4. Bidang Kesehatan</h3>
                <p>
                  Banyak sekali referensi kesehatan, dan jasa untuk layanan pengobatan secara online. Hal tersebut merupakan bentuk manfaat internet dalam bidang kesehatan. Anda cukup dengan mencari berbagai kebutuhan seperti obat, resep, gaya hidup sehat, dan rujukan rumah sakit melalui media internet.
                </p>
                <h3>5.	Bidang Sosial dan Hiburan</h3>
                <p>
                  Bidang terakhir yang banyak dimanfaatkan oleh generasi millennial adalah penggunaan internet untuk mengakses berbagai situs dan media sosial yang ada. Seperti Facebook, Twitter, Instagram, Youtube, dan lain sebagainya. Beberapa platform tersebut menyediakan fitur dan akses yang cukup mudah agar setiap orang dapat terhubung dengan baik meskipun berkomunikasi dengan jarak yang sangat jauh.
                </p>
              </div>
            </div>

          </div>
        </article>
        <!-- artikel -->


       <!-- contact -->
    <section  id="?id=9" 
    class="contact pb-5 pt-5"
    data-aos="fade-in">
      <div class="container">
        <div class="row text-center pt-3 pb-5">
          <h2> Contact </h2>
        </div>
      <div class="row mb-5">
      <div class="col-md-6">
        <div class="contact-image m-3"></div>
      </div>
<!-- form -->
<div class="col-md-6">
  <form action="#contact">
    <div class="container">
      <div class="row bg-dark p-3 con-sub-2">
        <h3 id="form-text-1">Get In One Touch</h3>
        <div class="form-floating mt-1">
          <input  class="form-control mb-3 bg-dark form-1 text-white" 
                  id="name" 
                  type="text" 
                  placeholder="Name" 
                  aria-label="default input example" 
                  required="true">
          <label  for="name">Name
          </label>
        </div>
        <div class="form-floating text-light mt-1">
          <input  class="form-control mb-3 bg-dark text-light form-1" 
                  id="email" 
                  type="email" 
                  placeholder="Email" 
                  aria-label="default input example"
                  required="tr`">
          <label  for="email">Email
          </label>
        </div>
        <div class="form-floating text-light mt-1 mb-2">
          <textarea class="form-control form-1 bg-dark text-light" 
                    placeholder="Message" 
                    id="message" 
                    style="height: 100px" 
                    required="true"></textarea>
          <label  for="message">Message
          </label>
        </div>
        <button type="submit" 
                class="btn w-25 m-auto bg-dark text-white" 
                id="form-text-5">Send
        </button>
      </div>
    </div>
  </form>
</div>
<!-- end form -->
</div>
</div>
</section>

<!-- end contact -->

<!-- footer -->

<footer id="?id=10"
  data-aos="fade-up"
  data-aos-duration="1000">
<div class="container">
<div class="row">
<div class="col-md-12 text-center">
  <img src="../assens/image/icon.png" alt="" class="mt-3">
  <h3 id="footer-text-1">AFFALXIMAM</h3>
</div>
</div>
<div class="row pt-3 text-start">
<div class="col-sm-6">
  <div class="row">
    <div class="col-sm-6">
      <ul>
        <li>
          <a href="#home?id=1">Home</a>
        </li>
        <li>
          <a href="">Blog</a>
        </li>
        <li>
          <a href="">Tools</a>
        </li>
        <li>
          <a href="#about?id=1">About</a>
        </li>
        <li>
          <a href="#skill?id=1">Skill</a>
        </li>
        <li>
          <a href="#portfolio?id=1">Portfolio</a>
        </li>
        <li>
          <a href="#community?id=1">Community</a>
        </li>
        <li>
          <a href="#contact?id=1">Contact</a>
        </li>
      </ul>
    </div>
    <div class="col-sm-6">
      <ul>
        <li>
          <a href="">Github</a>
        </li>
        <li>
          <a href="">Linkdln</a>
        </li>
        <li>
          <a href="">Codepen</a>
        </li>
        <li>
          <a href="">Dribble</a>
        </li>
        <li>
          <a href="">Figma</a>
        </li>
        <li>
          <a href="">Blogspot</a>
        </li>
      </ul>
    </div>
  </div>
</div>
<div class="col-sm-6">
  <div class="row">
    <div class="col-sm-6">
      <ul>
        <li>
          <a href="">Whatsapp</a>
        </li>
        <li>
          <a href="">Telegram</a>
        </li>
        <li>
          <a href="">Twitter</a>
        </li>
        <li>
          <a href="">Facebook</a>
        </li>
        <li>
          <a href="">Instagram</a>
        </li>
        <li>
          <a href="">Youtube</a>
        </li>
      </ul>
    </div>
  </div>
</div>
</div>
</div>
<div class="row text-center pt-5 pb-5 copyright mt-5">
<span id="copyright-text-1"> &copy; Copyright 2k20. Make By <a href="" target="_blank">affal</a></span>
</div>
</footer>

<!--end  footer -->

    <!-- scroll to top -->
    <button onclick="topFunction()" id="myBtn" title="Go to top">
      <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-arrow-up-square-fill" viewBox="0 0 16 16">
        <path d="M2 16a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2zm6.5-4.5V5.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 5.707V11.5a.5.5 0 0 0 1 0z" />
      </svg>
    </button>
    <!-- end scroll to top -->

    <!-- preload -->
    <div id="overlay">
      <div class="putar"></div>
    </div>
    <!-- end preload -->

  <!-- Javascript -->

  <script src="../../assens/js/jquery-3.5.1.js"></script>
  <script src="../../assens/js/jquery.easing.1.3.js"></script>
  <script src="../../assens/js/bootstrap.js"></script>
  <script src="../../assens/js/aos.js"></script>
  <script src="../../assens/js/script.js"></script>

  <!-- End Javascript -->

</body>
</html>