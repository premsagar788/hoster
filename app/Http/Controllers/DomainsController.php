<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DomainsController extends Controller
{
    public function index()
    {
        return view('domains');
    }
    // dns_get_record
    public function check(Request $request)
    {
        $domain = $request->input('domain');
        $response = '';

        if (gethostbyname($domain) != $domain ) {
            $response = "Domain is already registered";
        }
        else {
            $response = "Domain is available";
        }
        // dd($response);
        return redirect('domains')->with('response', $response);
    }
}
