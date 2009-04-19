


<div class="users form">
    <?php echo $form->create('User');?>
    <h2><?php __('Edit User');?></h2>
    <p>
                <?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('User.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('User.id'))); ?>                <?php echo $html->link(__('List Users', true), array('action'=>'index'));?>    </p>
    	<?php
		echo $form->input('id');
		echo $form->input('username');
		echo $form->input('email');
		echo $form->input('password');
		echo $form->input('role_id');
		echo $form->input('first_name');
		echo $form->input('last_name');
		echo $form->input('active');
	?>

    <?php echo $form->end('Submit');?>
</div>


<div class="actions hide">
    <ul>
            </ul>
</div>
