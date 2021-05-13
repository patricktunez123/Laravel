<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomersController extends Controller
{
    // customers list
    public function list(){ 
        $customers = [
        'Joa danna',
        'John',
        'Kessy',
    ];

    return view('internals.customers', [
        'customers' => $customers
    ]);
    }
}
