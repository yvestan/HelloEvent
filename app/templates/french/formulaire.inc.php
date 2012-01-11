<?php 
// exemple de formulaire
echo (isset($error) ? $error : ''); 
?>
<?php if(isset($lastname)): ?>
<div class="row even">
    <div class="cell"><?php echo $label_lastname . $lastname?></div>
    <div class="clear"></div>
</div>
<?php endif; ?>
<div class="row last">
    <?php echo $btnsubmit?>
</div>
