<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    
	/**
     * Show the Validation Form.
     *
     * @return \Illuminate\Http\Response
     */
    public function formValidation()
    {
    	return view('form-validation');
    }

    public function formValidationPost(Request $request)
    {
    	$this->validate($request,[
    			'calc' => 'required|numeric'
    		],[
    			'calc.required' => ' The kWH field is required.'
    		]);

    	dd('You are successfully added all fields.');
    }
}
