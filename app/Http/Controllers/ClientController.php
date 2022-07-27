<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function home()
    {
        return view('client.home');
    }
    public function contact()
    {
        return view('client.contact');
    }
    public function cart()
    {
        return view('client.cart');
    }
    public function checkout()
    {
        return view('client.checkout');
    }
    public function productList()
    {
        return view('client.productList');
    }
    public function productDetail()
    {
        return view('client.productDetail');
    }

}
