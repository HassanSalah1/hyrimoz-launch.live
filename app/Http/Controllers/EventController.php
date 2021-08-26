<?php

namespace App\Http\Controllers;

use App\Imports\EventRegisterImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class EventController extends Controller
{
    public function index()
    {
        $data = file_get_contents(public_path('data.json'));
         $data = json_decode($data, true);
          return view('event-table', compact('data'));
    }
    public function import()
    {
        return view('import');
    }

    public function store(Request $request)
    {

        $data = Excel::import(new EventRegisterImport(), request()->file('file'));
         return 'done';
    }
}
