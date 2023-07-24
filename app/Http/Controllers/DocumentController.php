<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    //document
    public function arsip()
    {
        $file_arsip = File::where('status', 1)->get();
        return view('document.main', ['file_arsip' => $file_arsip]);
    }

    public function unggah()
    {
        return view('document.unggah');
    }

    public function unggahproses(Request $request)
    {
        $request->validate([
            'nama_dokumen' => 'required|mimes:pdf',
            'keterangan' => 'required',
            'tujuan' => 'required'
        ], [
            'nama_dokumen.required' => 'File wajib diisi',
            'tujuan' => 'Tujuan wajib diisi',
            'keterangan' => 'Keterangan wajib diisi',
            'nama_dokumen.mimes' => 'File hanya diperbolehkan Berjenis PDF'
        ]);

        $nama = Session('nama');
        $tanggal = date('Y-m-d H:i:s');
        $foto_file = $request->file('nama_dokumen');
        $foto_nama = $request->input('keterangan') . "." . $request->file('nama_dokumen')->getClientOriginalExtension();
        $foto_file->move(public_path('file_unggah'), $foto_nama);
        $data = [
            'nama' => $nama,
            'nama_dokumen' => $foto_nama,
            'tanggal' => $tanggal,
            'tujuan' => $request->input('tujuan'),
            'keterangan' => $request->input('keterangan'),
            'status' => $request->input('status')
        ];

        // if ($request->fails()) {
        //     return back()->with('errors', $request->messages()->all()[0])->withInput();
        // }

        File::create($data);

        // Mendapatkan URL file yang diupload
        $file_path = asset('file_unggah/' . $foto_nama);

        return redirect('/unggah')->with('success', 'Berhasil Upload File')->with('file_path', $file_path);
    }
}
