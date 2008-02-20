<?php use_helper('Text') ?>

<?php slot('sidebar') ?>
<div class="box">
    <div class="bottom">
        <div class="content">
            <ul class="menu">
            	<li><h2>Projects</h2></li>
            	<?php foreach ($projects as $project): ?>
            	<li><?php echo link_to($project->getName(), 'project/show?id='.$project->getTag()) ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>
<?php end_slot() ?>

<?php echo image_tag('banner') ?>
<br />
<br />
<h1>Announcements</h1>
<?php echo image_tag('divider.png', 'class=divider') ?>
<div id="announcements">
    <?php foreach ($announcements as $announcement): ?>
    <div>
        <h3><?php echo $announcement->getSubject() ?></h3>
        <p><?php echo truncate_text($announcement->getDetails(), 200) ?> <?php echo link_to('more', 'project/showAnnouncement?id='.$announcement->getId()) ?></p>
        <span class="date">Posted on <?php echo $announcement->getCreatedAt() ?></span>
    </div>
    <?php endforeach; ?>
    <?php echo link_to('All Announcements', 'projectAnnouncement/list', 'class=arrow') ?>
</div>