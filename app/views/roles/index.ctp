<?php
 $maxFieldsContentLength = 15;
echo $html->tag('h2', __('Roles', true));
echo $html->tag('p', $html->link(__('New Role', true), array('action'=>'add')));
if(!empty($roles)){

        $count = $paginator->counter(array('format' =>'%start%')) - 1;
        foreach ($roles as $role){
        $count++;
        $cells = array();
        $cells[] = $count . '.';
        
 $cells[] = $role['Role']['id']; 
 $cells[] = $role['Role']['name']; 
 $cells[] = $role['Role']['created']; 
 $cells[] = $role['Role']['modified']; 

for($i = 0; $i < count($cells); $i++){
    $cells[$i] =$text->trim($cells[$i], $maxFieldsContentLength, '...', true, true);
}
 $actions = $html->link(__('View', true), array('action'=>'view', $role['Role']['id'])) . ' '; 
 $actions .= $html->link(__('Edit', true), array('action'=>'edit', $role['Role']['id'])) . ' '; 
 $actions .= $html->link(__('Delete', true), array('action'=>'delete', $role['Role']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $role['Role']['id'])); 
 $cells[] = $actions; 
 $rows[] = $cells; 
 }
$headers['count'] = '#.';
 $headers['id'] = $paginator->sort('id');
 $headers['name'] = $paginator->sort('name');
 $headers['created'] = $paginator->sort('created');
 $headers['modified'] = $paginator->sort('modified');
$headers['actions'] = __('Actions', true);
$headers_string = '';
foreach($headers as $field => $header){
            $sort = ($paginator->sortKey() == $field ? $paginator->sortDir() : 'undefined');
            $headers_string .= $html->tag('th', $header, array('class' => $sort));
} $cells = $html->tableCells($rows, null, array('class' => 'altrow')); 

echo $html->tag('p', $this->element('paginator/counter'));
echo $html->tag('p',$this->element('paginator/menu'));
echo $html->tag('table', $headers_string . $cells);
echo $html->tag('p',$this->element('paginator/menu'));
}  ?>



<div class="actions hide">
    <ul>
            </ul>
</div>
