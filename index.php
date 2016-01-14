
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

<?php if ($this->countModules('content')): ?>
  <jdoc:include type="modules" name="content" style="none" />
<?php endif; ?>

<jdoc:include type="component" />

</div>

<div id="fow-footer" class="container">
    <p>&copy; Fundacja</p>
</div>

</body>

</html>
