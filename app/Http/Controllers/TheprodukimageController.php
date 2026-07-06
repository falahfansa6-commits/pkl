<?php

namespace App\Http\Controllers;

use App\Models\Theprodukimage;
use Illuminate\Http\Request;

class TheprodukimageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()

    {
        $gambar = Theprodukimage::all();
        return view('theprodukimage.index', compact('gambar'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('theprodukimage.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $request->validate([
    'gambar' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048'
]);

$file = $request->file('gambar');

$namaFile = time().'_'.$file->getClientOriginalName();

$folder = public_path('uploads/theprodukimage');

if (!is_dir($folder)) {
    mkdir($folder, 0777, true);
}

$file->move($folder, $namaFile);

Theprodukimage::create([
    'gambar' => 'uploads/theprodukimage/'.$namaFile
]);

return redirect()->route('theprodukimage.index')
    ->with('success', 'Berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(theprodukimage $theprodukimage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(theprodukimage $theprodukimage)
    {
        return view('theprodukimage.edit',compact('theprodukimage'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, theprodukimage $theprodukimage)
    {
        $request->validate([
        'gambar'=>'nullable|image|mimes:jpg,jpeg,png,webp|max:2048'
        ]);

        $gambar = $theprodukimage->gambar;
        if($request->hasFile('gambar')){

            if(file_exists(public_path($gambar))){
                unlink(public_path($gambar));
            }

            $file = $request->file('gambar');

            $namaFile = time().'_'.$file->getClientOriginalName();

            $file->move(public_path('uploads/theprodukimage'),$namaFile);

            $gambar='uploads/theprodukimage/'.$namaFile;
        }
        $theprodukimage->update([
 'gambar'=>$gambar
        ]);

        return redirect()->route('theprodukimage.index')
        ->with('success', 'Gambar berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(theprodukimage $theprodukimage)
    {
        if (file_exists(public_path($theprodukimage->gambar))) {
            unlink(public_path($theprodukimage->gambar));
        }
        $theprodukimage->delete();

        return redirect()->route('theprodukimage.index')
        ->with('success', 'Berhasil manghapus data gambar');
    }
}
