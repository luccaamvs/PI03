<h1>Esta é a pagina que retorna as categorias</h1>

@foreach($categories as $category)
    <li>{{ $category }}</li>
@endforeach