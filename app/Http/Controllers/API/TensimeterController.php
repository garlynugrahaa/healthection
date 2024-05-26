<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\TensimeterResource;
use App\Models\Patient;
use App\Models\Tensimeter;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TensimeterController extends Controller
{
    public function store(Request $Request)
    {
        try {
            $Validator = Validator::make($Request->all(), [
                'user_id' => 'required',
                'bpm'   => 'required',
                'systolic'   => 'required',
                'diastolic'   => 'required',
            ]);
    

            if ($Validator->fails()) {
                return response()->json($Validator->errors(), 422);
            }

            $Patient = Patient::where('id', $Request->user_id)->get()->first();

            if ($Patient != NULL) {
                $Tensimeter = Tensimeter::create([
                    'user_id' => $Patient->id,
                    'bpm' => $Request->bpm,
                    'systolic' => $Request->systolic,
                    'diastolic' => $Request->diastolic,
                ]);
    
                $Data = Tensimeter::all();
    
                $AverageBPM = $Data->avg('bpm');
                $AverageSystolic = $Data->avg('systolic');
                $AverageDiastolic = $Data->avg('diastolic');
    
                $Patient->update([
                    'bpm' => number_format($AverageBPM, 2),
                    'systolic' => number_format($AverageSystolic, 2),
                    'diastolic' => number_format($AverageDiastolic, 2),  
                ]);
            }

            return new TensimeterResource(true, 'You\'ve Successfully Registered', $Tensimeter);
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}
