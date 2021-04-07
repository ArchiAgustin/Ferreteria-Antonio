@extends('app')

@section('content')

<!-- banner area start -->
<div class="banner-area pt-120 pb-110">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="book-banner-wrapper mr-20">
                        <img src="{{ asset('imgs/img-productos.jpg') }}" alt="">
                        <div class="banner-book-style1">
                            <h3>Big Sell For <br>December</h3>
                            <h2>50% OFF</h2>
                            <a class="banner-book-style-btn" href="product-details.html">Buy Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="book-banner-wrapper mr-20">
                        <img src="{{ asset('imgs/img-productos.jpg') }}" alt="">
                        <div class="banner-book-style1">
                            <h3>Big Sell For <br>December</h3>
                            <h2>50% OFF</h2>
                            <a class="banner-book-style-btn" href="product-details.html">Buy Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- banner area end -->

<div class="best-product-area pb-15">
        <div class="pl-100 pr-100">
            <div class="container-fluid">
                <div class="section-title-3 text-center mb-40">
                    <h2>Best Products</h2>
                </div>
                <div class="best-product-style">
                    <div class="tab-content">
                        <div class="tab-pane active show fade" id="home6" role="tabpanel">
                            <div class="custom-row">
                            @foreach($productos as $producto)
                                <div class="custom-col-5 custom-col-style mb-95">
                                    <div class="product-wrapper">
                                        <div class="product-img-2">
                                            <a href="{{url('/tienda/'.$producto->id.'')}}">
                                                <img src="{{ asset('imgs/herramientas.jpg') }}" alt="">
                                            </a>
                                        </div>
                                        <div class="product-content-2 text-center">
                                            <h4><a href="{{url('/tienda/'.$producto->id.'')}}">{{ $producto->nom_pro }}</a></h4>
                                            <span>{{ $producto->precio }}</span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection