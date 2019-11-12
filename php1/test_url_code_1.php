<html><head>
<meta charset="utf-8">
<title>test_url_code_1</title></head><body>
<?php
    echo 'var_dump de $_GET :<br/>'; var_dump($_GET);
    $q1='valeur1'; $q2='valeur2';
    $result=compact(["q1", "q2"]);
    echo 'var_dump de $result :<br/>'; var_dump($result);
    echo 'Ré encodage de $_GET par http_build_query($_GET) :<br/>', http_build_query ($_GET),
    '<br/><br/>';
    echo 'urldecode(http_build_query ($_GET)) =<br/>', urldecode(http_build_query ($_GET)),
    '<br/><br/>';

    $x = $_SERVER['REQUEST_URI']; echo '$_SERVER["REQUEST_URI"] = ', $x, '<br/>';
    echo 'urldecode($_SERVER["REQUEST_URI"]) = ', urldecode($x), '<br/><br/>';
?>
</body>
</html>