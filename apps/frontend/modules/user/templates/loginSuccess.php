<?php use_helper('Validation') ?>

<?php slot('sidebar') ?>
<div class="box">
    <div class="bottom">
        <div class="content">
            <ul class="menu">
            	<li><h2>Projects</h2></li>
            	<?php foreach ($projects as $project): ?>
            	<li><?php echo link_to($project->getName(), 'project/show?id='.$project->getTag()) ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>
<?php end_slot() ?>

<?php echo form_tag('user/login') ?>

	<div class="form-container">
		<h1>Login</h1>
		<div class="form-row-container">
            <?php echo form_error('username') ?>
    		<label for="username">username:</label>
    		<div class="input-container"><?php echo input_tag('username', $sf_params->get('username')) ?></div>
		</div>
    	<div class="form-row-container">
	        <?php echo form_error('password') ?>
			<label for="password">password:</label>
			<div class="input-container"><?php echo input_password_tag('password') ?></div>
		</div>
 		<div class="form-row-container">
			<div class="input-container"><?php echo submit_tag('giriş') ?></div>
		</div>    
	</div>
	
</form>

