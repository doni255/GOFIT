<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

use App\Models\Presensigym;

class PresensigymController extends Controller
{
    //
      //
      public function index(): View{
        return view('kasir.presensi.index', [
            'pegawai' => DB::table('pegawai')->simplePaginate(10)
        ]);
    }
}
