<?php

function getClient() {
  $client = new Google_Client();
  $client->setApplicationName("JV");
  $client->setDeveloperKey("AIzaSyC5Bl20W_ix-1dzgp40XgKtwhvHSmJH6AI");

  return $client;
}

function getService($client) {
  $service = new Google_Service_Sheets($client);
  return $service;
}

function getSheetData() {
  $sheets = array(
    'updates_sheet_id' => '1r5N99_MQWmEG_jEUWZg6pFeUlYQwtDgYVAod-DxY9o0',
    'volunteer_sheet_id' => '12QvUM0slsI25WX_W5U7gRQClawydTNOfxpIukboWX_U'
  );

  return $sheets;
}

function insertRow($data=null) {
  $spreadsheetId = getSheetData()['updates_sheet_id'];

  $valueInputOption = 'RAW';

  $range = 'Class Data!A1:A3';

  $values = array(
      array(
        'a', '1', '}'
      ),
  );

  $body = new Google_Service_Sheets_ValueRange(array(
    'values' => $values
  ));

  $params = array(
    'valueInputOption' => $valueInputOption
  );

  $result = $service->spreadsheets_values->update($spreadsheetId, $range, $body, $params);
}

?>
