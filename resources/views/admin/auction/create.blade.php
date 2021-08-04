@extends('admin.layouts.app')
@section('title')
    <title>Create Auction </title>
@endsection
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-1">
                <div class="col-sm-6">
                    <h1 class="m-0">Auctions</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="">Home</a></li>
                        <li class="breadcrumb-item"><a href="">auction</a></li>
                        <li class="breadcrumb-item active">Create auction</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="row">
                <div class="col-md-3">
                    <h5>Create Auction <i></i></h5>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{route('auction.store')}}" method="POST">
                        @csrf
                        <div class="row mx-2 ">
                            <div class="">
                                <label for="meeting-time">Start Auction </label>
                                <input class="form-control" type="datetime-local" id="meeting-time"
                                       name="start" value=""
                                       min="2018-06-07T00:00" max="">
                            </div>
                            <div class="mx-2">
                                <label for="meeting-time ">end Auction </label>
                                <input class="form-control" type="datetime-local" id="meeting-time"
                                       name="end" value=""
                                       min="2018-06-07T00:00" max="">
                            </div>
                            <div class="form-group">
                                <label>Select Car</label>
                                <select name="car_id" id="car"
                                        class="form-control select2bs4 select2-hidden-accessible"
                                        style="width: 100%;" data-select2-id="17"
                                        tabindex="-1" aria-hidden="true">
                                    <option value=" " selected disabled>Please Select Car</option>
                                    @foreach(\App\Models\Car::all() as $car)
                                        <option value="{{$car->id}}" @if($car->hasAuction()) disabled @endif >{{$car->name}}</option>
                                    @endforeach
                                </select>

                            </div>
                            <div class="form-group  p-3 my-3">
                                <button class="btn btn-success">Create Auction</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

@endsection

