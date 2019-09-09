
<?php
$urls = array(
    "http://username:password@hostname.com/path/file.php?arg1=value1&arg2=value2#anchor",
    "http://username:password@hostname.com/path/file.php?arg1=value1&arg2=value2#anchor",
    "http://hostname.com:8080/path/file.php?arg1=value1&arg2=value2#anchor",
    "http://subdom.hostname.com/path/file.php?arg1=value1&arg2=value2#anchor",
);
for($i=0; $i < count($urls); ++$i) 
{
    echo $urls[$i],'<br>';
    var_dump(parse_url($urls[$i]));
}

$url = "http://subdom.hostname.com/path/file.php?arg1=value1&arg2=value2#anchor";
var_dump(parse_url($url));
var_dump(parse_url($url, PHP_URL_SCHEME));
var_dump(parse_url($url, PHP_URL_USER));
var_dump(parse_url($url, PHP_URL_PASS));
var_dump(parse_url($url, PHP_URL_HOST));
var_dump(parse_url($url, PHP_URL_PORT));
var_dump(parse_url($url, PHP_URL_PATH));
var_dump(parse_url($url, PHP_URL_QUERY));
var_dump(parse_url($url, PHP_URL_FRAGMENT));
?>



