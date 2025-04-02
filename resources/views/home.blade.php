@extends('layouts.app')

@section('breadcrumbs', '')

@section('content')
    <div class="card">
        <div class="card-header">{{ __('Hello') }}</div>

        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            {{ __('Your site') }}
        </div>
    </div>
@endsection
