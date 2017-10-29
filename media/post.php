<?php
require_once '/home/jvandermaas/vendor/autoload.php';

function getClient() {
  putenv("GOOGLE_APPLICATION_CREDENTIALS=service_secret.json");
  $client = new Google_Client();
  $client->setApplicationName("JV");
  $client->useApplicationDefaultCredentials();
  $client->setScopes(['https://www.googleapis.com/auth/drive', 'https://www.googleapis.com/auth/spreadsheets']);

  return $client;
}

function getService($client) {
  $service = new Google_Service_Sheets($client);
  return $service;
}

function getSheetId($sheet_type) {
  $sheets = array(
    'updates' => '1r5N99_MQWmEG_jEUWZg6pFeUlYQwtDgYVAod-DxY9o0',
    'volunteer' => '12QvUM0slsI25WX_W5U7gRQClawydTNOfxpIukboWX_U'
    'supporters' => '1dXTKkMBARMODuYE7ZZlvwLOs2yTReaSyOKPQuWwrvW8',
    'endorsements' => '13uLiPmltYm-SUoOfkNiBwOAklZEr-CQaHi2c_R-ibyw'
  );

  return $sheets[$sheet_type];
}

function insertRow($service, $sheet_type, $data=null) {
  $spreadsheetId = getSheetId($sheet_type);

  $valueInputOption = 'RAW';

  $range = 'A1:Z1';

  if (is_null($data)) {
    $data = array();
  }

  $values = array($data);

  $body = new Google_Service_Sheets_ValueRange(array(
    'values' => $values
  ));

  $params = array(
    'valueInputOption' => $valueInputOption
  );

  $result = $service->spreadsheets_values->append($spreadsheetId, $range, $body, $params);

  return $result;
}

function readRows($service, $sheet_type) {
  $spreadsheetId = getSheetId($sheet_type);
  $range = 'A:Z';

  $result = $service->spreadsheets_values->get($spreadsheetId, $range);

  return $result;
}

?>
