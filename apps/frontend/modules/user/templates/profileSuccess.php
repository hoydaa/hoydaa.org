<?php slot('sidebar') ?>
<?php include_partial('menu') ?>
<?php end_slot() ?>

<h1><?php echo $user->getUsername() ?></h1>
<?php echo image_tag('divider.png', 'class=divider') ?>
<div id="developers">
    <div>
        <dl>
            <dt>Name:</dt>
            <dd><?php echo $user->getFullName() ?></dd>
            <dt>Email:</dt>
            <dd><?php echo $user->getEmail() ?></dd>
            <?php if($developer): ?>
                <dt>Organization:</dt>
                <dd><?php echo $developer->getOrganizationName() ?></dd>
                <dt>Email:</dt>
                <dd><?php echo link_to($developer->getOrganizationUrl(), $developer->getOrganizationUrl(), array('target'=>'_blank')) ?></dd>            
            <?php endif; ?>
        </dl>
    </div>
</div>