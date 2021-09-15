<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RandomController extends Controller
{
    public function message($msg) {
        return view ('message',['msg' => $msg]);
    }
}
