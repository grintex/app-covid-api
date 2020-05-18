<?php

namespace App\Http\Controllers;

use App\Analytic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class AnalyticsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {}

    /**
     * 
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'uuid' => 'required',
            'type' => 'required',
            'label' => 'required',
            'data' => 'required'
        ]);

        $entry = new Analytic([
            'uuid' => $request->get('uuid'),
            'type' => $request->get('type'),
            'label' => $request->get('label'),
            'data' => json_encode($request->get('data')),
            'ip' => $request->ip()
        ]);

        $entry->save();

        return [
            'data' => $entry
        ];
    }
}