<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReturController extends Controller
{
    public function index()
    {
        $barangDicari = "Celana Pendek";
        $transaksi = [
            'id' => 'TRX12345',
            'barang' => ['Kaos Hitam', 'Celana Pendek', 'Topi Ungu']
        ];
        return view('retur', compact('barangDicari', 'transaksi'));
    }
}
