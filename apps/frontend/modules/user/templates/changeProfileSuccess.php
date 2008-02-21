<?php use_helper('Validation') ?>
<?php use_helper('Object') ?>

<?php slot('sidebar') ?>
<?php include_partial('menu') ?>
<?php end_slot() ?>

<?php echo form_tag('user/changeProfile') ?>

<?php
if($sf_request->hasError('form-message')) {
    echo '<div style="color:blue;">' . $sf_request->getError('form-message') . '</div>';
}
?>

	<div class="form-container">
		<h1>Profile</h1>
		<div class="form-row-container">
            <?php echo form_error('first_name') ?>
    		<label for="username">First Name:</label>
    		<div class="input-container"><?php echo object_input_tag($user, 'getFirstName') ?></div>
		</div>
    	<div class="form-row-container">
	        <?php echo form_error('last_name') ?>
			<label for="password">Last Name:</label>
			<div class="input-container"><?php echo object_input_tag($user, 'getLastName') ?></div>
		</div>
		<?php if($developer): ?>
    		<div class="form-row-container">
                <?php echo form_error('organization') ?>
        		<label for="username">Organization:</label>
        		<div class="input-container"><?php echo object_input_tag($developer, 'getOrganizationName') ?></div>
    		</div>
        	<div class="form-row-container">
    	        <?php echo form_error('organization_url') ?>
    			<label for="password">Organization url:</label>
    			<div class="input-container"><?php echo object_input_tag($developer, 'getOrganizationUrl') ?></div>
    		</div>		
		<?php endif; ?>
 		<div class="form-row-container">
			<div class="input-container"><?php echo submit_tag('Change') ?></div>
		</div>    
	</div>
	
</form>