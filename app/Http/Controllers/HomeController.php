<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\WebinarJam;

class HomeController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }

    public function terms()
    {
        return view('terms');
    }
    public function index(Request $request)
    {
        $phone = (int) $request->phone;

         $webinarJam = new WebinarJam('9047c51e-9fa8-4002-8831-b0076dd36942');
         $response = $webinarJam->addToWebinar(220,$request->first_name,$request->email,273,$request->last_name,'','+971',$phone);
//         $response = $webinarJam->getWebinar(217);
//         dd($response);
         return response()->json($response);
    }
}
