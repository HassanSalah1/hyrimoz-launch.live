<?php

namespace App\Http\Controllers;

use App\Doctors;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = Doctors::latest()->get();
        return view('event-table', compact('data'));

    }

    public function welcome()
    {
        return view('welcome');
    }

    public function terms()
    {
        return view('terms');
    }

    public function webinarJam(Request $request)
    {
        $doctor = Doctors::where('email', $request->email)->first();
        if (!$doctor) {
            Doctors::create([
                'name' => $request->first_name,
                'email' => $request->email,
                'phone' => $request->phone,
                'scfhs' => $request->saudiCoun,
                'specialty' => $request->speciality,
                'hospital' => $request->hospitalName,
                'channel' => $request->channel,
                'question' => $request->question,
            ]);
        }

        $phone = (int)$request->phone;

        $webinarJam = new WebinarJam('9047c51e-9fa8-4002-8831-b0076dd36942');
        $response = $webinarJam->addToWebinar(220,$request->first_name,$request->email,273,$request->last_name,'','+971',$phone);
         //$response = $webinarJam->getWebinar(217);

        return response()->json($response);

    }
}
