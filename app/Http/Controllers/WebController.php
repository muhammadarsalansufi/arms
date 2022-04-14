<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;


class WebController extends Controller
{
    public function index(Request $request)
    {   $message = 'Enter Your CNIC Number';
        $record = '';
        if(isset($request->cnic))
        {
            $record = DB::table('licenses')->select()->where('cnic','=',$request->cnic)->get();
            if(count($record) > 0)
            {
                $message = 'Record Found';
            }
            else
            {
                $message = 'Record Not Found';
            }

        }
        return view('index',compact('record','message'));
    }
}
