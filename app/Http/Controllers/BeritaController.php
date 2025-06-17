<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BeritaController extends Controller
{
    public function dashboard()
    {
        // Total berita
        $totalBerita = Berita::count();

        // Pie chart kategori
        $kategoriCount = Berita::select('kategori', DB::raw('count(*) as total'))
            ->groupBy('kategori')
            ->pluck('total', 'kategori');
            // dd($kategoriCount);

        // Pie chart sumber
        $sumberCount = Berita::select('sumber', DB::raw('count(*) as total'))
            ->groupBy('sumber')
            ->pluck('total', 'sumber');


        $kategoriIcons = [
            'NASIONAL' => 'fas fa-globe-asia',
            'INTERNASIONAL' => 'fas fa-globe-americas',
            'OLAHRAGA' => 'fas fa-futbol',
            'TEKNOLOGI' => 'fas fa-microchip',
            'OTOMOTIF' => 'fas fa-car',
            'EKONOMI' => 'fas fa-chart-line',
        ];

        return view('berita.dashboard', compact(
            'totalBerita',
            'kategoriCount',
            'sumberCount',
            'kategoriIcons'
        ));
    }

    public function deteksi(){
        #view deteksi berita
        return view('berita.deteksi');
    }

    public function predict(){
        #predict topic using MobyDeep
        return "Ekonomi 90%";
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $direction = $request->input('direction','asc');
        $perPage = $request->input('perPage', 100); // default 100
        $berita = Berita::orderBy('id', $direction)->paginate($perPage)->withQueryString();

        return view('berita.index', compact('berita', 'perPage','direction'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
