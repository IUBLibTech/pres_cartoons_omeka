<?php
$collectionTitle = metadata('collection', 'display_title');
$totalItems = metadata('collection', 'total_items');
?>

<?php echo head(array('title' => $collectionTitle, 'bodyclass' => 'collections show')); ?>

<h1><?php echo $collectionTitle; ?></h1>

<?php echo all_element_texts('collection'); ?>

<div id="collection-items">
    <h2><?php echo __('Collection Items'); ?></h2>
    <?php if ($totalItems > 0): ?>
        <?php foreach (loop('items') as $item): ?>
        <?php $itemTitle = metadata('item', 'display_title'); ?>
        <div class="item hentry">

            <?php if (metadata('item', 'has thumbnail')): ?>
            <div class="column-left-item colleft">
                <?php echo link_to_item(item_image(null, array('alt' => $itemTitle))); ?>
            </div>
            <?php endif; ?>
            <h3 class="column-right-item colleft"><?php echo link_to_item(snippet_by_word_count($itemTitle,10), array('class' => 'permalink')); ?></h3>

            <?php if ($description = metadata('item', array('Dublin Core', 'Description'))): ?>
            <div class="column-right-item colleft">
                <?php echo snippet_by_word_count($description,24); ?>
            </div>
            <?php endif; ?>
        </div>
        <?php endforeach; ?>
        <?php echo link_to_items_browse(__(plural('View item', 'View all %s items', $totalItems), $totalItems), array('collection' => metadata('collection', 'id')), array('class' => 'view-items-link')); ?>
    <?php else: ?>
        <p><?php echo __("There are currently no items within this collection."); ?></p>
    <?php endif; ?>
</div><!-- end collection-items -->

<?php fire_plugin_hook('public_collections_show', array('view' => $this, 'collection' => $collection)); ?>

<?php echo foot(); ?>
