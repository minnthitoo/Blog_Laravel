@extends('admin.layouts.main')

@section('title', 'Sports')

@section('search')
    <div class="navbar-search-block">
        <form class="form-inline" method="GET" action="{{ route('admin#home') }}">
            <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" name="key" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-navbar" type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection

@section('content')
    Sports
@endsection
