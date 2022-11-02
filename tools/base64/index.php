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
	  var msg = "AFFALXIMAM - Encode - Image ";
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

  </style>

</head>
<body>

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-custom navbar-dark float-right" aria-label="navigation">
      <div class="container-fluid">
        <a class="navbar-brand" href="#?id=1" rel="noopener">
          <img src="../../assens/image/icon.png" alt="" class="logo">Tools / Base64
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

    <div class="jumbotron text-center text-white">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <label for="text"><h3>Enter string to encode</h3></label>
          </div>
          <div class="col-sm-8">
            <textarea id="text" placeholder="Enter string"></textarea>
          </div>
          <div class="col-sm-4">
            <button onclick="encodeString()" class="btn btn-primary">Encode string</button>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <label for="text">
              <h3>Enter encoded string to decode</h3>
            </label>
          </div>
          <div class="col-sm-8">
            <textarea id="e_text" placeholder="Enter endoded string"></textarea>
          </div>
          <div class="col-sm-4">
            <button onclick="decodeString()" class="btn btn-primary">Decode string</button>
          </div>
        </div>

        <div class="result-container" id="result_view">
            <h3 id="result_header"></h3>
            <span id="result_box"></span>
            <img id="result_image">
            <button onclick="copyToClipboard()" id="copy_btn" class="btn btn-primary">Copy</button>
        </div>
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

    <script src="../../assens/js/jquery-3.5.1.js"></script>
    <script src="../../assens/js/jquery.easing.1.3.js"></script>
    <script src="../../assens/js/bootstrap.js"></script>
    <script src="../../assens/js/aos.js"></script>
    <script src="../../assens/js/script.js"></script>

    <script>
        const resultView = document.getElementById('result_view');
        const resultHeader = document.getElementById('result_header');
        const resultBox = document.getElementById('result_box');
        const resultImage = document.getElementById('result_image');
        const copyBtn = document.getElementById('copy_btn');

        function encodeImage() {
            hideAll();
            let file = document.getElementById('file');
            let reader = new FileReader();
            if (file.files[0]) {
                if (file.files[0].size <= 1024 * 1024) {
                    reader.readAsDataURL(file.files[0]);
                    reader.onload = function () {
                        displayString();
                        resultHeader.innerHTML = 'Encoded image:';
                        resultBox.innerHTML = reader.result.toString();
                    };
                } else alert('File size too big');
            }
    }

    function decodeImage() {
        hideAll();
        let image = document.getElementById('image').value;
        displayImage();
        resultHeader.innerHTML = 'Decoded image:';
        resultImage.src = image;
    }

    function encodeString() {
        hideAll();
        let text = document.getElementById('text');
        displayString();
        resultHeader.innerHTML = 'Encoded string:';
        resultBox.innerHTML = btoa(text.value);
    }

    function decodeString() {
        hideAll();
        let text = document.getElementById('e_text');
        displayString();
        resultHeader.innerHTML = 'Decoded string:';
        resultBox.innerHTML = atob(text.value);
    }

    function hashString() {
        hideAll();
        let text = document.getElementById('text2');
        displayString();
        resultHeader.innerHTML = 'SHA1 hashed string:';
        resultBox.innerHTML = sha1(text.value);
    }

    function displayString() {
        resultView.style.display = 'block';
        resultHeader.style.display = 'block';
        resultBox.style.display = 'block';
        copyBtn.style.display = 'block';
        resultView.scrollIntoView({behavior: "smooth", block: "end"});
    }

    function displayImage() {
        resultView.style.display = 'block';
        resultHeader.style.display = 'block';
        resultImage.style.display = 'block';
        resultView.scrollIntoView({behavior: "smooth", block: "end"});
    }

    function hideAll() {
        resultHeader.style.removeProperty('display');
        resultBox.style.removeProperty('display');
        resultImage.style.removeProperty('display');
        resultView.style.removeProperty('display');
        copyBtn.style.removeProperty('display');
    }

    function copyToClipboard() {
        let tempInput = document.createElement('textarea');
        tempInput.value = resultBox.innerHTML;
        document.body.appendChild(tempInput);
        tempInput.select();
        tempInput.setSelectionRange(0, 99999999); /*For mobile devices*/
        document.execCommand("copy");
        tempInput.remove();
        alert("Text copied to clipboard");

    }

    function sha1(str) {
        //  discuss at: https://locutus.io/php/sha1/
        // original by: Webtoolkit.info (https://www.webtoolkit.info/)
        // improved by: Michael White (https://getsprink.com)
        // improved by: Kevin van Zonneveld (https://kvz.io)
        //    input by: Brett Zamir (https://brett-zamir.me)
        //      note 1: Keep in mind that in accordance with PHP, the whole string is buffered and then
        //      note 1: hashed. If available, we'd recommend using Node's native crypto modules directly
        //      note 1: in a steaming fashion for faster and more efficient hashing
        //   example 1: sha1('Kevin van Zonneveld')
        //   returns 1: '54916d2e62f65b3afa6e192e6a601cdbe5cb5897'

        var hash
        try {
            var crypto = require('crypto')
            var sha1sum = crypto.createHash('sha1')
            sha1sum.update(str)
            hash = sha1sum.digest('hex')
        } catch (e) {
            hash = undefined
        }

        if (hash !== undefined) {
            return hash
        }

        var _rotLeft = function (n, s) {
            var t4 = (n << s) | (n >>> (32 - s))
            return t4
        }

        var _cvtHex = function (val) {
            var str = ''
            var i
            var v

            for (i = 7; i >= 0; i--) {
                v = (val >>> (i * 4)) & 0x0f
                str += v.toString(16)
            }
            return str
        }

        var blockstart
        var i, j
        var W = new Array(80)
        var H0 = 0x67452301
        var H1 = 0xEFCDAB89
        var H2 = 0x98BADCFE
        var H3 = 0x10325476
        var H4 = 0xC3D2E1F0
        var A, B, C, D, E
        var temp

        // utf8_encode
        str = unescape(encodeURIComponent(str))
        var strLen = str.length

        var wordArray = []
        for (i = 0; i < strLen - 3; i += 4) {
            j = str.charCodeAt(i) << 24 |
                str.charCodeAt(i + 1) << 16 |
                str.charCodeAt(i + 2) << 8 |
                str.charCodeAt(i + 3)
            wordArray.push(j)
        }

        switch (strLen % 4) {
            case 0:
                i = 0x080000000
                break
            case 1:
                i = str.charCodeAt(strLen - 1) << 24 | 0x0800000
                break
            case 2:
                i = str.charCodeAt(strLen - 2) << 24 | str.charCodeAt(strLen - 1) << 16 | 0x08000
                break
            case 3:
                i = str.charCodeAt(strLen - 3) << 24 |
                    str.charCodeAt(strLen - 2) << 16 |
                    str.charCodeAt(strLen - 1) <<
                    8 | 0x80
                break
        }

        wordArray.push(i)

        while ((wordArray.length % 16) !== 14) {
            wordArray.push(0)
        }

        wordArray.push(strLen >>> 29)
        wordArray.push((strLen << 3) & 0x0ffffffff)

        for (blockstart = 0; blockstart < wordArray.length; blockstart += 16) {
            for (i = 0; i < 16; i++) {
                W[i] = wordArray[blockstart + i]
            }
            for (i = 16; i <= 79; i++) {
                W[i] = _rotLeft(W[i - 3] ^ W[i - 8] ^ W[i - 14] ^ W[i - 16], 1)
            }

            A = H0
            B = H1
            C = H2
            D = H3
            E = H4

            for (i = 0; i <= 19; i++) {
                temp = (_rotLeft(A, 5) + ((B & C) | (~B & D)) + E + W[i] + 0x5A827999) & 0x0ffffffff
                E = D
                D = C
                C = _rotLeft(B, 30)
                B = A
                A = temp
            }

            for (i = 20; i <= 39; i++) {
                temp = (_rotLeft(A, 5) + (B ^ C ^ D) + E + W[i] + 0x6ED9EBA1) & 0x0ffffffff
                E = D
                D = C
                C = _rotLeft(B, 30)
                B = A
                A = temp
            }

            for (i = 40; i <= 59; i++) {
                temp = (_rotLeft(A, 5) + ((B & C) | (B & D) | (C & D)) + E + W[i] + 0x8F1BBCDC) & 0x0ffffffff
                E = D
                D = C
                C = _rotLeft(B, 30)
                B = A
                A = temp
            }

            for (i = 60; i <= 79; i++) {
                temp = (_rotLeft(A, 5) + (B ^ C ^ D) + E + W[i] + 0xCA62C1D6) & 0x0ffffffff
                E = D
                D = C
                C = _rotLeft(B, 30)
                B = A
                A = temp
            }

            H0 = (H0 + A) & 0x0ffffffff
            H1 = (H1 + B) & 0x0ffffffff
            H2 = (H2 + C) & 0x0ffffffff
            H3 = (H3 + D) & 0x0ffffffff
            H4 = (H4 + E) & 0x0ffffffff
        }

        temp = _cvtHex(H0) + _cvtHex(H1) + _cvtHex(H2) + _cvtHex(H3) + _cvtHex(H4)
        return temp.toLowerCase()
    }
</script>
  <script>
    (function() {
      
      $(".jumbotron").css({
        'height' : '100%'
      });
      
      $('.jumbotron .container').css({
        'z-index': '5'
      });

      $('textarea, input').css({
        'width': '100%',
        'height': '100%',
        'border': '2px solid white',
        'background-color' : 'rgba(0,0,0,.75)',
        'border-radius': '10px',
        'color': 'white',
      });

    })();
  </script>
</body>
</html>
