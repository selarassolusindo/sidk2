<div class="card">

    <div class="card-header">
        <!-- <h3 class="card-title">Striped Full Width Table</h3> -->
        <!-- <h3><?php echo lang('index_heading');?></h3> -->
        <p><?php echo lang('index_subheading');?></p>
        <div id="infoMessage"><?php echo $message;?></div>
    </div>
    <!-- /.card-header -->

    <div class="card-body p-0">
        <table class="table table-striped">
            <thead>
                <!-- <tr>
                    <th style="width: 10px">#</th>
                    <th>Task</th>
                    <th>Progress</th>
                    <th style="width: 40px">Label</th>
                </tr> -->
                <tr>
                    <th style="width: 10px">#</th>
                    <th><?php echo lang('index_fname_th');?></th>
                    <th><?php echo lang('index_uname_th');?></th>
                    <!-- <th><?php echo lang('index_lname_th');?></th>
                    <th><?php echo lang('index_email_th');?></th> -->
                    <th><?php echo lang('index_groups_th');?></th>
                    <th><?php echo lang('index_status_th');?></th>
                    <th><?php echo lang('index_action_th');?></th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($users as $user):?>
                <tr>
                    <td>&nbsp;</td>
                    <td><?php echo htmlspecialchars($user->first_name,ENT_QUOTES,'UTF-8');?></td>
                    <td><?php echo htmlspecialchars($user->username,ENT_QUOTES,'UTF-8');?></td>
                    <!-- <td><?php echo htmlspecialchars($user->last_name,ENT_QUOTES,'UTF-8');?></td>
                    <td><?php echo htmlspecialchars($user->email,ENT_QUOTES,'UTF-8');?></td> -->
                    <td>
                        <?php foreach ($user->groups as $group):?>
                            <?php echo anchor("auth/edit_group/".$group->id, htmlspecialchars($group->name,ENT_QUOTES,'UTF-8')) ;?><br />
                        <?php endforeach?>
                    </td>
                    <td><?php echo ($user->active) ? anchor("auth/deactivate/".$user->id, lang('index_active_link')) : anchor("auth/activate/". $user->id, lang('index_inactive_link'));?></td>
                    <td><?php echo anchor("auth/edit_user/".$user->id, 'Edit');?></td>
                </tr>
            <?php endforeach;?>
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->

</div>
<!-- /.card -->

<!-- <h1><?php echo lang('index_heading');?></h1>
<p><?php echo lang('index_subheading');?></p>

<div id="infoMessage"><?php echo $message;?></div> -->

<!-- <table cellpadding=0 cellspacing=10> -->
	<!-- <tr>
		<th><?php echo lang('index_fname_th');?></th>
		<th><?php echo lang('index_lname_th');?></th>
		<th><?php echo lang('index_email_th');?></th>
		<th><?php echo lang('index_groups_th');?></th>
		<th><?php echo lang('index_status_th');?></th>
		<th><?php echo lang('index_action_th');?></th>
	</tr> -->
	<!-- <?php foreach ($users as $user):?>
		<tr>
            <td><?php echo htmlspecialchars($user->first_name,ENT_QUOTES,'UTF-8');?></td>
            <td><?php echo htmlspecialchars($user->last_name,ENT_QUOTES,'UTF-8');?></td>
            <td><?php echo htmlspecialchars($user->email,ENT_QUOTES,'UTF-8');?></td>
			<td>
				<?php foreach ($user->groups as $group):?>
					<?php echo anchor("auth/edit_group/".$group->id, htmlspecialchars($group->name,ENT_QUOTES,'UTF-8')) ;?><br />
                <?php endforeach?>
			</td>
			<td><?php echo ($user->active) ? anchor("auth/deactivate/".$user->id, lang('index_active_link')) : anchor("auth/activate/". $user->id, lang('index_inactive_link'));?></td>
			<td><?php echo anchor("auth/edit_user/".$user->id, 'Edit') ;?></td>
		</tr>
	<?php endforeach;?> -->
<!-- </table> -->

<p><?php echo anchor('auth/create_user', lang('index_create_user_link'))?> | <?php echo anchor('auth/create_group', lang('index_create_group_link'))?></p>
