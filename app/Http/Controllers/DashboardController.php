<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\t92;

class DashboardController extends Controller
{

    public function menu()
    {
       return $menu = t92::tree();
    }

   public function index()
   {
        $menu = $this->menu();
        return view('dashboard',compact('menu'));
    }

   public function companymaster()
   {
        $menu = $this->menu();
        return view('companymaster',compact('menu'));
    }

     public function systemmaster()
   {
        $menu = $this->menu();
        return view('systemmaster',compact('menu'));
    }

    public function MNFastPath(Request $request)
    {
        $MNFastPath=DB::table('t92')->where('MNFastPath' ,$request->search)->value('MNRoute');

        if($MNFastPath){
            return response(['status'=>'success','redirect_url'=>url($MNFastPath)]);
        }else{
            return response(['status'=>'error']);

        }
    }

    public function current_url(Request $request)
    {

        if($request->current_url != ''){

        $current_url=DB::table('t92')->where('MNRoute' ,$request->current_url)->value('MNFormHeadeding');

        if($current_url){
            return response(['status'=>'success','data'=>$current_url]);
        }else{
            return response(['status'=>'error']);

        }

       }else{

            return response(['status'=>'error']);
       }

    }

    public function test()
   {
        $menu = $this->menu();
        return view('test',compact('menu'));
    }

     public function tabform()
   {
        $menu = $this->menu();
        return view('tabform',compact('menu'));
    }

    
}
