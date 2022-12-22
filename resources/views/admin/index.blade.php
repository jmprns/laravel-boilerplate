@extends('layouts.index')

@section('page-pretitle', 'System')
@section('page-title', 'Admin User')

@section('content')



<div class="row row-cards">
    <div class="col-7">
        @include('admin.dt')
    </div>
    <div class="col-5">
        @include('admin.create')
    </div>
</div>


@endsection

