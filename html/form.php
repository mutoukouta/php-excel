<?php

use \PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use \PhpOffice\PhpSpreadsheet\IOFactory;
use \PhpOffice\PhpSpreadsheet\Cell\Coordinate;


// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;

require './vendor/autoload.php';
//require './vendor/phpmailer/phpmailer/language/phpmailer.lang-ja.php';

$filePathExcel = './score.xlsx';
$name = $_POST["name"];
$company = $_POST["company"];
$inquiry = $_POST["inquiry"];


$spreadsheet = IOFactory::load($filePathExcel);

$sheet = $spreadsheet->getActiveSheet();
$sheetName = $sheet->getTitle();


//名前項目 (名前範囲の指定)
$nameCell = $spreadsheet->getNamedRange('NAME')->getRange();
//不必要な文字列を削除
$nameCellNum = ltrim($nameCell, $sheetName . "'" . "!" . "$");
$nameCellNum = str_replace("$", "", $nameCellNum);
//列、行を数字に変換
$nameColumnNum = $sheet->getCell($nameCellNum)->getColumn();
$nameColumnNum = Coordinate::columnIndexFromString($nameColumnNum);
$nameRowNum = $sheet->getCell($nameCellNum)->getRow();


//会社名項目 (名前範囲の指定)
$companyCell = $spreadsheet->getNamedRange('COMPANY')->getRange();
//不必要な文字列を削除
$companyCellNum = ltrim($companyCell, $sheetName . "'" . "!" . "$");
$companyCellNum = str_replace("$", "", $companyCellNum);
//列、行を数字に変換
$companyColumnNum = $sheet->getCell($companyCellNum)->getColumn();
$companyColumnNum = Coordinate::columnIndexFromString($companyColumnNum);
$companyRowNum = $sheet->getCell($companyCellNum)->getRow();


//問い合わせ項目 (名前範囲の指定)
$inquiryCell = $spreadsheet->getNamedRange('INQUIRY')->getRange();
//不必要な文字列を削除
$inquiryCellNum = ltrim($inquiryCell, $sheetName . "'" . "!" . "$");
$inquiryCellNum = str_replace("$", "", $inquiryCellNum);
//列、行を数字に変換
$inquiryColumnNum = $sheet->getCell($inquiryCellNum)->getColumn();
$inquiryColumnNum = Coordinate::columnIndexFromString($inquiryColumnNum);
$inquiryRowNum = $sheet->getCell($inquiryCellNum)->getRow();


//Excelに出力
$sheet->setCellValueByColumnAndRow($nameColumnNum + 1, $nameRowNum, $name);
$sheet->setCellValueByColumnAndRow($companyColumnNum + 1, $companyRowNum, $company);
$sheet->setCellValueByColumnAndRow($inquiryColumnNum + 1, $inquiryRowNum, $inquiry);


$writer = new Xlsx($spreadsheet);
$writer->save($filePathExcel);



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
