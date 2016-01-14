<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_articles_latest
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * 
<ul class="latestnews<?php echo $moduleclass_sfx; ?>">
<?php foreach ($list as $item) :  ?>
	<li itemscope itemtype="http://schema.org/Article">
		<a href="<?php echo $item->link; ?>" itemprop="url">
			<span itemprop="name">
				<?php echo $item->title; ?>
			</span>
		</a>
	</li>
<?php endforeach; ?>
</ul>
 * 
 */

defined('_JEXEC') or die;
$fowUrl = './templates/szablon-fow-joomla';
$articles_count = count($list);
$rows_count = 0;
if($articles_count) {
	if($articles_count <= 2) {
		$rows_count = 1;
	}
	else {
		$rows_div = floor(($articles_count - 2) / 4);
		$rows_count = 1 + $rows_div + ((($articles_count - 2) % 4) ? 1 : 0);
	}
	// Here apply optional max rows count
	$rows_count = ($rows_count > 2) ? 2 : $rows_count;
}
?>

<?php if ($articles_count) : ?>
<?php for ($idx=0; $idx<$rows_count; $idx++) : ?>
  <div class="row">
    <?php if ($idx == 0) : ?>
    <div class="span9">
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
    <?php endif; ?>
    <?php if ($idx) : ?>
      <?php for($thumb = 0; $thumb < 4; $thumb++) : ?>
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
      <?php endfor; ?>
    <?php endif; ?>
  </div>
<?php endfor; ?>
<?php endif; ?>

<?php // $zdjecia = json_decode($list[0]->images); ?>

