<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\RedirectResponse;

use Illuminate\View\View;

use App\Models\Member;

class MemberController extends Controller
{
    /**
     * index
     * 
     * @return void
     */
    public function index()
    {
        //get posts
        // $member = Member::get();
        $member = DB::table('members')->simplePaginate(5);

        
        ///render view with posts
        return view('kasir.member.index', compact('member'));
    }


    public function destroy(string $id):RedirectResponse
    {   
        
        Member::destroy($id);

        return redirect()->route('/member')->with('flash_message', 'Deleted Successfully');
    }
























    // public function remove($id){
    //     $members = Member::find($id);
    //     $members->delete();
    //     return redirect('/')->with('status', "success");
    // }

    // public function delete($id)
    // {
    //     $member = Member::find($id);

    //     if($member){
    //         return response()->json(['error' => 'item not found'], 404);
    //     }

    //     $member->delete();

    //     return response()->json(['message' => 'item deleted succcessfully']);
    // }
}
