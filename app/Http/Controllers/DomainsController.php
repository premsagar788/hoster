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
