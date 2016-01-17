
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
// Detecting Active Variables
$itemid   = $app->input->getCmd('Itemid', '');
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"
xml:lang="<?php echo $this->language; ?>"
lang="<?php echo $this->language; ?>" >

<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<jdoc:include type="head" />
</head>

<body id="<?php echo ($itemid ? 'fow-body itemid-' . $itemid : 'fow-body'); ?>">

<?php if ($this->countModules('top')): ?>
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
<?php endif; ?>

<div id="fow-content" class="container">

<?php if ($this->countModules('fullcontent')): ?>
  <jdoc:include type="modules" name="fullcontent" style="none" />
<?php endif; ?>

<?php if ($this->countModules('left')): ?>
  <div class="row">
    <div class="span3">
      <jdoc:include type="modules" name="left" style="none" />
    </div>
    <div class="span9">
      <jdoc:include type="message" />
      <jdoc:include type="component" />
    </div>
  </div>
<?php endif; ?>

</div>

<?php if ($this->countModules('footer')): ?>
<div id="fow-footer" class="container">
    <p>&copy; Fundacja</p>
</div>
<?php endif; ?>

</body>

</html>
