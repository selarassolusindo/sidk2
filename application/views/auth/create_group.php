<!-- <h1><?php echo lang('create_group_heading');?></h1> -->
<p><?php echo lang('create_group_subheading');?></p>

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open("auth/create_group");?>

      <p>
            <?php echo lang('create_group_name_label', 'group_name');?> <br />
            <?php echo form_input($group_name);?>
      </p>

      <p>
            <?php echo lang('create_group_desc_label', 'description');?> <br />
            <?php echo form_input($description);?>
      </p>

      <p><?php echo form_submit('submit', lang('create_group_submit_btn')) . ' ' . form_button('button', 'Close', 'onClick="window.location.href = \''.site_url().'auth'.'\'"');?></p>

<?php echo form_close();?>
