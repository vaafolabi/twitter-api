<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TwitterController extends Controller
{
    public function index($name)
    {
        $result = \Twitter::get('users/show',['screen_name'=>$name]);
        
        return \Response()->json($result->id);
    }
}
