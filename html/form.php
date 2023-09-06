<?php

use PhpOffice\PhpSpreadsheet\Reader\Xlsx as XlsxRender;
//use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;

//include('./vendor/autoload.php');
require './vendor/autoload.php';
//require './vendor/phpmailer/phpmailer/language/phpmailer.lang-ja.php';

$filePathExcel = './score.xlsx';
$name = $_POST["name"];
$company = $_POST["company"];
$inquiry = $_POST["inquiry"];

//$reader = new XlsxRender();
$fileSpreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($filePathExcel);
$workSheet = $fileSpreadsheet->getSheetByName('Worksheet');
$workSheet->setCellValue('A1' , '書き込み');
$writer = new PhpOffice\PhpSpreadsheet\Writer\Xlsx($fileSpreadsheet);
$writer->save($filePathExcel);

// Excelをロード
// $spreadsheet = $reader->load('./score.xlsx');
// $spreadsheet->getActiveSheet()->setCellValue('A1', 'PhpSpreadsheet');
//シートの指定
//$sheet = $spreadsheet->getSheetByName('Worksheet');

//セルの指定
//$data = $sheet->getCell('A1')->getValue();

//$data = $sheet->setCellValue('A1' , $name);


//var_dump($data);









// function zip($zipname, $file, $newfile, $password)
// {
//     $zip = new ZipArchive;
//     $zip->open($zipname, ZipArchive::CREATE | ZipArchive::OVERWRITE);

//  パスワード設定
//     $zip->setPassword($password);
//     $zip->addFile($file, $newfile);
//     $zip->setEncryptionName($newfile, ZipArchive::EM_TRAD_PKWARE);
//     $zip->close();
// }

// zip("score.zip", "./score.xlsx", "data.xlsx", "uoGhie6s123762");

// $lead = "名前:" . "$name\r\n"
//     . "会社名:" . "$company\r\n"
//     . "問い合わせ:" . "$inquiry\r\n";

// $filePathZip = './score.zip';
// $fileName = 'score.zip';

// mb_language("japanese");
// mb_internal_encoding("UTF-8");

// $mail = new PHPMailer(true);

// $mail->CharSet = "UTF-8";

// $mail->setFrom('sender@example.com', '送信秀夫');
// $mail->addAddress('someone@xxxx.com', "受取太郎");
// $mail->addAddress('someone@gmail.com');
// $mail->addCC('foo@example.com');

// $mail->isHTML(false);
// $mail->AddAttachment($filePathZip, $fileName);
// $mail->Subject = 'テストメール';
// $mail->Body  = $lead;
// $mail->AltBody = $lead;

// $mail->send();
