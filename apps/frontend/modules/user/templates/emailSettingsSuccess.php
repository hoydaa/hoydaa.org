<?php use_helper('Validation') ?>

<?php slot('sidebar') ?>
<?php include_partial('menu') ?>
<?php end_slot() ?>

<?php echo form_tag('user/emailSettings') ?>

<?php
if($sf_request->hasError('form-message')) {
    echo '<div style="color:blue;">' . $sf_request->getError('form-message') . '</div>';
}
?>
You can change the email address to which the emails originated to your-username@hoydaa.org will be forwarded.
	<div class="form-container">
		<h1>Email Settings</h1>
		<div class="form-row-container">
            <?php echo form_error('redirect_email') ?>
    		<label for="username">Forward emails to:</label>
    		<div class="input-container"><?php echo input_tag('redirect_email', $sf_params->get('redirect_email')) ?></div>
		</div>
 		<div class="form-row-container">
			<div class="input-container"><?php echo submit_tag('Change') ?></div>
		</div>    
	</div>
	
</form>