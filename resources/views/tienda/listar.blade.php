@extends('app')

@section('content')
<div class="container">
  <div class="grid-row">
    <div class="card-chart cardd">
      <div class="header-card_chart">
        <h1>Listado de Productos</h1>
        <div class="cardd tabla">
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr class="texto">
                  <th>ID</th>
                  <th>Nombre</th>
                  <th>Unidad</th>
                  <th>Precio</th>
                  <th>Categoria</th>
                  <th>Descripcion</th>
                  <th>Acciones</th>
                </tr>
              </thead>
              <tbody>
                @foreach($productos as $p)
                <tr class="texto">
                  <td>{{ $p->id }}</td>
                  <td>{{ $p->nom_pro }}</td>
                  <td>{{ $p->unidad }}</td>
                  <td>{{ $p->precio }}</td>
                  <td>{{ $p->cat->nom_cat }}</td>
                  <td>{{ $p->description }}</td>
                  <td>
                    <a href="{{ url('/editar/'.$p->id) }}" title="Editar">Editar</a>
                    <a href="{{ url('/eliminar/'.$p->id) }}" title="Eliminar">Eliminar</a>
                  </td>
                </tr>
                @endforeach
                
              </tbody>
              
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection