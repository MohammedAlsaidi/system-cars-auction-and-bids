@extends('front.layouts.app')
@section('content')
    <div class="latest-products">
        <div class="container">
            <nav class="navbar navbar-light  justify-content-between align-items-center rounded  " style="background-color:#1e1e1e;">
                <a class="navbar-brand text-light  py-2 mt-1">Cars auction && bids</a>
                <form class="form-inline" action="{{route('cars.index')}}" method="get">
                  @csrf
                    <input class="form-control mr-sm-2" type="search" name="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Search</button>
                </form>
            </nav>
            <br>


            @if(isset($details))

                <?php $my_cars = $details  ?>

            @else

                <?php $my_cars = $cars  ?>


            @endif


            <div class="row">

                @foreach($my_cars as $car)
                <div class="col-lg-4 col-md-6 ">

                    <div class="product-item ">
                        <a href="{{route('cars.show',$car)}}"><img src="{{asset(@$car->images->first()->path )}}" alt="لا يوجد صورة"></a>
                        @if($car->hasAuction())
                            @if(\Carbon\Carbon::parse($car->auction->end)->toDateTimeString() > now()->toDateTimeString())

                        <div class="col-md-12 col-12 col-sm-12 d-flex justify-content-between align-items-center p-1 rounded text-white bg-danger">
                            <span>Time End: {{\Carbon\Carbon::parse($car->auction->end)->toDateTimeString()}}</span>

                        </div>

                                @endif

                            @endif


                           @if($car->hasAuction())

                                <div class="down-content">
                                    <a href="{{route('cars.show',$car)}}"><h3>{{$car->brand->name}}</h3></a>
                                    <a href="{{route('cars.show',$car)}}"><h4>{{$car->name}}</h4></a>


                                    @if(\Carbon\Carbon::parse($car->auction->end)->toDateTimeString() >  now()->toDateTimeString())
                                        {{ 'Run Aucation' }}
                                    @else
                                        <h6 class="bg-dark text-white rounded py-1 px-2 col-md-12"> the car sold for $ {{$car->auction->apply_auctions->max('price')>= $car->price ? $car->auction->apply_auctions->max('price') : $car->price }} </h6>

                                    @endif


                                    <p>{{$car->power_horse}} hp &nbsp;/&nbsp; {{$car->fuel_type}} &nbsp;/&nbsp; {{$car->manufactured}} &nbsp;</p>

                                    <small>
                                        <strong title="Author"><i class="fa fa-dashboard"></i> {{$car->current_mileage}}</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                                        <strong title="Author"><i class="fa fa-cube"></i> {{$car->engine_capacity}}cc</strong>&nbsp;&nbsp;&nbsp;&nbsp;
                                        <strong title="Views"><i class="fa fa-cog"></i> {{$car->transmission}}</strong>
                                    </small>
                                </div>
                        @else

                            <div class="down-content">
                                <a href="{{route('cars.show',$car)}}"><h3>{{$car->brand->name}}</h3></a>
                                <a href="{{route('cars.show',$car)}}"><h4>{{$car->name}}</h4></a>
                                <h6>{{ 'Auction will start soon'.'$'.$car->price}}</h6>

                                <p>{{$car->power_horse}}hp &nbsp;/&nbsp; {{$car->fuel_type}} &nbsp;/&nbsp; {{$car->manufactured}} &nbsp; </p>

                                <small>
                                    <strong title="Author"><i class="fa fa-dashboard"></i> {{$car->current_mileage}}</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                                    <strong title="Author"><i class="fa fa-cube"></i> {{$car->engine_capacity}}cc</strong>&nbsp;&nbsp;&nbsp;&nbsp;
                                    <strong title="Views"><i class="fa fa-cog"></i> {{$car->transmission}}</strong>
                                </small>
                            </div>
                            @endif

                    </div>

                </div>
                @endforeach



                </div>
            </div>
        </div>
    </div>
@endsection
