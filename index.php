<!-- meta -->
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<meta name="author" content="Tobias Sigel">
<meta name="keywords" content="Tobias, Sigel, Curriculum, Vitae">
<meta name="description" content="Curriculum vitae Tobias Sigel">

<title>Tobias Sigel</title>

<link rel="stylesheet" type="text/css" href="css/menu.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/loader.css">

</head>


<body>

<!-- used for loader -->
<div id="loader"></div>

<header class="header" id="headerID">
 <div class="burger">   

    <div class="burger__patty"></div>
    <div class="burger__patty"></div>
    <div class="burger__patty"></div>
    <div class="burger__bg"></div>
</div>

<!-- menu -->
  <nav class="menu">
    <div class="menu__brand">
      <a href="#"><div class="logo" id="logo-link"></div></a></br>
      <div class=info>
        
        Tobias Sigel </br>
        Aargau, Switzerland </br>
        <div class="menu__link"><a href="mailto:tobias.sigel@students.fhnw.ch"><i class="fa fa-envelope" aria-hidden="true"></i> mail me!</a></div></br>
       
      </div>
    </div>
    <ul class="menu__list">
      <li class="menu__item" id="welcome-link" > <a href="#" class="menu__link"><i class="fa fa-facebook-square">  </i> Welcome</a></li>
      <li class="menu__item" id="cv-link">       <a href="#" class="menu__link"><i class="fa fa-info-circle">      </i> Curriculum Vitae</a></li>
      <li class="menu__item" id="projects-link"> <a href="#" class="menu__link"><i class="fa fa-product-hunt">     </i> Projects</a></li>
      <li class="menu__item" id="about-link">    <a href="#" class="menu__link"><i class="fa fa-product-hunt">     </i> About me</a></li>      
      <li class="menu__item" id="contact-link">  <a href="#" class="menu__link"><i class="fa fa-product-hunt">     </i> Contact</a></li>
      <!-- 
      <li class="menu__item"><a href="https://facebook.com/TobiasSigel" target="_blank" class="menu__link menu__link--social"><i class="fa fa-facebook-square"></i>facebook</a></li>
      <li class="menu__item"><a href="https://soundcloud.com/shockwav1" target="_blank" class="menu__link menu__link--social"><i class="fa fa-soundcloud"></i>soundcloud</a></li>
    -->
     
    </ul>
  </nav>  

</header>

<!-- ***************************** MAIN-CONTENT********************************** -->

<main>

<!-- landingpage -->

<div class="container" id="landingpage-container">
<div class="titel">
  <h1>Welcome </h1>  
  today's <?php echo date('l, F jS, Y'); ?>
  <p> <i class="fa fa-clock-o" aria-hidden="true"></i> <a id="time"></a></p>
  <div class="emptydiv"></div>



 You are visitor number: <?php include("visitor-counter.php"); echo IncrementCounter(); ?>

  <p> This website is currently hosted on a RaspberryPi 3B, Apache2-Server and online since <div class="php_output"><?php

          $str   = file_get_contents('/proc/uptime');
          $num   = floatval($str);
          $secs  = fmod($num, 60); $num = (int)($num / 60);
          $mins  = $num % 60;      $num = (int)($num / 60);
          $hours = $num % 24;      $num = (int)($num / 24);
          $days  = $num;

          echo  $days . " days, " . $hours . " hours, " . $mins . " minutes and " . intval($secs) . " seconds!";?></div> 
  </p>
 
</div class="titel"> 


  <div class="footer">
    <p><i class="fa fa-copyright" aria-hidden="true"></i> Tobias Sigel, inspired by: </p>
    <div class="menu__link"><p><a href="https://codepen.io/ettrics/pen/JoaaxW"><span class="shake">Ettrics' Full-Screen Menu Overlay @ codepen.io</span></a></p></div>
  </div class="footer">
    
</div class="container">

<!-- CV -->

<div class ="container" id="cv-container">
    
    <div class="titel">
    <h2>Curriculum vitae</h2>
    <div class="menu__link"><a href="mailto:tobias.sigel@students.fhnw.ch"><i class="fa fa-envelope" aria-hidden="true"></i> mail me!</a></div>  |   <div class="menu__link"><a href="documents\CV_TobiasSigel_de.pdf" download><i class="fa fa-download" aria-hidden="true"></i> download CV</a></div>
    </div>
   
   <div class="cv-list">      
      <div class="profile_img"></div>

      <ul>
        <li>
             <span class="date">since 2017</span>  
             <span class="duration">until now</span>   
             <span class="text">database evaluation & optimization at DynaEngineering AG. Windisch, AG</span>   
        </li>
        <li>
             <span class="date">since 2015</span>  
             <span class="duration">until now</span>   
             <span class="text">Bachelor of Science in IT, Course iCompetence. FHNW Windisch, AG</span>   
        </li>
        <li>
             <span class="date">2015 - 2015</span>  
             <span class="duration">4 months</span>     
             <span class="text">Community service at KSP Baden, Gardening & facility management. Baden, AG</span>    
        </li>
         <li>
             <span class="date">2014 - 2015</span>
             <span class="duration">8 months</span>
             <span class="text">Civil engineer at Ingenieurbüro Senn AG, support of civil engineering projects. Nussbaumen, AG</span>          
        </li>
        <li>
             <span class="date">2013 - 2014 </span>
             <span class="duration">8 months</span> 
             <span class="text">Community service at Stage-on-air, supervising employees and coordinating workloads. Aarau, AG</span>        
        </li>
        <li>
             <span class="date">2010 - 2013 </span>
             <span class="duration">3 years</span> 
             <span class="text">Technical vocational baccalaurate diploma, Berufsschule Lenzburg. Lenzburg, AG</span>      
        </li>
        <li>
             <span class="date">2009 - 2013 </span>
             <span class="duration">4 years</span>
             <span class="text">Apprenticeship civil engineering, Porta AG. Brugg, AG / Interlaken, BE</span>       
        </li>
        <li>
             <span class="date">2006 - 2009</span>
             <span class="duration">3 years</span>
             <span class="text">Bezirksschule Klingnau. Klingnau, AG</span>        
        </li>
        <li>
             <span class="date">2000 - 2006</span> 
             <span class="duration">6 years</span> 
             <span class="text">elementary school. Zürich ZH</span>      
        </li>
      </ul>
   </div>

<div class="footer">
    <p><i class="fa fa-copyright" aria-hidden="true"></i> Tobias Sigel, inspired by: </p>
    <div class="menu__link"><p><a href="https://codepen.io/ettrics/pen/JoaaxW"><span class="shake">Ettrics' Full-Screen Menu Overlay @ codepen.io</span></a></p></div>
  </div class="footer">
</div>

<!-- about -->

<div class ="container" id ="about-container">

 <div class="titel">
    <h2>about: under construction</h2>
    <p> this page is currently under construction. please come again later!
    </div>

<div class="footer">
    <p><i class="fa fa-copyright" aria-hidden="true"></i> Tobias Sigel, inspired by: </p>
    <div class="menu__link"><p><a href="https://codepen.io/ettrics/pen/JoaaxW"><span class="shake">Ettrics' Full-Screen Menu Overlay @ codepen.io</span></a></p></div>
  </div class="footer">
</div>
</div>

<!-- projects -->

<div class ="container" id ="projects-container">

 <div class="titel">
    <h2>projects: under construction</h2>
    <p> this page is currently under construction. please come again later!
    </div>

<div class="footer">
    <p><i class="fa fa-copyright" aria-hidden="true"></i> Tobias Sigel, inspired by: </p>
    <div class="menu__link"><p><a href="https://codepen.io/ettrics/pen/JoaaxW"><span class="shake">Ettrics' Full-Screen Menu Overlay @ codepen.io</span></a></p></div>
  </div class="footer">
</div>
</div>

<!-- contacts -->

<div class ="container" id ="contact-container">

 <div class="titel">
    <h2>contact: under construction</h2>
    <p> this page is currently under construction. please come again later!
    </div>

<div class="footer">
    <p><i class="fa fa-copyright" aria-hidden="true"></i> Tobias Sigel, inspired by: </p>
    <div class="menu__link"><p><a href="https://codepen.io/ettrics/pen/JoaaxW"><span class="shake">Ettrics' Full-Screen Menu Overlay @ codepen.io</span></a></p></div>
  </div class="footer">
</div>
</div>

</main>
</body>


<!-- *************************** JS: MENU************************************ -->

<script type="text/javascript">
(function() {
  
  var Menu = (function() {
    var logo = document.querySelector('#logo-link')
    var burger = document.querySelector('.burger');
    var menu = document.querySelector('.menu');
    var menuList = document.querySelector('.menu__list');
    var brand = document.querySelector('.menu__brand');
    var menuItems = document.querySelectorAll('.menu__item');
    
    var active = false;
    
    var toggleMenu = function() {
      if (!active) {
        menu.classList.add('menu--active');
        menuList.classList.add('menu__list--active');
        brand.classList.add('menu__brand--active');
        burger.classList.add('burger--close');
        for (var i = 0, ii = menuItems.length; i < ii; i++) {
          menuItems[i].classList.add('menu__item--active');
        }
        
        active = true;
      } else {
        menu.classList.remove('menu--active');
        menuList.classList.remove('menu__list--active');
        brand.classList.remove('menu__brand--active');
        burger.classList.remove('burger--close');
        for (var i = 0, ii = menuItems.length; i < ii; i++) {
          menuItems[i].classList.remove('menu__item--active');
        }
        
        active = false;
      }
    };
    
    var bindActions = function() {
      burger.addEventListener('click', toggleMenu, false);
 
      for (var i = 0, ii = menuItems.length; i < ii; i++) {
          menuItems[i].addEventListener('click', toggleMenu, false); 
        }  
      logo.addEventListener('click', toggleMenu, false);  
    };
    
    var init = function() {
      bindActions();
     
    };
    
    return {
      init: init
    };
    
  }());
  
  Menu.init();

  
}());
</script>

<!-- *************************** JS: CURRENT TIME************************************ -->

<script>
(function () {

    function checkTime(i) {
        return (i < 10) ? "0" + i : i;
    }

    function startTime() {
        var today = new Date(),
            h = checkTime(today.getHours()),
            m = checkTime(today.getMinutes()),
            s = checkTime(today.getSeconds());
        document.getElementById('time').innerHTML = h + ":" + m + ":" + s;
        t = setTimeout(function () {
            startTime()
        }, 1000);
    }
    startTime();
})();
</script>

<!-- *************************** JS: HIDE DIVS************************************ -->
<script type="text/javascript">

  window.onload = function() { 
    //only display the landingpage-container when entering the site
    triggerLoader(); 
    document.getElementById('headerID').style.display = 'none';   
    hideAllDivs();

    //adding event-listeners to the menu-buttons
    document.getElementById('welcome-link').addEventListener('click', function (){  
      hideAllDivs(); 
      document.title = "Welcome!";
      document.getElementById('landingpage-container').style.display = 'block';      
      
    }, false);

    document.getElementById('cv-link').addEventListener('click', function (){  
      hideAllDivs(); 
      document.title = "Curriculum vitae";
      document.getElementById('cv-container').style.display = 'block';      
      
    }, false);
  
     document.getElementById('about-link').addEventListener('click', function (){  
      hideAllDivs();  
      document.title = "about";
      document.getElementById('about-container').style.display = 'block';      
     
    }, false);

     document.getElementById('projects-link').addEventListener('click', function (){  
      hideAllDivs(); 
      document.title = "my projects";
      document.getElementById('projects-container').style.display = 'block';      
     
    }, false);

     document.getElementById('contact-link').addEventListener('click', function (){  
      hideAllDivs();  
      document.title = "contact";
      document.getElementById('contact-container').style.display = 'block';      
     
    }, false);

     document.getElementById('logo-link').addEventListener('click', function (){    
       hideAllDivs();
       document.title = "about";
      document.getElementById('about-container').style.display = 'block';      
      
    }, false);


     function triggerLoader() {
    var myVar = setTimeout(showPage, 2000);
    }

    function showPage() {
    document.getElementById("loader").style.display = "none";
    document.getElementById("landingpage-container").style.display = "block";
    document.getElementById('headerID').style.display = 'block';
    }

    function hideAllDivs(){
    document.getElementById('landingpage-container').style.display = 'none';  
    document.getElementById('cv-container').style.display = 'none';
    document.getElementById('about-container').style.display = 'none';
    document.getElementById('projects-container').style.display = 'none';
    document.getElementById('contact-container').style.display = 'none';
    }

};
</script>



