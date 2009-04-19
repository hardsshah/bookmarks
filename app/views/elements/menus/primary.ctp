<?php
if(!empty($primaryLinks)){
    foreach($primaryLinks as $label => $controller){
        $class = $controller == $this->name ? 'highlight' : null;
        $_links[] = $html->link($label, array('controller'=>$controller, 'action'=>'index'), array('class'=>$class));
    }
    $_links = implode($_links, ' / ');
    echo $html->tag('p', $_links, array('style' => 'float:left'));
}
?>