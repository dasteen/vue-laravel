<?php

namespace App\Http\Controllers;

use App\Lib\Facades\Response;
use Illuminate\Http\Request;

class TestController extends Controller
{
    private $data;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
        $this->data = [
            'key1' => 'value1',
            'key2' => 'value2',
        ];
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getDataToVue()
    {
        $data = $this->data;

        return view('data_to_vue', compact('data'));
    }

    /**
     * @return array
     */
    public function getDataAjaxToVue()
    {
        $data = $this->data;

        return $data;
    }
}
