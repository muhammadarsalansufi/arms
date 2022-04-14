<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Models\License;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    { 
        $record = DB::table('licenses')->select()->get();
        return view('home',compact('record'));
    }
    public function edit($id)
    { 
        $record = DB::table('licenses')->select()->where('id','=',$id)->get();
        return view('edit',compact('record'));
    }
    public function addLicense(Request $request)
    {
        $record  = new License();
        $record->applicant_name = $request->applicant_name;
        $record->father_name = $request->father_name;
        $record->license_no = $request->license_no;
        $record->weapon_type = $request->weapon_type;
        $record->calibar = $request->calibar;
        $record->weapon_no = $request->weapon_no;
        $record->cartridges = $request->cartridges;
        $record->status = $request->status;
        $record->i_date = $request->i_date;
        $record->e_date = $request->e_date;
        $record->cnic = $request->cnic;
        $record->save();
        return redirect('home');


    }
    public function updateLicense(Request $request)
    {
        $id = $request->id;
        $record = DB::table('licenses')->select()->where('id','=',$id)->update(
            [
                'applicant_name'=>$request->applicant_name,
                'father_name'=>$request->father_name,
                'license_no'=>$request->license_no,
                'weapon_type'=>$request->weapon_type,
                'calibar'=>$request->calibar,
                'weapon_no'=>$request->weapon_no,
                'cartridges'=>$request->cartridges,
                'status'=>$request->status,
                'i_date'=>$request->i_date,
                'e_date'=>$request->e_date,
                'cnic'=>$request->cnic

            ]
        );
        
        return redirect('home');
    }
    public function delete($id)
    { 
        $record = DB::table('licenses')->select()->where('id','=',$id)->delete();
        return redirect()->back();
    }
}
