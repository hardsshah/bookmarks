
<div class="roles view">
    <p></p>


    <h2><?php  __('Role');?></h2>
    <p>
        <?php echo $html->link(__('Edit Role', true), array('action'=>'edit', $role['Role']['id'])) . ' / '; ?>
<?php echo $html->link(__('Delete Role', true), array('action'=>'delete', $role['Role']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $role['Role']['id'])) . ' / '; ?>
<?php echo $html->link(__('List Roles', true), array('action'=>'index')) . ' / '; ?>
<?php echo $html->link(__('New Role', true), array('action'=>'add')); ?>
    </p>


    <dl><?php $i = 1; $class = ' class="altrow"';?>
        <div <?php if ($i++ % 2 == 0) echo $class;?>>
		<dt><?php echo __('Id', true) . ':'; ?></dt>
		<dd>
			<?php echo $role['Role']['id']; ?>
			&nbsp;
		</dd>
</div>
<div <?php if ($i++ % 2 == 0) echo $class;?>>
		<dt><?php echo __('Name', true) . ':'; ?></dt>
		<dd>
			<?php echo $role['Role']['name']; ?>
			&nbsp;
		</dd>
</div>
<div <?php if ($i++ % 2 == 0) echo $class;?>>
		<dt><?php echo __('Created', true) . ':'; ?></dt>
		<dd>
			<?php echo $role['Role']['created']; ?>
			&nbsp;
		</dd>
</div>
<div <?php if ($i++ % 2 == 0) echo $class;?>>
		<dt><?php echo __('Modified', true) . ':'; ?></dt>
		<dd>
			<?php echo $role['Role']['modified']; ?>
			&nbsp;
		</dd>
</div>
    </dl>
</div>
<div class="actions hide">
    <ul>
            </ul>
</div>
