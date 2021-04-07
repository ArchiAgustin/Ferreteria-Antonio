@extends('app')

@section('content')

        <div class="product-details ptb-100 pb-90">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-7 col-12">
                        <img id="imagenshowpro" src="{{ asset('imgs/herramientas.jpg') }}" alt="">              
                    </div>
                    <div class="col-md-12 col-lg-5 col-12">
                        <div class="product-details-content">
                            <h3>{{ $producto->nom_pro }}</h3>
                            <div class="rating-number">
                                <div class="quick-view-number">
                                    <span>{{ $producto->unidad }}</span>
                                </div>
                            </div>
                            <div class="details-price">
                                <span>{{ $producto->precio }}</span>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmol tempor incidid ut labore et dolore magna aliqua. Ut enim ad minim veni quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in</p>
                            <p>{{ $producto->description }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection