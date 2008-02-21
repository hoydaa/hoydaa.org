<?php slot('sidebar') ?>
<?php include_partial('menu') ?>
<?php end_slot() ?>

<h1>Projects Participated</h1>
<?php echo image_tag('divider.png', 'class=divider') ?>
<div id="projects">
    <?php foreach ($projects as $project): ?>
    <div>
        <h2><?php echo link_to($project->getName(), 'project/show?id='.$project->getTag()) ?></h2>
        <p><?php echo $project->getSummary() ?></p>
    </div>    
<?php endforeach; ?>
</div>