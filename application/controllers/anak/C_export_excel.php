<?php 

require('./vendor/autoload.php');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

defined('BASEPATH') OR exit('No direct script access allowed');

class C_export_excel extends CI_Controller {
  public function __construct(){
    parent::__construct();
    
    $this->load->model('anak/M_anak');
  }
  
  public function export(){

    $spreadsheet = new Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();

    // Buat sebuah variabel untuk menampung pengaturan style dari header tabel
    $style_col = [
      'font' => ['bold' => true], // Set font nya jadi bold
      'alignment' => [
        'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER, // Set text jadi ditengah secara horizontal (center)
        'vertical' => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
      ],
      'borders' => [
        'top' => ['borderStyle'  => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN], // Set border top dengan garis tipis
        'right' => ['borderStyle'  => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN],  // Set border right dengan garis tipis
        'bottom' => ['borderStyle'  => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN], // Set border bottom dengan garis tipis
        'left' => ['borderStyle'  => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN] // Set border left dengan garis tipis
      ]
    ];

    // Buat sebuah variabel untuk menampung pengaturan style dari isi tabel
    $style_row = [
      'alignment' => [
        'vertical' => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
      ],
      'borders' => [
        'top' => ['borderStyle'  => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN], // Set border top dengan garis tipis
        'right' => ['borderStyle'  => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN],  // Set border right dengan garis tipis
        'bottom' => ['borderStyle'  => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN], // Set border bottom dengan garis tipis
        'left' => ['borderStyle'  => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN] // Set border left dengan garis tipis
      ]
    ];

    $sheet->setCellValue('A1', "DATA ANAK");
    $sheet->mergeCells('A1:N1');
    $sheet->getStyle('A1')->getFont()->setBold(true);

    // Buat header tabel nya pada baris ke 3
    $sheet->setCellValue('A3', "No");
    $sheet->setCellValue('B3', "Nama");
    $sheet->setCellValue('C3', "Jenis Kelamin");
    $sheet->setCellValue('D3', "Tinggi Badan (cm)");
    $sheet->setCellValue('E3', "Berat Badan (kg)");
    $sheet->setCellValue('F3', "Tinggi Duduk (cm)");
    $sheet->setCellValue('G3', "Rentang Lengan (cm)");
    $sheet->setCellValue('H3', "Kecepatan");
    $sheet->setCellValue('I3', "Kelincahan");
    $sheet->setCellValue('J3', "Koordinasi");
    $sheet->setCellValue('K3', "Kekuatan");
    $sheet->setCellValue('L3', "Power");
    $sheet->setCellValue('M3', "Daya Tahan");
    $sheet->setCellValue('N3', "Nilai Potensi");
    
    // Apply style header yang telah kita buat tadi ke masing-masing kolom header
    $sheet->getStyle('A3')->applyFromArray($style_col);
    $sheet->getStyle('B3')->applyFromArray($style_col);
    $sheet->getStyle('C3')->applyFromArray($style_col);
    $sheet->getStyle('D3')->applyFromArray($style_col);
    $sheet->getStyle('E3')->applyFromArray($style_col);
    $sheet->getStyle('F3')->applyFromArray($style_col);
    $sheet->getStyle('G3')->applyFromArray($style_col);
    $sheet->getStyle('H3')->applyFromArray($style_col);
    $sheet->getStyle('I3')->applyFromArray($style_col);
    $sheet->getStyle('J3')->applyFromArray($style_col);
    $sheet->getStyle('K3')->applyFromArray($style_col);
    $sheet->getStyle('L3')->applyFromArray($style_col);
    $sheet->getStyle('M3')->applyFromArray($style_col);
    $sheet->getStyle('N3')->applyFromArray($style_col);

    // Panggil function view yang ada di SiswaModel untuk menampilkan semua data siswanya
    $dataAnak = $this->M_anak->getRecords();
    $no = 1; // Untuk penomoran tabel, di awal set dengan 1
    $numrow = 4; // Set baris pertama untuk isi tabel adalah baris ke 4
    
    // Lakukan looping pada variabel siswa
    foreach($dataAnak as $data){ 
      $sheet->setCellValue('A'.$numrow, $no);
      $sheet->setCellValue('B'.$numrow, $data->nama_anak);
      if ($data->jenis_kelamin_anak == '1') {
        $sheet->setCellValue('C'.$numrow, "Laki-Laki");
      } else {
        $sheet->setCellValue('C'.$numrow, "Perempuan");
      }
      $sheet->setCellValue('D'.$numrow, $data->tinggi_badan_anak);
      $sheet->setCellValue('E'.$numrow, $data->berat_badan_anak);
      $sheet->setCellValue('F'.$numrow, $data->tinggi_duduk_anak);
      $sheet->setCellValue('G'.$numrow, $data->rentang_lengan_anak);
      $sheet->setCellValue('H'.$numrow, $data->kecepatan_anak);
      $sheet->setCellValue('I'.$numrow, $data->kelincahan_anak);
      $sheet->setCellValue('J'.$numrow, $data->koordinasi_anak);
      $sheet->setCellValue('K'.$numrow, $data->kekuatan_anak);
      $sheet->setCellValue('L'.$numrow, $data->power_anak);
      $sheet->setCellValue('M'.$numrow, $data->daya_tahan_anak);
      $sheet->setCellValue('N'.$numrow, $data->nilai_potensi_anak);
      
      // Apply style row yang telah kita buat tadi ke masing-masing baris (isi tabel)
      $sheet->getStyle('A'.$numrow)->applyFromArray($style_row);
      $sheet->getStyle('B'.$numrow)->applyFromArray($style_row);
      $sheet->getStyle('C'.$numrow)->applyFromArray($style_row);
      $sheet->getStyle('D'.$numrow)->applyFromArray($style_row);
      $sheet->getStyle('E'.$numrow)->applyFromArray($style_row);
      $sheet->getStyle('F'.$numrow)->applyFromArray($style_row);
      $sheet->getStyle('G'.$numrow)->applyFromArray($style_row);
      $sheet->getStyle('H'.$numrow)->applyFromArray($style_row);
      $sheet->getStyle('I'.$numrow)->applyFromArray($style_row);
      $sheet->getStyle('J'.$numrow)->applyFromArray($style_row);
      $sheet->getStyle('K'.$numrow)->applyFromArray($style_row);
      $sheet->getStyle('L'.$numrow)->applyFromArray($style_row);
      $sheet->getStyle('M'.$numrow)->applyFromArray($style_row);
      $sheet->getStyle('N'.$numrow)->applyFromArray($style_row);
      
      $no++; // Tambah 1 setiap kali looping
      $numrow++; // Tambah 1 setiap kali looping
    }

    // Set width kolom
    $sheet->getColumnDimension('A')->setWidth(5);
    $sheet->getColumnDimension('B')->setWidth(50);
    $sheet->getColumnDimension('C')->setWidth(25);
    $sheet->getColumnDimension('D')->setWidth(20);
    $sheet->getColumnDimension('E')->setWidth(20);
    $sheet->getColumnDimension('F')->setWidth(20);
    $sheet->getColumnDimension('G')->setWidth(20);
    $sheet->getColumnDimension('H')->setWidth(20);
    $sheet->getColumnDimension('I')->setWidth(20);
    $sheet->getColumnDimension('J')->setWidth(20);
    $sheet->getColumnDimension('K')->setWidth(20);
    $sheet->getColumnDimension('L')->setWidth(20);
    $sheet->getColumnDimension('M')->setWidth(20);
    $sheet->getColumnDimension('N')->setWidth(20);
    
    // Set height semua kolom menjadi auto (mengikuti height isi dari kolommnya, jadi otomatis)
    $sheet->getDefaultRowDimension()->setRowHeight(-1);
    // Set orientasi kertas jadi LANDSCAPE
    $sheet->getPageSetup()->setOrientation(\PhpOffice\PhpSpreadsheet\Worksheet\PageSetup::ORIENTATION_LANDSCAPE);
    // Set judul file excel nya
    $sheet->setTitle("Laporan Data Anak");
    // Proses file excel
    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment; filename="Data Anak.xlsx"'); // Set nama file excel nya
    header('Cache-Control: max-age=0');
    $writer = new Xlsx($spreadsheet);
    $writer->save('php://output');
    
    $this->load->view('anak/v_data_anak', $data);
  }
}
