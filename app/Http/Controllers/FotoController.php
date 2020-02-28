<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\View;
use Illuminate\Http\File;
use Illuminate\Http\Request;
use Http\Provider\adicionarfoto;

class FotoController extends Controller
{
    public function casamentos()
    {
        $files = Storage::disk('local')->files('Casamentos');
        // $this->validate($request, [
        //     'image' => 'required|mimes:jpg,png,jpeg|max:50' //max size allowed will be 50kb
        // ]);
        return view('casamentos')->with('files', $files);
        // return view('casamento.casamentos');
    }

    public function batizados()
    {
        $files = Storage::disk('local')->files('Batizados');
        return view('batizados')->with('files', $files);
    }

    public function events()
    {
        $files = Storage::disk('local')->files('events');
        return view('events')->with('files', $files);
    }

    public function people()
    {
        $files = Storage::disk('local')->files('People');
        return view('people')->with('files', $files);
    }

    public function fotos()
    {
        return view('adfoto');
    }

    public function addfoto(Request $request)
    {
        if($request->hasFile('photo')){
        $file = $request->file('photo');
        $file_dir = ($request->opcoes ? $request->opcoes : 'public');
        // $filename = Storage::disk('local')->put($file_dir, $file);
        $files = Storage::disk('public')->put($file_dir, $file);
        $files = Storage::disk('public')->files('casamentos');
        return view($request->opcoes)->with('files', $files);
        } else{
            return view('adfoto');
        }
    }

    public function getPhotoCasamentos(Request $request)
    {
        $files = Storage::disk('public')->files('casamentos');
        // $images = [$files];
        foreach ($files as $file){
            // $images.array_push(Storage::download($file));
            Storage::url($file);

        }

        return view('casamentos')->with('files', $files);
    }

    public function getPhotoBatizados(Request $request)
    {
        $files = Storage::disk('public')->files('batizados');
        // $images = [$files];
        foreach ($files as $file){
            // $images.array_push(Storage::download($file));
            Storage::url($file);

        }
        var_dump($files);

        return view('batizados')->with('files', $files);
    
    }

    public function getPhotoPeople(Request $request)
    {
        $files = Storage::disk('public')->files('people');
        // $images = [$files];
        foreach ($files as $file){
            // $images.array_push(Storage::download($file));
            Storage::url($file);

        }
        var_dump($files);

        return view('people')->with('files', $files);
    }

    public function getPhotoEvent(Request $request)
    {
        $files = Storage::disk('public')->files('events');
        // $images = [$files];
        foreach ($files as $file){
            // $images.array_push(Storage::download($file));
            Storage::url($file);

        }
        var_dump($files);

        return view('events')->with('files', $files);
    }
    
    

}
