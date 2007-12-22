<?php use_helper('Date', 'Text') ?>

<?php slot('sidebar') ?>
<?php include_partial('menu', array('project' => $project)) ?>
<?php end_slot() ?>

<h1><?php echo $announcement->getSubject() ?></h1>
<p><?php echo auto_link_text(simple_format_text($announcement->getDetails())) ?></p>
Posted on <?php echo format_date($announcement->getCreatedAt()) ?>