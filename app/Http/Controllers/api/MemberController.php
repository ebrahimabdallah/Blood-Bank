<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Member;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class MemberController extends Controller
{

    public function members()
    {
        $members = Member::all();
        return JsonResponse($members, 'successful', 200);
    }

  public function show($id)
  {
      $members = Member::find($id);
      if($members)
      {
            return JsonResponse(202,'Success',$members);
      }
      else 
      {
            return JsonResponse(404,'not exists data',null);
      }
    }
    public function store(Request $request)
    {
      $validator=Validator::make($request->all(),[
     
        'Name' => 'required',
        'experince'=>'required',
        'image' => 'required',
        'address' => 'required',
        'phone' => 'required|unique:members,phone',
      ]);
  
    if ($validator->fails()) {
        return JsonResponse(400, 'Validation failed', $validator->errors());
    }


    $members=Member::create($request->all());
      if($members)
        {
              return JsonResponse(202,'saved',$members);
        }
        else 
        {
              return JsonResponse(404,'not saved data',null);
        }
      }    
    }