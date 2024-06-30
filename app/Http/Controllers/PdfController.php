<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class PdfController extends Controller{

    public function hari($day){
        $hari = array(
            'Sunday' => 'Minggu',
            'Monday' => 'Senin',
            'Tuesday' => 'Selasa',
            'Wednesday' => 'Rabu',
            'Thursday' => 'Kamis',
            'Friday' => 'Jumat',
            'Saturday' => 'Sabtu'
        );
        return $hari[$day];
    }

    public function bulan($month){
        $bulan = array(
            'January' => 'Januari',
            'February' => 'Februari',
            'March' => 'Maret',
            'April' => 'April',
            'May' => 'Mei',
            'June' => 'Juni',
            'July' => 'Juli',
            'August' => 'Agustus',
            'September' => 'September',
            'October' => 'Oktober',
            'November' => 'November',
            'December' => 'Desember'
        );
        return $bulan[$month];
    }
    
    // generate stream pdf
    public function generatePDF(){
        date_default_timezone_set('Asia/Jakarta');

        $result['dateNow_surat'] = date('d').' '.$this->bulan(date('F')).' '.date('Y');
        $result['nama_lengkap'] = 'Budi Joko Santoso Adiputra';
        $result['status'] = 'Mahasiswa';
        $result['user_id'] = '20030000';
        $result['nama_ruangan'] = 'Ruang 1';
        $result['tanggal_peminjaman'] = date('d').' '.$this->bulan(date('F')).' '.date('Y');
        $result['jam_mulai_peminjaman'] = date('H:i');
        $result['jam_selesai_peminjaman'] = date('H:i', strtotime('+1 hour'));
        $result['keperluan'] = 'Rapat Himpunan Mahasiswa';

        // stream pdf
        $pdf = PDF::loadView('suratPDF', $result);
        return $pdf->stream('suratpeminjaman-'.$result['user_id'].$result['dateNow_surat'].'.pdf');
    }
}
