<ul id="tabs">
    <li<?php if ($tab == 'home') echo ' class="current"' ?>><a href="<?php echo url_for('@homepage') ?>"><span>HOME</span></a></li>
    <li<?php if ($tab == 'about_us') echo ' class="current"' ?>><a href="<?php echo url_for('site/aboutUs') ?>"><span>ABOUT US</span></a></li>
    <li<?php if ($tab == 'projects') echo ' class="current"' ?>><a href="<?php echo url_for('project/list') ?>"><span>PROJECTS</span></a></li>
    <li<?php if ($tab == 'websites') echo ' class="current"' ?>><a href="<?php echo url_for('website/list') ?>"><span>WEBSITES</span></a></li>
</ul>