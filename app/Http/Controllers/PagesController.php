<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function cliente()
    {
        return view('pages.cliente');
    }

    public function servicos()
    {
        return view('pages.servicos');
    }

    public function faleconosco()
    {
        return view('pages.faleconosco');
    }
}
