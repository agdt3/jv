<?php
include_once "post.php";

function handle_request() {
  switch ($_SERVER['REQUEST_METHOD']) {
    case 'GET':
      $resp = handle_get();
      break;
    case 'POST':
      $resp = handle_post();
      break;
    default:
      $resp = handle_unsupported_request();
      break;
  }

  echo $resp;
}

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

function handle_post() {
  $data_obj = json_decode(file_get_contents('php://input'), true);
  $sheet_type = $data_obj['sheet_type'];
  $data_values = parse_volunteer_data($data_obj);

  try {
    $client = getClient();
    $service = getService($client);

    $result = insertRow($service, $sheet_type, $data_values);
    return response("success", 200);
  }
  catch (Exception $e) {
    return response($e->getMessage(), 500);
  }
}

function handle_get() {
  $sheet_type = $_GET['sheet_type'];

  try {
    $client = getClient();
    $service = getService($client);

    $result = readRows($service, $sheet_type);
    return response($result, 200);
  }
  catch (Exception $e) {
    return response($e->getMessage(), 500);
  }

}

function handle_unsupported_request() {
  return response("Method Not Allowed", 405);
}

handle_request();
?>
