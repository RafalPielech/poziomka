
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

    <div class="hero-unit">
      <p>Tagline</p>
      <p>
        <a class="btn btn-primary btn-small">
          Więcej...
        </a>
      </p>
    </div>
    
  <div class="row">
    <div class="span4">
        <ul class="thumbnails">
      <li class="span4">
        <div class="thumbnail">
          <img src=<?php echo '"' . $fowUrl . '/images/logo.svg' . '"'; ?> alt="">
          <h3>Thumbnail label</h3>
          <p>Thumbnail caption...</p>
        </div>
      </li>
    </ul>
    </div>
    <div class="span4" style="background-color: #9f9">.col-md-4</div>
    <div class="span4" style="background-color: #99f">.col-md-4</div>
  </div>
</div>

</body>

</html>
