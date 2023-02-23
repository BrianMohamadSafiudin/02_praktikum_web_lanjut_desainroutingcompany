<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return redirect('https://www.educastudio.com/contact-us');
    }

    public function form()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        echo '<h3>Nama   : ' . $request->nama . '<br></h3>';
        echo '<h3>Email  : ' . $request->email . '<br></h3>';
        echo '<h3>Pesan  : ' . $request->pesan . '<br></h3>';
    }
}
