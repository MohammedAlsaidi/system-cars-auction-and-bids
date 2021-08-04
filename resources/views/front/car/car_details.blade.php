@extends('front.layouts.app')
@section('content')
    <!-- Page Content -->
    <div class="page-heading about-heading header-text"
         style="background-image: url({{asset('/slidebar/Slide2.jpg')}});">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-content">
                        <h4>
                            <strong class="text-primary">{{ '$'.$car->price}}</strong></h4>
                        <h2>{{$car->name}}</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="products">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div>
                        <img src="{{asset($car->images->first()->path)}}" alt="" class="img-fluid wc-image">
                    </div>
                    <br>
                    <div class="row">
                        <input type="hidden" name="id" value="{{$car->id}}">
                        @forelse($car->images as $image)

                            @if(!$loop->first)
                                <div class="col-sm-4 col-6">
                                    <div>
                                        <span  data-toggle="modal" data-target="#exampleModalCenter{{$loop->index}}">
                                            <img src="{{asset($image->path)}}" alt="" class="img-fluid">
                                        </span>
                                    </div>
                                    <br>
                                </div>
                                <!-- Button trigger modal -->


                                <!-- Modal -->
                                <div class="modal fade w-100" id="exampleModalCenter{{$loop->index}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered w-75" role="document">

                                            <div class="">
                                                <img src="{{asset($image->path)}}" alt="" class=" w-100">

                                            </div>


                                    </div>
                                </div>
                            @endif
                        @empty
                            <p> there is no images</p>
                        @endforelse

                    </div>
                    <div class="container">

                        <div class="row">

                            @if(Session::has('success'))
                                <div class="alert alert-success col-12" role="alert">
                                    {{Session::get('success')}}
                                </div>
                            @endif
                            @if(Session::has('fail'))
                                <div class="alert alert-danger col-12" role="alert">
                                    {{Session::get('fail')}}
                                </div>
                            @endif

                            @if($car->hasAuction())

{{--    <span>Start Bid: {{$car->auction->apply_auctions->max('price')>= $car->price ? $car->auction->apply_auctions->max('price'):$car->price }}</span>--}}


                                <div class="col-md-9 col-12 d-flex justify-content-between align-items-center p-2 rounded text-white gap-2 bg-danger">
                                    <span>Time: {{\Carbon\Carbon::parse($car->auction->end)->toDateTimeString()}}</span>
                                    <span> Bid: {{$car->auction->apply_auctions->count() ?? 0}} </span>
                                    <span>High Bid: {{$car->auction->apply_auctions->max('price') ?? 0}}</span>

                                </div>
                                <div class="col-md-3">

                                    <!-- Button trigger modal -->
                                    @if(\Carbon\Carbon::parse($car->auction->end)->toDateTimeString() >now()->toDateTimeString())
                                        <button type="button" class="btn btn-dark btn btn-dark col-11 px-1 py-2"
                                                data-toggle="modal" data-target="#exampleModal">
                                            Place Bide
                                        </button>
                                    @else
                                        <button type="button" class=" btn btn-dark col-11 px-1 py-2">
                                            Time end
                                        </button>
                                    @endif

                                </div>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Enter your Bide</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form action="{{route('apply_auction.store',$car->auction)}}" method="post">
                                                @csrf
                                                <div class="modal-body">
                                                    <input type="number" name="price"
                                                           min="{{$car->auction->apply_auctions->max('price')>= $car->price ? $car->auction->apply_auctions->max('price')+1 :$car->price +1}}"
                                                           class="form-control">
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Close
                                                    </button>
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <form action="#" method="post" class="form">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <div class="clearfix">
                                    <span class="pull-left">Type</span>

                                    <strong class="pull-right">New</strong>
                                </div>
                            </li>

                            <li class="list-group-item">
                                <div class="clearfix">
                                    <span class="pull-left">production date</span>

                                    <strong class="pull-right">{{$car->manufactured}}</strong>
                                </div>
                            </li>

                            <li class="list-group-item">
                                <div class="clearfix">
                                    <span class="pull-left"> Model</span>

                                    <strong class="pull-right">{{$car->brand->name}}</strong>
                                </div>
                            </li>

                            <li class="list-group-item">
                                <div class="clearfix">
                                    <span class="pull-left">First registration</span>

                                    <strong class="pull-right">{{$car->registration_type}}</strong>
                                </div>
                            </li>

                            <li class="list-group-item">
                                <div class="clearfix">
                                    <span class="pull-left">Mileage</span>

                                    <strong class="pull-right">{{$car->current_mileage}}</strong>
                                </div>
                            </li>

                            <li class="list-group-item">
                                <div class="clearfix">
                                    <span class="pull-left">Fuel</span>

                                    <strong class="pull-right">{{$car->fuel_type}}</strong>
                                </div>
                            </li>

                            <li class="list-group-item">
                                <div class="clearfix">
                                    <span class="pull-left">Engine size</span>

                                    <strong class="pull-right">{{$car->engine_capacity}} cc</strong>
                                </div>
                            </li>


                            <li class="list-group-item">
                                <div class="clearfix">
                                    <span class="pull-left">Gearbox</span>

                                    <strong class="pull-right">{{$car->transmission}}</strong>
                                </div>
                            </li>

                            <li class="list-group-item">
                                <div class="clearfix">
                                    <span class="pull-left">Number of seats</span>

                                    <strong class="pull-right">{{$car->seat}}</strong>
                                </div>
                            </li>

                            <li class="list-group-item">
                                <div class="clearfix">
                                    <span class="pull-left">Doors</span>

                                    <strong class="pull-right">{{$car->doors}}</strong>
                                </div>
                            </li>


                            <li class="list-group-item">
                                <div class="clearfix">
                                    <span class="pull-left">Color</span>

                                    <strong class="pull-right">{{$car->color}}</strong>
                                </div>
                            </li>
                        </ul>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="section-heading">
                        <h2> Description</h2>
                    </div>

                    <div class="left-content">

                        <p>{!! $car->description !!}</p>
                    </div>
                </div>


            </div>
        </div>

    </div>

    <div class="happy-clients">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Check Result</h2>
                    </div>
                    <div class="col-md-12">
                        <div class="owl-clients owl-carousel text-center">
                            @if($car->images_checkups->count() > 0)

                            @forelse($car->images_checkups as $image)
                                <div class="service-item">
                                    <div>

                                        <a href="{{asset($image->path)}}" data-lity>
                                            <img src="{{asset($image->path)}}" alt="" class="img-fluid">
                                        </a>
                                    </div>
                                </div>
                            @empty
                                there is no image.
                            @endforelse
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>

        .checked {
            color: orange;
        }
    </style>


    @if($car->checkup != null)
        <div class="section-heading">
            <div class="">
                <table class="m-auto " width="500px">
                    <tr>
                        <th class="h3 h2-md" style="color: #e9322d">External</th>
                        <td class="h3 h2-md">:</td>
                        <td class="h3 h2-md"> @for($i=0;$i< $car->checkup->external;$i++)
                                <span class="fa fa-star checked "></span>
                            @endfor
                            @for($i=0;$i< 5 - $car->checkup->external;$i++)
                                <span class="fa fa-star "></span>
                            @endfor</td>

                    </tr>
                    <tr>
                        <td colspan="3" class="py-2"><h5>{{$car->checkup->external_description}}</h5></td>
                    </tr>
                    <tr>
                        <th class="h3 h2-md" style="color: #e9322d">Wheels</th>
                        <td class="h3 h2-md">:</td>
                        <td class="h3 h2-md">@for($i=0;$i< $car->checkup->wheels;$i++)
                                <span class="fa fa-star checked"></span>
                            @endfor
                            @for($i=0;$i< 5 - $car->checkup->wheels;$i++)
                                <span class="fa fa-star "></span>
                            @endfor</td>
                    </tr>
                    <tr>
                        <td colspan="3" class="py-2"><h5>{{$car->checkup->wheels_description}}</h5></td>
                    </tr>
                    <tr>
                        <th class="h3 h2-md" style="color: #e9322d">Engine</th>
                        <td class="h3 h2-md">:</td>
                        <td class="h3 h2-md">@for($i=0;$i< $car->checkup->engine;$i++)
                                <span class="fa fa-star checked"></span>
                            @endfor
                            @for($i=0;$i< 5 - $car->checkup->engine;$i++)
                                <span class="fa fa-star "></span>
                            @endfor</td>
                    </tr>
                    <tr>
                        <td colspan="3" class="py-2"><h5>{{$car->checkup->engine_description}}</h5></td>
                    </tr>
                    <tr>
                        <th class="h3 h2-md" style="color: #e9322d">Internal</th>
                        <td class="h3 h2-md">:</td>
                        <td class="h3 h2-md"> @for($i=0;$i< $car->checkup->internal;$i++)
                                <span class="fa fa-star checked"></span>
                            @endfor
                            @for($i=0;$i< 5 - $car->checkup->internal;$i++)
                                <span class="fa fa-star "></span>
                            @endfor</td>
                    </tr>
                    <tr>
                        <td colspan="3" class="py-2"><h5>{{$car->checkup->internal_description}}</h5></td>
                    </tr>
                </table>
            </div>
        </div>
        </div>
    @endif

@endsection
