<div class="box">
    <div class="bottom">
        <div class="content">
            <ul class="menu">
                <li><?php echo link_to('Change Profile', 'user/changeProfile') ?></li>
                <li><?php echo link_to('Email Settings', 'user/emailSettings') ?></li>
				<?php if(sizeof(UserPeer::retrieveByPK($sf_user->getSubscriberId())->getDevelopers()) > 0): ?>
				<li><?php echo link_to('Projects Participated', 'user/projects') ?></li>		
				<?php endif; ?>
            </ul>
        </div>
    </div>
</div>