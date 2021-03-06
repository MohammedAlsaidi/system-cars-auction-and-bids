@extends('admin.layouts.app')
@section('title')
    <title>role</title>
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
                        <li class="breadcrumb-item active"><a href="{{route('admin.roles')}}">Manage
                                role</a></li>
                        <li class="breadcrumb-item active">role Details</li>
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
                    <h5>role Details</h5>
                </div>
                <div class="col-md-9 text-right">
                    <a href="{{route('admin.role.edit', $role->id)}}" class="btn btn-primary"
                       style="margin-bottom: 10px">
                        <i class="fa fa-plus"></i>
                        Edit role
                    </a>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="row ">
                        <div class="col-md-6">
                           <pre><label for="name">Name (DisPlay Name):</label> {{$role->display_name}}</pre>
                            <pre><label for="Slug">Slug:</label> {{$role->name}}</pre>
                            <pre><label for="description">Description:</label> {{$role->description}}</pre>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <h2>Permissions:</h2>
                                    <ul>
                                        @foreach($role->permissions as $permission)
                                        <li>{{$permission->display_name}}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
