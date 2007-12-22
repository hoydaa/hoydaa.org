<?php
    if ($user->getPhoto())
        $img = $user->getPhoto();
    else
        $img = 'default.png';
?>

<?php echo image_tag('/'.sfConfig::get('sf_upload_dir_name').'/pictures/users/'.$img) ?>