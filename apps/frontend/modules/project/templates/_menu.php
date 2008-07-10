<div class="box">
    <div class="bottom">
        <div class="content">
            <ul class="menu">
                <li><?php echo link_to('Summary', 'project/show?id='.$project->getTag()) ?></li>
                <li><?php echo link_to('Announcements', 'project/listAnnouncements?id='.$project->getTag()) ?></li>
                <li><?php echo link_to('Project Team', 'project/listDevelopers?id='.$project->getTag()) ?></li>
                <?php if ($project->getDownload()): ?>
                <li><?php echo link_to('Download', $project->getDownload(), 'target=_blank') ?><br /></li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</div>
<br />