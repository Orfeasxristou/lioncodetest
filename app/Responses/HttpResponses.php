<?php

namespace App\Responses;


trait HttpResponses {
//Successfull response method
protected function success($data,$message=null, $code=200){

  return response()->json([

  	'status'=>'The request was successfull',
  	'message'=> $message,
  	'data'=> $data
  ], $code);

}
//Fail response method
protected function fail($data,$message=null, $code){

  return response()->json([

  	'status'=>'The request was failed',
  	'message'=> $message,
  	'data'=> $data
  ], $code);

}


}








?>