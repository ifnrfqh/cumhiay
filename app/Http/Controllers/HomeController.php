<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $pengajuans = Transaksi::where("type", 1)
                        ->where("status", 2)
                        ->get();

        $pengajuan_jajans = Transaksi::where("type", 2)
                        ->get();

        $jajan_by_invoices = Transaksi::where('type', 2)
                        ->groupBy('invoice_id')
                        ->get();

        // dd($jajan_by_invoices);

        return view('home', [
            "pengajuans" => $pengajuans,
            "jajan_by_invoices" => $jajan_by_invoices,
            "pengajuan_jajans" => $pengajuan_jajans
        ]);
    }

    public function barangDestroy($id) {
        $barang = Barang::findOrFail($id);

        if(!$barang){
            return redirect()->back()->with('error', 'Produk Tidak Ditemukan');
        }

        $barang->delete();

        return redirect()->back()->with('success', 'Berhasil Menghapus data');
    }
}
