<?php
include_once "post.php";

function parse_volunteer_data($data_obj) {
  $values = array();
  foreach($data_obj as $key => $value) {
    if ($key !== 'sheet_type') {
      $values[] = $value;
    }
  }
  return $values;
}

function response($msg, $code=200) {
	// treat this as json
	header('Content-type:application/json;charset=utf-8');

	$status = array(
			200 => '200 OK',
			400 => '400 Bad Request',
			422 => 'Unprocessable Entity',
			500 => '500 Internal Server Error'
			);

	header('Status: '.$status[$code]);

  return json_encode(array(
    'status' => $code,
    'message' => $msg
  ));
}


$data_obj = json_decode(file_get_contents('php://input'), true);
$sheet_type = $data_obj['sheet_type'];
$data_values = parse_volunteer_data($data_obj);

try {
  $client = getClient();
  $service = getService($client);

  $result = insertRow($service, $sheet_type, $data_values);
  echo response("success", 200);
}
catch (Exception $e) {
  echo response($e->getMessage(), 500);
}

?>
