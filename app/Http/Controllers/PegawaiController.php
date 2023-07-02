<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Illuminate\Support\Collection;
use App\Models\Pegawai;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Session;

class PegawaiController extends Controller
{



    //
    public function index(): View{

        return view('pegawai.index', [
            'pegawai' => DB::table('pegawais')->simplePaginate(10)
        ]);

    }



    public function destroy($id)
{
    $item = Pegawai::findOrFail($id);
    $item->delete();
    
    // You can also add a success message to be displayed later
    session()->flash('delete', 'Pegawai Deleted Succesfully ^_^.');

    return redirect()->route('pegawai.index');
}


public function update($id)
{
    
    $item = Pegawai::findorfail($id);

    return view('pegawai.edit.edit', compact('item'));

    $item->nama_pegawai = $request->input('nama_pegawai');
    $item->tanggal_lahir = $request->input('tanggal_lahir');
    $item->email = $request->input('email');
    $item->nomor_telepon = $request->input('nomor_telepon');
    $item->role = $request->input('role');
    $item->save();

    return response()->json(['message' => 'Pegawai Updated Succesfully']);

    

}

public function cancel()
{
 
    session()->flash('edit', 'Edit Cancelled 😁');

    return redirect()->route('pegawai.index');
}



} 
