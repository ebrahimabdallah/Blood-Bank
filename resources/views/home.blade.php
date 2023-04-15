@extends('layouts.app')
{{-- @include('layouts.navbar')
@include('layouts.cssNavbar') --}}

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Go To Page Home .....') }}
                    <li><a  class="link1 active" href="{{Url('Main')}}">Home</a></li>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
