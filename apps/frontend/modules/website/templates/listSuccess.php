<h1>Projects</h1>
<?php echo image_tag('divider.png', 'class=divider') ?>
<div id="projects">
    <?php foreach ($websites as $website): ?>
    <div>
        <h2><?php echo link_to($website->getName(), $website->getUrl()) ?></h2>
        <p><?php echo $website->getDescription() ?></p>
    </div>    
<?php endforeach; ?>
</div>