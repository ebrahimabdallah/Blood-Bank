<?php

use Illuminate\Http\JsonResponse;
function  JsonResponse($status,$massage,$data=null)
{
    $response = [
        'status'=>$status,
        'massage'=>$massage,
        'data'=>$data
    ];
    return response()->json($response);

}


