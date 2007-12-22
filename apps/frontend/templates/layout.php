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
            </div>
        </div>
        <div id="main">
            <div id="sidebar">
                <?php include_slot('sidebar') ?>
            </div>
            <div id="content">
                <?php echo $sf_data->getRaw('sf_content') ?>
            </div>
            <div id="bottom"></div>
        </div>
        <div id="footer">
            Copyright &copy; 2007 Hoydaa Inc.
        </div>
    </body>
</html>