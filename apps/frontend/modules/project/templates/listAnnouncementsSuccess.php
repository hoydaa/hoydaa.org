<?php use_helper('Date', 'Global', 'Text') ?>

<?php slot('sidebar') ?>
<?php include_partial('menu', array('project' => $project)) ?>
<?php end_slot() ?>

<h1>Announcements</h1>
<?php echo image_tag('divider.png', 'class=divider') ?>
<?php if ($projectAnnouncementPager->getResults()): ?>
<div id="announcements">
<?php foreach ($projectAnnouncementPager->getResults() as $projectAnnouncement): ?>
    <div>
        <h3><?php echo $projectAnnouncement->getSubject() ?></h3>
        <p><?php echo truncate_text($projectAnnouncement->getDetails(), 200) ?> <?php echo link_to('more', 'project/showAnnouncement?id='.$projectAnnouncement->getId()) ?></p>
        <span class="date">Posted on <?php echo $projectAnnouncement->getCreatedAt() ?></span>
    </div>
<?php endforeach; ?>
</div>
<?php else: ?>
<p>There is no announcements for this project at the moment.</p>
<?php endif; ?>

<div id="pager">
    <?php echo pager_navigation($projectAnnouncementPager, 'project/listAnnouncements?id='.$project->getId()) ?>
</div>