<?php

namespace App\Http\Controllers;

use App\Models\Fakultas;
use App\Models\Prodi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProdiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Prodi::orderByDesc('created_at')->get();

        return view('prodi.list-prodi', [
            'prodi' => $data,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $listFakultas = Fakultas::all();

        return view("prodi.add-prodi", compact('listFakultas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'fakultas_id' => 'required',
            'nama_prodi' => ['required'],
            'nama_kaprodi' => ['required'],
            'alias_prodi' => ['required'],
            'photo_kaprodi' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048'
        ], [
            'nama_prodi.required' => 'Nama prodi wajib diisi',
            'nama_kaprodi.required' => 'Nama Kaprodi wajib diisi',
            'alias_prodi.required' => 'Alias Prodi wajib diisi',
        ]);

        $photoKaprodi = Storage::disk("public")->putFile("prodi", $request->file("photo_kaprodi"));

        $validated['photo_kaprodi'] = $photoKaprodi;

        Prodi::create([
        'fakultas_id' => $request->fakultas_id,
        'nama_prodi' => $request->nama_prodi,
        'nama_kaprodi' => $request->nama_kaprodi,
        'alias_prodi' => $request->alias_prodi,
        'photo_kaprodi' => $photoKaprodi,
    ]);

        return redirect()->route("prodi.index")->with('success', 'Prodi Berhasil Disimpan ^_^');
    }

    /**
     * Display the specified resource.
     */
    public function show(Prodi $prodi)
    {
        return view("prodi.detail-prodi", [
            "prodi" => $prodi
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Prodi $prodi)
    {
         return view('prodi.edit-prodi', [
            'prodi' => $prodi,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Prodi $prodi)
    {
        $validated = $request->validate([
            'nama_prodi' => ['required'],
            'nama_kaprodi' => ['required'],
            'alias_prodi' => ['required'],
        ], [
            'nama_prodi.required' => 'Nama prodi wajib diisi',
            'nama_kaprodi.required' => 'Nama Kaprodi wajib diisi',
            'alias_prodi.required' => 'Alias Prodi wajib diisi',
        ]);

        $prodi->update([
            'nama_prodi' => $request->nama_prodi,
            'nama_kaprodi' => $request->nama_kaprodi,
            'alias_prodi' => $request->alias_prodi,
        ]);

        return redirect()->route("prodi.index")->with("success", "Berhasil di ubah prodi");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Prodi $prodi)
    {
        $prodi->delete();

        return redirect()->route("prodi.index")->with("success", "Berhasil di hapus prodi");
    }
}
