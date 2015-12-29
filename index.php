
<?php defined( '_JEXEC' ) or die( 'Restricted access' );
$app = JFactory::getApplication();
$sitename = $app->getCfg('sitename');
$doc = JFactory::getDocument();
$templateUrl = $this->baseurl . '/templates/' . $this->template;
// Bootstrap
$doc->addStyleSheet($this->baseurl . '/media/jui/css/bootstrap.min.css');
$doc->addScript($this->baseurl . '/media/jui/js/bootstrap.min.js');
// Template specific style
$doc->addStyleSheet($templateUrl . '/css/template.css');
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"
xml:lang="<?php echo $this->language; ?>"
lang="<?php echo $this->language; ?>" >

<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<jdoc:include type="head" />
</head>

<body>

  <div class="navbar">
    <div class="navbar-inner">
      <div class="row-fluid">
        <div class="span3">
          <a class="brand" href="#">
            <img id="logotyp" src=<?php echo '"' . $templateUrl . "/images/logo.svg\""; ?>>
          </a>
        </div>
        <div class="span9">
          <jdoc:include type="modules" name="top" style="none" />
        </div>
      </div>
    </div>
  </div>

<div class="container">  
</div>


</body>

</html>
