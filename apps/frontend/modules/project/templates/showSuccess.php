<?php use_helper('Date', 'Text') ?>

<?php slot('sidebar') ?>
<?php include_partial('menu', array('project' => $project)) ?>
<?php end_slot() ?>

<h1><?php echo $project->getName() ?></h1>
<?php echo image_tag('divider.png', 'class=divider') ?>
<?php echo simple_format_text($project->getDescription()) ?>
<dl class="prop">
    <dt>License:</dt>
    <dd><?php echo link_to($project->getLicense()->getName(), $project->getLicense()->getUrl(), 'target=_blank') ?></dd>
    <?php if ($project->getWiki()): ?>
    <dt>Wiki:</dt>
    <dd><?php echo link_to(null, $project->getWiki(), 'target=_blank') ?></dd>
    <?php endif; ?>
    <?php if ($project->getIssueTracker()): ?>
    <dt>Issue Tracker:</dt>
    <dd><?php echo link_to(null, $project->getIssueTracker(), 'target=_blank') ?></dd>
    <?php endif; ?>
    <?php if ($project->getForums()): ?>
    <dt>Forums:</dt>
    <dd><?php echo link_to(null, $project->getForums(), 'target=_blank') ?></dd>
    <?php endif; ?>
</dl>
<br />
<h2>Announcements</h2>
<?php echo image_tag('divider.png', 'class=divider') ?>
<?php if ($announcements): ?>
<div id="announcements">
    <?php foreach ($announcements as $announcement): ?>
    <div>
        <h3><?php echo $announcement->getSubject() ?></h3>
        <p><?php echo truncate_text($announcement->getDetails(), 200) ?> <?php echo link_to('more', 'project/showAnnouncement?id='.$announcement->getId()) ?></p>
        <span class="date">Posted on <?php echo $announcement->getCreatedAt() ?></span>
    </div>
    <?php endforeach; ?>
    <?php echo link_to('All Announcements', 'project/listAnnouncements?id='.$project->getId(), 'class=arrow') ?>
</div>
<?php else: ?>
<p>There are no announcements for this project at the moment.</p>
<?php endif; ?>