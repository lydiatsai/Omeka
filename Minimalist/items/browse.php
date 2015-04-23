<?php
$pageTitle = __('Browse Items');
echo head(array('title'=>$pageTitle,'bodyclass' => 'items browse'));
?>

<h1><?php echo $pageTitle;?> <?php echo __('(%s total)', $total_results); ?></h1>

<?php echo item_search_filters(); ?>

<?php echo pagination_links(); ?>

<!-- hidden at request of Lydia<?php if ($total_results > 0): ?>

<?php
$sortLinks[__('Title')] = 'Dublin Core,Title';
$sortLinks[__('Creator')] = 'Dublin Core,Creator';
$sortLinks[__('Date Added')] = 'added';
?>
<div id="sort-links">
    <span class="sort-label"><?php echo __('Sort by: '); ?></span><?php echo browse_sort_links($sortLinks); ?>
</div>

<?php endif; ?> -->
<div class="clear"></div>
<?php foreach (loop('items') as $item): ?>
<div class="item hentry">
    <!--<h2><?php echo link_to_item(metadata('item', array('Dublin Core', 'Title')), array('class'=>'permalink')); ?></h2>-->
    <div class="item-meta">
    <?php if (metadata('item', 'has files')): ?>
    <div class="item-img">
        <?php echo link_to_item(item_image('thumbnail', array('alt' => metadata('item', array('Dublin Core', 'Title'))))); ?>
        <!-- changed square_thumbnail to thumbnail and show title element in ALT instead of filename which is default -->
    </div>
    <?php endif; ?>

    <?php if ($description = metadata('item', array('Dublin Core', 'Description'), array('snippet'=>250))): ?>
    <div class="item-description">
        <?php echo $description; ?>
    </div>
    <?php endif; ?>

    <!--<?php if (metadata('item', 'has tags')): ?>
    <div class="tags"><p><strong><?php echo __('Tags'); ?>:</strong>
        <?php echo tag_string('items'); ?></p>
    </div>
    <?php endif; ?> -->

    <?php fire_plugin_hook('public_items_browse_each', array('view' => $this, 'item' =>$item)); ?>

    </div><!-- end class="item-meta" -->
</div><!-- end class="item hentry" -->
<?php endforeach; ?>

<?php echo pagination_links(); ?>

<div class="clear"></div>
<nav class="facet-nav"><!-- formerly items-nav navigation secondary-nav -->
    <h3>Filter by <span style="font-size: 0.8em">[<a href="http://10.129.129.17/omeka/items/browse">Clear Filters</a>]</h3>
    <ul>
    	<li><strong>Type<strong>
    	  <ul>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=68&advanced%5B0%5D%5Btype%5D=is+exactly&advanced%5B0%5D%5Bterms%5D=main+dress">Main Dress</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=68&advanced%5B0%5D%5Btype%5D=is+exactly&advanced%5B0%5D%5Bterms%5D=outerwear">Outerwear</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=68&advanced%5B0%5D%5Btype%5D=is+exactly&advanced%5B0%5D%5Bterms%5D=purpose+wear">Purpose Wear</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=68&advanced%5B0%5D%5Btype%5D=is+exactly&advanced%5B0%5D%5Bterms%5D=separates">Separates</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=68&advanced%5B0%5D%5Btype%5D=is+exactly&advanced%5B0%5D%5Bterms%5D=sportswear">Sportswear</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=68&advanced%5B0%5D%5Btype%5D=is+exactly&advanced%5B0%5D%5Bterms%5D=accessories">Accessories</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=68&advanced%5B0%5D%5Btype%5D=is+exactly&advanced%5B0%5D%5Bterms%5D=underwear">Underwear</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=68&advanced%5B0%5D%5Btype%5D=is+exactly&advanced%5B0%5D%5Bterms%5D=headgear">Headgear</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=68&advanced%5B0%5D%5Btype%5D=is+exactly&advanced%5B0%5D%5Bterms%5D=footwear">Footwear</a></li>
  	      </ul>
    	</li>
    	<li><strong>Colour<strong></li>
    	<li><strong>Decade<strong></li>
    	<li><strong>Designer<strong></li>
    	<li><strong>Donor<strong></li>
    	<li><strong>Nationality<strong></li>
    </ul>
    <div class="clear"></div>
    <!--<?php echo public_nav_items(); ?> -->
  </div>
</nav>

<!-- hidden at request of Lydia<div id="outputs">
    <span class="outputs-label"><?php echo __('Output Formats'); ?></span>
    <?php echo output_format_list(false); ?>-->
</div>

<?php fire_plugin_hook('public_items_browse', array('items'=>$items, 'view' => $this)); ?>

<?php echo foot(); ?>
