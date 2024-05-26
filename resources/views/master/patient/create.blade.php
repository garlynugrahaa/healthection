@extends('layouts.master')

@section('title')
    <title>{{ config('app.name', 'Healthection') }} | {{ $Title }}</title>
@endsection

@section('section-head')
    <ol class="breadcrumb bg-primary text-white-all">
        <li class="breadcrumb-item">{{ __('Master') }}</li>
        <li class="breadcrumb-item">{{ __('Patient') }}</li>
        <li class="breadcrumb-item"><a href="{{ route('patient.create') }}">{{ __('Create') }}</a></li>
    </ol>
@endsection

@section('section-body')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    
                </div>
                <form action="{{ route('patient.store') }}" method="post">
                    @csrf

                    <div class="card-body">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">{{ __('Name*') }}</label>
                            <div class="col-sm-9">
                                <input type="text" value="{{ old('name') }}" id="name" name="name" class="form-control" placeholder="Example : Finna Elfiana Nabilah">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">{{ __('Place of Birth*') }}</label>
                            <div class="col-sm-9">
                                <input type="text" value="{{ old('place_of_birth') }}" id="place_of_birth" name="place_of_birth" class="form-control" placeholder="Example : Bandung">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label font-weight-bold">{{ __('Date of Birth*') }}</label>
                            <div class="col-sm-9">
                                <input type="date" value="{{ old('date_of_birth') }}" id="date_of_birth" name="date_of_birth" class="form-control">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">{{ __('Is there a family history?*') }}</label>
                            <div class="col-sm-9">
                                <select id="family_history" name="family_history" class="form-control select2">
                                    <option value="0">{{ __('No') }}</option>
                                    <option value="1">{{ __('Yes') }}</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">{{ __('Is there a history of smoking??*') }}</label>
                            <div class="col-sm-9">
                                <select id="history_of_smoking" name="history_of_smoking" class="form-control select2">
                                    <option value="0">{{ __('No') }}</option>
                                    <option value="1">{{ __('Yes') }}</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">{{ __('Email*') }}</label>
                            <div class="col-sm-9">
                                <input type="email" value="{{ old('email') }}" id="email" name="email" class="form-control" required="" placeholder="Example : finna@healthection.com">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">{{ __('Phone Number*') }}</label>
                            <div class="col-sm-9">
                                <input type="text" value="{{ old('phone') }}" id="phone" name="phone" class="form-control" required="" placeholder="Example : 62895326618726">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">{{ __('Kata Sandi*') }}</label>
                            <div class="col-sm-9">
                                <div class="input-group">
                                    <input type="password" id="password" name="password" class="form-control pwstrength" data-indicator="pwindicator" placeholder="Example : bW{hYgKMP3aV@ByZ">
                                </div>
                                <div id="pwindicator" class="pwindicator">
                                    <div class="bar"></div>
                                    <div class="label"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <a href="{{ route('patient.index') }}" class="btn btn-warning">{{ __('Back') }}</a>
                        <button type="reset" class="btn btn-danger">{{ __('Reset') }}</button>
                        <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
