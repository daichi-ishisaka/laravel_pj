<?php

namespace App\Http\Controllers;

class HelloController extends Controller
{
    public function index()
    {
        $data = ['msg' => 'メッセージ'];
        return view('hello.index', $data);
    }
}

