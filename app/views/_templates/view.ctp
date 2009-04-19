<?php
if ( false === function_exists('lcfirst') ):
function lcfirst( $str )
{ return (string)(strtolower(substr($str,0,1)).substr($str,1));}
endif; 

$singularName = Inflector::singularize($this->name);
$array = ${lcfirst($singularName)};
echo $html->tag('h2', Inflector::humanize(Inflector::underscore($singularName)));


$modelName = $singularName;
$listTag = 'dl';
$keyTag = 'dt';
$valueTag = 'dd';
$outputString = "<$listTag>\n";
foreach ($array[$modelName] as $key=>$value) {
    $_key = explode('_', $key);
    if(array_pop($_key)=='id' && $key != 'id'){
        $key = implode('_', $_key);
        $foriegnClass = Inflector::camelize(implode('_', $_key));
        // @TODO make dynamic
        $displayField = 'name';
        $value = $array[$foriegnClass][$displayField];
    }
    $key =ucfirst(str_replace('_',' ',$key)) . ':';
    $outputString .= $html->tag($keyTag, $key) . $html->tag($valueTag, $value) . "\n";
}
echo $outputString .= "</$listTag>\n";
?>


