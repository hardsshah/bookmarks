<?php
$blacklist = array('created', 'modified', 'updated');

echo $form->create();
echo $form->inputs(null, $blacklist);
echo $form->end('Submit');
?>


