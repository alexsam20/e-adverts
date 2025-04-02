@extends('layouts.app')

@section('breadcrumbs')
    <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('home')  }}">{{ __('Home') }}</a></li>
        <li class="breadcrumb-item active">{{ __('Cabinet') }}</li>
    </ul>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">{{ __('Dashboard') }}</div>

        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            {{ __('You are logged in!') }}
        </div>
    </div>
@endsection
