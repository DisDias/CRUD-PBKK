<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Parkir;
use App\Models\lokasiParkir;

class ParkirController extends Controller
{
    public function index()
    {
        $data_parkir = Parkir::all();
        return view('parkir.index')->with('data_parkir', $data_parkir);
    }

    public function create(request $request)
    {
        /*$validatedData = $request->validate([
            'nomor_polisi' => 'required|alpha_num',
            'jenis_kendaraan' => 'required',
            'tgl_masuk' => 'required',
            'tgl_keluar' => 'required',
            'jam_masuk' => 'required',
            'jam_keluar' => 'required',
        ]);*/
        Parkir::create($request->all());
        /*$data_parkir = $request->all();
        $parkir = new Parkir;
        $parkir->nomor_polisi = $data_parkir['nomor_polisi'];
        $parkir->jenis_kendaraan = $data_parkir['jenis_kendaraan'];
        $parkir->tgl_masuk = $data_parkir['tgl_masuk'];
        $parkir->tgl_keluar = $data_parkir['tgl_keluar'];
        $parkir->jam_masuk = $data_parkir['jam_masuk'];
        $parkir->jam_keluar = $data_parkir['jam_keluar'];

        $lokasiParkir = new lokasiParkir;
        $lokasiParkir->parkir_id = $parkir->nomor_tiket;
        $lokasiParkir->tempat = $data_parkir['tempat'];
        $lokasiParkir->lantai = $data_parkir['lantai'];*/
        return redirect('/')->with('sukses', 'Data Berhasil Ditambahkan');
    }

    public function edit($nomor_tiket)
    {
        $parkir = Parkir::find($nomor_tiket);
        return view('parkir/edit', ['parkir'=>$parkir]);
    }

    public function update(request $request, $nomor_tiket)
    {
        $parkir = Parkir::find($nomor_tiket);
        $parkir->update($request->all());
        return redirect('/')->with('sukses', 'Data Berhasil Diupdate');
    }

    public function destroy($nomor_tiket)
    {
        $data_parkir = Parkir::find($nomor_tiket);
        $data_parkir->delete();
        return redirect('/')->with('sukses', 'Data Berhasil Dihapus');
    }

    public function show($nomor_tiket)
    {
        $data_parkir = Parkir::find($nomor_tiket);
        return view('parkir.show')->with('data_parkir', $data_parkir);
    }
}