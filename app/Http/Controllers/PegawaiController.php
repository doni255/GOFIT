<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use App\Models\Pegawai;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
    $item = Pegawai::find($id);
    // $item->delete();
    
    // You can also add a success message to be displayed later
    // session()->flash('delete', 'Pegawai Deleted Succesfully ^_^.');

    // return redirect()->route('pegawai.index');


    if($item->delete()){
        return response([
            'message' => 'Delete succes 😂😂',
            'data' => $item
        ], 200);
    }

    return response ([
        'message' => 'Delete failed',
        'data'=> null
    ], 400);
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
 
    session()->flash('edit_cancel', 'Edit Cancelled 😁');

    return redirect()->route('pegawai.index');
}



} 
