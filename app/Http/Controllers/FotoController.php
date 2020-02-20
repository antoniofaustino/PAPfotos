<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\View;

use Illuminate\Http\File;


use Illuminate\Http\Request;

class FotoController extends Controller
{
    public function casamentos()
    {
        $files = Storage::disk('local')->files('Casamentos');
        return view('casamento.casamentos')->with('files', $files);
        // return view('casamento.casamentos');
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
    public function fotos()
    {
        return view('adfoto');
    }
    public function addfoto(Request $request)
    {
        $file = $request->file('photo');
        $file_dir = ($request->opcoes ? $request->opcoes : 'public');
        $filename = Storage::disk('local')->put($file_dir, $file);
        return view('adfoto');
    }

    public function getPhotoCasamentos(Request $request)
    {
        $files = Storage::disk('local')->files('Casamentos');
        return View::make('casamentos', $files);
    }
    // public function addfoto(Request $request) 
    // {
    //     $id
    // }
    

}
