<?php foreach ($elementsForDisplay as $setName => $setElements): ?>

<div class="element-set">
    <?php if ($showElementSetHeadings): ?>
    <h3><?php echo html_escape(__($setName)); ?></h3>
    <?php endif; ?>
    
    <?php foreach ($setElements as $elementName => $elementInfo): ?>
    <div id="<?php echo text_to_id(html_escape("$setName $elementName")); ?>" class="element">
   
   <!--Change or hide display label for metadata elements-->     
   
    <?php if ($setName == 'Costume Item Type Metadata' && $elementName == 'Image') {
        $label = 'no-display';
        } else {
        $label = __($elementName);}?>

       <?php if ($label !=='no-display') {echo "<h3>", html_escape($label), "</h3>";} ?>
        
        <?php foreach ($elementInfo['texts'] as $text): ?>
            <div class="element-text"><?php echo $text; ?></div>
        <?php endforeach; ?>
    </div>
    <?php endforeach; ?>
</div>
<?php endforeach;
