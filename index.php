
<?php defined( '_JEXEC' ) or die( 'Restricted access' );
$app = JFactory::getApplication();
$sitename = $app->getCfg('sitename');
$doc = JFactory::getDocument();
$fowUrl = $this->baseurl . '/templates/' . $this->template;
// Bootstrap
$doc->addStyleSheet($this->baseurl . '/media/jui/css/bootstrap.min.css');
$doc->addScript($this->baseurl . '/media/jui/js/bootstrap.min.js');
// Template specific style
$doc->addStyleSheet($fowUrl . '/css/template.css');
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"
xml:lang="<?php echo $this->language; ?>"
lang="<?php echo $this->language; ?>" >

<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<jdoc:include type="head" />
</head>

<body id="fow-body">

<div id="fow-nav" class="container">  
  <div class="navbar">
    <div class="navbar-inner">
          <a class="brand" href="#">
            <img id="logotyp" src=<?php echo '"' . $fowUrl . '/images/logo.svg' . '"'; ?>>
          </a>
          <jdoc:include type="modules" name="top" style="none" />
    </div>
  </div>
</div>

<div id="fow-content" class="container">

  <div class="row">
    <div class="span9">
<!--
      <div class="thumbnail">
        <img width=700 src=<?php echo '"' . $fowUrl . '/images/tmp/tenis_head2.jpg' . '"'; ?> alt="">
      </div>
-->
    <div class="carousel slide">
      <div class="carousel-inner">
        <div class="active item">
		  <img id="carousel-img" src=<?php echo '"' . $fowUrl . '/images/tmp/tenis_head.jpg' . '"'; ?> alt="">
		  <div class="carousel-caption">
			  <h4>Second Thumbnail label</h4>
			  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
			  </div>
        </div>
      </div>
    </div>

    </div>
    <div class="span3" style="background-color: #aaa">
	  span3
	</div>
  </div>

  <div class="row">
    <div class="span3">
      <ul class="thumbnails">
        <li class="span3">
          <div class="thumbnail">
            <img src=<?php echo '"' . $fowUrl . '/images/tmp/tenis_thumb.jpg' . '"'; ?> alt="">
            <h4>Thumbnail label</h4>
            <p>Thumbnail caption...</p>
          </div>
        </li>
      </ul>
    </div>
    <div class="span3" style="background-color: #aaa">span3</div>
    <div class="span3" style="background-color: #aaa">span3</div>
    <div class="span3" style="background-color: #aaa">span3</div>
  </div>
</div>

</body>

</html>
