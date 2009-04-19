<?php
$maxFieldsContentLength = 15;
echo $html->tag('h2', __('Users', true));
echo $html->tag('p', $html->link(__('New User', true), array('action'=>'add')));
if(!empty($users)){

    $count = $paginator->counter(array('format' =>'%start%')) - 1;
    foreach ($users as $user){
        $count++;
        $cells = array();
        $cells[] = $count . '.';

        $cells[] = $user['User']['id'];
        $cells[] = $user['User']['username'];
        $cells[] = $user['User']['email'];
        $cells[] = $html->link($user['Role']['name'], array('controller'=> 'roles', 'action'=>'view', $user['Role']['id']));
        $cells[] = $user['User']['first_name'];
        $cells[] = $user['User']['last_name'];
        $cells[] = $user['User']['active'];
        $cells[] = $user['User']['last_login']; 

        for($i = 0; $i < count($cells); $i++){
            $cells[$i] =$text->trim($cells[$i], $maxFieldsContentLength, '...', true, true);
        }
        $actions = $html->link(__('View', true), array('action'=>'view', $user['User']['id'])) . ' ';
        $actions .= $html->link(__('Edit', true), array('action'=>'edit', $user['User']['id'])) . ' ';
        $actions .= $html->link(__('Delete', true), array('action'=>'delete', $user['User']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $user['User']['id']));
        $cells[] = $actions;
        $rows[] = $cells;
    }
    $headers['count'] = '#.';
    $headers['id'] = $paginator->sort('id');
    $headers['username'] = $paginator->sort('username');
    $headers['email'] = $paginator->sort('email');
    $headers['role_id'] = $paginator->sort('role_id');
    $headers['first_name'] = $paginator->sort('first_name');
    $headers['last_name'] = $paginator->sort('last_name');
    $headers['active'] = $paginator->sort('active');
    $headers['last_login'] = $paginator->sort('last_login');
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
        <li><?php echo $html->link(__('List Roles', true), array('controller'=> 'roles', 'action'=>'index')); ?> </li>
        <li><?php echo $html->link(__('New Role', true), array('controller'=> 'roles', 'action'=>'add')); ?> </li>
    </ul>
</div>
