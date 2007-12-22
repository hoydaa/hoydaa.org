<?php use_helper('Asset') ?>

<?php slot('sidebar') ?>
<?php include_partial('menu', array('project' => $project)) ?>
<?php end_slot() ?>

<h1>Project Team</h1>
<?php echo image_tag('divider.png', 'class=divider') ?>
<div id="developers">
    <?php foreach ($developers as $developer): ?>
    <div>
        <?php if ($developer->getUser()->getPhoto()): ?>
        <?php echo image_tag('/'.sfConfig::get('sf_upload_dir_name').'/pictures/users/'.$developer->getUser()->getPhoto()) ?>
        <?php else: ?>
        <?php echo image_tag('profile-photo.png') ?>
        <?php endif; ?>
        <h2><?php echo $developer->getUser()->getFirstName() ?> <?php echo $developer->getUser()->getLastName() ?></h2>
        <dl>
            <dt>Organization:</dt>
            <dd><?php echo link_to($developer->getOrganizationName(), $developer->getOrganizationUrl(), 'target=_blank') ?></dd>
        </dl>
    </div>
    <?php endforeach; ?>
</div>