@extends('menu.html')
@extends('menu.menu')
@section('content')


<h1> Adicionar Foto</h1>


<div class="container">
       
       @if (count($errors) > 0)
      <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
      @endif

        @if(session('success'))
        <div class="alert alert-success">
          {{ session('success') }}
        </div> 
        @endif


    <h3 class="jumbotron">Laravel Multiple File Upload</h3>
<form method="POST" action="{{url('/adicionarfoto')}}" enctype="multipart/form-data">
  {{csrf_field()}}
<select name="opcoes">
<option>Escolhe alguma</option>
<option value="casamentos">Casamento</option>
<option value="batizados">Batizado</option>
<option value="events">Event</option>
<option value="people">People</option>
</select>
        {{-- <div class="input-group control-group increment" > --}}
          <input type="file" name="photo" class="form-control"/>
          {{-- <div class="input-group-btn"> 
            <button class="btn btn-success" type="button"><i class="glyphicon glyphicon-plus"></i>Add</button>
          </div> --}}
        {{-- </div> --}}

        <button type="submit" class="btn btn-primary" style="margin-top:10px">Submit</button>

  </form>        
  </div>
  <script type="text/javascript">

    $(document).ready(function() {

      $(".btn-success").click(function(){ 
          var html = $(".clone").html();
          $(".increment").after(html);
      });

      $("body").on("click",".btn-danger",function(){ 
          $(this).parents(".control-group").remove();
      });

    });

</script>
@endsection