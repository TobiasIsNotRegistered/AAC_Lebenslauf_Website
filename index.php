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
<script src="https://www.w3schools.com/lib/w3.js"></script>
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
      <a href="#"><div class="logo" id="logo-link"></div></a>
      
      <div class=info>  

        Tobias Sigel
        </br> <div class="menu__link"><a href="mailto:tobias.sigel@students.fhnw.ch"><i class="fa fa-envelope" aria-hidden="true"></i> mail me!</a></div>
      </div>
      
    </div>
    <ul class="menu__list">
      <li class="menu__item" id="welcome-link" > <a href="#" class="menu__link"><i class="fa fa-facebook-square">  </i> Welcome</a></li>
      <li class="menu__item" id="cv-link">       <a href="#" class="menu__link"><i class="fa fa-info-circle">      </i> Curriculum Vitae</a></li>
      <li class="menu__item" id="projects-link"> <a href="#" class="menu__link"><i class="fa fa-product-hunt">     </i> Projects</a></li>   
      <li class="menu__item" id="contact-link">  <a href="#" class="menu__link"><i class="fa fa-product-hunt">     </i> Contact</a></li>
     
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


<div w3-include-html="footer.html"></div>
    
</div class="container">

<!-- CV -->

<div class ="container" id="cv-container">
    
    <div class="titel">
    <h2>Curriculum vitae</h2>
    <div class="menu__link"><a href="mailto:tobias.sigel@students.fhnw.ch"><i class="fa fa-envelope" aria-hidden="true"></i> mail me!</a></div>  |   <div class="menu__link"><a href="documents\CV_TobiasSigel_de.pdf" download><i class="fa fa-download" aria-hidden="true"></i> download CV</a></div>
    </div>
   
   <div class="cv-list">      
    
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
             <span class="text">Alternative service (in lieu of military service) in KSB, Gardening & facility management. Baden, AG</span>    
        </li>
         <li>
             <span class="date">2014 - 2015</span>
             <span class="duration">8 months</span>
             <span class="text">Civil engineer at Ingenieurbüro Senn AG, support of civil engineering projects. Nussbaumen, AG</span>          
        </li>
        <li>
             <span class="date">2013 - 2014 </span>
             <span class="duration">8 months</span> 
             <span class="text">Alternative service (in lieu of military service) at Stage-on-air, supervising employees and coordinating workloads. Aarau, AG</span>        
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

<div w3-include-html="footer.html"></div>
</div class ="container">
   
<!-- projects -->

<div class ="container" id ="projects-container">

 <div class="titel">
    <h2>projects: under construction</h2>
     <div class="menu__link"><a href="mailto:tobias.sigel@students.fhnw.ch"><i class="fa fa-envelope" aria-hidden="true"></i> mail me!</a></div> 
    </div>

 <div class="projects-list">      

      <ul>
        <li>
             <span class="title_1">This website</span>  
             <span class="title_2">CV hosted on a Raspberry Pi</span>   
             <span class="text">I always wanted to make my own website since I started studying IT. The raspberry was the perfect solution to host it on my own space and learn everything related to it. The case was 3D-printed at FHNW-Windisch, the blueprints are from thingyverse.com </span>
             <span class="keywords">Keywords: Raspbian/Linux, PortForwarding/staticIP's, Html5, CSS3, JS, PHP, Sass, Responsive Web-Design</span> 
             <span class="sources"><div class="menu__link"><a href="https://github.com/TobiasIsNotRegistered/tobiasisnotregistered.github.io/tree/loaderScreenAndMore"><i class="fa fa-github" aria-hidden="true"></i> GitHub-Link</a></div></span>      
             <a href="https://imgur.com/nFBbZch"><img src="https://i.imgur.com/nFBbZch.jpg" title="source: imgur.com" width="100%" /></a>
             <a href="https://imgur.com/Zfc4Tm0"><img src="https://i.imgur.com/Zfc4Tm0.jpg" title="source: imgur.com" width="100%" /></a> 
        </li>

        <li>
            <span class="title_1">GroupHub</span>  
             <span class="title_2">IP5, FHNW Windisch</span>   
             <span class="text">The scope of the project was to design and implement a showcase for OpenDolphin, a framework which utilizes best practices from MVC, MVVM, Command- and other well-known design-patterns. OpenDolphin is being developed by Canoo Engineering AG. After learning how to work with the framework during the initial phase, we decided to alter the project's specifications and implement multiple clients during the course of that semester. The final output included a server application, an android application as well as barebones JS and JavaFX clients. </span>
             <span class="keywords">Keywords:  OpenDolphin, JavaScript, Java, JavaFX, Android </span> 
             <span class="sources"><a href="http://www.canoo.com" class = "menu__link"><i class="fa fa-external-link" aria-hidden="true"></i> Canoo Engineering</a></span> 
             
             <a href="https://imgur.com/mCU0Htj"><img src="https://i.imgur.com/mCU0Htj.jpg" title="source: imgur.com" width="100%"/></a>
             <a href="https://imgur.com/CfU2vHY"><img src="https://i.imgur.com/CfU2vHY.jpg" title="source: imgur.com" width="100%" /></a>
        </li>

        <li>
            <span class="title_1">SVIN</span>  
             <span class="title_2">IP3, FHNW Windisch</span>   
             <span class="text">A website made for SVIN ("Schweizerische Vereinigung der Ingenieurinnen"). SVIN's goal regarding this project was to promote MINT-professions for female students. The proposed solution on which we settled was to deliver a website which involved the following features: Info- & landing page, (Sv)infographics, timelime about past & future events, a space to read biographies of famous female engineers, a member-area for networking and finally, the site should be available in french as well as in german. After evaluating the requirements our team decided to use WordPress, as it was well documented and widely used. In the first semester of this project, my role was the one of the requirement-engineer. I had to make sure that all requirements were well documented and that there were no misconceptions between the development team (us) and the customer, as they usually generate a lot of useless information and can cost a lot of time. The second semester was more flexible in terms of roles; altough I was assigned the role of information-manager, we often switched tasks or reassigned them as it made sense. </span>
             <span class="keywords">Keywords: WordPresse, BuddyPress, Requirements-Engineering </span> 
             <span class="sources">
            <a href="http://www.svin.ch/cms/nc/de/home.html" class = "menu__link"><i class="fa fa-external-link" aria-hidden="true"></i>SVIN (official - not by us)</a>
              </br>
             <a href="https://svin25.ch/" class = "menu__link"><i class="fa fa-external-link" aria-hidden="true"></i>SVIN (our page)</a>
           </span> 
             
             
        </li>       
      </ul>
   </div>

<div w3-include-html="footer.html"></div>

</div class="container">

<!-- contacts -->

<div class ="container" id ="contact-container">

 <div class="titel">
    <h2>contact: </h2>
    <p> this page is currently under construction. please come again later!
</div>

<div w3-include-html="footer.html"></div>
 
</div class="container">


</main>
</body>


<!-- *************************** JS: Include Footer************************** -->

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
    w3.includeHTML();
    }

    function hideAllDivs(){
    document.getElementById('landingpage-container').style.display = 'none';  
    document.getElementById('cv-container').style.display = 'none';
    document.getElementById('projects-container').style.display = 'none';
    document.getElementById('contact-container').style.display = 'none';
    }

};
</script>



