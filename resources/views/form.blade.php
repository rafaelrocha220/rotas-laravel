<h1>Cadastrar</h1>

<form action="{{route('controller.store')}}" method="post">
    @csrf
    
    <input type="text" name="nome" id="nome">
    <button type="submit">Enviar</button>
</form>