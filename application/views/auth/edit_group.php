<!--<h1><?php echo lang('edit_group_heading');?></h1>-->
<p><?php echo lang('edit_group_subheading');?></p>

<?php if(isset($message)): ?>
	<div class="alert alert-success" role="alert"><?php echo $message;?></div>
<?php endif ?>
	
<?php echo form_open(current_url());?>

      <p>
            <?php echo lang('edit_group_name_label', 'group_name');?> <br />
            <?php echo form_input($group_name);?>
      </p>

      <p>
            <?php echo lang('edit_group_desc_label', 'description');?> <br />
            <?php echo form_input($group_description);?>
      </p>

      <p><?php echo form_submit('submit', lang('edit_group_submit_btn'));?></p>

<?php echo form_close();?>