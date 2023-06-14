<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Illuminate\Support\Collection;

use App\Models\Pegawai;

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
    session()->flash('message', 'Pegawai Deleted Succesfully ^_^.');

    return redirect()->route('pegawai.index');
}


    // public function delete($id_pegawai)
    // {
    //     $data = Pegawai::find($id_pegawai);
    //     $data->delete();
    //     return redirect('/pegawai');
    // }
} 
