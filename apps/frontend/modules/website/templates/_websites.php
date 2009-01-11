<div class="box">
    <div class="bottom">
        <div class="content">
            <ul class="menu">
            	<li><h2>Websites</h2></li>
            	<?php foreach ($websites as $website): ?>
            	<li><?php echo link_to($website->getName(), $website->getUrl(), array('title' => $website->getSlogan())) ?> : <?php echo $website->getSummary() ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>