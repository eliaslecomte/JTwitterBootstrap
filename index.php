<?php
defined('_JEXEC') or die;

$app = JFactory::getApplication();
?>
<!DOCTYPE html>
<html lang="<?php echo $this->language; ?>">
	<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
    
        <!-- Le styles -->
        <link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/bootstrap.css" rel="stylesheet">
        <link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/bootstrap-responsive.css" rel="stylesheet">
        <link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/jtwitterbootstrap.css" rel="stylesheet">
    
        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    
        <!-- Le fav and touch icons -->
        <link rel="shortcut icon" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/ico/apple-touch-icon-57-precomposed.png">

		<jdoc:include type="head" />

		<?php if (isset($this->params->get('GoogleAnalyticsId'))):?>
		<script type="text/javascript">
			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', '<?php echo $this->params->get('GoogleAnalyticsId') ?>']);
			_gaq.push(['_trackPageview']);
		
			(function() {
				var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
				ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			})();
		</script>
		<?php endif; ?>

	</head>

    <body data-spy="scroll" data-target=".bs-docs-sidebar">

	<!-- Navbar
	================================================== -->
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				</button>
				<a class="brand" href="./index.html">Title</a>
				<div class="nav-collapse collapse">
					<jdoc:include type="modules" name="top-nav" style="none" />	
				</div>
			</div>
		</div>
	</div>

<?php if(($this->countModules('header'))) : ?>
<!-- Subhead
================================================== -->
<header class="jumbotron subhead" id="overview">
	<div class="container">
		<jdoc:include type="modules" name="header" style="none" />
 	</div>
</header>
<?php endif; ?>

<?php if(($this->countModules('social'))) : ?>
<div class="bs-docs-social">
	<div class="container">
		<jdoc:include type="modules" name="social" style="none" />
	</div>
</div>
<?php endif; ?>
	<div class="container">
        <!-- Docs nav
        ================================================== -->
        <div class="row">
            <div class="span3 bs-docs-sidebar">
                <jdoc:include type="modules" name="sidebar" style="none" />
            </div>
    
        <!-- Content
        ================================================== -->
        <div class="span9">
			<jdoc:include type="component" />
		</div>
	</div>

<!-- Footer
================================================== -->
<footer class="footer">
    <div class="container">
        <p class="pull-right"><a href="#">Back to top</a></p>
        <jdoc:include type="modules" name="footer" style="none" />
    </div>
</footer>

	<!-- Le javascript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
	<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/bootstrap.min.js"></script> 

	</body>
</html>