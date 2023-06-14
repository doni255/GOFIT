<?php

namespace App\Http\Controllers;

use App\Models\Departemen;
// use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\View\View;




class DepartemenController extends Controller
{
    /**
     * index
     * 
     * @return void
     */
    public function index():View
    {


        return view('departemen.index', [
            'departemen' => DB::table('departemen')->simplePaginate(5)
        ]);
        

        // //get posts
        // $departemen = Departemen::paginate(5);

        
        // //render view with posts
        // return view('departemen.index', compact('departemen'));

       
    }

    public function destroy($id)
    {
        $data=departemen::find($id);
        $data->delete();
        return redirect('/departemen');
    }
}
