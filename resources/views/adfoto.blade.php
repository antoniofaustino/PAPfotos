@extends('menu.html')
@extends('menu.menu')
@section('content')


<h1> Adiciona Fotos</h1>
<br>
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


    
<form method="POST" action="{{url('/adicionarfoto')}}" enctype="multipart/form-data">
  {{csrf_field()}}
<select name="opcoes" class="custom-select" >
<option selected>Escolhe o tipo de fotos</option>
<option value="casamentos">Casamento</option>
<option value="batizados">Batizado</option>
<option value="events">Event</option>
<option value="people">People</option>
</select>
<br>
<br>
        {{-- <div class="input-group control-group increment" > --}}
        <div class="custom-file">
          <input type="file" class="custom-file-input"  name="photo" id="inputGroupFile01">
            <label class="custom-file-label" for="inputGroupFile01">Escolhe o ficheiro</label>
        </div>
          {{-- <input type="file" name="photo" class="form-control"/>
          {{-- <div class="input-group-btn">  --}}
  
        {{-- </div> --}}
<br>
<br>
        <h3 style="text-align:left;">Descrição</h3>
        <input type="text" name="description"class="form-control"/>

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