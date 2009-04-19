
<div class="users view">
    <p></p>


    <h2><?php  __('User');?></h2>
    <p>
        <?php echo $html->link(__('Edit User', true), array('action'=>'edit', $user['User']['id'])) . ' / '; ?>
<?php echo $html->link(__('Delete User', true), array('action'=>'delete', $user['User']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $user['User']['id'])) . ' / '; ?>
<?php echo $html->link(__('List Users', true), array('action'=>'index')) . ' / '; ?>
<?php echo $html->link(__('New User', true), array('action'=>'add')); ?>
    </p>


    <dl><?php $i = 1; $class = ' class="altrow"';?>
        <div <?php if ($i++ % 2 == 0) echo $class;?>>
		<dt><?php echo __('Id', true) . ':'; ?></dt>
		<dd>
			<?php echo $user['User']['id']; ?>
			&nbsp;
		</dd>
</div>
<div <?php if ($i++ % 2 == 0) echo $class;?>>
		<dt><?php echo __('Username', true) . ':'; ?></dt>
		<dd>
			<?php echo $user['User']['username']; ?>
			&nbsp;
		</dd>
</div>
<div <?php if ($i++ % 2 == 0) echo $class;?>>
		<dt><?php echo __('Email', true) . ':'; ?></dt>
		<dd>
			<?php echo $user['User']['email']; ?>
			&nbsp;
		</dd>
</div>
<div <?php if ($i++ % 2 == 0) echo $class;?>>
		<dt><?php echo __('Password', true) . ':'; ?></dt>
		<dd>
			<?php echo $user['User']['password']; ?>
			&nbsp;
		</dd>
</div>
<div <?php if ($i++ % 2 == 0) echo $class;?>>
		<dt><?php echo __('Role Id', true) . ':'; ?></dt>
		<dd>
			<?php echo $user['User']['role_id']; ?>
			&nbsp;
		</dd>
</div>
<div <?php if ($i++ % 2 == 0) echo $class;?>>
		<dt><?php echo __('First Name', true) . ':'; ?></dt>
		<dd>
			<?php echo $user['User']['first_name']; ?>
			&nbsp;
		</dd>
</div>
<div <?php if ($i++ % 2 == 0) echo $class;?>>
		<dt><?php echo __('Last Name', true) . ':'; ?></dt>
		<dd>
			<?php echo $user['User']['last_name']; ?>
			&nbsp;
		</dd>
</div>
<div <?php if ($i++ % 2 == 0) echo $class;?>>
		<dt><?php echo __('Active', true) . ':'; ?></dt>
		<dd>
			<?php echo $user['User']['active']; ?>
			&nbsp;
		</dd>
</div>
<div <?php if ($i++ % 2 == 0) echo $class;?>>
		<dt><?php echo __('Created', true) . ':'; ?></dt>
		<dd>
			<?php echo $user['User']['created']; ?>
			&nbsp;
		</dd>
</div>
<div <?php if ($i++ % 2 == 0) echo $class;?>>
		<dt><?php echo __('Modified', true) . ':'; ?></dt>
		<dd>
			<?php echo $user['User']['modified']; ?>
			&nbsp;
		</dd>
</div>
<div <?php if ($i++ % 2 == 0) echo $class;?>>
		<dt><?php echo __('Last Login', true) . ':'; ?></dt>
		<dd>
			<?php echo $user['User']['last_login']; ?>
			&nbsp;
		</dd>
</div>
    </dl>
</div>
<div class="actions hide">
    <ul>
            </ul>
</div>
