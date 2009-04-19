<?php
$collectionName = Inflector::variable($this->name);
$collection = $$collectionName;
$className = Inflector::classify($this->name);
$pluralHumanName =  Inflector::humanize(Inflector::underscore($this->name));

$maxFieldsContentLength = 25;

echo $html->tag('h2', $pluralHumanName);
echo $html->tag('p', $html->link("Create new " . Inflector::humanize(Inflector::underscore($className)), array('controller' => $this->name, 'action' => 'add')));
echo $html->tag('p', $this->element('paginator/counter'));

if(!empty($collection)){
    $count = $paginator->counter(array('format' =>'%start%')) - 1;
    foreach($collection as $item){
        $count++;
        foreach($item[$className] as $key=>$value){
            $_key = explode('_', $key);
            if(array_pop($_key)=='id' && $key != 'id'){
                $foriegnClass = Inflector::camelize(implode('_', $_key));
                // @TODO make dynamic
                $displayField = 'name';
                $value = $item[$className][$key] = $item[$foriegnClass][$displayField];
            }
            if(strlen($value) > $maxFieldsContentLength){
                $item[$className][$key] = substr($value, 0, $maxFieldsContentLength - 3) . '...';
            }
        }

        $linkSeperator = ' ';
        $controller = $this->name;
        $id =  $item[$className]['id'];
        $links = $html->link('View', "/$controller/view/$id") .$linkSeperator;
        $links .= $html->link('Edit', "/$controller/edit/$id") .$linkSeperator;
        $links .= $html->link('Delete', "/$controller/delete/$id", null, "Are you sure?") ;
        $actions = $links;

        $item[$className] = array_diff_key($item[$className], array('created' => '', 'modified' => '', 'updated' => '', 'id' => ''));
        $rows[] = array('#.'=>$count.'.') + $item[$className] + array('Actions' => $actions);
    }
    $headers = array_keys($rows[0]);
    $modelArray = $collection[0][$className];
    foreach($headers as $key => $value){
        if(array_key_exists($value, $modelArray)){
            $headers[$key] = $paginator->sort($value);
        }
    }
    $headers = $html->tableHeaders($headers);
    $cells = $html->tableCells($rows, null, array('class' => 'highlight'));
    echo $this->element('paginator/menu');
    echo $html->tag('table', $headers.$cells);
    echo $this->element('paginator/menu');
}
?>