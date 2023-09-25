<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index(){
        return view('form');
    }

    public function store(Request $request){
        $request->validate(
            [
                'nama' => 'required',
                'notelp' => 'required|numeric',
                'berat' => 'required|numeric|between:2.50,99.99',
                'bukti' => 'required|mimes:png,jpg,jpeg|max:2048'
            ],
            [
                'nama.required' => 'Nama wajib diisi',
                'notelp.required' => 'Nomor telepon wajib diisi',
                'berat.required' => 'Berat laundry wajib diisi',
                'berat.between' => 'Berat laundry minimal 2.5 KG dan maksimal 9.99 KG!',
                'bukti.required' => 'Masukkan bukti pembayaran',
                'bukti.mimes' => 'Format file yang diterima adalah .png, .jpg, dan .jpeg',
                'bukti.max' => 'Ukuran maksimal 2 MB'
            ]
        );

        $bukti_bayar = $request->file('bukti');
        $name = $request->input('nama'); 
        $notelp = $request->input('notelp'); 

        if ($bukti_bayar != NULL && $name != null && $notelp != null) {
            $name = preg_replace('/[^a-zA-Z0-9]/', '', $name);
            $file_name = $name . '_' . $notelp . '.' . $bukti_bayar->extension();
            $bukti_bayar->move(public_path('img'), $file_name);
        }

        $results = [
            'nama' => $name,
            'notelp' => $notelp,
            'berat' => $request->berat,
            'layanan' => $request->layanan,
            'bukti' => $file_name
        ];

        return redirect('/result')->with(['results' => $results, 'status' => 'Form berhasil disubmit!']);
    }

    public function show(){
        $results = session()->get('results');

        return view('result', [
            'results' => $results
        ]);
    }
}