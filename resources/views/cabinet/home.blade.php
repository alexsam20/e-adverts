@extends('layouts.app')

@section('breadcrumbs')
    {{ Breadcrumbs::render() }}
@endsection

@section('content')
    <div class="card">
        <div class="card-header">{{ __('Dashboard') }}</div>

        <div class="card-body">
            {{ __('You are logged in!') }}
        </div>
    </div>
@endsection
