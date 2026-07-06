<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Slider;
use App\Models\Theproduk;
use App\Models\Produk1;
use App\Models\Produk2;
use App\Models\Produk3;
use App\Models\Theprodukimage;

class PelayananController extends Controller
{
    public function index()
    {
        $sliderPelayanan = Slider::where('posisi', 'pelayanan')
            ->where('status', 1)
            ->orderBy('urutan', 'asc')
            ->get();

        $services = Service::orderBy('urutan', 'asc')->get();

        $theproduk = Theproduk::orderBy('urutan', 'asc')->get();

        $produk1 = Produk1::latest()->get();
        $produk2 = Produk2::latest()->get();
        $produk3 = Produk3::latest()->get();
        $theprodukimage = Theprodukimage::latest()->first();

        return view('pelayanan', compact(
            'sliderPelayanan',
            'services',
            'theproduk',
            'produk1',
            'produk2',
            'produk3',
            'theprodukimage'
        ));
    }
}