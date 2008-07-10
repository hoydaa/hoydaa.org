<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <?php include_http_metas() ?>
        <?php include_metas() ?>
        <?php include_title() ?>
        <link rel="shortcut icon" href="/favicon.ico" />
    </head>
    <body>
        <div id="header-wrapper">
            <div id="header">
            	<a href="<?php echo url_for('@homepage') ?>"><?php echo image_tag('logo', 'id=logo') ?></a>
                <?php include_partial('global/breadcrumb', array('pages' => $pages)) ?>
                <?php include_partial('global/tabbar', array('tab' => $tab)) ?>
                <div id="login">
	                <?php if ($sf_user->isAuthenticated()): ?>
						<a href="<?php echo url_for('user/profile') ?>"><span><?php echo $sf_user->getUsername() ?>'s profile</span></a>
						| <a href="<?php echo url_for('user/logout') ?>"><span>logout</span></a>
	                    <?php if($sf_user->hasCredential('admin')): ?>
							| <?php echo link_to('admin', '../backend_dev.php/user', array('target'=>'_blank')) ?>
	                    <?php endif; ?>
                    <?php else: ?>
    					<a href="<?php echo url_for('user/login') ?>"><span>login</span></a>
    				<?php endif; ?>
				</div>
            </div>
        </div>
        <div id="main">
            <div id="sidebar">
                <?php include_slot('sidebar') ?>
                <?php include_partial('site/jira_banner') ?>
            </div>
            <div id="content">
                <?php echo $sf_data->getRaw('sf_content') ?>
            </div>
            <div id="bottom"></div>
        </div>
        <div id="footer">
            Copyright &copy; 2007-<?php echo date('Y') ?> Hoydaa Inc.
        </div>
        
		<script type="text/javascript">
			var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
			document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
		</script>
		<script type="text/javascript">
			var pageTracker = _gat._getTracker("UA-794867-4");
			pageTracker._initData();
			pageTracker._trackPageview();
		</script>        
        
    </body>
</html>