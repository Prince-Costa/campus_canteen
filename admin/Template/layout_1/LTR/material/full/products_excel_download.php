<?php include_once($_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'config.php');?>
<?php
$productsInJson = file_get_contents($dataResources . 'products.json');
$products = json_decode($productsInJson);


use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
// use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;

// Create a new Spreadsheet object
$spreadsheet = new Spreadsheet();

// Add data to the spreadsheet
$sheet = $spreadsheet->getActiveSheet();
$sheet->setCellValue('A1', '#');
$sheet->setCellValue('B1', 'Title');
$sheet->setCellValue('C1', 'Price');
$sheet->setCellValue('D1', 'Cost Price');
$sheet->setCellValue('E1', 'Type');
$sheet->setCellValue('F1', 'Image');
$sheet->setCellValue('G1', 'E-Sale');
$sheet->setCellValue('H1', 'Outdore');
$sheet->setCellValue('I1', 'Status');


foreach ($products as $key=> $product) {
    $fieldValue = 2+$key;
    $sheet->setCellValue('A'.$fieldValue, ++$key);
    $sheet->setCellValue('B'.$fieldValue, $product->title);
    $sheet->setCellValue('C'.$fieldValue, $product->price);
    $sheet->setCellValue('D'.$fieldValue, $product->cost_price);
    $sheet->setCellValue('E'.$fieldValue, $product->type);

    // Add image
    $imagePath = $uploads.$product->src ;
    $drawing = new Drawing();
    $drawing->setName('Image');
    $drawing->setDescription('Image');
    $drawing->setPath($imagePath);
    $drawing->setCoordinates('F'.$fieldValue);
    $drawing->setHeight(30);
    $drawing->setWidth(40);
    $drawing->setWorksheet($sheet);

    $sheet->setCellValue('G'.$fieldValue, ($product->e_sale? 'Active' : 'inactive'));
    $sheet->setCellValue('H'.$fieldValue, ($product->outdore? 'Active' : 'inactive'));
    $sheet->setCellValue('I'.$fieldValue, ($product->status? 'Active' : 'inactive'));
}


// Set appropriate headers
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="example.xlsx"');
header('Cache-Control: max-age=0');

// Save the Excel file and output it to the browser
$writer = new Xlsx($spreadsheet);
$writer->save('php://output');