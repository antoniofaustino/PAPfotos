@section('sidebar')
@show
        <div class=" position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            {{-- <div class="content">
                <a class="links title m-b-md" style = "padding:20px;text-decoration:none;text-transform:uppercase;"href="{{url('/')}}">
                    Double Moments
                </a> --}}
<br>
           @if (session('status'))
                 <div class="alert alert-success">
                     {{ session('status') }}
                 </div>
            @endif

                <div style="text-align:right;" class="links">
                
                    <a href="{{url('/adicionarfoto')}}">Adicionar Foto</a>
              
                    <a href="{{url('/about')}}">About</a>
                    <a href="{{url('/people')}}">People</a>
                    <a href="{{url('/casamento')}}">Casamentos</a>
                    <a href="{{url('/batizado')}}">Batizados</a>
                    <a href="{{url('/event')}}">Events</a>
                    <a href="{{url('/contacto')}}">Contact</a>
                    <a style = "font-size: 30px;"href="{{url('/')}}"><img src="/photos/logo" height="150" width="150" style="border-radius: 50%;"></a>
                </div> 
   