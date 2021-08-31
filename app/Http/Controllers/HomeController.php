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

    public function day1()
    {
        return view('day_1');
    }
    public function day2()
    {
        return view('day_2');
    }
    public function day3()
    {
        return view('day_3');
    }

    public function terms()
    {
        return view('terms');
    }

    public function dayOneStore(Request $request): \Illuminate\Http\JsonResponse
    {
        $doctor = Doctors::where('email', $request->email)->first();
        if (!$doctor) {
           $this->createDoctor($request, '1');
        }
        $phone = (int)$request->phone;
        $webinarJam = new WebinarJam('9047c51e-9fa8-4002-8831-b0076dd36942');
        $response = $webinarJam->addToWebinar(220,$request->first_name,$request->email,273,$request->last_name,'','+971',$phone);
        return response()->json($response);

    }
    public function dayTwoStore(Request $request): \Illuminate\Http\JsonResponse
    {
        $doctor = Doctors::where('email', $request->email)->first();
        if (!$doctor) {
            $this->createDoctor($request, '2');
        }
        $phone = (int)$request->phone;
        $webinarJam = new WebinarJam('9047c51e-9fa8-4002-8831-b0076dd36942');
        $response = $webinarJam->addToWebinar(222,$request->first_name,$request->email,274,$request->last_name,'','+971',$phone);
        return response()->json($response);

    }
    public function dayThreeStore(Request $request): \Illuminate\Http\JsonResponse
    {
        $doctor = Doctors::where('email', $request->email)->first();
        if (!$doctor) {
            $this->createDoctor($request, '3');
        }
        $phone = (int)$request->phone;
        $webinarJam = new WebinarJam('9047c51e-9fa8-4002-8831-b0076dd36942');
        $response = $webinarJam->addToWebinar(223,$request->first_name,$request->email,275,$request->last_name,'','+971',$phone);
        return response()->json($response);

    }
    private function createDoctor($request, $day){
        Doctors::create([
            'name' => $request->first_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'scfhs' => $request->saudiCoun,
            'specialty' => $request->speciality,
            'hospital' => $request->hospitalName,
            'channel' => $request->channel,
            'question' => $request->question,
            'day' => $day,
        ]);
    }
}
