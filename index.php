
<?php defined( '_JEXEC' ) or die( 'Restricted access' );
$app = JFactory::getApplication();
$sitename = $app->getCfg('sitename');
$doc = JFactory::getDocument();
$doc->addStyleSheet($this->baseurl . '/media/jui/css/bootstrap.min.css');
$doc->addStyleSheet($this->baseurl . '/templates/' . $this->template . '/css/template.css');
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

<div class="container">

  <div class="navbar">
    <div class="navbar-inner">
      <a class="brand" href="#"><?php echo $sitename ?></a>
        <jdoc:include type="modules" name="top" style="none" />
    </div>
  </div>
  
</div>


</body>

</html>
