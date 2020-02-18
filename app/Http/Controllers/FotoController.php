<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FotoController extends Controller
{
    public function casamentos()
    {
        return view('casamento.casamentos');
    }

    public function batizados()
    {
        return view('batizado.batizados');
    }

    public function events()
    {
        return view('event.events');
    }
    public function people()
    {
        return view('people.people');
    }
    public function adfoto()
    {
        return view('adfoto');
    }

    public function addfoto_create()
    {   
        return redirect('casamentos')->with('status', 'Profile updated!');
    }

}
