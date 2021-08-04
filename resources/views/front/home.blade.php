@extends('front.layouts.app')
@section('content')

<!-- Page Content -->
<!-- Banner Starts Here -->
<div class="banner header-text">
    <div class="owl-banner owl-carousel">
        <div class="banner-item-03">
            <div class="text-content ">
                <h2 >Buy Your <span class="text-danger">Car</span> Online</h2>
                <div class=" d-block mt-3">
                    <a  href="{{route('cars.index')}}" class="btn-lg btn-danger">Buy</a>
                    <span class="mx-3 text-white  font-weight-bold">OR</span>
                    <a href="{{route('sell.create')}} " class="btn-lg btn-dark ">Sell</a>
                </div>

            </div>
        </div>
        <div class="banner-item-02">
            <div class="text-content">
                <h4>Fugiat Aspernatur</h4>
                <h2>Laboriosam reprehenderit ducimus</h2>
            </div>
        </div>
        <div class="banner-item-03">
            <div class="text-content">
                <h4>Saepe Omnis</h4>
                <h2>Buy Your Car Online</h2>
            </div>
        </div>
    </div>
</div>
<!-- Banner Ends Here -->

{{--<div class="latest-products">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-md-12">--}}
{{--                <div class="section-heading">--}}
{{--                    <h2>Featured Cars</h2>--}}
{{--                    <a href="cars.html">view more <i class="fa fa-angle-right"></i></a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-4 col-md-6">--}}
{{--                <div class="product-item">--}}
{{--                    <a href="car-details.html"><img src="front/{{asset('/front/assets/images/product-1-370x270.jpg')}}" alt=""></a>--}}
{{--                    <div class="down-content">--}}
{{--                        <a href="car-details.html"><h4>Lorem ipsum dolor sit amet, consectetur</h4></a>--}}

{{--                        <h6><small><del> $11199.00</del></small> $11179.00</h6>--}}

{{--                        <p>190 hp &nbsp;/&nbsp; Petrol &nbsp;/&nbsp; 2008 &nbsp;/&nbsp; Used vehicle</p>--}}

{{--                        <small>--}}
{{--                            <strong title="Author"><i class="fa fa-dashboard"></i> 130 000km</strong> &nbsp;&nbsp;&nbsp;&nbsp;--}}
{{--                            <strong title="Author"><i class="fa fa-cube"></i> 1800cc</strong>&nbsp;&nbsp;&nbsp;&nbsp;--}}
{{--                            <strong title="Views"><i class="fa fa-cog"></i> Manual</strong>--}}
{{--                        </small>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="col-lg-4 col-md-6">--}}
{{--                <div class="product-item">--}}
{{--                    <a href="car-details.html"><img src="{{asset('/front/assets/images/product-2-370x270.jpg')}}" alt=""></a>--}}
{{--                    <div class="down-content">--}}
{{--                        <a href="car-details.html"><h4>Lorem ipsum dolor sit amet, consectetur</h4></a>--}}

{{--                        <h6><small><del> $11199.00</del></small> $11179.00</h6>--}}

{{--                        <p>190 hp &nbsp;/&nbsp; Petrol &nbsp;/&nbsp; 2008 &nbsp;/&nbsp; Used vehicle</p>--}}

{{--                        <small>--}}
{{--                            <strong title="Author"><i class="fa fa-dashboard"></i> 130 000km</strong> &nbsp;&nbsp;&nbsp;&nbsp;--}}
{{--                            <strong title="Author"><i class="fa fa-cube"></i> 1800cc</strong>&nbsp;&nbsp;&nbsp;&nbsp;--}}
{{--                            <strong title="Views"><i class="fa fa-cog"></i> Manual</strong>--}}
{{--                        </small>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="col-lg-4 col-md-6">--}}
{{--                <div class="product-item">--}}
{{--                    <a href="car-details.html"><img src="{{asset('/front/assets/images/product-3-370x270.jpg')}}" alt=""></a>--}}
{{--                    <div class="down-content">--}}
{{--                        <a href="car-details.html"><h4>Lorem ipsum dolor sit amet, consectetur</h4></a>--}}

{{--                        <h6><small><del> $11199.00</del></small> $11179.00</h6>--}}

{{--                        <p>190 hp &nbsp;/&nbsp; Petrol &nbsp;/&nbsp; 2008 &nbsp;/&nbsp; Used vehicle</p>--}}

{{--                        <small>--}}
{{--                            <strong title="Author"><i class="fa fa-dashboard"></i> 130 000km</strong> &nbsp;&nbsp;&nbsp;&nbsp;--}}
{{--                            <strong title="Author"><i class="fa fa-cube"></i> 1800cc</strong>&nbsp;&nbsp;&nbsp;&nbsp;--}}
{{--                            <strong title="Views"><i class="fa fa-cog"></i> Manual</strong>--}}
{{--                        </small>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="col-lg-4 col-md-6">--}}
{{--                <div class="product-item">--}}
{{--                    <a href="car-details.html"><img src="{{asset('/front/assets/images/product-4-370x270.jpg')}}" alt=""></a>--}}
{{--                    <div class="down-content">--}}
{{--                        <a href="car-details.html"><h4>Lorem ipsum dolor sit amet, consectetur</h4></a>--}}

{{--                        <h6><small><del> $11199.00</del></small> $11179.00</h6>--}}

{{--                        <p>190 hp &nbsp;/&nbsp; Petrol &nbsp;/&nbsp; 2008 &nbsp;/&nbsp; Used vehicle</p>--}}

{{--                        <small>--}}
{{--                            <strong title="Author"><i class="fa fa-dashboard"></i> 130 000km</strong> &nbsp;&nbsp;&nbsp;&nbsp;--}}
{{--                            <strong title="Author"><i class="fa fa-cube"></i> 1800cc</strong>&nbsp;&nbsp;&nbsp;&nbsp;--}}
{{--                            <strong title="Views"><i class="fa fa-cog"></i> Manual</strong>--}}
{{--                        </small>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="col-lg-4 col-md-6">--}}
{{--                <div class="product-item">--}}
{{--                    <a href="car-details.html"><img src="{{asset('/front/assets/images/product-5-370x270.jpg')}}" alt=""></a>--}}
{{--                    <div class="down-content">--}}
{{--                        <a href="car-details.html"><h4>Lorem ipsum dolor sit amet, consectetur</h4></a>--}}

{{--                        <h6><small><del> $11199.00</del></small> $11179.00</h6>--}}

{{--                        <p>190 hp &nbsp;/&nbsp; Petrol &nbsp;/&nbsp; 2008 &nbsp;/&nbsp; Used vehicle</p>--}}

{{--                        <small>--}}
{{--                            <strong title="Author"><i class="fa fa-dashboard"></i> 130 000km</strong> &nbsp;&nbsp;&nbsp;&nbsp;--}}
{{--                            <strong title="Author"><i class="fa fa-cube"></i> 1800cc</strong>&nbsp;&nbsp;&nbsp;&nbsp;--}}
{{--                            <strong title="Views"><i class="fa fa-cog"></i> Manual</strong>--}}
{{--                        </small>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="col-lg-4 col-md-6">--}}
{{--                <div class="product-item">--}}
{{--                    <a href="car-details.html"><img src="{{asset('/front/assets/images/product-6-370x270.jpg')}}" alt=""></a>--}}
{{--                    <div class="down-content">--}}
{{--                        <a href="car-details.html"><h4>Lorem ipsum dolor sit amet, consectetur</h4></a>--}}

{{--                        <h6><small><del> $11199.00</del></small> $11179.00</h6>--}}

{{--                        <p>190 hp &nbsp;/&nbsp; Petrol &nbsp;/&nbsp; 2008 &nbsp;/&nbsp; Used vehicle</p>--}}

{{--                        <small>--}}
{{--                            <strong title="Author"><i class="fa fa-dashboard"></i> 130 000km</strong> &nbsp;&nbsp;&nbsp;&nbsp;--}}
{{--                            <strong title="Author"><i class="fa fa-cube"></i> 1800cc</strong>&nbsp;&nbsp;&nbsp;&nbsp;--}}
{{--                            <strong title="Views"><i class="fa fa-cog"></i> Manual</strong>--}}
{{--                        </small>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}

<div class="best-features">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>About Us</h2>
                </div>
            </div>
            <div class="col-md-6">
                <div class="left-content">
                    <p>Lorem ipsum dolor sit amet, <a href="#">consectetur</a> adipisicing elit. Explicabo, esse consequatur alias repellat in excepturi inventore ad <a href="#">asperiores</a> tempora ipsa. Accusantium tenetur voluptate labore aperiam molestiae rerum excepturi minus in pariatur praesentium, corporis, aliquid dicta.</p>
                    <ul class="featured-list">
                        <li><a href="#">Lorem ipsum dolor sit amet</a></li>
                        <li><a href="#">Consectetur an adipisicing elit</a></li>
                        <li><a href="#">It aquecorporis nulla aspernatur</a></li>
                        <li><a href="#">Corporis, omnis doloremque</a></li>
                    </ul>
                    <a href="{{route('about_us')}}" class="filled-button">Read More</a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="right-image">
                    <img src="{{asset('/front/assets/images/about-1-570x350.jpg')}}" alt="">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="services" style="background-image: url({{asset('/front/assets/images/other-image-fullscren-1-1920x900.jpg')}});" >
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>Latest The Car Added</h2>

                    <a href="{{route('cars.index')}}">show more <i class="fa fa-angle-right"></i></a>
                </div>
            </div>

            @forelse(\App\Models\Car::orderBy('id','desc')->active()->take(3)->get() as $car)
            <div class="col-lg-4 col-md-6">
                <div class="service-item">
                    <a href="{{route('cars.show', $car->id)}}" class="services-item-image"><img src="{{@asset($car->images->first()->path)}}" class="img-fluid" alt=""></a>

                    <div class="down-content">
                        <h4><a href="{{route('cars.show', $car->id)}}">{{$car->name}}</a></h4>


                    </div>
                </div>
            </div>
                @empty

                @endforelse
        </div>
    </div>
</div>

<div class="happy-clients">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>Brands</h2>
                </div>
                <div class="col-md-12">
                    <div class="owl-clients owl-carousel text-center">
                        @forelse($brands as $brand)
                            <div class="service-item">
                                <div>
                                    <img src="{{asset($brand->photo)}}"  alt="" class="img-fluid">
                                    <a href="">
                                        {{$brand->name}}
                                    </a>

                                </div>
                            </div>
                        @empty
                            there is no image.
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
