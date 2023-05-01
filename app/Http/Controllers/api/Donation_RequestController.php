<?php

namespace App\Http\Controllers\api;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\Models\Donation_Request;
use Illuminate\Http\Request;

class Donation_RequestController extends Controller
{
    public function donation()
    {
        $donation=Donation_Request::all();
        return response()->json($donation);
    }


public function show($id)
  {
      $Donation_Request = Donation_Request::find($id);
      if($Donation_Request)
      {
            return JsonResponse(202,'Success',$Donation_Request);
      }
      else 
      {
            return JsonResponse(404,'not exists data',null);
      }
    }

  public function store(Request $request)
    {

        $rules = $this ->getRules();
    $Messages=$this ->getMessageError();
    $validator = Validator::make($request->all(),$rules,$Messages);

    if ($validator->fails()) {
        return JsonResponse(400, 'Validation failed', $validator->errors());
    }


      $Donation_Request=Donation_Request::create($request->all());
      if($Donation_Request)
        {
              return JsonResponse(202,'saved',$Donation_Request);
        }
        else 
        {
              return JsonResponse(404,'not saved data',null);
        }
      }

      
      public function getRules()
      {
        return $rules=[
      'patient_name' => 'required|string|max:50',
      'email' => 'required|email|max:255',
      'bages_num' => 'required|numeric',
      'patients_phone' => 'required|numeric|unique:donation_request,patients_phone', 
      'bloode_type' => 'required',
      'hospital_name' => 'required|string',
      'patient_age' => 'required|numeric',
      'address' => 'required|string|max:255',
          ];
      }

      public function getMessageError()
      {
        return $Messages=[
          'patient_name.required' => 'Please enter your name.',
          'bages_num.required' => 'Please enter your blood type.',
          'address.required' => 'Please enter your address.',
          'patients_phone.required' => 'Please enter your phone number.',
          'email.required' => 'Please enter your email address.',
          'bloode_type' => 'Please select a valid blood type.', 
          'hospital_name.required' => 'Please enter the hospital name.',
          'patient_age.required' => 'Please enter your age.',
          'email.required' => 'Please enter your email address.',
      
        ];
      }

    }