<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

/**
 * CalculatorController Class
 */
class CalculatorController extends Controller
{

    /**
     * Show the application index.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    
    /**
     * Calculation of the Kwh - Price
     *
     * @return HTML Label with the calculated result
     */
    
    public function calculate(Request $request)
    {
        $kwh = $request->input('calc');
        
        $result = $kwh * 0.25;
        
        $html = '<h1><label for="foo"> Price for ' . $kwh . ' kWh => ' . $result . '  £ </label>';
        
        return $html;
    }
}
