<?php
require __DIR__ . '/vendor/autoload.php';

$client = new Google_Client();
$client->setApplicationName('Google Sheets in PHP');
$client->setScopes([Google_Service_Sheets::SPREADSHEETS]);
$client->setAccessType('offline');
$client->setAuthConfig(__DIR__ . '/credentials.json');

$service = new Google_Service_Sheets($client);

function redirectToBoard(): void
{
    header('Location: /index.php');
    exit();
}
if (false === isset($_POST['email'], $_POST['category'], $_POST['title'], $_POST['description']))
    redirectToBoard();

$email = $_POST['email'];
$category = $_POST['category'];
$title = $_POST['title'];
$description = $_POST['description'];

$range = 'A:D';
$spreadsheetId = '18ys8nEuBlKHkFvFBBpCKh01lTJN0RdjCnMJJy-DtfEk';
$response = $service->spreadsheets_values->get($spreadsheetId, $range);
$options = [
    'valueInputOption' => 'RAW'
];
$data = [
    [
        $email,
        $category,
        $title,
        $description
    ]
];
$values = new Google_Service_Sheets_ValueRange([
    'values' => $data
]);

$countOfRows = count($response->getValues());
if($countOfRows = 0)
    $indOfInsert = 1;
else
    $indOfInsert = $countOfRows + 1;
$range = 'A'.$indOfInsert.':D'.$indOfInsert;

$service->spreadsheets_values->update($spreadsheetId, $range, $values, $options);
redirectToBoard();