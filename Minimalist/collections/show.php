<?php
    $collectionTitle = strip_formatting(metadata('collection', array('Dublin Core', 'Title'), array('no_filter' => true)));
    $collectionName = strip_formatting(metadata('collection', array('Dublin Core', 'Title'), array('no_filter' => true)));
    if ($collectionTitle != '') {
        $collectionTitle = ': &quot;' . $collectionTitle . '&quot; ';
    } else {
        $collectionTitle = '';
    }
    $collectionTitle = __('Edit Collection #%s', metadata('collection', 'id')) . $collectionTitle;
?>
<?php echo head(array('title'=> $collectionTitle, 'bodyclass'=>'collections show')); ?>
<h2>Information About Collection: <?php echo __($collectionName); ?></h3> <!--ADDED TITLE OF COLLECTION -->
<section class="seven columns alpha">
    <?php echo flash(); ?>

    <?php echo all_element_texts('collection'); ?>

    <?php if(metadata('collection', 'Total Items') > 0): ?>
    <h3><?php echo __('Recently Added Items'); ?></h3>
    <ul class="recent-items">
    <?php foreach (loop('items') as $item): ?>
        <li><span class="date"><?php echo format_date(metadata('item', 'Added')); ?></span><span class="title"> <?php echo link_to_item(); ?></span></li>
    <?php endforeach;?>
    </ul>
    <?php endif; ?>

    <!-- NOT NEEDED <?php fire_plugin_hook('admin_collections_show', array('collection' => $collection, 'view' => $this)); ?> -->
</section>

<section class="three columns omega">
    <!-- NOT NEEDED <div id="edit" class="panel">
        <?php if (is_allowed(get_current_record('collection'), 'edit')): ?>
            <?php echo link_to_collection(__('Edit'), array('class'=>'big green button'), 'edit'); ?>
        <?php endif; ?>
        <a href="<?php echo html_escape(public_url('collections/show/'.metadata('collection', 'id'))); ?>" class="big blue button" target="_blank"><?php echo __('View Public Page'); ?></a>
        <?php if (is_allowed(get_current_record('collection'), 'delete')): ?>
            <?php echo link_to_collection(__('Delete'), array('class'=>'big red button delete-confirm'), 'delete-confirm'); ?>
        <?php endif; ?>
    </div>-->

    <div class="public-featured panel">
        <p><span class="label"><?php echo __('Public'); ?>:</span> <?php echo ($collection->public) ? __('Yes') : __('No'); ?></p>
        <p><span class="label"><?php echo __('Featured'); ?>:</span> <?php echo ($collection->featured) ? __('Yes') : __('No'); ?></p>
        <p><?php echo __('Total Number of Items'); ?>: <?php echo link_to_items_in_collection(); ?></p>
    </div>
		<?php if ($collectionImage = record_image('collection', 'thumbnail')): ?>
		    <?php echo link_to_items_in_collection($collectionImage, array('class' => 'image')); ?> <!-- REPLACED link_to_collection -->
        <?php endif; ?>
        <h3><?php echo link_to_items_in_collection('Go head, browse the items in this collection.'); ?></h3> <!-- changed from linked total items to more descriptive link label -->

   <!-- NOT NEEDED <div class="contributors panel">
        <h4><?php echo __('Contributors'); ?></h4>
        <ul id="contributor-list">
            <?php if ($collection->hasContributor()): ?>
            <li><?php echo metadata('collection', array('Dublin Core', 'Contributor'), array('all'=>true, 'delimiter'=>'</li><li>')); ?></li>
            <?php else: ?>
            <li><?php echo __('No contributors.'); ?></li>
            <?php endif; ?>
        </ul> -->
    </div>
    <?php fire_plugin_hook('admin_collections_show_sidebar', array('view'=>$this, 'collection'=>$collection)); ?>
</section>

<?php echo foot(); ?>
