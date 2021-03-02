@extends('layouts.app')

@section('content')
<div class="container_home">
            <div class="card">
                <div class="card-header">{{ __('Welcome in BeautyBoB !') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{ __('Hi') }} {{ Auth::user()->firstname }} {{ __('you are now logged in !') }}<br>
                    {{ __('You can now buy one of our bob in the catalog.') }}
                </div>
            </div>
        </div>
@endsection
