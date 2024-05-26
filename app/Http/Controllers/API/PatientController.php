<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\PatientResource;
use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PatientController extends Controller
{
    public function show(Patient $Patient)
    {
        try {
            return new PatientResource(true, 'You\'ve Successfully Received', $Patient);
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    public function update(Request $Request, Patient $Patient)
    {
        try {
            $Validator = Validator::make($Request->all(), [
                'risk'   => 'required',
            ]);
    
            if ($Validator->fails()) {
                return response()->json($Validator->errors(), 422);
            }
    
            if ($Request->risk >= '0' && $Request->risk < '0.5') {
                $Patient->update([
                    'risk' => $Request->risk,
                    'status' => 'Normal'
                ]);
            } else if ($Request->risk >= '0.5' && $Request->risk < '1') {
                $Patient->update([
                    'risk' => $Request->risk,
                    'status' => 'Currently'
                ]);
            } else if ($Request->risk >= '1') {
                $Patient->update([
                    'risk' => $Request->risk,
                    'status' => 'Tall'
                ]);
            }
    
            return new PatientResource(true, 'You\'ve Successfully Updated', $Patient);
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}
