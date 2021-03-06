@extends('admin.layouts.app')
@section('title')
    <title>Brands</title>
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
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                        <li class="breadcrumb-item active">Brands</li>
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
                    <h5>Brand View</h5>
                </div>
                <div class="col-md-9 text-right">
                    <a href="{{route('admin.brand.create')}}" class="btn btn-primary" style="margin-bottom: 10px">
                        <i class="fa fa-plus"></i>
                        Create New Brand
                    </a>
                </div>
            </div>
            <br>
            <div class="card">
                <div class="card-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>##</th>
                            <th>Photo</th>
                            <th>Name</th>
                            <th>Status</th>
                            <th>Transation</th>
                        </tr>
                        </thead>
                        <tbody>

                        @isset($brands)
                            @foreach($brands as $brand)
                                <tr>
                                    <td>{{$loop->index +1}}</td>
                                    <td>
                                        <img style="width:100px; high:100px;" class="rounded-circle"
                                             src="{{asset($brand->photo)}}">
                                    </td>
                                    <td>{{$brand->name}}</td>
                                    <td>
                                        @if($brand->getActive() == 'active')
                                            <i class="fa fa-check-circle" style="color:green"></i>
                                        @else
                                            <i class="fa fa-window-close" style="color:red"></i>
                                        @endif
                                    </td>

                                    <td>

                                        <a class="btn btn-warning btn-sm"
                                           href="{{route('admin.brand.edit', $brand->id)}}">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        @if(auth()->user()->hasRole(['superadministrator','administrator']))
                                            <a class="btn btn-danger btn-sm"
                                               href="{{route('admin.brand.delete', $brand->id)}}">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        @endif
                                    </td>

                                </tr>
                            @endforeach
                        @endisset
                        </tbody>
                    </table>
                    <br>
                    <div class="row">
                        <div class="col-md-3">
                            Showing {{$brands->count() }}
                            to {{($brands->currentPage() -1 ) * $brands->perPage() + count($brands)}} of {{$brands->total()}}
                            entries
                        </div>
                        <div class="row col-md-9 d-flex justify-content-end">
                            {{$brands->render()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
