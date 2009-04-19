<?php /** @TODO Clean this home template */
$count = count($linkCategories);
$linkCategories = array_chunk($linkCategories, ceil($count/2), true);

echo '<div class="span-12">';
foreach($linkCategories[0] as $categoryId => $name){
    echo $html->tag('h3', $name);
    echo '<ul>';
    foreach($links as $link){
        if($link['Link']['link_category_id'] == $categoryId){
            $actions = '';
            if(isset($authUser)){
                $edit = $html->link('Edit', array('controller' => 'links', 'action' => 'edit', $link['Link']['id']));
                $delete = $html->link('Delete', array('controller' => 'links', 'action' => 'delete', $link['Link']['id']));
                $actions = ' <strong>' . $edit . ' ' . $delete . '</strong>';
            }
            echo $html->tag('li', $html->link($link['Link']['name'], $link['Link']['url'], array('target' => 'new', 'rel' => 'nofollow')) . $actions);
        }
    }
    echo '</ul>';
}
echo '</div>';

echo '<div class="span-12 last">';
foreach($linkCategories[1] as $categoryId => $name){
    echo $html->tag('h3', $name);
    echo '<ul>';
    foreach($links as $link){
        if($link['Link']['link_category_id'] == $categoryId){
            $actions = '';
            if(isset($authUser)){
                $edit = $html->link('Edit', array('controller' => 'links', 'action' => 'edit', $link['Link']['id']));
                $delete = $html->link('Delete', array('controller' => 'links', 'action' => 'delete', $link['Link']['id']));
                $actions = ' <strong>' . $edit . ' ' . $delete . '</strong>';
            }
            echo $html->tag('li', $html->link($link['Link']['name'], $link['Link']['url'], array('target' => 'new', 'rel' => 'nofollow')) . $actions);
        }
    }
    echo '</ul>';
}
echo '</div>';