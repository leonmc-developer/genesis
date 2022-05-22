<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Site Metas -->
    <title>Genesis #1- Plantilla Diseño WEB</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="#" type="image/x-icon" />
    <link rel="apple-touch-icon" href="#" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/web/template1/css/bootstrap.min.css" />
    <!-- Pogo Slider CSS -->
    <link rel="stylesheet" href="assets/web/template1/css/pogo-slider.min.css" />
    <!-- Site CSS -->
    <link rel="stylesheet" href="assets/web/template1/css/style.css" />
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="assets/web/template1/css/responsive.css" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/web/template1/css/custom.css" />

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.assets/web/template1/js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98">

    <!-- LOADER -->
    <div id="preloader">
        <div class="loader">
            <img src="assets/web/template1/images/loader.gif" alt="#" />
        </div>
    </div>
    <!-- end loader -->
    <!-- END LOADER -->

    <!-- Start header -->
    <header class="top-header">
        <div class="header_top">
            
            <div class="container">
                <div class="row">
                    <div class="logo_section">
                        <a class="navbar-brand" href="index.html"><img src="assets/web/template1/images/logo.png" alt="image"></a>
                    </div>
                    <div class="site_information">
                        <ul>
                            <li><a href="mailto:exchang@gmail.com"><img src="assets/web/template1/images/mail_icon.png" alt="#" />genesis@gmail.com</a></li>
                            <li><a href="tel:exchang@gmail.com"><img src="assets/web/template1/images/phone_icon.png" alt="#" />+78446615</a></li>
                            <li><a class="join_bt" href="<?=base_url()?>/plantilla">PLANTILLA #2</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        
        </div>
        <div class="header_bottom">
          <div class="container">
            <div class="col-sm-12">
                <div class="menu_orange_section" style="background: #ff880e;">
                   <nav class="navbar header-nav navbar-expand-lg"> 
                     <div class="menu_section">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-wd" aria-controls="navbar-wd" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbar-wd">
                    <ul class="navbar-nav">
                        <li><a class="nav-link active" href="<?=base_url()?>">Inicio</a></li>
                        <li><a class="nav-link" href="<?=base_url()?>/about">Nosotros</a></li>
                        <li><a class="nav-link" href="<?=base_url()?>/products">Productos</a></li>
                        <li><a class="nav-link" href="<?=base_url()?>/services">Servicios</a></li>
                        <li><a class="nav-link" href="<?=base_url()?>/faq">FAQ</a></li>
                        <li><a class="nav-link" href="<?=base_url()?>/contact">Contacto</a></li>
                    </ul>
                </div>
                     </div>
                 </nav>
                 <div class="search-box">
                    <input type="text" class="search-txt" placeholder="Buscar">
                    <a class="search-btn">
                        <img src="assets/web/template1/images/search_icon.png" alt="#" />
                    </a>
                </div> 
                </div>
            </div>
          </div>
        </div>
        
    </header>
    <!-- End header -->

    <!-- Start Banner -->
    <div class="ulockd-home-slider">
        <div class="container-fluid">
            <div class="row">
                <div class="pogoSlider" id="js-main-slider">
                    <div class="pogoSlider-slide" style="background-image:url(assets/web/template1/images/slide_img.png);">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="slide_text white_fonts">
                                        <h3>Diseño & Desarrollo<br><strong>Sitios Web</strong></h3>
                                        <br>
                                        <a class="start_exchange_bt" href="exchange.html">Iniciar ></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pogoSlider-slide" style="background-image:url(assets/web/template1/images/slide_img.png);">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="slide_text white_fonts">
                                        <h3>Plantillas<br><strong>Catalogo</strong></h3>
                                        <br>
                                        <a class="start_exchange_bt" href="exchange.html">Iniciar ></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- .pogoSlider -->
            </div>
        </div>
    </div>
    <!-- End Banner -->
    
	<!-- section -->
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="full text_align_right_img">
                        <img src="assets/web/template1/images/img1.png" alt="#" />
                    </div>
                </div>
                <div class="col-md-6 layout_padding">
                    <div class="full paddding_left_15">
                        <div class="heading_main text_align_left">
						   <h2><span class="theme_color">Bienvenido</span> a Genesis</h2>	
                        </div>
                    </div>
                    <div class="full paddding_left_15">
                        <p>

Genesis es una empresa especializada en el desarrollo integral de aplicaciones, programación avanzada y consultoría compuesta por desarrolladores, programadores y diseñadores. Trabajamos junto a ti tomando la mejores decisiones para tu empresa.
</p><p>
Nuestros desarrolladores de aplicaciones se encargarán de ayudarte en la creación, diseño y desarrollo de aplicaciones multiplataforma para diferentes soluciones de movilidad como el desarrollo y programación de software a medida para empresas.</p>
                    </div>
                    <div class="full paddding_left_15">
                        <a class="main_bt" href="#">Más información ></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<!-- end section -->
    <!-- section -->
    <div class="section layout_padding">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <div class="heading_main text_align_center">
                           <h2><span class="theme_color"></span>Servicios</h2>    
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="full services_blog">
                       <img class="img-responsive" src="assets/web/template1/images/s1.png" alt="#" />
                       <h4>Páginas Web</h4>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="full services_blog">
                        <img class="img-responsive" src="assets/web/template1/images/s2.png" alt="#" />
                        <h4>Anuncios</h4>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="full services_blog">
                        <img class="img-responsive" src="assets/web/template1/images/s3.png" alt="#" />
                        <h4>Ficha Productos</h4>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="full services_blog">
                        <img class="img-responsive" src="assets/web/template1/images/s4.png" alt="#" />
                        <h4>Articulos Blog</h4>
                    </div>
                </div>
            </div>
            <div class="row margin-top_30">
                <div class="col-sm-12">
                    <div class="full">
                        <div class="center">
                            <a class="main_bt" href="#">Más información  ></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end section -->
    <!-- section -->
    <div class="section white_fonts" style="background: #2a2a2a;">
        <div class="container">
            <div class="row">
                <div class="col-md-6" style="background: #fff;">
                    <div class="full text_align_right_img">
                        <img src="assets/web/template1/images/img2.png" alt="#" />
                    </div>
                </div>
                <div class="col-md-6 layout_padding">
                    <div class="full paddding_left_15">
                        <div class="heading_main text_align_left">
                           <h2><span class="theme_color">Aplicaciones</span> Web</h2>    
                        </div>
                    </div>
                    <div class="full paddding_left_15">
                        <p>A diferencia de un programa o aplicación de escritorio, la aplicación web funciona utilizando la mayoría de sus recursos online. En la actualidad, es habitual que muchos profesionales y empresas dispongan de estas soluciones informáticas alojadas en servidores o en la nube que se ajustan a sus intereses. Para que este concepto te quede claro lo mejor es explicar qué son exactamente las aplicaciones web y cuáles son sus virtudes. </p>
                    </div>
                    <div class="full paddding_left_15">
                        <a class="main_bt" href="#">Más información  ></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end section -->
	<!-- section -->
    <div class="section layout_padding about_bg">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="full paddding_left_15">
                        <div class="heading_main text_align_left">
                           <h2>Nosotros</h2>    
                        </div>
                    </div>
                    <div class="full paddding_left_15">
                        <p>Formamos un equipo de integrantes y colaboradores profesionales con conocimientos en diversas áreas relacionadas con el diseño y desarrollo web, la creación de contenidos y el marketing online. Se trata de aspectos indispensables hoy en día para poner en marcha o impulsar cualquier actividad comercial o de negocio en internet. Nuestros principales valores son el ingenio, la organización y la pasión por nuestro trabajo en todo lo que hacemos para obtener resultados.</p>
                    </div>
                    <div class="full paddding_left_15">
                        <a class="main_bt" href="#">Más información  ></a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="full text_align_right_img">
                        <img src="assets/web/template1/images/img3.png" alt="#" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end section -->
	<!-- section -->
    <div class="section layout_padding padding_top_0">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <div class="heading_main text_align_center">
                           <h2><span class="theme_color"></span>Impulsa Tu Negocio</h2>    
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="full news_blog">
                       <img class="img-responsive" src="assets/web/template1/images/b1.png" alt="#" />
                       <div class="overlay"><a class="main_bt transparent" href="#">Ver</a></div>
                       <div class="blog_details">
                         <h3>Diseño Web</h3>
                         <p>Diseñamos y creamos páginas personales, sitios web corporativos, blogs y tiendas online, orientados a la promoción y difusión de sus contenidos</p>
                       </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="full news_blog">
                        <img class="img-responsive" src="assets/web/template1/images/b2.png" alt="#" />
                        <div class="overlay"><a class="main_bt transparent" href="#">Ver</a></div>
                       <div class="blog_details">
                         <h3>Contenidos Multimedia</h3>
                         <p>Creamos contenidos para atraer, entretener o informar a tu audiencia o público objetivo. Textos para publicaciones, infografías 2D y 3D, fotografías de producto.</p>
                       </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="full news_blog">
                        <img class="img-responsive" src="assets/web/template1/images/b3.png" alt="#" />
                        <div class="overlay"><a class="main_bt transparent" href="#">Ver</a></div>
                       <div class="blog_details">
                         <h3>Marketing Online</h3>
                         <p>Realizamos campañas de Marketing Online, servicios de consultoría y estrategia según situación y objetivos. Optimización SEO, marketing en buscadores.</p>
                       </div>
                    </div>
                </div>
             </div>
        </div>
    </div>
    <!-- end section -->
    <!-- section -->
    <div class="section layout_padding padding_top_0">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <div class="heading_main text_align_center">
                           <h2><span class="theme_color"></span>Contactanos</h2>    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end section -->
    <!-- contact_form -->
    <div class="section contact_form">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-12 offset-lg-3">
                    <div class="full">
                        <form class="contact_form_inner" action="#">
                            <fieldset>
                                <div class="field">
                                    <input type="text" name="name" placeholder="Tu Nombre" />
                                </div>
                                <div class="field">
                                    <input type="email" name="email" placeholder="Email" />
                                </div>
                                <div class="field">
                                    <input type="text" name="phone_no" placeholder="Número Telefono" />
                                </div>
                                <div class="field">
                                    <textarea placeholder="Mensaje"></textarea>
                                </div>
                                <div class="field center">
                                    <button>ENVIAR</button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end contact_form -->
    <!-- end section -->
    <!-- Start Footer -->
    <footer class="footer-box">
        <div class="container">
            <div class="row">
               <div class="col-md-12 white_fonts">
                    <div class="row">
                        <div class="col-sm-6 col-md-6 col-lg-3">
                            <div class="full">
                                <img class="img-responsive" src="assets/web/template1/images/footer_logo.png" alt="#" />
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-3">
                            <div class="full">
                                <h3>Contenido</h3>
                            </div>
                            <div class="full">
                                <ul class="menu_footer">
                                    <li><a href="home.html">> Inicio</a></li>
                                    <li><a href="about.html">> Nosotros</a></li>
                                    <li><a href="exchange.html">> Catalogo</a></li>
                                    <li><a href="services.html">> Servicios</a></li>
                                    <li><a href="new.html">> Novedades</a></li>
                                    <li><a href="contact.html">> Contáctanos</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-3">
                            <div class="full">
                                <div class="footer_blog full white_fonts">
                             <h3>Suscríbete</h3>
                             <p>Puedes suscribirte al contenido en línea, para recibir notificaciones</p>
                             <div class="newsletter_form">
                                <form action="index.html">
                                   <input type="email" placeholder="Tú Email" name="#" required="">
                                   <button>Enviar</button>
                                </form>
                             </div>
                         </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-3">
                            <div class="full">
                                <div class="footer_blog full white_fonts">
                             <h3>Contáctanos</h3>
                             <ul class="full">
                               <li><img src="assets/web/template1/images/i5.png"><span>B.Roca y Coronado<br>C/ 1º Mayo Nº25<br>Santa Cruz-Bolivia</span></li>
                               <li><img src="assets/web/template1/images/i6.png"><span>genesis@gmail.com</span></li>
                               <li><img src="assets/web/template1/images/i7.png"><span>+591 78446615</span></li>
                             </ul>
                         </div>
                            </div>
                        </div>
					</div>
                </div>
			 </div>
        </div>
    </footer>
    <!-- End Footer -->

    <div class="footer_bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p class="crp">© Copyrights 2022 - POLARIS kitsoft.com</p>
                </div>
            </div>
        </div>
    </div>

    <a href="#" id="scroll-to-top" class="hvr-radial-out"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="assets/web/template1/js/jquery.min.js"></script>
	<script src="assets/web/template1/js/popper.min.js"></script>
    <script src="assets/web/template1/js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="assets/web/template1/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/web/template1/js/jquery.pogo-slider.min.js"></script>
    <script src="assets/web/template1/js/slider-index.js"></script>
    <script src="assets/web/template1/js/smoothscroll.js"></script>
    <script src="assets/web/template1/js/form-validator.min.js"></script>
    <script src="assets/web/template1/js/contact-form-script.js"></script>
    <script src="assets/web/template1/js/isotope.min.js"></script>
    <script src="assets/web/template1/js/images-loded.min.js"></script>
    <script src="assets/web/template1/js/custom.js"></script>
	<script>
	/* counter js */

(function ($) {
	$.fn.countTo = function (options) {
		options = options || {};
		
		return $(this).each(function () {
			// set options for current element
			var settings = $.extend({}, $.fn.countTo.defaults, {
				from:            $(this).data('from'),
				to:              $(this).data('to'),
				speed:           $(this).data('speed'),
				refreshInterval: $(this).data('refresh-interval'),
				decimals:        $(this).data('decimals')
			}, options);
			
			// how many times to update the value, and how much to increment the value on each update
			var loops = Math.ceil(settings.speed / settings.refreshInterval),
				increment = (settings.to - settings.from) / loops;
			
			// references & variables that will change with each update
			var self = this,
				$self = $(this),
				loopCount = 0,
				value = settings.from,
				data = $self.data('countTo') || {};
			
			$self.data('countTo', data);
			
			// if an existing interval can be found, clear it first
			if (data.interval) {
				clearInterval(data.interval);
			}
			data.interval = setInterval(updateTimer, settings.refreshInterval);
			
			// initialize the element with the starting value
			render(value);
			
			function updateTimer() {
				value += increment;
				loopCount++;
				
				render(value);
				
				if (typeof(settings.onUpdate) == 'function') {
					settings.onUpdate.call(self, value);
				}
				
				if (loopCount >= loops) {
					// remove the interval
					$self.removeData('countTo');
					clearInterval(data.interval);
					value = settings.to;
					
					if (typeof(settings.onComplete) == 'function') {
						settings.onComplete.call(self, value);
					}
				}
			}
			
			function render(value) {
				var formattedValue = settings.formatter.call(self, value, settings);
				$self.html(formattedValue);
			}
		});
	};
	
	$.fn.countTo.defaults = {
		from: 0,               // the number the element should start at
		to: 0,                 // the number the element should end at
		speed: 1000,           // how long it should take to count between the target numbers
		refreshInterval: 100,  // how often the element should be updated
		decimals: 0,           // the number of decimal places to show
		formatter: formatter,  // handler for formatting the value before rendering
		onUpdate: null,        // callback method for every time the element is updated
		onComplete: null       // callback method for when the element finishes updating
	};
	
	function formatter(value, settings) {
		return value.toFixed(settings.decimals);
	}
}(jQuery));

jQuery(function ($) {
  // custom formatting example
  $('.count-number').data('countToOptions', {
	formatter: function (value, options) {
	  return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
	}
  });
  
  // start all the timers
  $('.timer').each(count);  
  
  function count(options) {
	var $this = $(this);
	options = $.extend({}, options || {}, $this.data('countToOptions') || {});
	$this.countTo(options);
  }
});
	</script>
</body>

</html>