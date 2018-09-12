<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function sendDataFromBladeToVue()
    {
        $data = [
            'key1' => 'value1',
            'key2' => 'value2',
        ];

        return view('blade_to_vue', compact('data'));
    }
}
