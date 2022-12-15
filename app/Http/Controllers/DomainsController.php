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
        $domain = $this->validateDomain($request->input('domain'));

        if (gethostbyname($domain) != $domain ) {
            $status = 'Unavailable';
        } else {
            $status = 'Available';
        }
        return view('domains')->with(compact('status', 'domain'));
    }

    private function validateDomain($domain): ?string
    {
        $domain = trim($domain);
        
        if (substr(strtolower($domain), 0, 7) == "http://"){
            $domain = substr($domain, 7);
        } elseif (substr(strtolower($domain), 0, 8) == "https://") {
            $domain = substr($domain, 8);
        } elseif (substr(strtolower($domain), 0, 4) == "www.") {
            $domain = substr($domain, 4);
        }

        if(!$domain) {
            return redirect()->back()->withErrors('No domain entered');
        }

        return $domain;
    }

    public function whois($domain)
    {
        $domain = $this->validateDomain($domain);
        return $this->DNSRecords($domain);
        // $whois = dns_get_record($domain, DNS_ANY);
    }

    private function DNSRecords($domain)
    {
        $aRec = dns_get_record($domain, DNS_A, $authoritative, $additional);
        $cname = dns_get_record($domain, DNS_CNAME, $authoritative, $additional);
        $hInfo = dns_get_record($domain, DNS_HINFO, $authoritative, $additional);
        $NAPtr = dns_get_record($domain, DNS_NAPTR, $authoritative, $additional);
        $MX = dns_get_record($domain, DNS_MX, $authoritative, $additional);
        $NS = dns_get_record($domain, DNS_NS, $authoritative, $additional);
        $PTR = dns_get_record($domain, DNS_PTR, $authoritative, $additional);
        $SOA = dns_get_record($domain, DNS_SOA, $authoritative, $additional);
        $TXT = dns_get_record($domain, DNS_TXT, $authoritative, $additional);
        $AAAA = dns_get_record($domain, DNS_AAAA, $authoritative, $additional);
        $SRV = dns_get_record($domain, DNS_SRV, $authoritative, $additional);

        return view('whois')->with(compact('aRec', 'cname', 'hInfo', 'NAPtr', 'MX', 'NS', 'PTR', 'SOA', 'TXT', 'AAAA', 'domain'));
    }

    public function addToCart($domain)
    {
        $cart = session()->get('cart');
        // dd(preg_replace('/ .*/', '.', $domain));
        $prefix = substr($domain, strpos($domain, ".") + 1); 
        if ($prefix == 'com') {
            $price = '$11.25';
        } elseif ($prefix == '.net') {
            $price = '$14.25';
        } else {
            $price = '$15';
        }
        // if cart is empty then this the first product
        if(!$cart) {
            $cart = [
                    $domain => [
                        "name" => $domain,
                        "quantity" => 1,
                        "price" => $price,
                    ]
            ];

            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }

        // if cart not empty then check if this product exist then increment quantity
        if(isset($cart[$domain])) {
            $cart[$id]['quantity']++;
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Product added to cart successfully!');

        }

        // if item not exist in cart then add to cart with quantity = 1
        $cart[$domain] = [
            "name" => $domain,
            "quantity" => 1,
            "price" => $price,
        ];

        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }
}
