<?php
$urls = array (
    "http://localhost/drupal/module1/fonction1/?arg1=value1&arg2=value2#anchor",
    "http://localhost/drupal/index.php?q=module1/fonction1&arg[]=value1&arg[]=value2#anchor",
    "http://localhost/drupal/index.php?q=module1/fonction1?arg1=value1&arg2=value2#anchor",
);

for($i=0; $i < count($urls); ++$i) 
{
    echo $urls[$i],'<br>';
   // $string = var_dump(parse_url($urls[$i], PHP_URL_QUERY);

    parse_str(parse_url($urls[$i], PHP_URL_QUERY), $output);

    var_dump($output);
     
}

?>
