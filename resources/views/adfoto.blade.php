


<h1> Adicionar Foto</h1>

<form action="{{route('casamentos.casamentos')}}" method="post">
    @csrf
    <input type="text" name="name" placeholder="Nome:">
    <input type="file" name="" id="">
    <button type="submit"> Enviar</button>
</form>
