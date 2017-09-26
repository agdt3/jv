<?php
include_once "post.php";

$data = json_decode(file_get_contents('php://input'), true);

try {
  $client = getClient();
  $service = getService($client);

  $result = insertRow($service);
  return ();
}
catch (Exception $e) {
  return ();
}

?>
