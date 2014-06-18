<?php 

// No direct access
( '_JEXEC' ) or die; 

// variables
$app = JFactory::getApplication();
$doc = JFactory::getDocument(); 
$menu = $app->getMenu();
$active = $app->getMenu()->getActive();
$params = $app->getParams();
$pageclass = $params->get('pageclass_sfx');
$tpath = $this->baseurl.'/templates/'.$this->template;

// generator tag
$this->setGenerator(null);

// bootstrap
if (JVERSION>='3') :
  JHtml::_('bootstrap.framework');
else :
  $doc->addScript($tpath.'/js/jquery-2.1.0.min.js');
  $doc->addScript($tpath.'/js/jquery-noconflict.js');
  $doc->addScript($tpath.'/js/bootstrap.min.js');
endif;

// template css 
$doc->addStyleSheet($tpath.'/css/template.css.php');

// less.js
// NOTE: comment in the two following lines -> comment out all (!) css above
//$doc->addCustomTag('<link rel="stylesheet/less" type="text/css" href="'.$tpath.'/less/template.less" />');
//$doc->addCustomTag('<script src="'.$tpath.'/js/less-1.7.0.min.js" type="text/javascript"></script>');

?><!DOCTYPE html>

<html lang="<?php echo $this->language; ?>">

<head>
  <jdoc:include type="head" />
  <meta http-equiv="content-type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
  <link rel="apple-touch-icon-precomposed" href="<?php echo $tpath; ?>/images/apple-touch-icon-57x57-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo $tpath; ?>/images/apple-touch-icon-72x72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo $tpath; ?>/images/apple-touch-icon-114x114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo $tpath; ?>/images/apple-touch-icon-144x144-precomposed.png">
</head>
  
<body class="<?php echo (($menu->getActive() == $menu->getDefault()) ? ('front') : ('site')).' '.$active->alias.' '.$pageclass; ?>">
  
  <nav class="navbar navbar-default" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <!--<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand nav-link" href="#top">GLABEO GmbH</a>-->
		  <jdoc:include type="modules" name="banner" style="xhtml" />
		  
        </div> <!-- /.navbar-header -->

        <div class="collapse navbar-collapse navbar-ex1-collapse">
			<jdoc:include type="modules" name="position-9" style="none" />
        </div> <!-- /.navbar-collapse -->
      </div> <!-- /.container -->
    </nav> <!-- /.navbar -->

	<header id="top-section">
      <!-- Main hero unit for a primary marketing message or call to action -->
      <div class="jumbotron">
		<div class="container">
			<div class="row">
			
				<div class="text-left col-xs-12 col-sm-8 col-md-8 col-lg-8" style="padding-right:30px;padding-top:200px">
									
					<div class="panel panel-default" style="background-color: rgba(245, 245, 245, 0.6);border:0px;">
						<jdoc:include type="modules" name="maincontent" style="none" />
						<!--<div class="panel-body">
							<blockquote>
							  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
							</blockquote>						
						</div>-->
					</div>
				
				</div>
				
			</div><!-- /ROW-->
		</div>
      </div>
	</header>
	
	
    <!--<div class="jumbotron"></div>--> <!-- /.jumbotron -->

    <div class="spacer"></div>

    <div class="container">
      <div class="row">
        
        <div class="col-md-8 col-sm-6 content-text">
		<jdoc:include type="component" />
          <!--<h3>Herzlich Willkommen</h3>
          <p>
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
            nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat
            volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation
            ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
          </p>
          <p>
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
            nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat
            volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation
            ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
          </p>-->
        </div> <!-- /.col-md-8 -->
		
		<div class="col-md-4 col-sm-6">
          
        </div> <!-- /.content-text -->
		
      </div> <!-- /.row -->

      <div class="spacer"></div>

    </div> <!-- /.container -->

    <footer>
      <div class="container clearfix">
        <p class="text-center">
			<jdoc:include type="modules" name="footer" style="none" />
          <!--Copyright © 2014 - All rights reserved. -->
        </p>
      </div> <!-- /.container -->
    </footer>

	<jdoc:include type="modules" name="debug" />
	
	<!-- placeholder --><!--
	<jdoc:include type="modules" name="position-0" style="none" />
	<jdoc:include type="modules" name="position-1" style="none" />
	<jdoc:include type="modules" name="position-2" style="none" />
	<jdoc:include type="modules" name="position-3" style="none" />
	<jdoc:include type="modules" name="position-4" style="none" />
	<jdoc:include type="modules" name="position-5" style="none" />
	<jdoc:include type="modules" name="position-6" style="none" />
	<jdoc:include type="modules" name="position-7" style="none" />
	<jdoc:include type="modules" name="position-8" style="none" />
	<jdoc:include type="modules" name="banner" style="xhtml" />
	<jdoc:include type="message" />
	<jdoc:include type="component" />
-->
</body>

</html>