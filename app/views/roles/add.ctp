


<div class="roles form">
    <?php echo $form->create('Role');?>
    <h2><?php __('Add Role');?></h2>
    <p>
                <?php echo $html->link(__('List Roles', true), array('action'=>'index'));?>    </p>
    	<?php
		echo $form->input('name');
	?>

    <?php echo $form->end('Submit');?>
</div>


<div class="actions hide">
    <ul>
            </ul>
</div>
