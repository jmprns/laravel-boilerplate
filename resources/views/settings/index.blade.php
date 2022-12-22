@extends('layouts.index')

@section('page-title', 'System')

@section('content')
    <div class="card">
        <div class="row g-0">

            <div class="col-3 d-none d-md-block border-end">
                <div class="card-body">
                    @include('settings.navigation')
                </div>
            </div>

            <div class="col d-flex flex-column">
                @switch($view)
                    @case('account_profile')
                        @include('settings.views.account')
                        @break
                    @default
                        @break
                @endswitch
            </div>
        </div>
    </div>
@endsection
