<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    public function index()
    {
        $data=[
            'title' => 'Contact',
            'email' => 'joyasaha@gmail.com',
        ];
        return view('contact', $data);
    }
}
