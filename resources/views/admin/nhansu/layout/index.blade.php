@extends('admin.layout.index')

@section('data')
    <div class="app-title">
        <div>
            <h1><i class="fas fa-users-cog mr-1"></i>Quản lý nhân sự</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item">Quản lý nhân sự</li>
            @yield('title')
        </ul>
    </div>
    @yield('getData')
@endsection