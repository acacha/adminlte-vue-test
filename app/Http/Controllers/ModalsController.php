<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * Class ModalsController.
 *
 * @package App\Http\Controllers
 */
class ModalsController extends Controller
{
    /**
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $data = [];
        return view('modals',$data);
    }

}
