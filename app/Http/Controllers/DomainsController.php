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

        if(!$domain) {
            return redirect()->back()->withErrors('No domain entered');
        }
        if (gethostbyname($domain) != $domain ) {
            $status = 'Unavailable';
        }
        else {
            $status = 'Available';
        }
        return view('domains')->with(compact('status', 'domain'));
    }

    public function whois($domain)
    {
        dd($domain);
    }
}
