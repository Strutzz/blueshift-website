<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<title>Blueshift - Australian OT</title>
<link href="http://fonts.googleapis.com/css?family=Oswald:400,700,300" rel="stylesheet" type="text/css" />
<!-- Included CSS Files -->
<link rel="stylesheet" href="{{ asset('/stylesheets/main.css') }}" />
<link rel="stylesheet" href="{{ asset('/stylesheets/devices.css') }}" />
<link rel="stylesheet" href="{{ asset('/stylesheets/paralax_slider.css') }}" />
<link rel="stylesheet" href="{{ asset('/stylesheets/jquery.fancybox.css?v=2.1.2') }}" type="text/css"  media="screen" />
<!--[if IE]>
<link rel="stylesheet" href="stylesheets/ie.css"> 
<![endif]-->


</head>

<body>

<!--********************************************* Main wrapper Start *********************************************-->
<div id="footer_image">
	<div id="main_wrapper"> 
    
	<!--********************************************* Logo Start *********************************************-->
	<div id="logo"> <a href="#"><img alt="alt_example" src="{{ asset('/images/logo.jpg') }}"  /></a>
		<div id="social_ctn"> 
   
			<a class="social_t"><img alt="alt_example" src="{{ asset('/images/social_tleft.png') }}" /></a> 
			
			<a href="#" id="facebook"><img alt="alt_example" src="{{ asset('/images/blank.gif') }}" width="100%" height="37px" /></a> 
			<a href="#" id="twitter"><img alt="alt_example" src="{{ asset('/images/blank.gif') }}" width="100%" height="37px" /></a>  
    
			<a class="social_t" ><img alt="alt_example" src="{{ asset('/images/social_tright.png') }}" /></a> 
      
		</div>
    </div>
    <!--********************************************* Logo end *********************************************--> 
    
	<!--********************************************* Main_in Start *********************************************-->
	<div id="main_in"> 
    
		<!--********************************************* Mainmenu Start *********************************************-->
		<div id="menu_wrapper">
			<div id="menu_left"></div>
			<ul id="menu">
				<li><a href="{{ url('/') }}">Home</a></li>
				<li><a>Account</a>
					<ul>
						<li><a href="{{ url('/account') }}">Login</a></li>
						<li><a href="{{ url('/register') }}">Register</a></li>
					</ul>
				<li><a>Community</a>
					<ul>
						<li><a href="{{ url('/character') }}">Characters</a></li>
						<li><a href="{{ url('/deaths') }}">Deaths</a></li>
						<li><a href="#">Who is Online</a></li>
					</ul>
				</li>
				<li><a href="{{ url('/forum') }}">Forum</a></li>
				<li><a href="{{ url('/download') }}">Download</a></li>
				<li><a href="{{ url('/highscore') }}">Highscores</a></li>
				<li><a>Donate</a>
					<ul>
						<li><a href="{{ url('/store') }}">Shop Offers</a></li>
						<li><a href="{{ url('/store/offers') }}">Buy Points</a></li>
						<li><a href="#">Terms and Conditions</a></li>
					</ul>
				</li>
				<li><a href="./full_page.html">Gallery</a></li>
				<li><a href="{{ url('/faq') }}">FAQ</a></li>
				<li><a href="./contact.html">Contact</a></li>
			</ul>
			<a href="#" id="pull">Menu</a>
			<div id="menu_right"></div>
			<div class="clear"></div>
		</div>
		<!--********************************************* Mainmenu end *********************************************--> 
    
		<!--********************************************* Banner start *********************************************-->
		<div id="da-slider" class="da-slider">
			<div class="da-slide">
				<h2><a href="#" class="da-link">Custom Quests</a></h2>
				<p>Explore the world of Blueshift and be rewarded for your efforts.</p>
				<div class="da-img"><img alt="alt_example" src="{{ asset('/images/paralax_banner/3.png') }}"  /></div>
			</div>
			<div class="da-slide">
				<h2><a href="#" class="da-link">Tasks</a></h2>
				<p>Compelete tasks to earn new items and experience.</p>
				<div class="da-img"><img alt="alt_example" src="{{ asset('/images/paralax_banner/2.png') }}"  /></div>
			</div>
			<div class="da-slide">
				<h2><a href="#" class="da-link">Dungeons</a></h2>
				<p>Discover dungeons around Blueshift, fight your way through to challenge the boss</p>
				<div class="da-img"><img alt="alt_example" src="{{ asset('/images/paralax_banner/1.png') }}"  /></div>
			</div>
			<div class="da-arrows"> <span class="da-arrows-prev"></span> <span class="da-arrows-next"></span> </div>
		</div>
		<!--********************************************* Banner end *********************************************-->
    
		<div class="top_shadow"></div>
    
		<!--********************************************* Hot news start *********************************************-->
		@if (request()->is('/'))
		<div id="hot_news">
			<div class="header">
				<h1><span>BLUESHIFT //</span> NEWS TICKER</h1>
			</div>
	  
			<div class="panel-body">
				<table width="100%" class="table table-striped table-bordered table-condensed">
					<tr>
						<td>
							<span>No news tickers exists in the database.
						</td>
					</tr>
				</table>
				<br>
			</div>
			
		</div>
		@endif
		<!--********************************************* Hot news end *********************************************--> 
    
		<!--********************************************* Main start *********************************************-->
		<div id="main_news_wrapper">
			<div id="row"> 
			
				<!-- Left wrapper Start -->
				<div id="left_wrapper">
					<div class="header">
						<h2><span>BLUESHIFT //</span> @yield('breadcrumbs')</h2>
					</div>
					
					<ul id="general_news">
						@yield('content')
					</ul>
					
					<ul id="pager">
						<li><a href="#" ><img alt="alt_example" src="./images/left_pager.jpg" border="0"/></a></li>
						<li><a href="#" class="active">1</a></li>
						<li><a href="#" >2</a></li>
						<li><a href="#" >3</a></li>
						<li><a href="#"><img alt="alt_example" src="./images/right_pager.jpg" border="0"/></a></li>
					</ul>
					<div class="clear"></div>
				</div>
				<!-- Left wrapper end --> 
    
				<!--********************************************* Footer start *********************************************-->
				<div id="footer">
					<div class="row">
						<div class="footer_widget">
							<div class="header"><a href="#">About ORIZON</a></div>
							<div class="body">
								<p><img alt="alt_example" src="./images/about_img.png" align="left" style="margin:0px 15px 5px 0px;"  />Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
								<p>Praesent aliquet justo quis lacus mollis molestie pellentesque habitant morbi tristique senectus et e. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Quisque pulvinar urna eget ante pharetra vitae fermentum dui sagittis. Vivamus non ipsum elit, et tincidunt quam.</p>
								<img alt="alt_example" src="./images/orizon_about.png" style="margin:11px 0px 0px 55px;"/>
							</div>
						</div>
						<div class="divider_footer"></div>
							<div id="latest_media">
							<div class="header"><a href="#">latest media</a></div>
								<div class="body">
									<ul id="l_media_list">
										<li><a class="shadowbox" href="./images/media/full/1.jpg" rel="gallery" ><img alt="alt_example" src="./images/media/thumb/1.jpg" /></a></li>
										<li><a class="shadowbox" href="./images/media/full/1.jpg" rel="gallery" ><img alt="alt_example" src="./images/media/thumb/1.jpg" /></a></li>
										<li><a class="shadowbox" href="./images/media/full/1.jpg" rel="gallery" ><img alt="alt_example" src="./images/media/thumb/1.jpg" /></a></li>
										<li><a class="shadowbox" href="./images/media/full/1.jpg" rel="gallery" ><img alt="alt_example" src="./images/media/thumb/1.jpg" /></a></li>
										<li><a class="shadowbox" href="./images/media/full/1.jpg" rel="gallery" ><img alt="alt_example" src="./images/media/thumb/1.jpg" /></a></li>
										<li><a class="shadowbox" href="./images/media/full/1.jpg" rel="gallery" ><img alt="alt_example" src="./images/media/thumb/1.jpg" /></a></li>
										<li><a class="shadowbox" href="./images/media/full/1.jpg" rel="gallery" ><img alt="alt_example" src="./images/media/thumb/1.jpg" /></a></li>
										<li><a class="shadowbox" href="./images/media/full/1.jpg" rel="gallery" ><img alt="alt_example" src="./images/media/thumb/1.jpg" /></a></li>
										<li><a class="shadowbox" href="./images/media/full/1.jpg" rel="gallery" ><img alt="alt_example" src="./images/media/thumb/1.jpg" /></a></li>
										<li><a class="shadowbox" href="./images/media/full/1.jpg" rel="gallery" ><img alt="alt_example" src="./images/media/thumb/1.jpg" /></a></li>
									</ul>
								</div>
							</div>
							<div class="clear"></div>
					</div>
				</div>
				<!--********************************************* Footer end *********************************************--> 
				<div class="clear"></div>
				
				<!--********************************************* Twitter feed start *********************************************-->
				<div id="twitter_last"> <a id="tr_left" href="#"><img alt="alt_example" src="./images/blank.gif" width="100%" height="30px" border="0" /></a>
					<div id="tr_right">
						<ul id="tw"></ul>
					</div>
				</div>
				<!--********************************************* Twitter feed end *********************************************--> 
  
			</div>
			<!--********************************************* Main_in end *********************************************--> 
		</div>
	</div>
	<!--********************************************* Main wrapper end *********************************************--> 

<script src="http://code.jquery.com/jquery-1.8.3.min.js" type="text/javascript"></script> 
<script src="{{ asset('/js/jquery.carouFredSel-6.1.0.js') }}" type="text/javascript"></script> 
<script src="{{ asset('/js/jquery.cslider.js') }}" type="text/javascript" ></script> 
<script src="{{ asset('/js/modernizr.custom.28468.js') }}" type="text/javascript"></script> 
<script src="{{ asset('/js/getTweet.js') }}" type="text/javascript" ></script> 
<script src="{{ asset('/js/jquery.fancybox.js?v=2.1.3') }}" type="text/javascript" ></script> 

<!--******* Javascript Code for the Hot news carousel *******--> 
<script type="text/javascript">
	$(document).ready(function() {
	
		// Using default configuration
		$("#sd").carouFredSel();
		
		// Using custom configuration
		$("#hot_news_box").carouFredSel({
			items				: 3,
			direction			: "right",
			prev: '#prev',
			next: '#next',
			scroll : {
				items			: 1,
				height			: 250,
				easing			: "quadratic",
				duration		: 2000,							
				pauseOnHover	: true
			}	
		});	
	})
</script> 


<!--******* Javascript Code for the Main banner *******--> 
<script type="text/javascript">
	$(function() {
	
		$('#da-slider').cslider({
			autoplay	: true,
			bgincrement	: 450
		});
	
	});
</script> 

<!--******* Javascript Code for the image shadowbox *******--> 
<script type="text/javascript">
$(document).ready(function() {
	/*
	*  Simple image gallery. Uses default settings
	*/
	
	$('.shadowbox').fancybox();
});
</script>

<!--******* Javascript Code for the menu *******-->

<script type="text/javascript">
    $(document).ready(function() {
        $('#menu li').bind('mouseover', openSubMenu);
        $('#menu > li').bind('mouseout', closeSubMenu);

        function openSubMenu() {
            $(this).find('ul').css('visibility', 'visible');
        };

        function closeSubMenu() {
            $(this).find('ul').css('visibility', 'hidden');
        };
    });
</script>

<script type="text/javascript">
    $(function() {
        var pull    = $('#pull');
        menu 		= $('ul#menu');

        $(pull).on('click', function(e) {
            e.preventDefault();
            menu.slideToggle();
        });

        $(window).resize(function(){
            var w = $(window).width();
            if(w > 767 && $('ul#menu').css('visibility', 'hidden')) {
                $('ul#menu').removeAttr('style');
            };
            var menu = $('#menu_wrapper').width();
            $('#pull').width(menu - 20);
        });
    });
</script>

<script type="text/javascript">
    $(function() {
        var menu = $('#menu_wrapper').width();
        $('#pull').width(menu - 20);
    });
</script>
</body>
</html>
