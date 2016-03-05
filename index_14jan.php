<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, maximum-scale=1">
<title>Welcome to Salawir</title>
<link rel="icon" href="icon.png" type="image/png">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/linecons.css" rel="stylesheet" type="text/css">
<link href="css/font-awesome.css" rel="stylesheet" type="text/css">
<link href="css/responsive.css" rel="stylesheet" type="text/css">
<link href="css/animate.css" rel="stylesheet" type="text/css">

<link href='http://fonts.googleapis.com/css?family=Lato:400,900,700,700italic,400italic,300italic,300,100italic,100,900italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Dosis:400,500,700,800,600,300,200' rel='stylesheet' type='text/css'>

<!--[if IE]><style type="text/css">.pie {behavior:url(PIE.htc);}</style><![endif]-->

<script type="text/javascript" src="js/jquery.1.8.3.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/jquery-scrolltofixed.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/jquery.isotope.js"></script>
<script type="text/javascript" src="js/wow.js"></script>
<script type="text/javascript" src="js/classie.js"></script>
<script type="text/javascript" src="js/jssor.slider.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>

<!--[if lt IE 9]>
    <script src="js/respond-1.1.0.min.js"></script>
    <script src="js/html5shiv.js"></script>
    <script src="js/html5element.js"></script>
<![endif]-->

<script type="text/javascript">


	$(document).ready(function(e) {
        $('.res-nav_click').click(function(){
		$('ul.toggle').slideToggle(600)	
			});	
			
	$(document).ready(function() {
$(window).bind('scroll', function() {
         if ($(window).scrollTop() > 0) {
             $('#header_outer').addClass('fixed');
         }
         else {
             $('#header_outer').removeClass('fixed');
         }
    });
	
	  });
	  

		    });	
function resizeText() {
	var preferredWidth = 767;
	var displayWidth = window.innerWidth;
	var percentage = displayWidth / preferredWidth;
	var fontsizetitle = 25;
	var newFontSizeTitle = Math.floor(fontsizetitle * percentage);
	$(".divclass").css("font-size", newFontSizeTitle)
}


function initialize() {
  var posisi = new google.maps.LatLng(-6.23021634584403,106.828383207321);
  var pengaturan = {
	zoom: 16,
	center: posisi
  }
  var map = new google.maps.Map(document.getElementById('peta'), pengaturan);

  var tanda = new google.maps.Marker({
	 map: map,
	position: posisi,
   
  });
}
google.maps.event.addDomListener(window, 'load', initialize);
</script>
</head>
<body>

<!--Header_section-->
<header id="header_outer">
  <div class="container">
    <div class="header_section">
      <div class="logo"><a href="#top_content"><img src="img/logob.png" alt=""></a></div>
      <nav class="nav" id="nav">
        <ul class="toggle">
          <li><a href="#top_content">Home</a></li>
          <li><a href="#service">Services</a></li>
		  <li><a href="#Portfolio">Menu</a></li>
		  <li><a href="#menu">Galery</a></li>
          
          <li><a href="#client_outer">Clients</a></li>
          <li><a href="#team">Team</a></li>
		  <li><a href="#work_outer">About</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
        <ul class="">
          <li><a href="#top_content">Home</a></li>
          <li><a href="#service">Services</a></li>
		  <li><a href="#Portfolio">Menu</a></li>
		  <li><a href="#menu">Galery</a></li>          
          <li><a href="#client_outer">Clients</a></li>
          <li><a href="#team">Team</a></li>
		  <li><a href="#work_outer">About</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </nav>
      <a class="res-nav_click animated wobble wow"  href="javascript:void(0)"><i class="fa-bars">fghjklkjgfdsdfgh</i></a> </div>
  </div>
</header>
<!--Header_section--> 

<script>
        jssor_1_slider_init = function() {
            
            var jssor_1_options = {
              $AutoPlay: true,
              $SlideWidth: 600,
              $Cols: 2,
              $Align: 100,
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };
            
            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
            
            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizing
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 1400);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", $Jssor$.$WindowResizeFilter(window, ScaleSlider));
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            //responsive code end
        };
		
	
    </script>
	
     <style>
        /* jssor slider bullet navigator skin 01 css */
        /*
        .jssorb01 div           (normal)
        .jssorb01 div:hover     (normal mouseover)
        .jssorb01 .av           (active)
        .jssorb01 .av:hover     (active mouseover)
        .jssorb01 .dn           (mousedown)
        */
        
		.jssorb01 {
            position: absolute;
        }
		
		
		
        .jssorb01 div, .jssorb01 div:hover, .jssorb01 .av {
            position: absolute;
            /* size of bullet elment */
            width: 6px;
            height: 6px;
            filter: alpha(opacity=70);
            opacity: .7;
            overflow: hidden;
            cursor: pointer;
            
        }
		
        .jssorb01 div { background-color: white; }
        .jssorb01 div:hover, .jssorb01 .av:hover { background-color: #49b5e7; }
        .jssorb01 .av { background-color: #49b5e7; }
        .jssorb01 .dn, .jssorb01 .dn:hover { background-color: #ffffff; }  

  
        .jssora13l, .jssora13r {
            display: block;
            position: absolute;
            /* size of arrow element */
            width: 40px;
            height: 50px;
            cursor: pointer;
            /*background: url('img/img/aa.png') no-repeat;*/
            overflow: hidden;
        }
        .jssora13l { background-position: -10px -35px; }
        .jssora13r { background-position: -70px -35px; }
        .jssora13l:hover { background-position: -130px -35px; }
        .jssora13r:hover { background-position: -190px -35px; }
        .jssora13l.jssora13ldn { background-position: -250px -35px; }
        .jssora13r.jssora13rdn { background-position: -310px -35px; }
		
		
		
    </style>
	
	
	
	
<!--Top_content-->
<section id="top_content" class="top_cont_outer">
  <div class="top_cont_inner">
  <div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 800px; height: 300px; overflow: hidden; visibility: hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
            <div style="position:absolute;display:block;background:url('img/img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
        </div>
        <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 800px; height: 300px; overflow: hidden;">
            <div data-p="112.50" style="display: none;">
                <img data-u="image" src="img/img/b1.jpg" />
            </div>
            <!--<div data-p="112.50" style="display: none;">
                <img data-u="image" src="img/img/b2.jpg" />
            </div>-->
            <div data-p="112.50" style="display: none;">
                <img data-u="image" src="img/img/b3.jpg" />
            </div>
            <div data-p="112.50" style="display: none;">
                <img data-u="image" src="img/img/b4.jpg" />
            </div>
            <div data-p="112.50" style="display: none;">
                <img data-u="image" src="img/img/b5.jpg" />
            </div>
            <!--<div data-p="112.50" style="display: none;">
                <img data-u="image" src="img/img/b6.jpg" />
            </div>-->
        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb01" style="bottom:16px;right:16px;" data-autocenter="1">
            <div data-u="prototype" style="width:12px;height:12px;"></div>
        </div>
        <!-- Arrow Navigator -->
        <span data-u="arrowleft" class="jssora13l" style="top:0px;left:30px;width:40px;height:50px;" data-autocenter="2"></span>
        <span data-u="arrowright" class="jssora13r" style="top:0px;right:30px;width:40px;height:50px;" data-autocenter="2"></span>
        <!--<a href="http://www.jssor.com" style="display:none">Bootstrap Carousel</a>-->
    </div>
    <script>
        jssor_1_slider_init();
    </script>
    <div class="container">
      <div class="top_content">
        <div class="row">
          <div class="col-lg-5 col-sm-7">
            <div class="top_left_cont flipInY wow animated">
              <h3 class="insta animated bounceIn wow delay-02s">delicious &amp; yummy!</h3>
			  <h2 class="insta animated bounceIn wow delay-01s">LAGI BAPER BRO?</h2>
              <!--<h2>creating websites that
                make you stop &amp; stare</h2>-->
              <p> Buat temans yg ngantor di area Mega Kuningan yang mungkin lagi BAPER nih&#128543; 
			  kite punya ramuan ajaib untuk temans apalagi yang udah LAPER&#128540;
			  pasti bisa bikin kamu jadi SUPEEEERR&#128526;<br>super fulll maaaann &#128516; <br>
			  Woles guys ramuannya didieu&#128521;
			  </p>
              <a href="#service" class="learn_more2">Learn more guys</a> </div>
          </div>
          <div class="col-lg-7 col-sm-5"> </div>  
        </div>
      </div>
    </div>
  </div>
</section>
<!--Top_content--> 

<!--Service-->
<section  id="service">
  <div class="container">
    <h2>Services</h2>
    <div class="service_area">
      <div class="row">
        <div class="col-lg-4">
          <div class="service_block">
            <div class="service_icon delay-03s animated wow  zoomIn"> <span><i class="fa-flash"></i></span> </div>
            <h3 class="animated fadeInUp wow">Quick Salawir</h3>
            <p class="animated fadeInDown wow">Gabung aja makan bareng kite temans... Kite pasti ngertin perasaan kamu&#128525; 
			kite pengen jadi sahabat kalian dan kite bakalan nyiapin makanan super enak buat kamu temans &#128523; #gakpakelama</p>
			
          </div>
        </div>
        <div class="col-lg-4">
          <div class="service_block">
            <div class="service_icon icon2  delay-03s animated wow zoomIn"> <span><i class="fa-comments"></i></span> </div>
            <h3 class="animated fadeInUp wow">Friendly Support</h3>
            <p class="animated fadeInDown wow">Kite pengen sharing bareng temans, biar kenal lebih dekat seperti pepatah yang mengatakan "tak kenal kita sayang apalagi udah kenal.." heheheehe jangan baper yak &#128522;</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="service_block">
            <div class="service_icon icon3  delay-03s animated wow zoomIn"> <span><i class="fa-shield"></i></span> </div>
            <h3 class="animated fadeInUp wow">Top Security</h3>
            <p class="animated fadeInDown wow">Tapi tenang aja temans, kalo kalian jadi baper kite bakalin claim, karena baper itu cuman buat ayam BAPER "bakar pake perasaan" hue..hue..hue...&#128523;</p>
          </div>
        </div>
      </div>
    </div>
	
  </div>
</section>
<!--Service-->





<!--new_portfolio--> 

<!-- Portfolio -->
<section id="Portfolio" class="content"> 
  <div class="section-title">
      <h2>Menu</h2>
  </div>
  <h3 class="animated fadeInUp wow" align="center">CHECK OUT OUR MENU AND SELECT SOMETHING FOR EVERYONE</h3>
  <!-- Container -->
  
  <!-- <div class="container portfolio-title"> </div>-->

  
  <div class="portfolio-top"></div>
  
  <!-- Portfolio Plus Filters -->
  <div class="portfolio"> 
    
    <!-- Portfolio Filters -->
    <div id="filters" class="sixteen columns">
      <ul class="clearfix">
        <li><a id="all" href="#" data-filter="*" class="active">
          <h5>All</h5>
          </a></li>
        <li><a class="" href="#" data-filter=".baper">
          <h5>Ayam</h5>
          </a></li>
        <li><a class="" href="#" data-filter=".sayuran">
          <h5>Sayuran</h5>
          </a></li>
        <li><a class="" href="#" data-filter=".minuman">
          <h5>Minuman</h5>
          </a></li>
        <li><a class="" href="#" data-filter=".yellow">
          <h5>Yellow</h5>
          </a></li>
        <li><a class="" href="#" data-filter=".menutambahan">
          <h5>Menu Tambahan</h5>
          </a></li>
      </ul>
    </div>
    <!--/Portfolio Filters --> 
    
    <!-- Portfolio Wrap -->
    <div class="isotope" style="position: relative; overflow: hidden; height: 480px;" id="portfolio-wrap"> 
      
      
	  <!-- Portfolio Item Normal Expander -->
      <div style="position: absolute; left: 0px; top: 0px; transform: translate3d(674px, 0px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four  baper  isotope-item">
        <div class="portfolio-image"> <img src="img/a/a1.jpg" alt="Portfolio 1"> </div>
        <div class="project-overlay">
          <div class="open-project-link"> <a class="open-project"  title="Open Project"></a> </div>
          <div class="project-info">
            <div class="zoom-icon"></div>
            <h4 class="project-name">Ayam Panggang RATAHAN</h4>
            <p class="project-categories">"rasa tambah gak bisa tahan" </p>
			<h4 class="project-name">Rp 20,000</h4>
          </div>
        </div>
      </div>
      <!--/Portfolio Item Normal Expander --> 
	  
	  <!-- Portfolio Item External Project  -->
      <div style="position: absolute; left: 0px; top: 0px; transform: translate3d(674px, 240px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four  baper menutambahan isotope-item">
        <div class="portfolio-image"> <img src="img/a/a10.jpg" alt="Portfolio 1"> </div>
        <a  class="external">
        <div class="project-overlay">
          <div class="project-info">
            <div class="zoom-icon"></div>
            <h4 class="project-name">Ayam Baper</h4>
            <p class="project-categories">"bakar pake perasaan"</p> 
			<h4 class="project-name">Rp. 20,000</h4>
          </div>
        </div>
        </a> </div>
      <!--/Portfolio Item External Project  --> 
      
      <!-- Portfolio Item Video Expander  -->
      <div style="position: absolute; left: 0px; top: 0px; transform: translate3d(337px, 0px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four  sayuran isotope-item">
        <div class="portfolio-image"> <img src="img/a/kangkung.jpg" alt="Portfolio 1"> </div>
        <div class="project-overlay">
          <div class="open-project-link"> <a class="open-project"  title="Open Project"></a> </div>
          <div class="project-info">
            <div class="zoom-icon"></div>
            <h4 class="project-name">Cah Kangkung</h4>
            <p class="project-categories">"sayur kangkung yang gurih dan segar"</p> 
			<h4 class="project-name">Rp. 8,000</h4>
          </div>
        </div>
      </div>
      <!--/Portfolio Item Video Expander  --> 
      
	  <!-- Portfolio Item FullScreen Expander -->
      <div style="position: absolute; left: 0px; top: 0px; transform: translate3d(1011px, 0px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four  minuman  isotope-item">
        <div class="portfolio-image"> <img src="img/a/jusalpukat.jpg" alt="Portfolio 1"> </div>
        <div class="project-overlay">
          <div class="open-project-link"> <a class="open-project"  title="Open Project"></a> </div>
          <div class="project-info">
            <div class="zoom-icon"></div>
            <h4 class="project-name">Jus Alpukat</h4>
            <p class="project-categories">Rp. 8,000</p> 
          </div>
        </div>
      </div>
      <!-- Portfolio Item FullScreen Expander --> 
	  
      <!-- Portfolio Item With PrettyPhoto  -->
      <div style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four   yellow isotope-item">
        <div class="portfolio-image"> <img src="img/a/yellow.jpg"  alt="Portfolio 1"> </div>
        <a title="g1" rel="prettyPhoto[galname]" >
        <div class="project-overlay">
          <div class="project-info">
            <div class="zoom-icon"></div>
            <h4 class="project-name">Yellow</h4>
            <p class="project-categories">"Sarapan sehat di pagi hari" </p> 
			<h4 class="project-name">Rp. 10.000</h4>
						
          </div>
        </div>
        </a> </div>
      <!--/Portfolio Item With PrettyPhoto  --> 
      
      
      
      <!-- Portfolio Item FullScreen Expander -->
      <div style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 240px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four  sayuran isotope-item">
        <div class="portfolio-image"> <img src="img/a/gado.jpg" alt="Portfolio 1"> </div>
        <div class="project-overlay">
          <div class="open-project-link"> <a class="open-project"  title="Open Project"></a> </div>
          <div class="project-info">
            <div class="zoom-icon"></div>
            <h4 class="project-name">Gados</h4>
            <p class="project-categories">Gado-gado dengan sambal kacang yang lezat</p>
			<h4 class="project-name">Rp 10,000</h4>
          </div>
        </div>
      </div>
      <!--/Portfolio Item FullScreen Expander --> 
      
      <!-- Portfolio Item Normal Expander -->
      <div style="position: absolute; left: 0px; top: 0px; transform: translate3d(337px, 240px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four  menutambahan isotope-item">
        <div class="portfolio-image"> <img src="img/a/pudding.jpg" alt="Portfolio 1"> </div>
        <div class="project-overlay">
          <div class="open-project-link"> <a class="open-project"  title="Open Project"></a> </div>
          <div class="project-info">
            <div class="zoom-icon"></div>
            <h4 class="project-name">Pudding Cokelat</h4>
            <p class="project-categories">Rp. 6,000</p> 
          </div>
        </div>
      </div>
      <!--/Portfolio Item Normal Expander --> 
      
      
      
      <!-- Portfolio Item With PrettyPhoto  -->
      <div style="position: absolute; left: 0px; top: 0px; transform: translate3d(1011px, 240px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four   minuman isotope-item">
        <div class="portfolio-image"> <img src="img/a/esjeruk.jpg" alt="Portfolio 1"> </div>
        <a title="Stereo Headphones" rel="prettyPhoto[galname]" >
        <div class="project-overlay">
          <div class="project-info">
            <div class="zoom-icon"></div>
            <h4 class="project-name">Es Jeruk</h4>
            <p class="project-categories">Rp. 6,000</p>
          </div>
        </div>
        </a> </div>
      <!--/Portfolio Item With PrettyPhoto  --> 
	  
	  
      
    </div>
    <!--/Portfolio Wrap --> 
    
  </div>
  <!--/Portfolio Plus Filters -->
  
  <div class="portfolio-bottom"></div>
  
  <!-- Project Page Holder-->
  <div id="project-page-holder">
    <div class="clear"></div>
    <div id="project-page-data"></div>
  </div>
  <!--/Project Page Holder--> 
  
</section>
<!--/Portfolio --> 

<!--new_portfolio--> 
<!--menu--> 
<section  id="menu">
  <div class="menu">
	<br></br>
    <h2>Galery Salawir</h2>
    <div class="menu_section animated  fadeInUp delay-03s">
      <div class="menu_profile">
        <h3>Rempah-rempah</h3>
        <span>"bumbu khas nusantara"</span> 
		<div class="menu_profile_pic">
			<img class="wow fadeInDown delay-03s" src="img/g1.jpg" alt="">
			<img class="wow fadeInDown delay-06s" src="img/g2.jpg" alt="">
			<img class="wow fadeInDown delay-09s" src="img/g3.jpg" alt="">
		</div>
       </div>
		
      <div class="clear"></div>
    </div>
    <div class="menu_section animated  fadeInDown delay-06s">
      <div class="menu_profile">
        
		<div class="menu_profile_pic">	
			<img class="wow fadeInDown delay-03s" src="img/g4.jpg" alt="">
			<img class="wow fadeInDown delay-06s" src="img/g5.jpg" alt="">
			<img class="wow fadeInDown delay-09s" src="img/g6.jpg" alt="">
			
		</div>
		<div class="clear"></div>
        <div class="quote_arrow2"></div>
    </div>
	<br></br>
      
    </div>
  </div>
</section>
<!--menu--> 

<!--
<section class="main-section paddind" id="Portfolio">
	<div class="container">
    	<h2>Portfolio</h2>
    	<h6>Fresh portfolio of designs that will keep you wanting more.</h6>
	</div>
    
    
</section>   

-->

<section class="main-section" id="client_outer"><!--main-section client-part-start-->
	<div class="client">		
  <h2>Happy Clients</h2>
  <div class="client_area ">
    <div class="client_section animated  fadeInUp wow">
      <div class="client_profile">
        <div class="client_profile_pic"><img src="img/client-pic1.jpg" alt=""></div>
        <h3>Mr. Untung</h3>
        <span>CEO XXX </span> </div>
      <div class="quote_section">
        <div class="quote_arrow"></div>
        <p><b><img src="img/quote_sign_left.png" alt=""></b> Batamang pe Rasa memang mantaaappp bingitzz &#128588; <small><img src="img/quote_sign_right.png" alt=""></small> </p>
      </div>
      <div class="clear"></div>
    </div>
    <div class="client_section animated  fadeInDown wow">
      <div class="client_profile flt">
        <div class="client_profile_pic"><img src="img/client-pic2.jpg" alt=""></div>
        <h3>Mr. Mujur</h3>
        <span>XXX Foundation</span> </div>
      <div class="quote_section flt">
        <div class="quote_arrow2"></div>
        <p><b><img src="img/quote_sign_left.png" alt=""></b> Sukses terus buat salawir  &#128522; <small><img src="img/quote_sign_right.png" alt=""></small> </p>
		<!--<p><b><img src="img/quote_sign_left.png" alt=""></b> Failure is simply the opportunity to begin again, this time more intelligently. <small><img src="img/quote_sign_right.png" alt=""></small> </p>-->
      </div>
      <div class="clear"></div>
    </div>
  </div>
  </div>
</section>
<!--main-section client-part-end-->

<div class="c-logo-part"><!--c-logo-part-start-->
  <div class="container">
    <ul class="delay-06s animated  bounce wow">
	<!--
      <li><a href="javascript:void(0)"><img src="img/c-liogo1.png" alt=""></a></li>
      <li><a href="javascript:void(0)"><img src="img/c-liogo2.png" alt=""></a></li>
      <li><a href="javascript:void(0)"><img src="img/c-liogo3.png" alt=""></a></li>
      <li><a href="javascript:void(0)"><img src="img/c-liogo5.png" alt=""></a></li>
	  -->
    </ul>
  </div>
</div>
<!--c-logo-part-end-->
<section class="main-section team" id="team"><!--main-section team-start-->
  <div class="container">
    <h2>Amazing Team</h2>
    <h6>Take a closer look into our amazing team. We won’t bite.</h6>
    <div class="team-leader-block clearfix">
      <div class="team-leader-box">
        <div class="team-leader wow fadeInDown delay-03s">
          <div class="team-leader-shadow"><a href="javascript:void(0)"></a></div>
          <img src="img/team-leader-pic1.jpg" alt="">
          <ul>
            <li><a href="javascript:void(0)" class="fa-twitter"></a></li>
            <li><a href="javascript:void(0)" class="fa-facebook"></a></li>
            <li><a href="javascript:void(0)" class="fa-pinterest"></a></li>
			<li><a href="https://www.instagram.com/eyfrellikuajang/" class="fa-instagram"></a></li>
			<li><a href="https://www.linkedin.com/profile/view?id=AAkAABChJV8BxZGeizH7TgxkUBY_V54WunXzbvM&authType=NAME_SEARCH&authToken=WHPK&locale=en_US&trk=tyah&trkInfo=clickedVertical%3Amynetwork%2CclickedEntityId%3A278996319%2CauthType%3ANAME_SEARCH%2Cidx%3A1-1-1%2CtarId%3A1448537061222%2Ctas%3Aeyfrel" class="fa-linkedin"></a></li>
          </ul>
        </div>
        <h3 class="wow fadeInDown delay-03s">Eyfrel Likuajang</h3>
        <span class="wow fadeInDown delay-03s">Chief Executive Officer</span>
        <p class="wow fadeInDown delay-03s">"Only God and you can determine your life's path"</p>
      </div>
      <div class="team-leader-box">
        <div class="team-leader  wow fadeInDown delay-06s">
          <div class="team-leader-shadow"><a href="javascript:void(0)"></a></div>
          <img src="img/team-leader-pic2.jpg" alt="">
          <ul>
            <li><a href="https://www.facebook.com/g2ngLvjenz" class="fa-facebook"></a></li>
            <li><a href="https://www.pinterest.com/gerrypowa/" class="fa-pinterest"></a></li>
            <li><a href="https://www.instagram.com/gerrypowa/" class="fa-instagram"></a></li>
			<li><a href="https://plus.google.com/+GerryPowa/" class="fa-google-plus"></a></li>
            <li><a href="https://www.linkedin.com/profile/view?id=AAkAABChJV8BxZGeizH7TgxkUBY_V54WunXzbvM&authType=NAME_SEARCH&authToken=WHPK&locale=en_US&trk=tyah&trkInfo=clickedVertical%3Amynetwork%2CclickedEntityId%3A278996319%2CauthType%3ANAME_SEARCH%2Cidx%3A1-1-1%2CtarId%3A1448537061222%2Ctas%3Aeyfrel" class="fa-linkedin"></a></li>
          </ul>
        </div>
        <h3 class="wow fadeInDown delay-06s">Gerry Powa</h3>
        <span class="wow fadeInDown delay-06s">Product Manager</span>
        <p class="wow fadeInDown delay-06s">"Sometimes we have to disconnect to make a connection"</p>
      </div>
      <div class="team-leader-box">
        <div class="team-leader wow fadeInDown delay-09s">
          <div class="team-leader-shadow"><a href="javascript:void(0)"></a></div>
          <img src="img/team-leader-pic3.jpg" alt="">
          <ul>
            <li><a href="javascript:void(0)" class="fa-twitter"></a></li>
            <li><a href="javascript:void(0)" class="fa-facebook"></a></li>
            <li><a href="javascript:void(0)" class="fa-pinterest"></a></li>
            <li><a href="javascript:void(0)" class="fa-google-plus"></a></li>
			<li><a href="https://www.instagram.com/p_odds/" class="fa-instagram"></a></li>
          </ul>
        </div>
        <h3 class="wow fadeInDown delay-09s">Revoldy Kaumpungan</h3>
        <span class="wow fadeInDown delay-09s">Operation Manager</span>
        <p class="wow fadeInDown delay-09s">"Loneliness is underrated"</p>
      </div>
    </div>
  </div>
</section>
<!--main-section team-end-->

<section id="work_outer"><!--main-section-start-->
<div class="top_cont_latest">
  <div class="container">
    <h2>About Us</h2>	
    <div class="work_section">
      <div class="row">
	  
        <div class="col-lg-6 col-sm-6 wow fadeInLeft delay-05s">
          <div class="service-list">
            <div class="service-list-col1"> <i class="icon-doc"></i> </div>
            <div class="service-list-col2">
              <h3>About SALAWIR</h3>
              <p>    SALAWIR merupakan kata yang di ambil dari suku Minahasa yang berarti menyediakan atau menghidangkan makanan 
			   kepada seseorang serta melayani orang tersebut dengan sebaik mungkin.
			   </p><p>SALAWIR bermula sejak tiga sahabat yang tinggal bersama yang berasal dari Minahasa Tenggara yang mencoba mengais rejeki di ibu kota sebagai karyawan.. 
			   Di balik kesibukan sebagai karyawan ketiga sahabat yang juga memiliki hobi memasak ini sering berkumpul bersama dengan teman-teman para perantau lainnya menikmati waktu yang begitu singkat dengan penuh canda dan tawa
			   dan juga ditemani dengan hidangan masakan kas Minahasa yang sering menemani waktu bersama.<br>			   
			   Dari hobi yang dimiliki ketiga sahabat ini muncul ide untuk mengembangkan usaha kuliner......
			   </p>
            </div>
          </div>
		  <!--
          <div class="service-list">
            <div class="service-list-col1"> <i class="icon-comment"></i> </div>
            <div class="service-list-col2">
              <h3>How to start up?</h3>
              <p>....</p>
            </div>
          </div>
		  
          <div class="service-list">
            <div class="service-list-col1"> <i class="icon-database"></i> </div>
            <div class="service-list-col2">
              <h3>Hosting & Storage</h3>
              <p>Proin iaculis purus consequat digni sem digni ssim. Purus donec porttitora entum.</p>
            </div>
          </div>
          <div class="service-list">
            <div class="service-list-col1"> <i class="icon-cog"></i> </div>
            <div class="service-list-col2">
              <h3>Customization options</h3>
              <p>Proin iaculis purus consequat sem digni ssim. Sem porttitora entum.</p>
            </div>
          </div>
		  -->
		  
          <div class="work_bottom"> <span>Ready to take the plunge?</span> <a href="#contact" class="contact_btn">Contact Us</a> </div>
        </div>
        <figure class="col-lg-6 col-sm-6  text-right wow fadeInUp delay-02s"> </figure>
      </div>
    </div>
  </div>
  <!--<div class="work_pic"><img src="img/dashboard_pic.png" alt=""></div>-->
  </div>
</section>
<!--main-section-end--> 

<!--
<section class="twitter-feed"><!--twitter-feed-->
  <!--<div class="container  animated fadeInDown delay-07s wow">
    <div class="twitter_bird"><span><i class="fa-twitter"></i></span></div>
    <p> When you're the underdog, your only option is to make #waves if you want to succeed. How much <br>
      and how often should you be drinking coffee?</p>
    <span>-------</span> </div>
</section>
-->

<!--twitter-feed-end-->
<footer class="footer_section" id="contact">
  <div class="container">
    <section class="main-section contact" id="contact">
      <div class="contact_section">
        <h2>Contact Us</h2>
        <div class="row">
          <div class="col-lg-4">
            <div class="contact_block">
              <div class="contact_block_icon rollIn animated wow"><span><i class="fa-home"></i></span></div>
              <span> Kantin Sosro Mega Kuningan<br>Jalan Mega kuningan, Jakarta Selatan <br>
              DKI Jakarta 12950, Indonesia</span> </div>
          </div>
          <div class="col-lg-4">
            <div class="contact_block">
              <div class="contact_block_icon icon2 rollIn animated wow"><span><i class="fa-phone"></i></span></div>
              <span> +6287846566548 </span> </div>
          </div>
          <div class="col-lg-4">
            <div class="contact_block">
              <div class="contact_block_icon icon3 rollIn animated wow"><span><i class="fa-pencil"></i></span></div>
              <span> <a href="mailto:salawirofficial@gmail.com"> salawirofficial@gmail.com</a> </span> </div>
          </div>
        </div>
      </div>
	  <div id="peta"></div>
      <div class="row">
        <div class="col-lg-6 wow fadeInLeft">
          <div class="contact-info-box address clearfix">
            <h3>Don’t be shy. Say hello!</h3>
            <p>Ayo temans bisa pesan lewat alamat di atas atau makan siang bareng kita di Cafe Ayam Baper-Kantin Mega Kuningan&#128521;<br>
            Rasa dulu baru bicara&#128525;</p>
          </div>
          <ul class="social-link">
            <li class="twitter animated bounceIn wow delay-02s"><a href="https://twitter.com/salawirofficial"><i class="fa-twitter"></i></a></li>
            <li class="facebook animated bounceIn wow delay-03s"><a href="https://www.facebook.com/salawir"><i class="fa-facebook"></i></a></li>
            <li class="pinterest animated bounceIn wow delay-04s"><a href="https://www.pinterest.com/batamang/"><i class="fa-pinterest"></i></a></li>
            <li class="gplus animated bounceIn wow delay-05s"><a href="https://plus.google.com/u/0/103744981214550686359/"><i class="fa-google-plus"></i></a></li>
            <li class="instagram animated bounceIn wow delay-06s"><a href="https://www.instagram.com/salawirbaper/"><i class="fa-instagram"></i></a></li>
			<!--<li class="linkedin animated bounceIn wow delay-07s"><a href="https://www.linkedin.com/profile/view?id=AAIAAA6mdrMBezKPWc6lkLopJ5PSY7f7CIFIiLk&trk=nav_responsive_tab_profile"><i class="fa-linkedin"></i></a></li>-->

          </ul>
		  
        </div>
        <div class="col-lg-6 wow fadeInUp delay-06s">
          <form id="myForm" action="#contact" method="post">
		 
          <div class="form">
            <input class="input-text animated wow flipInY delay-02s" type="text" name="name" value="Your Name *" onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue;">
            <input class="input-text animated wow flipInY delay-04s" type="text" name="email" value="Your E-mail *" onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue;">
            <textarea class="input-text text-area animated wow flipInY delay-06s" name="pesan" cols="0" rows="0" onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue;">Your Message *</textarea>
			<button  id="sub" class="input-btn animated wow flipInY delay-08s" >send message</button>

          </div>
           </form>
           <span id="result"></span>        

        </div>
       
      </div>
    </section>
  </div>
  <div class="container">
    <div class="footer_bottom"> <span>Copyright © 2016 | Designed by <a href="#team">Gegeng</a>. </span> </div>
  </div>
</footer>
<script type="text/javascript">
    $(document).ready(function(e) {
        $('#header_outer').scrollToFixed();
        $('.res-nav_click').click(function(){
            $('.main-nav').slideToggle();
            return false    
            
        });
		        
    });
</script> 
<script>
    wow = new WOW(
      {
        animateClass: 'animated',
        offset:       100
      }
    );
    wow.init();
    document.getElementById('').onclick = function() {
      var section = document.createElement('section');
      section.className = 'wow fadeInDown';
	  section.className = 'wow shake';
	  section.className = 'wow zoomIn';
	  section.className = 'wow lightSpeedIn';
      this.parentNode.insertBefore(section, this);
    };
  </script> 
<script type="text/javascript">
	$(window).load(function(){
		
		$('a').bind('click',function(event){
			var $anchor = $(this);
			
			$('html, body').stop().animate({
				scrollTop: $($anchor.attr('href')).offset().top - 91
			}, 1500,'easeInOutExpo');
			/*
			if you don't want to use the easing effects:
			$('html, body').stop().animate({
				scrollTop: $($anchor.attr('href')).offset().top
			}, 1000);
			*/
			event.preventDefault();
		});
	})
</script> 

<!--<script type="text/javascript">

$(window).load(function(){
  
  
  var $container = $('.portfolioContainer'),
      $body = $('body'),
      colW = 350,
      columns = null;

  
  $container.isotope({
    // disable window resizing
    resizable: true,
    masonry: {
      columnWidth: colW
    }
  });
  
  $(window).smartresize(function(){
    // check if columns has changed
    var currentColumns = Math.floor( ( $body.width() -30 ) / colW );
    if ( currentColumns !== columns ) {
      // set new column count
      columns = currentColumns;
      // apply width to container manually, then trigger relayout
      $container.width( columns * colW )
        .isotope('reLayout');
    }
    
  }).smartresize(); // trigger resize to set container width
  $('.portfolioFilter a').click(function(){
        $('.portfolioFilter .current').removeClass('current');
        $(this).addClass('current');
 
        var selector = $(this).attr('data-filter');
        $container.isotope({
			
            filter: selector,
         });
         return false;
    });
  
});

</script>


--> 

<script type="text/javascript">

   
  jQuery(document).ready(function($){     
// Portfolio Isotope
	var container = $('#portfolio-wrap');	
	

	container.isotope({
		animationEngine : 'best-available',
	  	animationOptions: {
	     	duration: 200,
	     	queue: false
	   	},
		layoutMode: 'fitRows'
	});	

	$('#filters a').click(function(){
		$('#filters a').removeClass('active');
		$(this).addClass('active');
		var selector = $(this).attr('data-filter');
	  	container.isotope({ filter: selector });
        setProjects();		
	  	return false;
	});
		
		
		function splitColumns() { 
			var winWidth = $(window).width(), 
				columnNumb = 1;
			
			
			if (winWidth > 1024) {
				columnNumb = 4;
			} else if (winWidth > 900) {
				columnNumb = 2;
			} else if (winWidth > 479) {
				columnNumb = 2;
			} else if (winWidth < 479) {
				columnNumb = 1;
			}
			
			return columnNumb;
		}		
		
		function setColumns() { 
			var winWidth = $(window).width(), 
				columnNumb = splitColumns(), 
				postWidth = Math.floor(winWidth / columnNumb);
			
			container.find('.portfolio-item').each(function () { 
				$(this).css( { 
					width : postWidth + 'px' 
				});
			});
		}		
		
		function setProjects() { 
			setColumns();
			container.isotope('reLayout');
		}		
		
		container.imagesLoaded(function () { 
			setColumns();
		});
		
	
		$(window).bind('resize', function () { 
			setProjects();			
		});

});
$( window ).load(function() {
	jQuery('#all').click();
	return false;
});
</script>
</body>
</html>