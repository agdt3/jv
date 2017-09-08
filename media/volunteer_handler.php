<?php
include_once "post.php";

echo print_r($_POST);

$client = getClient();
$service = getService($client);

$result = insertRow($service);
echo print_r($result);

?>
