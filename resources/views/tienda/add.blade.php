@extends('app')

@section('content')
<div class="container" >
    <div class="grid-row">
        <div class="card-chart cardd">
                <div class="header-card_chart">
                    <h1>Agregar Producto</h1>
                    
                    {!! Form::open(['url' => '/addproducto']) !!}
                    <div class="row label-product">

                        <div class="col-md-3">
                        <label for="nombre" class="label-product">Nombre del producto:</label>
                        {{ Form::text('nombre', null, ['class' => 'form-control']) }}
                        </div>

                        <div class="col-md-3">
                        <label for="categoria" class="label-product">Categoría:</label>
                        {!! Form::select('categoria', $categorias, null, ['class' => 'custom-select', 'placeholder' => 'Seleccionar']) !!}
                        </div>

                        <div class="col-md-3">
                        <label for="unidad" class="label-product">Unidad:</label>
                        {{ Form::text('unidad', null, ['class' => 'form-control']) }}
                        </div>

                        

                    </div>

                    <div class="row label-product">
                        

                        <div class="col-md-3">
                        <label for="precio" class="label-product">Precio:</label>
                        {!! Form::number('precio', null, ['class' => 'form-control', 'min' => '0.00', 'step' => 'any']) !!}
                        </div>

                        
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                        <label for="description" class="label-product">Descripción:</label>
                        {!! Form::textarea('description', null, ['class' => 'form-control', 'id' => 'editor']) !!}
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