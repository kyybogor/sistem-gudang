<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReturController extends Controller
{
    public function index()
    {
        // Data dummy (opsional, kalau nanti kamu mau pakai)
        $barangDicari = "Celana Pendek";
        $transaksi = [
            'id' => 'TRX12345',
            'barang' => ['Kaos Hitam', 'Celana Pendek', 'Topi Ungu']
        ];

        // Arahkan langsung ke retur.php di resources/views/
        $path = resource_path('views/retur.php');

        // Jalankan file PHP tersebut dan ambil hasilnya
        ob_start();
        include($path);
        $content = ob_get_clean();

        // Tampilkan hasil ke browser
        return response($content);
    }
}
