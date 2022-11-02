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
                  data-aos-delay="500">Pengertian, Jenis, Serta Manfaat Website</p>
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
            <h1>Pengertian, Jenis, Serta Manfaat Website</h1>
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
                <img src="../../assens/image/blog/Picture1.png" alt="">
              </div>
            </div>

            <div class="row">
              <div class="col-sm-12">
                <h3>1. Pengertian Website</h3>
              </div>
            </div>
            <div class="row pl-5">
              <div class="col-sm-12 ml-5">
                <p>
                  Situs web atau website adalah kumpulan informasi dalam bentuk halaman web yang saling tergabung di sebuah domain atau URL. Contohnya, dalam sebuah website dengan domain cikenblekpaper.com, terdapat berbagai halaman lain, mulai dari blog, menu, halaman kontak, dan sebagainya yang bisa diakses langsung dari halaman beranda (homepage). Kumpulan halaman ini bisa diakses tentunya dengan koneksi internet.
                  World Wide Web (www) atau web adalah sebuah system penyebaran informasi melalui internet. Informasi yang dikirimkan dapat berupa teks, suara(audio), animasi, gambar dan bahkan dalam format video yang dapat diakses melalui sebuah software yang disebut browser,seperti internet explorer, mozilla firefox, opera dan lain-lain.
                  </p>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-12">
                <h3>2.	Cara Membuka Website</h3>
              </div>
            </div>
            <div class="row pl-5">
              <div class="col-sm-12 ml-5">
                <p>
                  Cara membuka website sangatlah mudah. Kamu hanya memerlukan sebuah browser, seperti Chrome, Firefox, Safari, dan sejenisnya. Setelah itu, ketikkan domain atau URL yang dituju. Cara lainnya, kamu bisa mencari kata kunci sebuah website dari mesin pencari. Misalnya, jika kamu mencari piring keramik, kamu bisa mengetikkan “website piring keramik” untuk menampilkan website terkait pencarianmu.
                </p>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-12">
                <h3>
                  3.	Jumlah Website di Internet</h3>
              </div>
            </div>
            <div class="row pl-5">
              <div class="col-sm-12 ml-5">
                <p>
                  Setidaknya per Januari 2020, sudah ada 1,74 miliar website di internet, sebagaimana dikatakan WebHostingRating. Mengingat banyaknya jumlah ini, maka jenis website pun juga bervariasi dengan fungsi dan manfaat website masing-masing. Oleh karena itu, jika ingin membuat website, pastikan website-mu standout!
                </p>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-12">
                <h3>4.	Jenis Website</h3>
              </div>
            </div>
            <div class="row pl-5">
              <div class="col-sm-12 ml-5">
                <p>
                  Ada berbagai jenis website yang bisa kamu temukan di internet. Namun, ada tiga jenis website berdasarkan kepemilikan, yaitu:
                </p>
                <div class="container">
                  <h4> a.	Website pribadi </h4>
                  <p>
                  Jenis website yang satu ini dikelola perorangan. Biasanya, website pribadi dibuat menjadi sebuah blog gratis menggunakan layanan blogging, seperti WordPress, Blogger, Wix, dan sebagainya. Namun, ada pula website yang digunakan untuk portfolio, seperti galeri fotografi, artikel blog, portfolio video atau desain, dan sebagainya.
                  Beberapa contoh website yang bisa kamu jadikan patokan sebagai website pribadi adalah galeri foto milik Paul Nicklen, website portofolio milik sutradara Lisette Donkersloot, gabungan portofolio foto dan videografi dari Taylor Gray, atau resumé interaktif milik Robby Leonardi.
                  </p>
                  <h4> b.	Website bisnis dan website perusahaan </h4>
                  <p>
                  Jenis website ini dibuat untuk menampilkan informasi terkait brand atau profil perusahaan terkait yang bertujuan untuk menginformasikan kepada pengguna mengenai identitas mereka. Jika kamu berniat membuat website jenis ini, ada baiknya jika kamu membuat halaman khusus yang diisi dengan blog berisi artikel yang SEO-friendly demi meningkatkan popularitas website-mu.
                  </p>
                  <h4> c.	Website komunitas </h4>
                  <p>
                  Website komunitas biasanya menggunakan ekstensi domain “.org”. Tujuan pembuatan website yang satu ini adalah untuk saling berbagi informasi antaranggota, sebagai papan informasi virtual, atau forum untuk sarana diskusi.
                  </p>
                  <h4> d.	Website e-commerce </h4>
                  <p>
                  Jenis website yang satu ini mengacu pada situs apa pun yang telah dibuat dengan tujuan untuk menjual barang atau layanan online. Selain menjual barang, kamu juga bisa memanfaatkan website e-commerce untuk menampilkan informasi brand-mu atau campaign yang sedang kamu jalankan dalam bisnismu.
                  </p>
                  <h4> e.	Elearning </h4>
                  <p>
                  Proses belajar mengajar dapat dilakukan secara online, tanpa harus bertatap muka antara siswa dengan pengajar (Sekolah Virtual).
                  </p>
                  <h4> f.	E-News </h4>
                  <p>
                  Berisi berita-berita yang dapat diakses di seluruh dunia. Informasinya pun tentu saja lebih cepat dari berita yang dimuat koran atau majalah konvensional.
                  </p>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-12">
                <h3>5.	Elememt dan Komponen Website</h3>
              </div>
            </div>
            <div class="row pl-5">
              <div class="col-sm-12 ml-5">
                <div class="container">
                  <h4> a.	Title </h4>
                  <p>
                    Title adalah judul atau nama dari sebuah halaman web. Letaknya di titlebar browser.
                  </p>
                  <h4> b. Nama Domain </h4>
                  <p>
                    Nama domain adalah nama alias dari sebuah website. Nama domain disewa dari pencatat/register domain per tahun. Domain digunakan agar manusia mudah untuk mengingat nama sebuah website. Kadangkala nama domain juga  mewakili nama sendiri, nama brand, produk maupun perusahaan. Contoh: www.bsi.ac.id.                    
                  </p>
                  <h4> c.	Alamat URL </h4>
                  <p>
                    URL singkatan dari Uniform Resource Locator. Jika sebuah halaman web kita diibaratkan dengan rumah, maka URL ini adalah alamat lengkap rumah kita. Letaknya ada di addressbar browser. Setiap Halaman web memiliki url yang unik dan berbeda. Format URL bermacam -macam. Namun, semuanya selalu diawali dengan nama domain website tersebut.                    
                  </p>
                  <h4> d.	Link / Tautan </h4>
                  <p>Jika kita ibaratkan lagi bahwa sebuah halaman web adalah rumah, maka link atau tautan ini adalah pintu/gerbang/lorong yang menuju ke halaman lain baik itu yang masih satu web maupun halaman di web yang berbeda. Pengarahan link diatur dalam kode html "< a href=”alamat url halaman website tujuan” > Anchor teks/ Teks yang dilink < / a>."
                  </p>
                  <h4> e.	Header </h4>
                  <p>
                    adalah bagian atas dari sebuah website. Biasanya berisi nama situs, logo dan deskripsinya. Header berfungsi untuk menampilkan identitas utama dari sebuah situs.
                  </p>
                  <h4> f.	Konten / Isi </h4>
                  <p>
                    Konten atau isi sebuah situs berupa informasi dan artikel yang biasanya terletak dibagian tengah. Artikel yang sedang anda baca ini juga adalah bagian dari konten. Konten adalah bagian terpenting dari sebuah website. Konten di halaman utama sebuah web biasanya adalah daftar posting.
                  </p>
                  <h4> g. Sidebar </h4>
                  <p>
                    Sidebar adalah bagian sisi kanan maupun kiri sebuah website dan terletak di sisi konten. Sidebar biasanya berisi informasi tambahan dan navigasi dari sebuah website. Sidebar diisi dengan widget-widget. Keberadaan sidebar ini bersifat opsional sesuai keinginan dan desain web masing-masing. Ada yang hanya satu kolom(tanpa sidebar), ada yang hanya satu di sebelah kanan ataupun kiri, dan ada juga yang dikedua sisi memiliki sidebar.
                  </p>
                  <h4> h.	Widget </h4>
                  <p>
                    Widget adalah sebuah daerah pada website yang isinya berupa informasi tertentu dan memiliki fungsi tertentu pula. Widget tidak harus terletak pada bagian sidebar. Widget juga bisa terletak pada bagian atas posting, footer bahkan header (walaupun sangat jarang).
                  </p>
                  <h4> i. Footer </h4>
                  <p>
                    Footer adalah bagian dasar atau paling bawah dari sebuah website. Fungsi utamanya adalah sebagai kaki dan berisi informasi hak cipta, kepemilikan, link tambahan, sumber daya, sponsor dan kredit sebuah website bahkan menampilkan widget.
                  </p>
                  <h4> j. Navbar </h4>
                  <p>
                    Navbar adalah kependekan dari Navigation bar. Navbar merupakan bagian website yang biasanya terletak di bagian paling atas dan bersifat melayang/fixed (Selalu terlihat walaupun di scroll). Navbar berfungsi untuk mempermudah navigasi sebuah situs. Biasanya berisi link-link penting yang mungkin dikunjungi dalam situs itu.
                  </p>
                  <h4> k. Menu </h4>
                  <p>
                    Menu adalah bagian dari website yang berisi link-link utama yang mengarah pada halaman tertentu di sebuah website. Secara fungsi hampir sama dengan navbar yaitu untuk mempermudah navigasi di web. Namun, teknisnya sedikit berbeda karena biasanya menu tidak melayang. Menu biasanya terletak di bawah atau di atas header.
                  </p>
                  <h4>l. Breadcrumb</h4>
                  <p>
                    Breadcrumb merupakan sebuah elemen website berbentuk memanjang yang isinya adalah informasi tentang letak, posisi dan atau jalur halaman yang sedang dikunjungi dalam website itu. Breadcrumb biasanya hanya ada di halaman spesifik/single seperti halaman posting dan sejenisnya. Biasanya terletak di atas judul posting.
                  </p>
                  <h4> m. Form </h4>
                  <p>
                    Form dalam bahasa Indonesia disebut formulir. Sebagaimana formulir kertas, form pada website juga berfungsi untuk penginputan data dari pengakses website baik itu yang bersifat wajib maupun opsional. Form pada website memiliki berbagai cara input seperti Textfield, Password, ComboBox, Textarea, Radio, Checkbox, Button dan lain-lain.
                  </p>
                  <h4> n. Sharing button bar (Bar tombol berbagi) </h4>
                  <p>
                    Sharing button bar adalah tempat dimana berbagai jenis tombol berbagi ke media sosial berada. Tombol berbagi ini berfungsi untuk membagikan posting ataupun isi pada halaman yang dikunjungi ke media sosial pengunjung. Tombol yang paling sering ada adalah tombol like facebook, tweet Twitter, dan +1 Google+.
                  </p>
                  <h4> o.	Popup </h4>
                  <p>
                    Popup adalah sebuah jendela yang berisi informasi tertentu yang ingin disampaikan oleh pemilik situs. Ketika muncul jendela popup maka elemen lain di halaman website itu tidak akan berfungsi sebelum popup itu ditutup lagi. Ketika sebuah jendela popup muncul, biasanya elemen lain di halaman situs itu tertutupi warna hitam transparant.
                  </p>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-12">
                <h3>6. Manfaat Website</h3>
                <p>
                  Setelah mengetahui pengertian website hingga apa saja jenis website untuk inspirasimu, kini waktunya kamu mengetahui apa saja manfaat website yang bisa kamu dapatkan. Sebagai penyedia informasi yang sering digunakan baik untuk perusahaan, organisasi, atau individu, ternyata website punya beberapa manfaat penting, yaitu:
                </p>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12 text-center">
                <img src="../../assens/image/blog/Picture2.png" alt="">
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12 ml-5">
                <div class="container">
                  <h4> 1. Memperluas jangkauan promosi </h4>
                  <p> 
                    Baik untuk perusahaan atau individu, website sangat mungkin digunakan sebagai sarana promosi diri. Bagaimana tidak, selain meningkatkan kredibilitas, jika website-mu berhasil masuk di halaman pertama hasil pencarian Google dengan SEO yang baik, bukan tak mungkin website-mu bisa dikenal oleh lebih banyak orang dan dikunjungi banyak pengguna internet. Artinya, peningkatan traffic!
                  </p>
                  <h4> 2. Media tanpa batas </h4>
                  <p>
                    Melalui website, kamu dapat menyediakan informasi kepada para pengunjung dan membantu mereka mendapatkan informasi hingga solusi atas masalah yang mereka miliki. Website bisa kamu andalkan sebagai media promosi tanpa batas untuk produk atau jasamu selama 24 jam. Kabar baiknya, ini berarti website juga dapat membantumu menghasilkan konversi yang bagus.
                  </p>
                  <h4> 3. Wadah komunitas </h4>
                  <p>
                    Sesuai dengan jenis website di atas, kamu juga bisa memanfaatkan website untuk menjadi wadah komunitas sesuai ketertarikanmu. Misalnya, jika kamu adalah pecinta reptil, kamu bisa membuat website berisi pengetahuan tentang cara merawat reptil hingga mengumpulkan orang-orang dengan ketertarikan yang sama hingga membuat organisasi.
                  </p>
                </div>
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