@extends('app')

@section('content')
<div class="container" >
    <div class="grid-row">
        <div class="card-chart cardd">
                <div class="header-card_chart">
                    <h1>Editar Producto</h1>
                    
                    {!! Form::open(['url' => '/actualizar/'.$p->id]) !!}
                <div class="row label-product">

                  <div class="col-md-3">
                    <label for="nombre" class="label-product">Nombre del producto:</label>
                    {{ Form::text('nombre', $p->nom_pro, ['class' => 'form-control']) }}
                  </div>

                  <div class="col-md-3">
                    <label for="categoria" class="label-product">Categoría:</label>
                    {!! Form::select('categoria', $categorias, $p->category_id, ['class' => 'custom-select']) !!}
                  </div>

                  <div class="col-md-3">
                    <label for="unidad" class="label-product">Stock:</label>
                    {{ Form::text('unidad', $p->unidad, ['class' => 'form-control']) }}
                  </div>

                </div>

                <div class="row label-product">
                  

                  <div class="col-md-3">
                    <label for="precio" class="label-product">Precio Actual:</label>
                    {!! Form::number('precio', $p->precio, ['class' => 'form-control', 'min' => '0.00', 'step' => 'any']) !!}
                  </div>

                </div>

                <div class="row">
                  <div class="col-md-12">
                    <label for="description" class="label-product">Descripción:</label>
                    {!! Form::textarea('description', $p->description, ['class' => 'form-control', 'id' => 'editor']) !!}
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-12">
                    {!! Form::submit('Guardar', ['class' => 'btn btn-success guardar']) !!}
                  </div>
                </div>

              {!! Form::close() !!}
                </div>
        </div>
    </div>
</div>
@endsection