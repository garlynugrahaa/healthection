@extends('layouts.master')

@section('title')
    <title>{{ config('app.name', 'Healthection') }} | {{ __('Dashboard') }}</title>
@endsection

@section('section-head')
    <ol class="breadcrumb bg-primary text-white-all">
        <li class="breadcrumb-item">{{ __('Master') }}</li>
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">{{ __('Dashboard') }}</a></li>
    </ol>
@endsection

@section('section-body')
    <div class="row">
        <div class="col-12 mb-4">
            <div class="hero bg-primary text-white">
                <div class="hero-inner">
                    <h2>Welcome Back, {{ Auth::user()->name }}!</h2>
                    <p class="lead">Hopefully always in good health.....</p>
                </div>
            </div>
        </div>
    </div>

    @hasrole('Patient')
        <div class="row">
            <div class="col-6 mb-4">
                <div class="hero bg-primary text-white">
                    <div class="hero-inner">
                        <h4>Contact</h2>
                        <div class="form-group row">
                            <p class="col-sm-3 col-form-label">Email</p>
                            <div class="col-sm-9">
                                <input type="text" value="{{ __('contact@healthection.com') }}" class="form-control" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <p class="col-sm-3 col-form-label">Phone</p>
                            <div class="col-sm-9">
                                <input type="text" value="{{ __('+62 813-1737-0974') }}" class="form-control" readonly>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endhasrole
@endsection