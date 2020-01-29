<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\humans;
class cherry extends Controller
{
  
    public function welcome(){
        $result=humans::all();
        return view('welcome',compact('result'));
    }
}
