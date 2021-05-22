<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GreenController extends Controller
{
    public function sendEmail(Request $request){
        $rules =[
            'name'=>'required',
            "email"=>"required|email|string",
            "phone"=>'required|min:10|max:12',
            'subject'=>'min:10|max:120',
            "msg"=>'min:10|max:300'
        ];

        $niceNames = [
            'name'=>'nom',
            'email'=>'email adress',
            'phone'=>'telephone',
            'subject'=>'sujet',
            'msg'=>'message'
        ];

        $data = $this->validate($request,$rules,[],$niceNames);

    }
}
