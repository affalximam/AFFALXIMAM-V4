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
	  var msg = "AFFALXIMAM - Kalkulator ";
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
  <link rel="stylesheet" href="../../assens/css/darkmode.css">
  <link rel="stylesheet" href="../../assens/css/animasi.css">
  <link rel="stylesheet" href="../../assens/css/responsive.css">

  <!-- end css -->

  <!-- icon -->
  <link rel="icon" href="../../assens/image/icon-2.png" type="image/png">
  <style>
    *{
      margin: 0;
      padding: 0;
    }
  </style>

</head>
<body id="?id=1">

     <!-- navbar -->
     <nav class="navbar navbar-expand-lg fixed-top navbar-custom navbar-dark float-right" aria-label="navigation">
      <div class="container-fluid">
        <a class="navbar-brand" href="#?id=1" rel="noopener">
          <img src="../../assens/image/icon.png" alt="" class="logo">Tools / Kalkulator
        </a>
        <button class="navbar-toggler text-center" type="button" data-bs-toggle="collapse" data-bs-target="#navbar1" aria-controls="navbarsExample05" aria-expanded="true" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse text-center justify-content-end" id="navbar1">
          <ul class="navbar-nav ml-auto mb-2 mb-lg-0 text-center justify-content-center">
            <li class="nav-item">
              <a class="nav-link active page-scroll" target="_blank" href="../../home/index.php?id=1">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="../../blog/index.php?id=2" target="_blank">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active page-scroll" href="../../tools/index.php?id=3">Tools</a>
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
        <div  class="option"
              data-aos="fade-in"
              data-aos-duration="1500"
              data-aos-delay="500">
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
              <audio id="lagu" src="../../assens/music/ApriliGhost - Defacer Kampungan.mp3"></audio>
            </li>
          </ul>
        </div>
        <!-- option -->

    <div class="jumbotron">
    <div class="main">
        <form name="form">
            <input class="textview" name="textview">
        </form>
        <table>
            <tr>
                <td><input class="button" type="button" value="C" onclick="clear()"></td>
                <td><input class="button" type="button" value="<" onclick="back()"></td>
                <td><input class="button" type="button" value="/" onclick="insert('/')"></td>
                <td><input class="button" type="button" value="x" onclick="insert('*')"></td>
            </tr>
            <tr>
                <td><input class="button" type="button" value="7" onclick="insert(7)"></td>
                <td><input class="button" type="button" value="8" onclick="insert(8)"></td>
                <td><input class="button" type="button" value="9" onclick="insert(9)"></td>
                <td><input class="button" type="button" value="-" onclick="insert('-')"></td>
            </tr>
            <tr>
                <td><input class="button" type="button" value="4" onclick="insert(4)"></td>
                <td><input class="button" type="button" value="5" onclick="insert(5)"></td>
                <td><input class="button" type="button" value="6" onclick="insert(6)"></td>
                <td><input class="button" type="button" value="+" onclick="insert('+')"></td>
            </tr>
            <tr>
                <td><input class="button" type="button" value="1" onclick="insert(1)"></td>
                <td><input class="button" type="button" value="2" onclick="insert(2)"></td>
                <td><input class="button" type="button" value="3" onclick="insert(3)"></td>
                <td rowspan=5><input class="button button-ctm" type="button" value="=" onclick="equal()"></td>
            </tr>
            <tr>
                <td colspan=2><input class="button button-custom" style="width:106" type="button" value="0" onclick="insert(0)"></td>
                <td><input class="button" type="button" value="." onclick="insert('.')"></td>
            </tr>
        </table>
    </div>
  </div>

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
<script src="../../assens/js/text-tools.js"></script>

<script>
  $('.jumbotron .main').css({
    'z-index' : '5'
  });

  $('body').css({
    'background-image' : "url('../../assens/image/bg-3.jpg')"
  });

  $(".button").css({
    'width' : '50px',
    'height' : '50px',
    'font-size' : '25px',
    'margin' : '2px',
    'cursor' : 'pointer',
    'background-color' : 'var(--black-white)',
    'border' : 'none',
    'color' : 'var(--white-black)',
  });
  
  $('.button-custom').css({
    'width' : '100%'
  });
  
  $(".textview").css({
    'width': '100%',
    'height': '100%',
    'font-size': '25px',
    'border': '10px solid blue',
    'color': 'var(--white-black)',
    'background-color': 'var(--black-white)',
  });

  $(".main").css({
      'position': 'absolute',
      'top': '50%',
      'left': '50%',
      'transform': 'translateX(-50%)translateY(-50%)',
  });

  $(".button-ctm").css({
      'height': '120px',
  });

  $("table td").css({
      'border': '20px solid blue',
  });

</script>

<script>
    function insert(num){
  document.form.textview.value = document.form.textview.value+num
}
function equal(){
  var exp = document.form.textview.value;
  if(exp){
    document.form.textview.value = eval(exp);
  }
}

function clean(){
  document.form.textview.value = "";
}

function back(){
  var exp = document.form.textview.value;
  document.form.textview.value = exp.substring(0,exp.length-1);
}
</script>

<!-- End Javascript -->

</body>
</html>