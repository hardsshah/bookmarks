


<div class="roles form">
    <?php echo $form->create('Role');?>
    <h2><?php __('Edit Role');?></h2>
    <p>
                <?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('Role.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('Role.id'))); ?>                <?php echo $html->link(__('List Roles', true), array('action'=>'index'));?>    </p>
    	<?php
		echo $form->input('id');
		echo $form->input('name');
	?>

    <?php echo $form->end('Submit');?>
</div>


<div class="actions hide">
    <ul>
            </ul>
</div>
