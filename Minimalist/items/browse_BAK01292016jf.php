<?php
$pageTitle = __('Browse Items');
echo head(array('title'=>$pageTitle,'bodyclass' => 'items browse'));
?>

<h1><?php echo $pageTitle;?> <?php echo __('(%s total)', $total_results); ?></h1>

<?php echo item_search_filters(); ?>
<nav class="facet-nav"><!-- formerly items-nav navigation secondary-nav -->
<ul>
	<li class="grey"><img src="//s3.amazonaws.com/libapps/accounts/246/images/noun_38074_cc.png" style="height:18px; padding-right: 3px;" />Type
	<ul>
		<li><a href="/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=96&amp;advanced%5B0%5D%5Btype%5D=is+exactly&amp;advanced%5B0%5D%5Bterms%5D=main+dresses">Main Dresses</a></li>
		<li><a href="/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=96&amp;advanced%5B0%5D%5Btype%5D=is+exactly&amp;advanced%5B0%5D%5Bterms%5D=outerwear">Outerwear</a></li>
		<li><a href="/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=96&amp;advanced%5B0%5D%5Btype%5D=is+exactly&amp;advanced%5B0%5D%5Bterms%5D=purpose+wear">Purpose Wear</a></li>
		<li><a href="/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=96&amp;advanced%5B0%5D%5Btype%5D=is+exactly&amp;advanced%5B0%5D%5Bterms%5D=separates">Separates</a></li>
		<li><a href="/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=96&amp;advanced%5B0%5D%5Btype%5D=is+exactly&amp;advanced%5B0%5D%5Bterms%5D=sportswear">Sportswear</a></li>
		<li><a href="/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=96&amp;advanced%5B0%5D%5Btype%5D=is+exactly&amp;advanced%5B0%5D%5Bterms%5D=accessories">Accessories</a></li>
		<li><a href="/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=96&amp;advanced%5B0%5D%5Btype%5D=is+exactly&amp;advanced%5B0%5D%5Bterms%5D=underwear">Underwear</a></li>
		<li><a href="/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=96&amp;advanced%5B0%5D%5Btype%5D=is+exactly&amp;advanced%5B0%5D%5Bterms%5D=headgear">Headgear</a></li>
		<li><a href="/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=96&amp;advanced%5B0%5D%5Btype%5D=is+exactly&amp;advanced%5B0%5D%5Bterms%5D=footwear">Footwear</a></li>
	</ul>
	</li>
	<li class="grey"><img src="https://s3.amazonaws.com/libapps/accounts/246/images/noun_23982_cc.png" style="height:18px; padding-right: 3px;" />Colour
	<ul>
		<li><a href="/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=59&amp;advanced%5B0%5D%5Btype%5D=is+exactly&amp;advanced%5B0%5D%5Bterms%5D=black">Black</a></li>
		<li><a href="/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=59&amp;advanced%5B0%5D%5Btype%5D=is+exactly&amp;advanced%5B0%5D%5Bterms%5D=grey">Grey</a></li>
		<li><a href="/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=59&amp;advanced%5B0%5D%5Btype%5D=is+exactly&amp;advanced%5B0%5D%5Bterms%5D=brown">Brown</a></li>
		<li><a href="/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=59&amp;advanced%5B0%5D%5Btype%5D=is+exactly&amp;advanced%5B0%5D%5Bterms%5D=white">White</a></li>
		<li><a href="/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=59&amp;advanced%5B0%5D%5Btype%5D=is+exactly&amp;advanced%5B0%5D%5Bterms%5D=beige">Beige</a></li>
		<li><a href="/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=59&amp;advanced%5B0%5D%5Btype%5D=is+exactly&amp;advanced%5B0%5D%5Bterms%5D=gold">Gold</a></li>
		<li><a href="/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=59&amp;advanced%5B0%5D%5Btype%5D=is+exactly&amp;advanced%5B0%5D%5Bterms%5D=green">Green</a></li>
		<li><a href="/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=59&amp;advanced%5B0%5D%5Btype%5D=is+exactly&amp;advanced%5B0%5D%5Bterms%5D=ivory">Ivory</a></li>
		<li><a href="/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=59&amp;advanced%5B0%5D%5Btype%5D=is+exactly&amp;advanced%5B0%5D%5Bterms%5D=blue">Blue</a></li>
		<li><a href="/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=59&amp;advanced%5B0%5D%5Btype%5D=is+exactly&amp;advanced%5B0%5D%5Bterms%5D=pink">Pink</a></li>
		<li><a href="/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=59&amp;advanced%5B0%5D%5Btype%5D=is+exactly&amp;advanced%5B0%5D%5Bterms%5D=multicolour">Multicolour</a></li>
		<li><a href="/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=59&amp;advanced%5B0%5D%5Btype%5D=is+exactly&amp;advanced%5B0%5D%5Bterms%5D=orange">Orange</a></li>
		<li><a href="/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=59&amp;advanced%5B0%5D%5Btype%5D=is+exactly&amp;advanced%5B0%5D%5Bterms%5D=yellow">Yellow</a></li>
		<li><a href="/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=59&amp;advanced%5B0%5D%5Btype%5D=is+exactly&amp;advanced%5B0%5D%5Bterms%5D=silver">Silver</a></li>
		<li><a href="/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=59&amp;advanced%5B0%5D%5Btype%5D=is+exactly&amp;advanced%5B0%5D%5Bterms%5D=cream">Cream</a></li>
		<li><a href="/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=59&amp;advanced%5B0%5D%5Btype%5D=is+exactly&amp;advanced%5B0%5D%5Bterms%5D=burgundy">Burgundy</a></li>
	</ul>
	</li>
	<li class="grey"><img src="//s3.amazonaws.com/libapps/accounts/246/images/noun_17749_cc.png" style="height:18px; padding-right: 3px;" />Decade
	<ul>
		<li><a href="/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=64&amp;advanced%5B0%5D%5Btype%5D=is+exactly&amp;advanced%5B0%5D%5Bterms%5D=crinoline">Crinoline</a></li>
		<li><a href="/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=64&amp;advanced%5B0%5D%5Btype%5D=is+exactly&amp;advanced%5B0%5D%5Bterms%5D=romantic">Romantic</a></li>
		<li><a href="/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=64&amp;advanced%5B0%5D%5Btype%5D=is+exactly&amp;advanced%5B0%5D%5Bterms%5D=victorian">Victorian</a></li>
		<li><a href="/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=64&amp;advanced%5B0%5D%5Btype%5D=is+exactly&amp;advanced%5B0%5D%5Bterms%5D=the+gay+nineties">The Gay Nineties</a></li>
		<li><a href="/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=64&amp;advanced%5B0%5D%5Btype%5D=is+exactly&amp;advanced%5B0%5D%5Bterms%5D=edwardian">Edwardian</a></li>
		<li><a href="/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=64&amp;advanced%5B0%5D%5Btype%5D=is+exactly&amp;advanced%5B0%5D%5Bterms%5D=transitional">Transitional</a></li>
		<li><a href="/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=64&amp;advanced%5B0%5D%5Btype%5D=is+exactly&amp;advanced%5B0%5D%5Bterms%5D=the+roaring+twenties">The Roaring Twenties</a></li>
		<li><a href="/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=64&amp;advanced%5B0%5D%5Btype%5D=is+exactly&amp;advanced%5B0%5D%5Bterms%5D=1930s">1930s</a></li>
		<li><a href="/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=64&amp;advanced%5B0%5D%5Btype%5D=is+exactly&amp;advanced%5B0%5D%5Bterms%5D=1940s">1940s</a></li>
		<li><a href="/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=64&amp;advanced%5B0%5D%5Btype%5D=is+exactly&amp;advanced%5B0%5D%5Bterms%5D=1950s">1950s</a></li>
		<li><a href="/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=64&amp;advanced%5B0%5D%5Btype%5D=is+exactly&amp;advanced%5B0%5D%5Bterms%5D=1960s">1960s</a></li>
		<li><a href="/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=64&amp;advanced%5B0%5D%5Btype%5D=is+exactly&amp;advanced%5B0%5D%5Bterms%5D=1970s">1970s</a></li>
		<li><a href="/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=64&amp;advanced%5B0%5D%5Btype%5D=is+exactly&amp;advanced%5B0%5D%5Bterms%5D=1980s">1980s</a></li>
		<li><a href="/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=64&amp;advanced%5B0%5D%5Btype%5D=is+exactly&amp;advanced%5B0%5D%5Bterms%5D=1990s">1990s</a></li>
		<li><a href="/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=64&amp;advanced%5B0%5D%5Btype%5D=is+exactly&amp;advanced%5B0%5D%5Bterms%5D=the+noughties">The Noughties</a></li>
		<li><a href="/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=64&amp;advanced%5B0%5D%5Btype%5D=is+exactly&amp;advanced%5B0%5D%5Bterms%5D=2010s">2010s</a></li>
	</ul>
	</li>
	<li class="grey"><img src="//s3.amazonaws.com/libapps/accounts/246/images/noun_114056_cc.png" style="height:18px; padding-right: 3px;" />Nationality
	<ul>
		<li><a href="/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=53&amp;advanced%5B0%5D%5Btype%5D=contains&amp;advanced%5B0%5D%5Bterms%5D=american">American</a></li>
		<li><a href="/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=53&amp;advanced%5B0%5D%5Btype%5D=contains&amp;advanced%5B0%5D%5Bterms%5D=belgian">Belgian</a></li>
		<li><a href="/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=53&amp;advanced%5B0%5D%5Btype%5D=contains&amp;advanced%5B0%5D%5Bterms%5D=british">British</a></li>
		<li><a href="/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=53&amp;advanced%5B0%5D%5Btype%5D=contains&amp;advanced%5B0%5D%5Bterms%5D=canadian">Canadian</a></li>
		<li><a href="/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=53&amp;advanced%5B0%5D%5Btype%5D=contains&amp;advanced%5B0%5D%5Bterms%5D=chinese">Chinese</a></li>
		<li><a href="/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=53&amp;advanced%5B0%5D%5Btype%5D=contains&amp;advanced%5B0%5D%5Bterms%5D=dominican">Dominican</a></li>
		<li><a href="/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=53&amp;advanced%5B0%5D%5Btype%5D=contains&amp;advanced%5B0%5D%5Bterms%5D=english">English</a></li>
		<li><a href="/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=53&amp;advanced%5B0%5D%5Btype%5D=contains&amp;advanced%5B0%5D%5Bterms%5D=Filipino">Filipino</a></li>
		<li><a href="/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=53&amp;advanced%5B0%5D%5Btype%5D=contains&amp;advanced%5B0%5D%5Bterms%5D=french">French</a></li>
		<li><a href="/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=53&amp;advanced%5B0%5D%5Btype%5D=contains&amp;advanced%5B0%5D%5Bterms%5D=irish">Irish</a></li>
		<li><a href="/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=53&amp;advanced%5B0%5D%5Btype%5D=contains&amp;advanced%5B0%5D%5Bterms%5D=italian">Italian</a></li>
		<li><a href="/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=53&amp;advanced%5B0%5D%5Btype%5D=contains&amp;advanced%5B0%5D%5Bterms%5D=korean">Korean</a></li>
	</ul>
	</li>
</ul>
<span><a href="/omeka/items/browse">See all</a></span>
</nav>
<div style="clear:both;"></div>

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
<!-- hidden at request of Lydia<div id="outputs">
    <span class="outputs-label"><?php echo __('Output Formats'); ?></span>
    <?php echo output_format_list(false); ?>-->
<?php fire_plugin_hook('public_items_browse', array('items'=>$items, 'view' => $this)); ?>
<?php echo foot(); ?>
