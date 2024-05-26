@extends('layouts.master')

@section('title')
    <title>{{ config('app.name', 'Healthection') }} | {{ $Title }}</title>
@endsection

@foreach($Patient as $PR)
    @section('section-head')
        <ol class="breadcrumb bg-primary text-white-all">
            <li class="breadcrumb-item">{{ __('Master') }}</li>
            <li class="breadcrumb-item">{{ __('Patient') }}</li>
            <li class="breadcrumb-item">{{ $PR->name }}</li>
            <li class="breadcrumb-item"><a href="{{ route('patient.show', $PR->id) }}">{{ __('Data') }}</a></li>
        </ol>
    @endsection

    @section('section-body')
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        
                    </div>

                    <div class="card-body">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">{{ __('Name') }}</label>
                            <div class="col-sm-9">
                                <input type="text" value="{{ $PR->name }}" class="form-control" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">{{ __('Email') }}</label>
                            <div class="col-sm-9">
                                <input type="text" value="{{ $PR->email }}" class="form-control" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">{{ __('Phone') }}</label>
                            <div class="col-sm-9">
                                <input type="text" value="{{ '+' . $PR->phone }}" class="form-control" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">{{ __('BPM') }}</label>
                            <div class="col-sm-9">
                                <input type="text" value="{{ $PR->bpm . ' BPM' }}" class="form-control" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">{{ __('Systolic') }}</label>
                            <div class="col-sm-9">
                                <input type="text" value="{{ $PR->systolic . 'mmHg' }}" class="form-control" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">{{ __('Diastolic') }}</label>
                            <div class="col-sm-9">
                                <input type="text" value="{{ $PR->diastolic . ' mmHg' }}" class="form-control" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">{{ __('Risk') }}</label>
                            <div class="col-sm-9">
                                <input type="text" value="{{ ($PR->risk / 1 * 100) . ' %' }}" class="form-control" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">{{ __('Status') }}</label>
                            <div class="col-sm-9">
                                <input type="text" value="{{ $PR->status }}" class="form-control" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">{{ __('Family History') }}</label>
                            <div class="col-sm-9">
                                <input type="text" value="{{ ($PR->family_history == '0') ? 'No' : 'Yes' }}" class="form-control" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">{{ __('History of Smoking') }}</label>
                            <div class="col-sm-9">
                                <input type="text" value="{{ ($PR->history_of_smoking == '0') ? 'No' : 'Yes' }}" class="form-control" readonly>
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table id="crudTensimeter" class="table table-striped w-100">
                                <thead>
                                    <tr>
                                        <th class="text-center">{{ __('No') }}</th>
                                        <th class="text-center">{{ __('Date') }}</th>
                                        <th class="text-center">{{ __('Time') }}</th>
                                        <th class="text-center">{{ __('BPM') }}</th>
                                        <th class="text-center">{{ __('Systolic') }}</th>
                                        <th class="text-center">{{ __('Diastolic') }}</th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection

    @push('scripts')
        <script>
            var datatable = $('#crudTensimeter').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('tensimeter.index', $PR->id) }}",
                columns: [
                    { data: 'no', name: 'no', render: function (data, type, row, meta) {
                            return meta.row + meta.settings._iDisplayStart + 1;
                    }, width: '5%', class: 'text-center' },
                    { data: 'date', name: 'date', class: 'text-center' },
                    { data: 'time', name: 'time', class: 'text-center' },
                    { data: 'bpm', name: 'bpm' },
                    { data: 'systolic', name: 'systolic' },
                    { data: 'diastolic', name: 'diastolic' },
                ]
            })
        </script>
    @endpush
@endforeach