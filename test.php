<?php

// require('./fpdf/fpdf.php');

// // Instantiate and use the FPDF class 
// $pdf = new FPDF();

// $pdf->AddPage();

// // Set the font for the text
// $pdf->SetFont('Arial', 'B', 18);

// // Prints a cell with given text 
// $pdf->Cell(60, 20, 'Hello GeeksforGeeks!');

// // return the generated output
// $pdf->Output();

require_once __DIR__ . '/vendor/autoload.php';
// Create an instance of the class:
$mpdf = new \Mpdf\Mpdf();

// Write some HTML code:
$mpdf->WriteHTML('Hello World');


// Output a PDF file directly to the browser
$mpdf->Output('test.pdf', 'D');
