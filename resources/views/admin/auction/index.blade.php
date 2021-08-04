@extends('admin.layouts.app')
@section('title')
    <title> Auction </title>
@endsection
@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="">Home</a></li>
                        <li class="breadcrumb-item active">View Auctions</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    @include('admin.layouts.includes.alerts.succsess')
    @include('admin.layouts.includes.alerts.erorrs')
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="row">
                <div class="col-md-3">
                    <h5>View Auctions</h5>
                </div>
                <div class="col-md-9 text-right">
                    <a href="{{route('auction.create')}}" class="btn btn-primary" style="margin-bottom: 10px">
                        <i class="fa fa-plus"></i>
                        Create Auction
                    </a>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <table class="table table table-hover text-nowrap">
                        <thead>
                        <tr>
                            <th>##</th>
                            <th>user</th>
                            <th>Name</th>
                            <th>Brand</th>
                            <th>Start</th>
                            <th>End</th>
                            <th>price</th>
                            <th>Transation</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($auctions as $auction)
                            <tr>
                                <td>{{$loop->index+1}}</td>
                                <td>{{@$auction->apply_auctions->last()->user->name}}</td>
                                <td>{{$auction->car->name}}</td>
                                <td>{{$auction->car->brand->name}}</td>
                                <td>{{$auction->start}}</td>
                                <td>{{$auction->end}}</td>
                                <td>{{$auction->apply_auctions->max('price')??0}}</td>
                                <td>

                                    <a class="btn btn-outline-danger btn-sm"
                                       href="{{route('auction.destroy',$auction)}}">
                                        <i class="fa fa-trash"> Delete </i>
                                    </a>

                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>


@endsection
