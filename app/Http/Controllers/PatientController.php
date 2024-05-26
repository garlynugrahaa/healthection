<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePatientRequest;
use App\Models\Patient;
use App\Models\Tensimeter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;
use Yajra\DataTables\DataTables;

class PatientController extends Controller
{
    public function index()
    {
        if (request()->ajax()) {
            $Data = Patient::latest()->get();

            return DataTables::of($Data)->addIndexColumn()->editColumn('phone', function($item) {
                return '+' . $item->phone;
            })->editColumn('bpm', function($item) {
                return number_format($item->bpm, 2) . ' BPM';
            })->editColumn('systolic', function($item) {
                return number_format($item->systolic, 2) . ' mmHg';
            })->editColumn('diastolic', function($item) {
                return number_format($item->diastolic, 2) . ' mmHg';
            })->editColumn('risk', function($item) {
                return ($item->risk / 1 * 100) . ' %';
            })->addColumn('action', 'master.patient.action')->rawColumns(['action'])->make(true);
        }

        $Title = "Patient";

        return view('master.patient.index', compact('Title'));
    }

    public function create()
    {
        $Title = "Create Patient";

        return view('master.patient.create', compact('Title'));
    }

    public function store(StorePatientRequest $Request)
    {
        try {
            Patient::create([
                'name' => $Request->name,
                'place_of_birth' => $Request->place_of_birth,
                'date_of_birth' => $Request->date_of_birth,
                'family_history' => $Request->family_history,
                'history_of_smoking' => $Request->history_of_smoking,
                'email' => $Request->email,
                'phone' => $Request->phone,
                'password' => Hash::make($Request->password),
            ])->assignRole('Patient');

            Alert::success('Congrats', 'You\'ve Successfully Registered');
            return redirect()->route('patient.index');
        } catch (\Exception $Excep) {
            Alert::error('Error', $Excep->getMessage());
            return redirect()->route('patient.index');
        }
    }

    public function show(string $id)
    {
        // 
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        try {
            Patient::where('id', $id)->delete();

            Alert::success('Congrats', 'You\'ve Successfully Deleted');
            return redirect()->route('patient.index');
        } catch (\Exception $Excep) {
            Alert::error('Error', $Excep->getMessage());
            return redirect()->route('patient.index');
        }
    }
}
