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



    // public function create()
    // {
    //     return view('data.create');
    // }
    
    



    public function destroy($id)
{
    $item = Pegawai::find($id);
    // $item->delete();
    
    // You can also add a success message to be displayed later
    // session()->flash('delete', 'Pegawai Deleted Succesfully ^_^.');

    // return redirect()->route('pegawai.index');

    if(!$item)
    {
        return response([
            'message' => 'Data Not Found 😞😞',
        ], 404);
    }

    if($item->delete()){
        return response([
            'message' => 'Delete success 😂😂',
            'data' => $item
        ], 200);
    }

    return response ([
        'message' => 'Delete failed',
        'data'=> null
    ], 400);


}


public function edit($id)
{
    
    $item = Pegawai::findorfail($id);

    return view('pegawai.edit.edit', compact('item'));

}



public function store(Request $request)
{
    $validateData = $request->validate([
        // Validate the input data
        'nama_pegawai' => 'required|string|max:255',
        'tanggal_lahir' => 'required|date',
        'email' => 'required|email|max:255',
        'nomor_telepon' => 'required|numeric|min:12',
        'role' => 'required',
        'password' => 'required|string',  

       


        
    ]);

    $messages = [
        'nama_pegawai.required' => 'Please enter your name',
        'email.required' => 'Please enter your email address',
    ];  

    // $this -> validate($request, $validateData, $messages);


    Pegawai::create($validateData);

    session()->flash('add_success', 'Add Was Successfully 😁');
    return redirect()->route('pegawai.index');

}

public function update(Request $request, $id)
{

    $item = Pegawai::find($id);
     // You may need additional code to handle cases where the resource is not found

     // Validate the input
     $validateData = $request->validate([
        'nama_pegawai' => 'required',
        'tanggal_lahir' => 'required',
        'nomor_telepon' => 'required', 
        'role' => 'required',
        'email' => 'required',

     ]);

     // Update the resource
     $item -> nama_pegawai = $validateData['nama_pegawai'];
    $item -> tanggal_lahir = $validateData['tanggal_lahir'];
    $item -> nomor_telepon = $validateData['nomor_telepon'];
    $item -> role = $validateData['role'];
    $item -> role = $validateData['email'];

    $item -> save();

    // return redirect()->route('pegawai.index', $item->id)->

    //  return view('pegawai.index')->with('success', 'Pegawai Updated SuccessFully 😁😁');
    session()->flash('edit_success', 'Edit Successfull 😁');

     return view('pegawai.index', [
        'pegawai' => DB::table('pegawais')->simplePaginate(10)
     ]);
     

    // with('edit_success', 'Pegawai Updated SuccessFully 😁😁');
     
}

public function cancel()
{
 
    session()->flash('edit_cancel', 'Edit Cancelled 😁');

    return redirect()->route('pegawai.index');
}



} 
