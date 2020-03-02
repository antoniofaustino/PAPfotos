@extends('menu.html')
@extends('menu.menu')
@section('content')

           @foreach ($files as $file)
        {{-- <p><img src="{{$file}}"/></p> --}}
         {{-- <img data-src= "{{Storage::get('public/casamentos/', $file) }}" alt="Card image cap">
        <img src="{{ src('file',$file->$files) }}" alt="" title=""> --}}
        {{-- <img src={{URL::asset('casamentos/',$file)}}/> --}}
        {{-- <img src ="{{ Image::make('image','image')->disk('public')->path($file)}}"/> --}}
        {{-- <img src= {{url('casamentos/1ku6RKwAmFEQ0Dh367TfEbkaeGUTLWn7N5LVVqkQ.png')}}/> --}}
        <img src="{{ url( $file)}}" />
    
    @endforeach
@endsection