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
<div style="clear:both;"></div>
<nav class="facet-nav"><!-- formerly items-nav navigation secondary-nav -->
    <h3>Filter by <span style="font-size: 0.8em">[<a href="http://10.129.129.17/omeka/items/browse">Clear Filters</a>]</h3>
    <ul>
    	<li><strong>Type<strong>
    	  <ul>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=96&advanced%5B0%5D%5Btype%5D=is+exactly&advanced%5B0%5D%5Bterms%5D=main+dresses">Main Dresses</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=96&advanced%5B0%5D%5Btype%5D=is+exactly&advanced%5B0%5D%5Bterms%5D=outerwear">Outerwear</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=96&advanced%5B0%5D%5Btype%5D=is+exactly&advanced%5B0%5D%5Bterms%5D=purpose+wear">Purpose Wear</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=96&advanced%5B0%5D%5Btype%5D=is+exactly&advanced%5B0%5D%5Bterms%5D=separates">Separates</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=96&advanced%5B0%5D%5Btype%5D=is+exactly&advanced%5B0%5D%5Bterms%5D=sportswear">Sportswear</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=96&advanced%5B0%5D%5Btype%5D=is+exactly&advanced%5B0%5D%5Bterms%5D=accessories">Accessories</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=96&advanced%5B0%5D%5Btype%5D=is+exactly&advanced%5B0%5D%5Bterms%5D=underwear">Underwear</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=96&advanced%5B0%5D%5Btype%5D=is+exactly&advanced%5B0%5D%5Bterms%5D=headgear">Headgear</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=96&advanced%5B0%5D%5Btype%5D=is+exactly&advanced%5B0%5D%5Bterms%5D=footwear">Footwear</a></li>
  	      </ul>
    	</li>
    	<li><strong>Colour<strong>
		  <ul>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=59&advanced%5B0%5D%5Btype%5D=is+exactly&advanced%5B0%5D%5Bterms%5D=black">Black</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=59&advanced%5B0%5D%5Btype%5D=is+exactly&advanced%5B0%5D%5Bterms%5D=grey">Grey</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=59&advanced%5B0%5D%5Btype%5D=is+exactly&advanced%5B0%5D%5Bterms%5D=brown">Brown</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=59&advanced%5B0%5D%5Btype%5D=is+exactly&advanced%5B0%5D%5Bterms%5D=white">White</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=59&advanced%5B0%5D%5Btype%5D=is+exactly&advanced%5B0%5D%5Bterms%5D=beige">Beige</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=59&advanced%5B0%5D%5Btype%5D=is+exactly&advanced%5B0%5D%5Bterms%5D=gold">Gold</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=59&advanced%5B0%5D%5Btype%5D=is+exactly&advanced%5B0%5D%5Bterms%5D=green">Green</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=59&advanced%5B0%5D%5Btype%5D=is+exactly&advanced%5B0%5D%5Bterms%5D=ivory">Ivory</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=59&advanced%5B0%5D%5Btype%5D=is+exactly&advanced%5B0%5D%5Bterms%5D=blue">Blue</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=59&advanced%5B0%5D%5Btype%5D=is+exactly&advanced%5B0%5D%5Bterms%5D=pink">Pink</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=59&advanced%5B0%5D%5Btype%5D=is+exactly&advanced%5B0%5D%5Bterms%5D=multicolour">Multicolour</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=59&advanced%5B0%5D%5Btype%5D=is+exactly&advanced%5B0%5D%5Bterms%5D=orange">Orange</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=59&advanced%5B0%5D%5Btype%5D=is+exactly&advanced%5B0%5D%5Bterms%5D=yellow">Yellow</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=59&advanced%5B0%5D%5Btype%5D=is+exactly&advanced%5B0%5D%5Bterms%5D=silver">Silver</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=59&advanced%5B0%5D%5Btype%5D=is+exactly&advanced%5B0%5D%5Bterms%5D=cream">Cream</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=59&advanced%5B0%5D%5Btype%5D=is+exactly&advanced%5B0%5D%5Bterms%5D=burgundy">Burgundy</a></li>
  	      </ul>
  	    </li>
    	<li><strong>Decade<strong>
		  <ul>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=64&advanced%5B0%5D%5Btype%5D=is+exactly&advanced%5B0%5D%5Bterms%5D=crinoline">Crinoline</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=64&advanced%5B0%5D%5Btype%5D=is+exactly&advanced%5B0%5D%5Bterms%5D=romantic">Romantic</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=64&advanced%5B0%5D%5Btype%5D=is+exactly&advanced%5B0%5D%5Bterms%5D=victorian">Victorian</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=64&advanced%5B0%5D%5Btype%5D=is+exactly&advanced%5B0%5D%5Bterms%5D=the+gay+nineties">The Gay Nineties</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=64&advanced%5B0%5D%5Btype%5D=is+exactly&advanced%5B0%5D%5Bterms%5D=edwardian">Edwardian</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=64&advanced%5B0%5D%5Btype%5D=is+exactly&advanced%5B0%5D%5Bterms%5D=transitional">Transitional</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=64&advanced%5B0%5D%5Btype%5D=is+exactly&advanced%5B0%5D%5Bterms%5D=the+roaring+twenties">The Roaring Twenties</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=64&advanced%5B0%5D%5Btype%5D=is+exactly&advanced%5B0%5D%5Bterms%5D=1930s">1930s</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=64&advanced%5B0%5D%5Btype%5D=is+exactly&advanced%5B0%5D%5Bterms%5D=1940s">1940s</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=64&advanced%5B0%5D%5Btype%5D=is+exactly&advanced%5B0%5D%5Bterms%5D=1950s">1950s</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=64&advanced%5B0%5D%5Btype%5D=is+exactly&advanced%5B0%5D%5Bterms%5D=1960s">1960s</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=64&advanced%5B0%5D%5Btype%5D=is+exactly&advanced%5B0%5D%5Bterms%5D=1970s">1970s</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=64&advanced%5B0%5D%5Btype%5D=is+exactly&advanced%5B0%5D%5Bterms%5D=1980s">1980s</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=64&advanced%5B0%5D%5Btype%5D=is+exactly&advanced%5B0%5D%5Bterms%5D=1990s">1990s</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=64&advanced%5B0%5D%5Btype%5D=is+exactly&advanced%5B0%5D%5Bterms%5D=the+noughties">The Noughties</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=64&advanced%5B0%5D%5Btype%5D=is+exactly&advanced%5B0%5D%5Bterms%5D=2010s">2010s</a></li>
  	      </ul>
  	    </li>
    	<li><strong>Designer<strong>
		  <ul>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=53&advanced%5B0%5D%5Btype%5D=contains&advanced%5B0%5D%5Bterms%5D=alan+cherry">Alan Cherry</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=53&advanced%5B0%5D%5Btype%5D=contains&advanced%5B0%5D%5Bterms%5D=alexander+mcqueen">Alexander McQueen</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=53&advanced%5B0%5D%5Btype%5D=contains&advanced%5B0%5D%5Bterms%5D=alfred+sung">Alfred Sung</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=53&advanced%5B0%5D%5Btype%5D=contains&advanced%5B0%5D%5Bterms%5D=andr&#233;+courr&#232;ges">Andr&#233; Courr&#232;ges</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=53&advanced%5B0%5D%5Btype%5D=contains&advanced%5B0%5D%5Bterms%5D=angorette">Angorette</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=53&advanced%5B0%5D%5Btype%5D=contains&advanced%5B0%5D%5Bterms%5D=anne+bonham">Anne Bonham</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=53&advanced%5B0%5D%5Btype%5D=contains&advanced%5B0%5D%5Bterms%5D=anne+green">Anne Green</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=53&advanced%5B0%5D%5Btype%5D=contains&advanced%5B0%5D%5Bterms%5D=anne+llein">Anne Klein</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=53&advanced%5B0%5D%5Btype%5D=contains&advanced%5B0%5D%5Bterms%5D=arnold+scaasi">Arnold Scaasi</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=53&advanced%5B0%5D%5Btype%5D=contains&advanced%5B0%5D%5Bterms%5D=bill+gibb+london">Bill Gibb London</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=53&advanced%5B0%5D%5Btype%5D=contains&advanced%5B0%5D%5Bterms%5D=bob+bugnand">Bob Bugnand</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=53&advanced%5B0%5D%5Btype%5D=contains&advanced%5B0%5D%5Bterms%5D=bob+mackie">Bob Mackie</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=53&advanced%5B0%5D%5Btype%5D=contains&advanced%5B0%5D%5Bterms%5D=brian+bailey">Brian Bailey</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=53&advanced%5B0%5D%5Btype%5D=contains&advanced%5B0%5D%5Bterms%5D=brian+winston+&#38;+stefana+gracile">Brian Winston & Stefana Gracile</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=53&advanced%5B0%5D%5Btype%5D=contains&advanced%5B0%5D%5Bterms%5D=burberry">Burberry</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=53&advanced%5B0%5D%5Btype%5D=contains&advanced%5B0%5D%5Bterms%5D=calvin+klein">Calvin Klein</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=53&advanced%5B0%5D%5Btype%5D=contains&advanced%5B0%5D%5Bterms%5D=christian+dior">Christian Dior</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=53&advanced%5B0%5D%5Btype%5D=contains&advanced%5B0%5D%5Bterms%5D=christian+lacroix">Christian Lacroix</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=53&advanced%5B0%5D%5Btype%5D=contains&advanced%5B0%5D%5Bterms%5D=claire+haddad">Claire Haddad</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=53&advanced%5B0%5D%5Btype%5D=contains&advanced%5B0%5D%5Bterms%5D=d'arcy+moses">D'Arcy Moses</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=53&advanced%5B0%5D%5Btype%5D=contains&advanced%5B0%5D%5Bterms%5D=diane+von+furstenberg">Diane von Furstenberg</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=53&advanced%5B0%5D%5Btype%5D=contains&advanced%5B0%5D%5Bterms%5D=dits-paris">Dits-Paris</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=53&advanced%5B0%5D%5Btype%5D=contains&advanced%5B0%5D%5Bterms%5D=donna+karan">Donna Karan</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=53&advanced%5B0%5D%5Btype%5D=contains&advanced%5B0%5D%5Bterms%5D=donna+morgan">Donna Morgan</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=53&advanced%5B0%5D%5Btype%5D=contains&advanced%5B0%5D%5Bterms%5D=eatons">Eatons</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=53&advanced%5B0%5D%5Btype%5D=contains&advanced%5B0%5D%5Bterms%5D=edie+johne">Edie Johne</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=53&advanced%5B0%5D%5Btype%5D=contains&advanced%5B0%5D%5Bterms%5D=ediths+strauss">Edith Strauss</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=53&advanced%5B0%5D%5Btype%5D=contains&advanced%5B0%5D%5Bterms%5D=elisabeth+rasing">Elisabeth Rasing</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=53&advanced%5B0%5D%5Btype%5D=contains&advanced%5B0%5D%5Bterms%5D=elsa+schiaparelli">Elsa Schiaparelli</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=53&advanced%5B0%5D%5Btype%5D=contains&advanced%5B0%5D%5Bterms%5D=emanuel+matt&#233;otti+ungaro">Emanuel Matt&#233;otti Ungaro</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=53&advanced%5B0%5D%5Btype%5D=contains&advanced%5B0%5D%5Bterms%5D=emilio+pucci">Emilio Pucci</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=53&advanced%5B0%5D%5Btype%5D=contains&advanced%5B0%5D%5Bterms%5D=emmanuelle+khanh">Emmanuelle Khanh</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=53&advanced%5B0%5D%5Btype%5D=contains&advanced%5B0%5D%5Bterms%5D=evan+picone">Evan Picone</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=53&advanced%5B0%5D%5Btype%5D=contains&advanced%5B0%5D%5Bterms%5D=fenton">Fenton</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=53&advanced%5B0%5D%5Btype%5D=contains&advanced%5B0%5D%5Bterms%5D=fenton+footwear">Fenton Footwear</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=53&advanced%5B0%5D%5Btype%5D=contains&advanced%5B0%5D%5Bterms%5D=franco+mirabelli">Franco Mirabelli</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=53&advanced%5B0%5D%5Btype%5D=contains&advanced%5B0%5D%5Bterms%5D=geoffrey+beene">Geoffrey Beene</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=53&advanced%5B0%5D%5Btype%5D=contains&advanced%5B0%5D%5Bterms%5D=gerald+franklin">Gerald Franklin</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=53&advanced%5B0%5D%5Btype%5D=contains&advanced%5B0%5D%5Bterms%5D=giorgio+armani">Giorgio Armani</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=53&advanced%5B0%5D%5Btype%5D=contains&advanced%5B0%5D%5Bterms%5D=givenchy">Givenchy</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=53&advanced%5B0%5D%5Btype%5D=contains&advanced%5B0%5D%5Bterms%5D=henry+white">Henry White</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=53&advanced%5B0%5D%5Btype%5D=contains&advanced%5B0%5D%5Bterms%5D=herm&#232;s">Herm&#232;s</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=53&advanced%5B0%5D%5Btype%5D=contains&advanced%5B0%5D%5Bterms%5D=hubert+de+givenchy">Hubert de Givenchy</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=53&advanced%5B0%5D%5Btype%5D=contains&advanced%5B0%5D%5Bterms%5D=izzy+camilleri">Izzy Camilleri</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=53&advanced%5B0%5D%5Btype%5D=contains&advanced%5B0%5D%5Bterms%5D=jacques+heim">Jacques Heim</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=53&advanced%5B0%5D%5Btype%5D=contains&advanced%5B0%5D%5Bterms%5D=jean+claude+poitras">Jean Claude Poitras</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=53&advanced%5B0%5D%5Btype%5D=contains&advanced%5B0%5D%5Bterms%5D=jean+elizabeth+muir">Jean Elizabeth Muir</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=53&advanced%5B0%5D%5Btype%5D=contains&advanced%5B0%5D%5Bterms%5D=jean+paul+gaultier">Jean Paul Gaultier</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=53&advanced%5B0%5D%5Btype%5D=contains&advanced%5B0%5D%5Bterms%5D=jeanne+lanvin">Jeanne Lanvin</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=53&advanced%5B0%5D%5Btype%5D=contains&advanced%5B0%5D%5Bterms%5D=joan+anderson">Joan Anderson</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=53&advanced%5B0%5D%5Btype%5D=contains&advanced%5B0%5D%5Bterms%5D=joan+rigby">Joan Rigby</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=53&advanced%5B0%5D%5Btype%5D=contains&advanced%5B0%5D%5Bterms%5D=joeffer+caoc">Joeffer Caoc</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=53&advanced%5B0%5D%5Btype%5D=contains&advanced%5B0%5D%5Bterms%5D=kaisu+helkkila+oy">Kaisu Helkkila Oy</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=53&advanced%5B0%5D%5Btype%5D=contains&advanced%5B0%5D%5Bterms%5D=kingi+carpenter">Kingi Carpenter</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=53&advanced%5B0%5D%5Btype%5D=contains&advanced%5B0%5D%5Bterms%5D=lee+buchanan">Lee Buchanan</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=53&advanced%5B0%5D%5Btype%5D=contains&advanced%5B0%5D%5Bterms%5D=leslie+fay">Leslie Fay</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=53&advanced%5B0%5D%5Btype%5D=contains&advanced%5B0%5D%5Bterms%5D=lida+baday">Lida Baday</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=53&advanced%5B0%5D%5Btype%5D=contains&advanced%5B0%5D%5Bterms%5D=linda+lundstr&#246;m">Linda Lundstr&#246;m</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=53&advanced%5B0%5D%5Btype%5D=contains&advanced%5B0%5D%5Bterms%5D=maggy+reeves">Maggy Reeves</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=53&advanced%5B0%5D%5Btype%5D=contains&advanced%5B0%5D%5Bterms%5D=marie+cluthe">Marie Cluthe</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=53&advanced%5B0%5D%5Btype%5D=contains&advanced%5B0%5D%5Bterms%5D=marilyn+brooks">Marilyn Brooks</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=53&advanced%5B0%5D%5Btype%5D=contains&advanced%5B0%5D%5Bterms%5D=mario+pucci+cecconi">Mario Pucci Cecconi</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=53&advanced%5B0%5D%5Btype%5D=contains&advanced%5B0%5D%5Bterms%5D=martha+halston">Martha Halston</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=53&advanced%5B0%5D%5Btype%5D=contains&advanced%5B0%5D%5Bterms%5D=martha+washington">Martha Washington</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=53&advanced%5B0%5D%5Btype%5D=contains&advanced%5B0%5D%5Bterms%5D=marty+modell">Marty Modell</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=53&advanced%5B0%5D%5Btype%5D=contains&advanced%5B0%5D%5Bterms%5D=mila+schonn">Mila Schonn</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=53&advanced%5B0%5D%5Btype%5D=contains&advanced%5B0%5D%5Bterms%5D=mr.+jax">Mr. Jax</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=53&advanced%5B0%5D%5Btype%5D=contains&advanced%5B0%5D%5Bterms%5D=nicole+miller">Nicole Miller</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=53&advanced%5B0%5D%5Btype%5D=contains&advanced%5B0%5D%5Bterms%5D=nina+ricci">Nina Ricci</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=53&advanced%5B0%5D%5Btype%5D=contains&advanced%5B0%5D%5Bterms%5D=nyg&#229;rd+international">Nyg&#229;rd International</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=53&advanced%5B0%5D%5Btype%5D=contains&advanced%5B0%5D%5Bterms%5D=oscar+de+la+renta">Oscar De la Renta</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=53&advanced%5B0%5D%5Btype%5D=contains&advanced%5B0%5D%5Bterms%5D=pat+mcdonagh">Pat McDonagh</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=53&advanced%5B0%5D%5Btype%5D=contains&advanced%5B0%5D%5Bterms%5D=philip+treacy">Philip Treacy</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=53&advanced%5B0%5D%5Btype%5D=contains&advanced%5B0%5D%5Bterms%5D=ralph+lauren">Ralph Lauren</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=53&advanced%5B0%5D%5Btype%5D=contains&advanced%5B0%5D%5Bterms%5D=ray+hildebrand">Ray Hildebrand</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=53&advanced%5B0%5D%5Btype%5D=contains&advanced%5B0%5D%5Bterms%5D=robin+kay">Robin Kay</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=53&advanced%5B0%5D%5Btype%5D=contains&advanced%5B0%5D%5Bterms%5D=ruth+dukas">Ruth Dukas</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=53&advanced%5B0%5D%5Btype%5D=contains&advanced%5B0%5D%5Bterms%5D=sheathe">Sheathe</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=53&advanced%5B0%5D%5Btype%5D=contains&advanced%5B0%5D%5Bterms%5D=sunny+choi">Sunny Choi</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=53&advanced%5B0%5D%5Btype%5D=contains&advanced%5B0%5D%5Bterms%5D=t.+herber">T. Herber</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=53&advanced%5B0%5D%5Btype%5D=contains&advanced%5B0%5D%5Bterms%5D=thomas+burberry">Thomas Burberry</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=53&advanced%5B0%5D%5Btype%5D=contains&advanced%5B0%5D%5Bterms%5D=troy+ng">Troy Ng</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=53&advanced%5B0%5D%5Btype%5D=contains&advanced%5B0%5D%5Bterms%5D=tuly">Tuly</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=53&advanced%5B0%5D%5Btype%5D=contains&advanced%5B0%5D%5Bterms%5D=ulla+heathcote">Ulla Heathcote</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=53&advanced%5B0%5D%5Btype%5D=contains&advanced%5B0%5D%5Bterms%5D=welly">Welly</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=53&advanced%5B0%5D%5Btype%5D=contains&advanced%5B0%5D%5Bterms%5D=wilson's">Wilson's</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=53&advanced%5B0%5D%5Btype%5D=contains&advanced%5B0%5D%5Bterms%5D=yves+saint+laurent">Yves Saint Laurent</a></li>
     	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=53&advanced%5B0%5D%5Btype%5D=contains&advanced%5B0%5D%5Bterms%5D=zapata">Zapata</a></li>
     	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=53&advanced%5B0%5D%5Btype%5D=contains&advanced%5B0%5D%5Bterms%5D=zita+harper">Zita Harper</a></li>
  	      </ul>
  	    </li>
    	<li><strong>Donor<strong>
		  <ul>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=113&advanced%5B0%5D%5Btype%5D=contains&advanced%5B0%5D%5Bterms%5D=arnold+scassi">Arnold Scassi</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=113&advanced%5B0%5D%5Btype%5D=contains&advanced%5B0%5D%5Bterms%5D=bata+shoe+museum">Bata Shoe Museum</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=113&advanced%5B0%5D%5Btype%5D=contains&advanced%5B0%5D%5Bterms%5D=boswell-burr+estate">Boswell-Burr Estate</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=113&advanced%5B0%5D%5Btype%5D=contains&advanced%5B0%5D%5Bterms%5D=brian+wickens">Brian Wickens</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=113&advanced%5B0%5D%5Btype%5D=contains&advanced%5B0%5D%5Bterms%5D=claire+haddad">Claire Haddad</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=113&advanced%5B0%5D%5Btype%5D=contains&advanced%5B0%5D%5Bterms%5D=dale+peers">Dale Peers</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=113&advanced%5B0%5D%5Btype%5D=contains&advanced%5B0%5D%5Bterms%5D=edith+strauss">Edith Strauss</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=113&advanced%5B0%5D%5Btype%5D=contains&advanced%5B0%5D%5Bterms%5D=franco+mirabelli">Franco Mirabelli</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=113&advanced%5B0%5D%5Btype%5D=contains&advanced%5B0%5D%5Bterms%5D=gallery+of+costume">Gallery of Costume</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=113&advanced%5B0%5D%5Btype%5D=contains&advanced%5B0%5D%5Bterms%5D=jonathan+walford">Jonathan Walford</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=113&advanced%5B0%5D%5Btype%5D=contains&advanced%5B0%5D%5Bterms%5D=lida+baday">Lida Baday</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=113&advanced%5B0%5D%5Btype%5D=contains&advanced%5B0%5D%5Bterms%5D=marilyn+brooks">Marilyn Brooks</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=113&advanced%5B0%5D%5Btype%5D=contains&advanced%5B0%5D%5Bterms%5D=marilyn+lastman">Marilyn Lastman</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=113&advanced%5B0%5D%5Btype%5D=contains&advanced%5B0%5D%5Bterms%5D=stratford+festival+theatre">Stratford Festival Theatre</a></li>
  	      </ul>
  	    </li>
    	<li><strong>Nationality<strong>
		  <ul>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=53&advanced%5B0%5D%5Btype%5D=contains&advanced%5B0%5D%5Bterms%5D=american">American</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=53&advanced%5B0%5D%5Btype%5D=contains&advanced%5B0%5D%5Bterms%5D=belgian">Belgian</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=53&advanced%5B0%5D%5Btype%5D=contains&advanced%5B0%5D%5Bterms%5D=british">British</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=53&advanced%5B0%5D%5Btype%5D=contains&advanced%5B0%5D%5Bterms%5D=canadian">Canadian</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=53&advanced%5B0%5D%5Btype%5D=contains&advanced%5B0%5D%5Bterms%5D=chinese">Chinese</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=53&advanced%5B0%5D%5Btype%5D=contains&advanced%5B0%5D%5Bterms%5D=dominican">Dominican</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=53&advanced%5B0%5D%5Btype%5D=contains&advanced%5B0%5D%5Bterms%5D=english">English</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=53&advanced%5B0%5D%5Btype%5D=contains&advanced%5B0%5D%5Bterms%5D=Filipino">Filipino</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=53&advanced%5B0%5D%5Btype%5D=contains&advanced%5B0%5D%5Bterms%5D=french">French</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=53&advanced%5B0%5D%5Btype%5D=contains&advanced%5B0%5D%5Bterms%5D=irish">Irish</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=53&advanced%5B0%5D%5Btype%5D=contains&advanced%5B0%5D%5Bterms%5D=italian">Italian</a></li>
    	    <li><a href="http://10.129.129.17/omeka/items/browse?advanced%5B0%5D%5Belement_id%5D=53&advanced%5B0%5D%5Btype%5D=contains&advanced%5B0%5D%5Bterms%5D=korean">Korean</a></li>
  	      </ul>
  	    </li>
    </ul>
    <!--<?php echo public_nav_items(); ?> -->
</nav>

<!-- hidden at request of Lydia<div id="outputs">
    <span class="outputs-label"><?php echo __('Output Formats'); ?></span>
    <?php echo output_format_list(false); ?>-->

<?php fire_plugin_hook('public_items_browse', array('items'=>$items, 'view' => $this)); ?>

<?php echo foot(); ?>
