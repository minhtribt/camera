<!DOCTYPE html>
<html lang="en-US" class="no-js" >


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
	<meta charset="UTF-8" />
	<title><?php echo $title; ?></title> 
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="alternate" type="application/atom+xml" title="Camy Atom Feed" href="feed/atom/index.html" />
	<link rel='stylesheet' id='main-css'  href='<?php echo base_url()?>/asset/frontend/css/style_camy.css' type='text/css' media='all' />
	<link rel='stylesheet' id='css'  href='<?php echo base_url()?>/asset/frontend/css/fonts/font-awesome/css/font-awesome.min.css' type='text/css' media='all' />
	<link rel='stylesheet' href='<?php echo base_url()?>/asset/frontend/css/bootstrap.min.css' type='text/css' media='all' />
	<link rel='stylesheet' href='<?php echo base_url()?>/asset/frontend/css/responsive.css' type='text/css' media='all' />
	
	
	<link rel='stylesheet' href='<?php echo base_url()?>/asset/frontend/css/jssor.css' type='text/css' media='all' />
	<link rel='stylesheet' href='<?php echo base_url()?>/asset/frontend/css/flaticon.css' type='text/css' media='all' />
	<link rel="stylesheet" href="<?php echo base_url()?>/asset/frontend/css/smoothness/jquery-ui.css">
	<link rel='stylesheet' href='<?php echo base_url()?>/asset/frontend/css/style.css' type='text/css' media='all' />
	
	
	<script type='text/javascript' src='<?php echo base_url()?>/asset/frontend/js/jquery-3.0.0.min.js'></script>
	<script type='text/javascript' src='<?php echo base_url()?>/asset/frontend/js/custom.js'></script>
	<script type='text/javascript'src="<?php echo base_url()?>/asset/frontend/css/smoothness/jquery-ui.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>/asset/frontend/js/jssor.slider.mini.js"></script>		
	<script type="text/javascript" src="<?php echo base_url()?>/asset/frontend/js/camera.js"></script>		
	<script type="text/javascript" src="<?php echo base_url()?>/asset/frontend/js/owl.carousel.js"></script>	

	<link rel="stylesheet" href="<?php echo base_url()?>/asset/frontend/css/owl.carousel.css">
	<link rel="stylesheet" href="<?php echo base_url()?>/asset/frontend/css/owl.theme.css">
	<link href="<?php echo base_url()?>/asset/frontend/css/fonts/exo/exo.css?family=Exo:700,500" rel="stylesheet" property="stylesheet" type="text/css" media="all" />
	<link rel='stylesheet' id='layers-child-font-css'  href='<?php echo base_url()?>/asset/frontend/css/fonts/varela/varela.css' type='text/css' media='all' />
	
	<!--======= Responsive Bootstrap Carousel StyleSheet =========-->
	<link href="<?php echo base_url()?>/asset/frontend/css/responsive_bootstrap_carousel_mega_min.css" rel="stylesheet" media="all">
	<link href="<?php echo base_url()?>/asset/frontend/css/theme.css" rel="stylesheet" media="all">
	
	<script type="text/javascript" src="<?php echo base_url()?>/asset/frontend/js/myScripts.js"></script>
	<style>
		#owl-demo .item{
		  display: block;
		  padding: 30px 0px;
		  margin: 5px;
		  color: #FFF;
		  -webkit-border-radius: 3px;
		  -moz-border-radius: 3px;
		  border-radius: 3px;
		  text-align: center;
		}
		.owl-theme .owl-controls .owl-buttons div {
		  padding: 5px 9px;
		}
		 
		.owl-theme .owl-buttons i{
		  margin-top: 2px;
		}
		#owl-demo .item img{
			display: block;
			width: 100%;
			height: auto;
			padding: 5px;
			-webkit-border-radius: 3px;
			-moz-border-radius: 3px;
			border-radius: 3px;
		}
				
		 
		.owl-theme .owl-controls .owl-buttons div {
		  position: absolute;
		}
		 
		.owl-theme .owl-controls .owl-buttons .owl-prev{
		  left: -45px;
		  top: 55px; 
		}
		 
		.owl-theme .owl-controls .owl-buttons .owl-next{
		  right: -45px;
		  top: 55px;

		}
	</style> 
	


<link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url()?>/asset/frontend/css/menu/color-theme.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url()?>/asset/frontend/css/menu/webslidemenu.css" />
<script type="text/javascript" src="<?php echo base_url()?>/asset/frontend/js/webslidemenu.js"></script>

</head>		

<body class="">


	<?php $this->load->view("default/layout/frontend/header");?> 
    <?php $this->load->view($template,$data); ?> 
    <?php $this->load->view("default/layout/frontend/footer");?> 



	<script>
		$( document ).ready(function() {
	   		var icons = {
			  header: "ui-icon-circle-arrow-e",
			  activeHeader: "ui-icon-circle-arrow-s"
			};
			$( "#accordion" ).accordion({
			  icons: icons,
			  collapsible: true,
			  autoHeight: true,
			  active: false
			});
		});

		
	</script>
	<!--======= JavaScript =========-->
	<!--======= jQuery =========-->

	<! Dùng jquery cũ để chạy giỏ hàng. -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script type="text/javascript" src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>  

	<!--======= Bootstrap =========-->
	<script src="<?php echo base_url()?>/asset/frontend/js/bootstrap.min.js"></script>

	<!--======= Touch Swipe =========-->
	<script src="<?php echo base_url()?>/asset/frontend/js/jquery.touchSwipe.min.js"></script>

	<!--======= Customize =========-->
	<script src="<?php echo base_url()?>/asset/frontend/js/responsive_bootstrap_carousel.js"></script>
</body>
</html>