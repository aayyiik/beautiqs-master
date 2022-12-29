<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\HistoryStok;
use App\Models\Pemesanan;
use App\Models\Supplier;
use App\Models\Users;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){

        $barangs  = Barang::count();
        $supplier = Supplier::count();
        $histori = HistoryStok::count();
        $pemesanan = Pemesanan::count();
        return view('dashboards.index', compact('barangs','supplier','pemesanan','histori'));
    }
}
