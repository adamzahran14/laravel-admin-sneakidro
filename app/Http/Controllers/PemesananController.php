<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Contract\Database;

class PemesananController extends Controller
{
    // public function __construct(Database $database)
    // {
    //     $this->database = $database;
    //     $this->tablename = 'Pemesanan';
    // }

    public function index()
    {
        // $Pemesanan = $this->database->getReference('$this->tablename')->getValue();
        $database = app('firebase.database');
        $reference = $database->getReference('Pemesanan');
        $snapshot = $reference->getSnapshot();

        $value = $snapshot->getValue();
        return view('firebase.pemesanan.index')->with("Pemesanan", $value);
    }

    public function edit($id)
    {
        $key = $id;
        $database = app('firebase.database');
        $editdata = $database->getReference('Pemesanan')->getChild($key)->getValue();
        if ($editdata) {
            return view('firebase.pemesanan.edit', compact('editdata', 'key'));
        } else {
            return redirect('Pemesanan')->with('status', 'Pemesanan Id not Found');
        }
    }

    public function update(Request $request, $id) {
        $key = $id;
        $updateData = [
            // 'idPemesanan' => $request->idPemesanan,
            // 'userId' => $request->userId,
            'kategori' => $request->kategori,
            'sepatu' => $request->sepatu,
            // 'jumlah' => $request->jumlah,
            'metode' => $request->metode,
            'statusPembayaran' => $request->statusPembayaran,
        ];
        $database = app('firebase.database');
        $reference = $database->getReference('Pemesanan/'.$key)->update($updateData);
        if($reference) {
            return redirect('pemesanan')->with('status', 'Update Pemesanan Sukses');
        } else {
            return redirect('pemesanan')->with('status', 'Update Pemesanan Gagal');
        }
        
    }

    public function destroy($id) {
        $key = $id;
        $database = app('firebase.database');
        $del_data = $database->getReference('Pemesanan/'.$key)->remove();
        if ($del_data) {
            return redirect('pemesanan')->with('status', 'Delete Pemesanan Sukses');
        } else {
            return redirect('pemesanan')->with('status', 'Delete Pemesanan Gagal');
        }
    }


}
