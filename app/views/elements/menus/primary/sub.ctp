<?php
if(!empty($primaryLinksSub)){
    foreach($primaryLinksSub as $controller){
        $class = $controller == $this->name ? 'highlight' : null;
        $links[] = $html->link(Inflector::humanize(Inflector::underscore($controller)), array('controller'=>$controller, 'action'=>'index'), array('class'=>$class));
    }
    echo $html->tag('div', implode($links, ' / '), array('style' => 'float:left;padding-top:10px;'));
}
?>