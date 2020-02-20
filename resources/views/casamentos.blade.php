
@extends('menu.html')
@extends('menu.menu')

@section('content')



            @foreach ($files as $file)
                <p>This is file {{ $file }}</p>
            @endforeach
@endsection
                
