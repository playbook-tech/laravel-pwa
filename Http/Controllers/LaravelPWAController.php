<?php

namespace LaravelPWA\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use LaravelPWA\Services\ManifestService;

class LaravelPWAController extends Controller
{
    public function manifestJson(Request $request)
    {
        $product = strpos($request->url(), 'firstdown') ? 'firstdown' : 'fastbreak';

        $output = (new ManifestService)->generate($product);
        return response()->json($output);
    }

    public function offline(){
        return view('laravelpwa::offline');
    }
}
