// dark mode
window.console = window.console || function(t) {};
if (document.location.search.match(/type=embed/gi)) {
  window.parent.postMessage("resize", "*");
}

const toggleSwitch = document.querySelector('.theme-switch input[type="checkbox"]');

function switchTheme(e) {
    if (e.target.checked) {
        document.documentElement.setAttribute('data-theme', 'dark');
        localStorage.setItem('theme', 'dark'); //add this
    }
    else {
        document.documentElement.setAttribute('data-theme', 'light');
    }    
}
toggleSwitch.addEventListener('change', switchTheme, false);

const currentTheme = localStorage.getItem('theme') ? localStorage.getItem('theme') : null;
if (currentTheme) {
    document.documentElement.setAttribute('data-theme', currentTheme);

    if (currentTheme === 'dark') {
        toggleSwitch.checked = true;
    }
}

// FULL SCREEN
(function (){
document.getElementById("full-screen").addEventListener("click", function(e) {
  toggleFullScreen();
}, false);

function toggleFullScreen() {
  if (!document.fullscreenElement) {
    document.documentElement.requestFullscreen();
  } else {
    if (document.exitFullscreen) {
      document.exitFullscreen();
    }
  }
}
})();

// music

function play() {

  var audio = document.getElementById('lagu');
  audio.play();

}

function liat() {

  document.getElementById('galiat').style.visibility = 'visible';

}

function pause() {

  var audio = document.getElementById('lagu');
  audio.pause();

}

function liat() {

  document.getElementById('galiat').style.visibility = 'visible';

}

// skillbar

(function() {

  var SkillsBar = function(bars) {
    this.bars = document.querySelectorAll(bars);
    if (this.bars.length > 0) {
      this.init();
    }
  };

  SkillsBar.prototype = {
    init: function() {
      var self = this;
      self.index = -1;
      self.timer = setTimeout(function() {
        self.action();
      }, 500);


    },
    select: function(n) {
      var self = this,
        bar = self.bars[n];

      if (bar) {
        var width = bar.parentNode.dataset.percent;

        bar.style.width = width;
        bar.parentNode.classList.add("complete");
      }
    },
    action: function() {
      var self = this;
      self.index++;
      if (self.index == self.bars.length) {
        clearTimeout(self.timer);
      } else {
        self.select(self.index);
      }

      setTimeout(function() {
        self.action();
      }, 500);
    }
  };

  window.SkillsBar = SkillsBar;

})();

(function() {
  document.addEventListener("DOMContentLoaded", function() {
    var skills = new SkillsBar(".skillbar-bar");
  });
})();


// AOS
(function () {
  AOS.init();
})();

// page scrool

(function (){

  $('.page-scrool').on('click', function(e) {

    var tujuan = $(this).attr('href');

    var elementTujuan = $(tujuan);

    $('body').animate({

      scrollTop: elementTujuan.offset().top -150

    }, 1250, 'EaseInOutExpo');

    e.preventDefault();

  });
})();



//Get the button:
mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 30 || document.documentElement.scrollTop > 30) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}



// preload
var overlay = document.getElementById("overlay"); /* untuk mengambil elemen berdasarkan id yang ada id html */

window.addEventListener('load', function()
{
	overlay.style.display = 'none';
})
1
2
3
4
5
6
var overlay = document.getElementById("overlay"); /* untuk mengambil elemen berdasarkan id yang ada id html */
 
window.addEventListener('load', function()
{
	overlay.style.display = 'none';
})
// end preload