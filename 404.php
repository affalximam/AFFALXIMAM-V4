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
	  var msg = "404 NOT FOUND";
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
  <meta name="og:image" href="https://affalximam.my.id/assens/image/icon-2.png">
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:description" content="I Just A Country Person But Im Happy." />
  <meta name="twitter:title" content="HOME - AFFALXIMAM" />
  <meta name="twitter:site" content="@affalximam" />
  <meta name="twitter:image" content="https://affalximam.my.id/assens/image/icon-2.png" />
  <meta name="twitter:creator" content="@affalximam" />
  <meta property="og:site_name" content="affalximam" />
  <meta property="og:locale" content="in_ID" />
  <meta property="og:title" content="affalximam">
  <meta property="og:type" content="article">
  <meta property="og:description" content="I Just A Country Person But Im Happy.">
  <meta property="og:image" content="https://affalximam.my.id/assens/image/icon-2.png" />
  <meta property="og:image:secure_url" content="https://affalximam.my.id/assens/image/icon-2.png" />
  <meta property="og:image:width" content="851" />
  <meta property="og:image:height" content="851" />
  <meta property="og:image:alt" content="affalximam">
  <meta property="og:url" content="affalximam">

  
  <!-- css -->

  <link rel="stylesheet" href="https://affalximam.my.id/assens/css/bootstrap.css">
  <link rel="stylesheet" href="https://affalximam.my.id/assens/css/aos.css">
  <link rel="stylesheet" href="https://affalximam.my.id/assens/css/darkmode.css">
  <link rel="stylesheet" href="https://affalximam.my.id/assens/css/animasi.css">
  <link rel="stylesheet" href="https://affalximam.my.id/assens/css/responsive.css">

	<style>
		*{
			margin: 0;
			padding: 0;
		}
		.jumbotron {
			animation: jumbotron 15s linear infinite;
			min-height: 100vh;
			width: 100%;
			background-size: cover;
			background-repeat: no-repeat;
			background-position: center;
			display: flex;
			flex-direction: column;
			justify-content: center;
			cursor: default;
			overflow: hidden;
			position: relative;
		}

		.jumbotron h1{
			width: 100%;
			font-size: 1.5em;
		}

		.jumbotron p{
			color: white;
			font-size: 1.5em;
		}

		#jumbotron-title-satu{
			color: #fff;
			font-size: 1.2em;
		}

		.jumbotron::after {
			content: '';
			background-color: rgba(0, 0, 0, 0.8);
			background-size: cover;
			position: absolute;
			height: 100%;
			width: 100%;
			bottom: 0;
			left: 0;
			right: 0;
			display: block;
		}

		.jumbotron .isi{
			z-index: 10;
		}


		.jumbotron .btn{ 
			background-color: transparent;
			transition: ease-in-out;
			border-color: #fff ;
			border-radius: 10px;
			width: 90%;
		}

		.jumbotron .btn:hover {
			background-color: var(--color-satu);
			color: var(--white-black );
		}
	</style>

  <!-- end css -->

  <!-- icon -->
  <link rel="icon" href="https://affalximam.my.id/assens/image/icon-2.png" type="image/png">

</head>
<body id="?id=1">

    <!-- Jumbotron -->
    <section id="?id=2">
      <div class="jumbotron">
        <div class="container text-center justify-content-center isi">
          <div class="row">
            <div class="col-sm-12">
            <h1>
              <script>
								farbbibliothek = new Array(); 
								farbbibliothek[0] = new Array("#FF0000","#FF1100","#FF2200","#FF3300","#FF4400","#FF5500","#FF6600","#FF7700","#FF8800","#FF9900","#FFaa00","#FFbb00","#FFcc00","#FFdd00","#FFee00","#FFff00","#FFee00","#FFdd00","#FFcc00","#FFbb00","#FFaa00","#FF9900","#FF8800","#FF7700","#FF6600","#FF5500","#FF4400","#FF3300","#FF2200","#FF1100"); 
								farbbibliothek[1] = new Array("#FF0000","#FFFFFF","#FF0000","#FF0000"); 
								farbbibliothek[2] = new Array("#FFFFFF","#FF0000","#FFFFFF","#FF0000","#FFFFFF","#FF0000","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF"); 
								farbbibliothek[3] = new Array("#FF0000","#FF4000","#FF8000","#FFC000","#FFFF00","#C0FF00","#80FF00","#40FF00","#00FF00","#00FF40","#00FF80","#00FFC0","#00FFFF","#00C0FF","#0080FF","#0040FF","#0000FF","#4000FF","#8000FF","#C000FF","#FF00FF","#FF00C0","#FF0080","#FF0040"); 
								farbbibliothek[4] = new Array("#FF0000","#EE0000","#DD0000","#CC0000","#BB0000","#AA0000","#990000","#880000","#770000","#660000","#550000","#440000","#330000","#220000","#110000","#000000","#110000","#220000","#330000","#440000","#550000","#660000","#770000","#880000","#990000","#AA0000","#BB0000","#CC0000","#DD0000","#EE0000"); 
								farbbibliothek[5] = new Array("#000000","#000000","#000000","#FFFFFF","#FFFFFF","#FFFFFF"); 
								farbbibliothek[6] = new Array("#FFFFFF","#FF0000"); 
								farbbibliothek[7] = new Array("#FF0000","#FFFF00","#00FF00","#00FFFF","#0000FF");
								farbbibliothek[8] = new Array("#FF0000","#FF4000","#FF8000","#FFC000","#FFFF00","#C0FF00","#80FF00","#40FF00","#00FF00","#00FF40","#00FF80","#00FFC0","#00FFFF","#00C0FF","#0080FF","#0040FF","#0000FF","#4000FF","#8000FF","#C000FF","#FF00FF","#FF00C0","#FF0080","#FF0040"); 
								farben = farbbibliothek[4];
								function farbschrift() 
								{ 
									for(var i=0 ; i<Buchstabe.length; i++) 
									{ 
										document.all["a"+i].style.color=farben[i]; 
									} 
									farbverlauf(); 
								}

								function string2array(text) 
								{ 
									Buchstabe = new Array(); 
									while(farben.length<text.length) 
									{ 
										farben = farben.concat(farben); 
									} 
									k=0; 
									while(k<=text.length) 
									{ 
										Buchstabe[k] = text.charAt(k); 
										k++; 
									} 
								}

								function divserzeugen() 
								{ 
									for(var i=0 ; i<Buchstabe.length; i++) 
									{ 
										document.write(
											"<font face='Times New Roman, Times, serif' size='30' class='text-color'><span id='a"+i+"' class='a"+i+"'>"+Buchstabe[i] + "</span></font>"
											); 
									} 
									farbschrift(); 
								}

								var a=1; 
								function farbverlauf() 
								{ 
									for(var i=0 ; i<farben.length; i++) 
									{ 
										farben[i-1]=farben[i]; 
									} 
									farben[farben.length-1]=farben[-1]; 

									setTimeout("farbschrift()",30); 
								} 

								var farbsatz=1; 
								function farbtauscher() 
								{ 
									farben = farbbibliothek[farbsatz]; 
									while(farben.length<text.length) 
									{ 
										farben = farben.concat(farben); 
									} 
									farbsatz=Math.floor(Math.random()*(farbbibliothek.length-0.0001)); 
								}

								setInterval("farbtauscher()",5000); 
								text= " 404 NOTFOUND ";
								string2array(text); 
								divserzeugen();
							</script>
            </h1>
            <p> Hahaha... I Know U Want To Find Vulnrability In This Site.</p>
          </div>
          </div>
          <div class="container">
            <div class="row justivy-content-end">
              <div  class="col-sm-12 justify-content-end" 
                    >
                <a href="https://affalximam.my.id" class="btn btn-primary btn-lg btn-1 m-3 w-50">Home Page
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Jumbotron -->

    <!-- preload -->
		<div id="overlay">
			<div class="putar"></div>
		</div>
		<!-- end preload -->

	<!-- Javascript -->

	<script src="https://affalximam.my.id/assens/js/jquery-3.5.1.js"></script>
	<script src="https://affalximam.my.id/assens/js/jquery.easing.1.3.js"></script>
	<script src="https://affalximam.my.id/assens/js/bootstrap.js"></script>
	<script src="https://affalximam.my.id/assens/js/aos.js"></script>
	<script src="https://affalximam.my.id/assens/js/script.js"></script>

	<!-- End Javascript -->

</body>
</html>