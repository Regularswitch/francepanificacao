<?php
	include('page_components/links.php');

	if(is_home() || $currentPage == 'contato') {
		?>
<!--			<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script>-->
<!--			<script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[3]='MMERGE3';ftypes[3]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>-->
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDccchbca5lrF3DzGGLYS2RFqCXqOa5GDw"></script>

		<?php
	}

?>

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/dist/js/all.js"></script>
<script>
// 	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
// 			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
// 		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
// 	})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

// 	ga('create', 'UA-88399709-1', 'auto');
// 	ga('send', 'pageview');

</script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-180605614-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-180605614-1');
</script>



<!-- <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/dist/js/all.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/dist/js/all.min.js"></script> -->
<!-- <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/node_modules/swiper/js/swiper.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/node_modules/jquery/dist/jquery.min.js"></script> -->

		
    </body>
</html>