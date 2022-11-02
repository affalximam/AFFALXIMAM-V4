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
	  var msg = "AFFALXIMAM - Login ";
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
  <meta name="og:image" href="../assens/image/icon-2.png">
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:description" content="I Just A Country Person But Im Happy." />
  <meta name="twitter:title" content="HOME - AFFALXIMAM" />
  <meta name="twitter:site" content="@affalximam" />
  <meta name="twitter:image" content="../assens/image/icon-2.png" />
  <meta name="twitter:creator" content="@affalximam" />
  <meta property="og:site_name" content="affalximam" />
  <meta property="og:locale" content="in_ID" />
  <meta property="og:title" content="affalximam">
  <meta property="og:type" content="article">
  <meta property="og:description" content="I Just A Country Person But Im Happy.">
  <meta property="og:image" content="../assens/image/icon-2.png" />
  <meta property="og:image:secure_url" content="../assens/image/icon-2.png" />
  <meta property="og:image:width" content="851" />
  <meta property="og:image:height" content="851" />
  <meta property="og:image:alt" content="affalximam">
  <meta property="og:url" content="affalximam">

  
  <!-- css -->

  <link rel="stylesheet" href="../assens/css/bootstrap.css">
  <link rel="stylesheet" href="../assens/css/aos.css">
  <link rel="stylesheet" href="../assens/css/login.css">
  <link rel="stylesheet" href="../assens/css/darkmode.css">
  <link rel="stylesheet" href="../assens/css/animasi.css">
  <link rel="stylesheet" href="../assens/css/responsive.css">

  <!-- end css -->

  <!-- icon -->
  <link rel="icon" href="../assens/image/icon-2.png" type="image/png">

</head>
<body id="?id=1">

  <div class="jumbotron text-center text-white">
    <div class="container">
      <div class="row">

        <div class="card card-login w-50 m-auto p-4">
          <h1>LOGIN</h1>
          <form action="">
            <div class="form-floating mt-1">
              <input  class="form-control mb-3 bg-dark form-1 text-white" 
                      id="name" 
                      type="text" 
                      placeholder="Name" 
                      aria-label="default input example" 
                      required="true">
              <label  for="name" 
                      id="form-text-2">Username
              </label>
            </div>
            <div class="form-floating text-light mt-1">
              <input  class="form-control mb-3 bg-dark text-light form-1 password" 
                      id="password" 
                      type="password" 
                      placeholder="password" 
                      aria-label="default input example"
                      required="true">
              <label for="password">Password</label>
            </div>
            <a  type="submit"
                href="dashboard.php"
                class="btn w-25 m-auto bg-dark text-white" 
                id="form-text-5"
                onclick="wrong()">Login
          </a>

          </div>
        </form>

      </div>
    </div>
  </div>

    <!-- preload -->
    <div id="overlay">
      <div class="putar"></div>
    </div>
    <!-- end preload -->

  <!-- Javascript -->

  <script src="../assens/js/jquery-3.5.1.js"></script>
  <script src="../assens/js/jquery.easing.1.3.js"></script>
  <script src="../assens/js/bootstrap.js"></script>
  <script src="../assens/js/aos.js"></script>
  <script src="../assens/js/script.js"></script>
  <script src="../assens/js/login.js"></script>

  <!-- End Javascript -->

</body>
</html>