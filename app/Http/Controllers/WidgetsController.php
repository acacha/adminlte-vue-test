<?php

namespace App\Http\Controllers;

/**
 * Class WidgetsController.
 *
 * @package App\Http\Controllers
 */
class WidgetsController extends Controller
{
    //
    /**
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $data = [];
        return view('widgets',$data);
    }

    /**
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function demo()
    {
        $data = [];
        return view('widgetsdemo',$data);
    }

}
